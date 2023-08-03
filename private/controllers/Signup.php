<?php

// Login Controller
class Signup extends Controller
{
    function index()
    {

        $errors = array();

        if (count($_POST) > 0) {

            $user = new User();

            if ($user->validate($_POST)) {
                // Validation successful

                $_POST['date'] = date("Y-m-d H:i:s");

                $user->insert($_POST);

                $this->redirect('login');
            } else {
                // Validation failed, get the errors array
                $errors = $user->errors;
            }
        }
        $this->view('signup', [
            'errors' => $errors,
        ]);
    }
}