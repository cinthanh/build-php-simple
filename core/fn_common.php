<?php

if ( !function_exists('view')) {
    function view($view, $data = []) {
        extract($data);
        if ( ! file_exists("app/views/{$view}.view.php")) {
            //throw new Exception("Cannot load view {$view}");
            return false;
        }
        return require_once "app/views/{$view}.view.php";
    }
}

if (!function_exists('redirect')) {
    function redirect($path) {
        header("Location: /{$path}");
    }
}


