<?php

// Authentication class
class Auth
{
    // Method to authenticate and store user information in the session
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }

    // Method to log out the user by unsetting the user session data
    public static function logout()
    {
        if (isset($_SESSION['USER'])) {
            // If the 'USER' session is set, unset it to log out the user
            unset($_SESSION['USER']);
        }
    }

    // Method to check if a user is logged in
    public static function logged_in()
    {
        if (isset($_SESSION['USER'])) {
            // If the 'USER' session is set, the user is logged in
            return true;
        }
        // Otherwise, the user is not logged in
        return false;
    }

    // Method to retrieve the first name of the authenticated user from the session
    public static function user()
    {
        if (isset($_SESSION['USER'])) {
            // If the 'USER' session is set, return the first name of the user
            return $_SESSION['USER']->firstname;
        }

        // If the user is not authenticated, return false
        return false;
    }

    // Magic method to dynamically retrieve user properties using a get-method-like syntax
    public static function __callStatic($method, $params)
    {
        // Extract the property name from the method name
        $prop = strtolower(str_replace("get", '', $method));

        if (isset($_SESSION['USER']->$prop)) {
            // If the specified property exists in the 'USER' session, return its value
            return $_SESSION['USER']->$prop;
        }

        // If the specified property does not exist, return "Unknown"
        return "Unknown";
    }

    public static function switch_school($id)
    {
        if (isset($_SESSION['USER']) && $_SESSION['USER']->rank == 'super_admin') {

            $user = new User();
            $school = new School();

            if ($row = $school->where('id', $id)) {
                # code...
                $row = $row[0];
                $arr['school_id'] = $row->school_id;

                $user->update($_SESSION['USER']->id, $arr);
                $_SESSION['USER']->school_id = $row->school_id;
                $_SESSION['USER']->school_name = $row->school;

            }

            return true;
        }

        // If the user is not authenticated, return false
        return false;
    }

}