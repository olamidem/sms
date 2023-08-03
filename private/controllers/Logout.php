<?php

// Home Controller
class Logout extends Controller
{
    function index($id = null)
    {
        //code...
        Auth::logout();
        # code...
        $this->redirect('login');



    }
}