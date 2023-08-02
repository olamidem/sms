<?php

// Home Controller
class Home extends Controller
{
    function index($id = null)
    {
        //code...
        $user = new User();

        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);

    }
}