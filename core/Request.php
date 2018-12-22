<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/22/18
 * Time: 10:39 AM
 */

class Request
{


    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'],'/');
    }

}