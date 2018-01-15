<?php

//class and methods
class State
{
    //variables
    public static $conn = null;
    public static $context = 'list';
    public static $params = null;

    public static $list = null;
    public static $status = 0;

    //to be run before display?
    public static function pre()
    {
        //add, do nothing
        //edit, read and save in $single
        if (Self::$context == 'edit')
        {

            Self::read_all(Self::$conn);
        }
        //list, read all
        if (Self::$context == 'list')
        {
            Self::read_all(Self::$conn);
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
            $statement = Self::$conn->prepare("INSERT INTO state (id, state) VALUES (?, ?)");
            $statement->bind_param('ss',
                Self::$params['id'], Self::$params['state']
            );

            var_dump(Self::$params, $statement);

            $result = Database::doInsert($statement);

            Self::$status = $result;
        }
        else
        {
            echo 'z';
            Self::$status = null;
        }

        return Self::$status;
    }

    public static function read()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("SELECT id, state FROM state");
            $result = Database::doRead($statement);

            Self::$list = $result;
        }
        else
        {
            Self::$list = null;
        }

        return Self::$list;
    }

    public static function read_all()
    {
        if (!is_null(Self::$conn))
        {
            $statement = Self::$conn->prepare("SELECT id, state FROM state");
            $result = Database::doRead($statement);

            Self::$list = $result;
        }
        else
        {
            Self::$list = null;
        }

        return Self::$list;
    }

}


State::$conn = Database::$conn;
?>
