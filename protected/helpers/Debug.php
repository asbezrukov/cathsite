<?php

class Debug {

    public static function write($msg, $die = false)
    {
        echo '<pre>';
        print_r($msg);
        echo '</pre>';
        if ($die) {
            die();
        }
    }
}