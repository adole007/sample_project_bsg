<?php

//class and methods
class Mda
{
    //variables
    public static $conn = null;
    public static $context = 'list';
    public static $params = null;

    public static $list = null;
    public static $single = null;
    public static $status = 0;

    //to be run before display?
    public static function pre()
    {
        //add, do nothing
        //edit, read and save in $single
        if (Self::$context == 'edit')
        {
            Self::$params = array(
                'id' => Self::$params
            );
            Self::read(Self::$conn);
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
            $statement = Self::$conn->prepare("INSERT INTO mda (title) VALUES (?)");
            $statement->bind_param('s',
                Self::$params['title']
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
            $statement = Self::$conn->prepare("SELECT id, title FROM mda
                WHERE id = ?
            ");
            $statement->bind_param('s',
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
            $statement = Self::$conn->prepare("SELECT id, title FROM mda");
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
            $statement = Self::$conn->prepare("UPDATE mda
                SET title = ?
                WHERE id = ?");
            $statement->bind_param('ss',
                Self::$params['title'], Self::$params['id']
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
            $statement = Self::$conn->prepare("DELETE FROM mda WHERE id = ?");
            $statement->bind_param('s',
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


Mda::$conn = Database::$conn;
?>
