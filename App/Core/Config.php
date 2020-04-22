<?php
namespace App\Core;

class Config
{
    public static $file;
    public static $data;
    public static $default;

    public static function load($file)
    {
        $check = 'App/Configs/'.$file.'.php';

        if (file_exists($check)) {
            self::$file = require_once $check;
            return self::$file;
        } else {
            return 'config '.$file.' file not found';
        }
    }

    public static function get($config, $default = null)
    {
        $split = explode('.', $config);
        self::$default = $default;
        self::$data = self::$file;

        foreach ($split as $value) {
            if (isset(self::$data[$value])) {
                self::$data = self::$data[$value];
            } else {
                self::$data = self::$default;
            }
        }
        return self::$data;
    }
}
