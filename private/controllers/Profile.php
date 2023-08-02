<?php

// Profile Controller
class Profile extends Controller
{
    function index($id = null)
    {
        //code...
        $this->view('profile');
    }
}