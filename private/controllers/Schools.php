<?php

// Schools Controller
class Schools extends Controller
{
    // Method to handle the home page
    public function index($id = null)
    {
        // Check if the user is not logged in
        if (!Auth::logged_in()) {
            // Redirect the user to the login page if not logged in
            $this->redirect('login');
        }

        // Create a new instance of the User model
        $school = new School();

        // Fetch all user data from the database
        $data = $school->findAll();

        // Load the home view and pass the user data as an array to display on the page
        $this->view('schools', ['rows' => $data]);
    }

    public function add($id = null)
    {
        // Check if the user is not logged in
        if (!Auth::logged_in()) {
            // Redirect the user to the login page if not logged in
            $this->redirect('login');
        }

        $errors = array();
        if (count($_POST) > 0) {

            $school = new School();

            if ($school->validate($_POST)) {

                $_POST['date'] = date("Y-m-d H:i:s");

                $school->insert($_POST);

                $this->redirect('schools');
            } else {

                $errors = $school->errors;
            }
        }

        // Load the home view and pass the school data as an array to display on the page
        $this->view(
            'schools.add',
            ['errors' => $errors]
        );
    }
}