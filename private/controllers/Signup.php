<?php

// Login Controller
class Signup extends Controller
{
    function index()
    {
        //code...

        print_r($_POST);
        $this->view('signup');
    }
}