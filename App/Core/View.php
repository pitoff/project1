<?php
namespace App\Core;

use App\Core\Config;

class View
{
    public static $view;
    public static $layout;
    public static $viewName;
    public static $viewFile;

    public function __construct($viewName)
    {
        Config::load('view');
        self::$view = Config::get('view');
        self::$layout = Config::get('layout');
        self::$viewName = $viewName;
        self::$viewFile = self::$view . self::$viewName.'.view.php';
        require_once self::$layout.'app.view.php';
    }

    public static function login()
    {
        if (file_exists(self::$viewFile)) {
            require_once self::$viewFile;
        } else {
            echo self::$viewName." was not found";
        }
    }

    public static function register()
    {
        if (file_exists(self::$viewFile)) {
            require_once self::$viewFile;
        } else {
            echo self::$viewName." was not found";
        }
    }

    public function home()
    {
        echo "this is the home page <br>";
        echo "<a href='?page=login'>login</a> <br> <a href='?page=register'>register</a>";
    }
}
