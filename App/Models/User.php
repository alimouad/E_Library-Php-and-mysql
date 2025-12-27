<?php

namespace App\Models;

use Config\Database;
use PDO;

class User
{
    protected ?int $id;
    protected string $fullname;
    protected string $email;
    protected string $password;
    protected string $role;

    public function __construct(
        string $fullname,
        string $email,
        string $password,
        string $role = 'user',
        ?int $id = null
    ) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }


    //REGISTER: Static method to handle user creation
    public static function register($fullname, $email, $password, $role = 'reader')
    {
        $pdo = Database::getConnection();
        $errors = [];

        // 1. Check if email exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->fetch()) {
            $errors['email'] = "Email already exists";
            return $errors;
        }

        // 2. Hash Password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // 3. Insert into Database
        $stmt = $pdo->prepare("
            INSERT INTO users (full_name, email, password, role)
            VALUES (?, ?, ?, ?)
        ");

        if (!$stmt->execute([$fullname, $email, $hashedPassword, $role])) {
            $errors['db'] = "Failed to save user.";
        }

        return $errors;
    }


    //LOGIN: Verifies credentials and returns an instance of the calling class
    public static function login($email, $password)
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData && password_verify($password, $userData['password'])) {
            // Start session if not already started
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_role'] = $userData['role'];
            $_SESSION['user_name'] = $userData['full_name'];

            // Return user object
            return new static(
                $userData['full_name'],
                $userData['email'],
                $userData['password'],
                $userData['role'] ?? 'reader',
                $userData['id']
            );
        }
        return false;
    }

    /**
     * LOGOUT: Destroys the session
     */
    public static function logout()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        session_unset();
        session_destroy();
        exit;
    }

    public static function getById($id)
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
