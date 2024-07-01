<?php
namespace App\Controller;

use App\Model\User;

class RegisterController {
    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function handle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->user->register($username, $email, $password)) {
                echo "Registration successful!";
            } else {
                echo "Registration failed.";
            }
        } else {
            include '../src/View/templates/register.php';
        }
    }
}
