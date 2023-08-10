<?php

// Change school Controller
class Switch_school extends Controller
{
    function index($id = null)
    {
        //code...
        Auth::switch_school($id);
        # code...
        $this->redirect('schools');



    }
}