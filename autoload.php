<?php

spl_autoload_register('autoLoader');

function autoLoader($class)
{
    $models = str_replace('\\', '/', $class).'.php';
    $controllers = str_replace('\\', '/', $class).'.php';
    $config = str_replace('\\', '/', $class).'.php';

    if (file_exists($models)) {
        require_once $models;
    } elseif (file_exists($controllers)) {
        require_once $controllers;
    } elseif (file_exists($config)) {
        require_once $config;
    }
}
