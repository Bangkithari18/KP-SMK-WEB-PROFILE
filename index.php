<?php
require_once 'config/database.php';
require_once 'app/controllers/HomeController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new HomeController($db);
$controller->index();
