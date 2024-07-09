<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link -->

    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="icon" href="/images/favicon/favicon.ico">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/c85c87a3ad.js" crossorigin="anonymous"></script>

    <title>Register</title>
</head>

<body>

    <?php include '../src/View/templates/header.php'; ?>

    <div class="login__container">
        <div>
            <form method="POST" action="" id="loginForm">
                <div class="form__title">
                    <a href="login.php">LOGIN</a>
                    <a href="#" class="active">REGISTER</a>
                </div>
                <br class="cancelToSelect">
                <br class="cancelToSelect">
                <input class="input" type="text" id="username" name="username"  required>
                <label for="username" class="user-label">Login</label>
                <br class="cancelToSelect">
                <br class="cancelToSelect">
                <input class="input__email" type="text" id="Email" name="email"  required>
                <label for="Email" class="user-label__email">Email</label>
                <br class="cancelToSelect">
                <br class="cancelToSelect">
                <input class="input__password" type="password" id="password" name="password" required>
                <label for="password" class="user-label__password">Password</label>
                <br class="cancelToSelect">
                <br class="cancelToSelect">
                <div class="form__remember">
                    <input type="checkbox">
                    <span>
                        Remember me
                    </span>
                </div>
                <br class="cancelToSelect">
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <?php include '../src/View/templates/footer.php'; ?>
    
</body>
<!-- scripts -->
<script src="/styles/font-awesome/all.js"></script>
<script src="/styles/header/accordion.js"></script>

</html>

<?php
require '../vendor/autoload.php';
require '../src/db.php';

use App\Controller\RegisterController;
use App\Model\User;

$mongoClient = require '../src/db.php';

$user = new User($mongoClient);

$controller = new RegisterController($user);
$controller->handle();
?>