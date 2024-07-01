<?php
namespace App\Controller;

use App\Model\User;

class ProtectedController {
    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function handle() {
        if (!$this->user->isAuthenticated()) {
            header('Location: /login');
            exit();
        }

        echo "Protected content!";
    }
}
