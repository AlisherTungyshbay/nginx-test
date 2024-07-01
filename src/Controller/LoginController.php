<?php
namespace App\Controller;

use App\Model\User;

class LoginController {
    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function handle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->user->login($username, $password)) {
                echo "Login successful!";
            } else {
                echo "Login failed.";
            }
        } else {
            include '../src/View/templates/login.php';
        }
    }
}
