<?php
namespace App\Models;

use App\Core\Config;
use mysqli;

class Model
{
    public static function connect()
    {
        Config::load('database');

        $host = Config::get('driver.mysql.host');
        $user = Config::get('driver.mysql.user');
        $pass = Config::get('driver.mysql.pass');
        $dbname = Config::get('driver.mysql.dbname');

        return new mysqli($host, $user, $pass, $dbname);
    }

    public static function create(string $table, array $columns, array $values)
    {
        $col = implode(',', $columns);
        $val = implode(',', $values);

        $query = "INSERT INTO $table ($col) VALUES ($val)";
        return self::connect()->query($query);
    }

    public static function all(string $table)
    {
        $query = "SELECT * FROM $table";
        return self::connect()->query($query);
    }

    public static function find(string $table, int $id)
    {
        $query = "SELECT * FROM $table WHERE `id` = $id";
        return self::connect()->query($query);
    }

    public static function where(string $table, array $col)
    {
        $query = "SELECT * FROM $table WHERE $col";
        return self::connect()->query($query);
    }
}
