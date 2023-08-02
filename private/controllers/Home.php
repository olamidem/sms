<?php

// Home Controller
class Home extends Controller
{
    function index($id = null)
    {
        //code...
        $user = new User();


        $arr['firstname'] = 'jummy';
        $arr['lastname'] = 'jumoke';
        $arr['date'] = '2023-08-02 14:44:59';
        $arr['user_id'] = 'sd23';
        $arr['gender'] = 'Female';
        $arr['school_id'] = '4rdcx';
        $arr['rank'] = 'student';

        $user->insert($arr);
        // $user->update($id, $data);
        // $user->delete($id);

        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);

    }
}