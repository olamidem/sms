<?php

function get_var($key, $default = "")
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return $default;
}

function get_select($key, $value)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value)
            return "selected";
    }
    return "";
}

function esc($val)
{
    return htmlspecialchars($val);
}

// Generate a random string with the given length
function random_string($length)
{
    $array = array(
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z'
    );

    $text = "";
    $arrayLength = count($array);

    for ($x = 0; $x < $length; $x++) {
        $random = rand(0, $arrayLength - 1);
        $text .= $array[$random];
    }
    return $text;
}

function get_date($date)
{
    return date("jS M, Y", strtotime($date));
}

function get_image($image)
{

    if ($image == 'male') {
        $image = ROOT . '/male.png';
    } else {
        $image = ROOT . '/female.png';
    }

    return $image;
}