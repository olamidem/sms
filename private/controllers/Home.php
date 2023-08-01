<?php

// Home Controller
class Home extends Controller
{
    function index()
    {
        //code...
        $db = new Database();
        $data = $db->query("SELECT * FROM users");
        $this->view('home', ['rows' => $data]);
    }
}