<?php
// School model

class School extends Model
{
    protected $allowedColumns = [
        'school',
        'date', // Date field (if needed for the application)
    ];

    protected $beforeInsert = [
        'make_user_id',
        // Generates a unique user_id before insertion
        'make_school_id',
        // Sets the school_id (with a default value if not provided)

    ];
    protected $afterSelect = [
        'get_user',


    ];

    // Validate user data before insertion
    public function validate($DATA)
    {
        $this->errors = array();

        // Validate first name: Only letters are allowed
        if (empty($DATA['school']) || !preg_match('/^[a-zA-Z]+$/', $DATA['school'])) {
            $this->errors['school'] = "Only letters are allowed as School name";
        }
        // Validate email: check if email already   exists
        if ($this->where('school', $DATA['school'])) {
            $this->errors['school'] = "The school name already exists";
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
        // $data['user_id'] = random_string(60);
        if (isset($_SESSION['USER']->user_id)) {
            $data['user_id'] = $_SESSION['USER']->user_id;
        } else {

            $data['school_id'] = 0;
        }

        return $data;
    }

    // Set the school_id with a default value if not provided
    public function make_school_id($data)
    {

        $data['school_id'] = random_string(60);

        return $data;

    }

    public function get_user($data)
    {
        $user = new User();
        foreach ($data as $key => $row) {
            # code...
            $result = $user->where('user_id', $row->user_id);
            $data[$key]->user = is_array($result) ? $result[0] : false;
        }



        return $data;

    }


}