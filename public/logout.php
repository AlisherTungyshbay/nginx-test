<?php
require '../src/db.php';
use App\Controller\LogoutController;
use App\Model\User;

$user = new User($pdo);
$controller = new LogoutController($user);
$controller->handle();
?>