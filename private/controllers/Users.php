<?php

// User Controller
class Users extends Controller
{
    // Method to handle the home page
    function index($id = null)
    {
        // Check if the user is not logged in
        if (!Auth::logged_in()) {
            // Redirect the user to the login page if not logged in
            $this->redirect('login');
        }

        // Create a new instance of the User model
        $user = new User();

        $school_id = Auth::getSchool_id();
        $data = $user->query("Select * from users where school_id =:school_id && rank not in ('student') order by id desc ", ['school_id' => $school_id]);

        // Load the home view and pass the user data as an array to display on the page
        $this->view('users', [
            'rows' => $data,
        ]);
    }
}