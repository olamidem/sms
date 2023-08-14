<?php
// User model

class User extends Model
{
    protected $allowedColumns = [
        'firstname',
        // User's first name
        'lastname',
        // User's last name
        'email',
        // User's email address
        'password',
        // User's password (hashed)
        'gender',
        // User's gender (can be 'female' or 'male')
        'rank',
        // User's rank (e.g., 'student', 'reception', 'lecturer', 'admin', 'super_admin')
        'date', // Date field (if needed for the application)
    ];

    protected $beforeInsert = [
        'make_user_id',
        // Generates a unique user_id before insertion
        'make_school_id',
        // Sets the school_id (with a default value if not provided)
        'hash_password', // Hashes the user's password before insertion
    ];

    // Validate user data before insertion
    public function validate($DATA)
    {
        $this->errors = array();

        // Validate first name: Only letters are allowed
        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters are allowed as first name";
        }

        // Validate last name: Only letters are allowed
        if (empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters are allowed in the last name";
        }

        // Validate email: Should be a valid email address
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Enter a valid email address";
        }
        // Validate email: check if email already   exists
        // if ($this->where('email', $DATA['email'])) {
        //     $this->errors['email'] = "The email address already exists";
        // }

        // Validate password: Should match with the password confirmation and be at least 8 characters long
        if (empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "The passwords do not match";
        }
        if (strlen($DATA['password']) < 8) {
            $this->errors['password'] = "Password must be at least 8 characters long";
        }

        // Validate gender: Should be either 'female' or 'male'
        $gender = ['female', 'male'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $gender)) {
            $this->errors['gender'] = "Gender is not valid";
        }

        // Validate rank: Should be one of the allowed ranks
        $rank = ['student', 'reception', 'lecturer', 'admin', 'super_admin'];
        if (empty($DATA['rank']) || !in_array($DATA['rank'], $rank)) {
            $this->errors['rank'] = "Rank is not valid";
        }

        // If no validation errors, return true
        if (count($this->errors) == 0) {
            return true;
        }

        // Validation failed, return false
        return false;
    }

    // Generate a random user_id with the given length
    public function make_user_id($data)
    {
        $data['user_id'] = random_string(60);
        return $data;
    }

    // Set the school_id with a default value if not provided
    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        } else {

            $data['school_id'] = 0;
        }
        return $data;
    }

    // Hash the user's password before insertion
    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

}