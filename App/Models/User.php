<?php

namespace Models;

use Config\Database;
use PDO;

abstract class User
{
    protected ?int $id; 
    protected string $fullname;
    protected string $email;
    protected string $password;

    public function __construct(
        string $fullname,
        string $email,
        string $password,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->fullname = $fullname; 
        $this->email = $email;
        $this->password = $password;
    }

    
     //REGISTER: Static method to handle user creation
     
    public static function register($fullname, $email, $password)
    {
        $pdo = Database::getConnection();
        $errors = [];

        // 1. Validation Logic
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->fetch()) {
            $errors['email'] = "Email already exists";
            return $errors;
        }

        // 2. Prepare Data
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // 3. Insert
        $stmt = $pdo->prepare("
            INSERT INTO users (full_name, email, password)
            VALUES (?, ?, ?)
        ");

        if (!$stmt->execute([$fullname, $email, $hashedPassword])) {
            $errors['db'] = "Failed to save user.";
        }

        return $errors;
    }

    /**
     * LOGIN: Verifies credentials and returns an instance of the calling class
     */
    public static function login($email, $password)
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData && password_verify($password, $userData['password'])) {
            if (session_status() === PHP_SESSION_NONE) session_start();
            
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_role'] = $userData['role'];
            $_SESSION['user_name'] = $userData['full_name'];
            
            // Use 'new static' instead of 'new self' to return the child class (Admin or Member)
            return new static(
                $userData['full_name'], 
                $userData['email'], 
                $userData['password'], 
                $userData['role'], 
                $userData['id']
            );
        }
        return false;
    }

    public static function logout() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        session_unset();
        session_destroy();
    }

    // Getters to access protected data
    public function getFullname(): string { return $this->fullname; }
}