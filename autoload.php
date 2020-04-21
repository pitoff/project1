<?php

spl_autoload_register(function ($class) {
    $models = 'App/Models/'.$class.'.php';
    $controllers = 'App/Controllers/'.$class.'.php';
    $config = 'App/Core/'.$class.'.php';

    if (file_exists($models)) {
        require_once $models;
    } elseif (file_exists($controllers)) {
        require_once $controllers;
    } elseif (file_exists($config)) {
        require_once $config;
    }
});
