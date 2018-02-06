<?php

//class and methods
class Lga
{
    //variables
    public static $conn = null;
    public static $context = 'list';
    public static $params = null;

    public static $list = null;
    public static $single = null;
    public static $status = 0;

    //dependencies
    public static $states = null;

    //to be run before display?
    public static function pre()
    {
        //add, do nothing
        if (Self::$context == 'new')
        {
            //states
            Self::$states = State::read_all();
            //modify to dictionary
            $dict = array();
            foreach (Self::$states as $state)
            {
                $dict[$state['id']] = $state['state'];
            }
            Self::$states = $dict;
        }
        //edit, read and save in $single
        if (Self::$context == 'edit')
        {
            Self::$params = array(
                'id' => Self::$params
            );
            Self::read(Self::$conn);
            
            //states
            Self::$states = State::read_all();
            //modify to dictionary
            $dict = array();
            foreach (Self::$states as $state)
            {
                $dict[$state['id']] = $state['state'];
            }
            Self::$states = $dict;
        }
        //list, read all
        if (Self::$context == 'list')
        {
            Self::read_all(Self::$conn);
            //states
        }
    }

    //some house keeping function to be run too
    public static function post()
    {

    }

    public static function create()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("INSERT INTO lga (state_id, lga) VALUES (?, ?)");
            $statement->bind_param('ss',
                Self::$params['state_id'], Self::$params['lga']
            );

            $result = Database::doInsert($statement);

            Self::$status = $result;
        }
        else
        {
            Self::$status = null;
        }

        return Self::$status;
    }

    public static function read()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("SELECT id, state_id, lga FROM lga
                WHERE id = ?
            ");
            $statement->bind_param('i',
                Self::$params['id']
            );
            $result = Database::doRead($statement);

            Self::$single = $result[0];
        }
        else
        {
            Self::$single = null;
        }

        return Self::$single;
    }

    public static function read_all()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("SELECT id, state_id, lga FROM lga");
            $result = Database::doRead($statement);

            Self::$list = $result;
        }
        else
        {
            Self::$list = null;
        }

        return Self::$list;
    }

    public static function update()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("UPDATE lga
                SET state_id = ?, lga = ?
                WHERE id = ?");
            $statement->bind_param('ssi',
                Self::$params['state_id'], Self::$params['lga'], Self::$params['id']
            );

            $result = Database::doUpdate($statement);

            Self::$status = $result;
        }
        else
        {
            Self::$status = null;
        }

        return Self::$status;
    }

    public static function delete()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("DELETE FROM lga WHERE id = ?");
            $statement->bind_param('i',
                Self::$params['id']
            );

            $result = Database::doDelete($statement);

            Self::$status = $result;
        }
        else
        {
            Self::$status = null;
        }

        return Self::$status;
    }

}


Lga::$conn = Database::$conn;
?>
