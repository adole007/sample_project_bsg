<?php

//class and methods
class Employee
{
    //variables
    public static $conn = null;
    public static $context = 'view';
    public static $params = null;

    //to be run before display?
    public static function pre()
    {

    }

    //some house keeping function to be run too
    public static function post()
    {

    }

    public static function create_bio()
    {
        //$params is a key-value dictionary
        /*if ($conn != null)
        {
            $statement = $conn->prepare("INSERT INTO bio
                (esn, surname, firstname, middlename, gender, surname_f, firstname_f, middlename_f,
                dob, pob, address_c, address_p, s_origin, lga_origin, lga_other, phone,
                phone_alt, email, status_marital, children, dependents)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?)
            ");
            $statement->bind_param('ssssssss
                ssssiiis
                ssiii',
                $params['esn'], $params['surname'], $params['firstname'], $params['middlename'], $params['gender'], $params['surname_f'], $params['firstname_f'], $params['middlename_f'],

            );

        }*/
    }
}

Employee::$conn = Database::$conn;
?>
