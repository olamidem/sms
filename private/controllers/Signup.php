<?php
// Login Controller
class Signup extends Controller
{
    // Function to handle the signup page
    function index()
    {
        $errors = array();

        // Check if the signup form is submitted
        if (count($_POST) > 0) {

            $user = new User();

            // Validate user input using the User model's validate method
            if ($user->validate($_POST)) {
                // Validation successful, proceed with user registration

                // Add the current date and time to the user data
                $_POST['date'] = date("Y-m-d H:i:s");

                // Insert the user data into the database using the User model's insert method
                $user->insert($_POST);

                // Redirect the user to the login page after successful registration
                $this->redirect('login');
            } else {
                // Validation failed, get the errors array from the User model
                $errors = $user->errors;
            }
        }

        // Load the signup view and pass the errors array to display any validation errors
        $this->view('signup', [
            'errors' => $errors,
        ]);
    }
}