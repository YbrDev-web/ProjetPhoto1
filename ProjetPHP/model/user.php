<?php

require_once 'ProjetPHP/core/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function register($username, $email, $password, $token) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password, token, is_confirmed) VALUES (?, ?, ?, ?, 0)");
        return $stmt->execute([$username, $email, $hashedPassword, $token]);
    }

    public function confirmEmail($token) {
        $stmt = $this->db->prepare("UPDATE users SET is_confirmed = 1 WHERE token = ?");
        return $stmt->execute([$token]);
    }

    public function getByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
