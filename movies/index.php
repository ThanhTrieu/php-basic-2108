<?php
define('PATH_CONTROLLER', 'controller/');
$c = ucfirst($_GET['c'] ?? 'movie'); // ten controller
$nameController = $c.'Controller.php';

if(file_exists(PATH_CONTROLLER.$nameController)){
    require PATH_CONTROLLER.$nameController;
} else {
    die('can not access application');
}