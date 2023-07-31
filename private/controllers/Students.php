<?php

// Students Controller
class Students extends Controller
{

    function index($id = null)
    {
        //code...
        $this->view('home');
    }
}