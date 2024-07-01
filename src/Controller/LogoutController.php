<?php
namespace App\Controller;

use App\Model\User;

class LogoutController {
    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function handle() {
        $this->user->logout();
        header('Location: /login');
    }
}
