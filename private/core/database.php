<?php

// Database connection
class Database
{
    private function connect()
    {
        //  Connect to  database
        $string = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;
        if (!$con = new PDO($string, DBUSER, DBPASSWORD)) {
            # code...
            die("Could not connect to   database");
        }
        return $con;
    }

    public function query($query, $data = array(), $data_type = "object")
    {
        //prepared query

        $con = $this->connect();
        $statement = $con->prepare($query);
        if ($statement) {
            # code...
            $check = $statement->execute($data);
            if ($check) {
                # code...

                if ($data_type == "object") {
                    # code...
                    $data = $statement->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    # code...
                    return $data;
                }

            }
        }

        return false;
    }
}