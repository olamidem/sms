<?php
// Main model class to read from the database
class Model extends Database
{
    // Array to store validation errors
    public $errors = array();

    // Constructor to set the default table name if not defined in the child class
    function __construct()
    {
        if (!property_exists($this, "table")) {
            // If the table property is not defined in the child class, use the lowercase class name as the default table name with 's' suffix
            $this->table = strtolower(get_class($this)) . 's';
        }
    }

    // Method to perform a database query with a WHERE clause
    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "select * from {$this->table} where {$column} = :value";
        $data = $this->query(
            $query,
            [
                'value' => $value
            ]
        );

        //run function afterselect
        if (is_array($data)) {
            # code...
            if (property_exists($this, "afterSelect")) {

                foreach ($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            }
        }


        return $data;
    }

    // Method to retrieve all records from the table
    public function findAll()
    {
        $query = "select * from {$this->table} ";
        $data = $this->query($query);

        //run function afterselect
        if (is_array($data)) {
            # code...
            if (property_exists($this, "afterSelect")) {

                foreach ($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            }
        }


        return $data;

    }

    // Method to insert data into the table
    public function insert($data)
    {
        // Remove unwanted columns that are not allowed
        if (property_exists($this, "allowedColumns")) {
            foreach ($data as $key => $columns) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        // Run functions defined in the 'beforeInsert' property before inserting
        if (property_exists($this, "beforeInsert")) {
            foreach ($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        }

        // Prepare the query for insertion
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);
        $query = "insert into {$this->table} ($columns) values (:$values)";

        // Execute the insertion query with the data
        return $this->query($query, $data);
    }

    // Method to update a record in the table
    public function update($id, $data)
    {
        $str = "";
        foreach ($data as $key => $value) {
            $str .= $key . "=:" . $key . ",";
        }
        $str = trim($str, ",");
        $data['id'] = $id;

        $query = "update {$this->table} set $str where id = :id";

        return $this->query($query, $data);
    }

    // Method to delete a record from the table
    public function delete($id)
    {
        $query = "delete from {$this->table} where id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }
}