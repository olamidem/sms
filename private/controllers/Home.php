<?php

// Home Controller
class Home extends Controller
{
    function index($id = null)
    {
        //code...
        if (!Auth::logged_in()) {
            # code...
            $this->redirect('login');
        }
        $user = new User();

        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);

    }
}