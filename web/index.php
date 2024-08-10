<?php 

require_once 'config.php';

if($_SERVER['REQUEST_URI'] === '/login') {
    require_once 'views/login.php';
}

echo $_SERVER['REQUEST_URI'];
