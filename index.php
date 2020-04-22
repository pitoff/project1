<?php
require_once 'autoload.php';

use App\Core\View;

if (isset($_GET['page']) && $_GET['page'] === 'login') {
    $login = new View($_GET['page']);
    $login::login();
} elseif (isset($_GET['page']) && $_GET['page'] === 'register') {
    $register = new View($_GET['page']);
    $register::register();
} else {
    $home = new View('');
    $home::home();
}
