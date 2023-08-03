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
}