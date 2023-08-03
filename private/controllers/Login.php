<?php
// Login Controller
class Login extends Controller
{
    function index()
    {
        // Initialize an array to store validation errors
        $errors = array();

        // Check if the login form is submitted
        if (count($_POST) > 0) {

            // Create a new instance of the User model
            $user = new User();

            // Check if the email exists in the database
            if ($row = $user->where('email', $_POST['email'])) {
                // Get the first row as the result is an array of objects
                $row = $row[0];

                // Verify the password using password_verify() function
                if (password_verify($_POST['password'], $row->password)) {
                    // Password is correct, authenticate the user and store user information in the session
                    Auth::authenticate($row);
                    // Redirect the user to the home page after successful login
                    $this->redirect('home');
                } else {
                    // Password is incorrect, add an error message for the login form
                    $errors['email'] = "Wrong email or password";
                }
            } else {
                // User with the provided email not found, add an error message for the login form
                $errors['email'] = "Wrong email or password";
            }
        }

        // Load the login view and pass the errors array to display any validation errors
        $this->view('login', [
            'errors' => $errors,
        ]);
    }
}