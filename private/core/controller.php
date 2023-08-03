<?php

//Main Controller

class Controller
{
    public function __construct()
    {

    }
    public function view($view, $data = array())
    {
        extract($data);
        //code..
        if (file_exists("../private/views/" . $view . ".view.php")) {
            # code...
            require("../private/views/" . $view . ".view.php");

        } else {
            require("../private/views/404.view.php");
        }
    }

    public function load_model($model)
    {
        if (file_exists("../private/models/" . ucfirst($model) . ".php")) {
            # code...
            require("../private/models/" . ucfirst($model) . ".php");
            return $model = new Model();
        }

        return false;
    }

    public function redirect($link)
    {

        // header("Location:" . "../public/views/" . trim($link, '/'));
        header("Location:" . "../public/" . trim($link, '/'));
        die();
    }


}