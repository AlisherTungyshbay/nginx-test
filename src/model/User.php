<?php
namespace App\Model;

use MongoDB\Client as MongoDBClient;

class User {
    private $mongoClient;
    private $usersCollection;

    public function __construct(MongoDBClient $mongoClient) {
        $this->mongoClient = $mongoClient;
        $this->usersCollection = $this->mongoClient->selectDatabase('your_database_name')->selectCollection('users');
    }

    public function register($username, $email, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $result = $this->usersCollection->insertOne([
            'username' => $username,
            'email' => $email,
            'password' => $hash,
        ]);

        return $result->getInsertedCount() > 0;
    }

    public function login($username, $password) {
        $user = $this->usersCollection->findOne(['username' => $username]);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = (string) $user['_id'];
            return true;
        }
        return false;
    }

    public function isAuthenticated() {
        return isset($_SESSION['user_id']);
    }

    public function logout() {
        session_destroy();
    }
}
?>
