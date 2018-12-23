<?php


class App
{

    protected static $_registry = [];

    public static function bind($key, $value)
    {

        static::$_registry[$key] = $value;

    }

    /**
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        if ( ! array_key_exists($key, static::$_registry)) {
            throw new Exception("No {$key} is bound in the container");
        }
        return static::$_registry[$key];
    }
}