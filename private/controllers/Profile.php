<?php

// Profile Controller
class Profile extends Controller
{
    function index($id = null)
    {
        //code...
        $user = new User();
        $row = $user->first('user_id', $id);

        $this->view('profile', [
            'row' => $row,
        ]);
    }
}