<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/22/18
 * Time: 10:39 AM
 */

class Request
{


    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function uri()
    {

        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/'
        );

        #return trim($_SERVER['REQUEST_URI'],'/'); // right for get action
    }

}