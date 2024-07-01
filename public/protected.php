<?php
require '../vendor/autoload.php';
require '../src/db.php';

use App\Controller\ProtectedController;
use App\Model\User;

$mongoClient = require '../src/db.php';

$user = new User($mongoClient);

$controller = new ProtectedController($user);
$controller->handle();
?>
