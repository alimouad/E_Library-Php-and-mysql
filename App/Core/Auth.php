<?php
namespace App\Core;
use Config\Database;
class Auth {
    public static function requireLogin() {
        // enable the session if there is no session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['user_id'])) {
            header("Location: /login");
            exit();
        }

    }
    public static function isLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['user_id']);
    }

    public static function requireAdmin() {
    self::requireLogin();
    try {
        $pdo = Database::getConnection();
        $sql = "SELECT role FROM users WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_SESSION['user_id']]);
        
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        // 4. If not found or not admin, kick them out
        if (!$user || $user['role'] !== 'admin') {
            header("Location: /");
            exit();
        }
    } catch (\PDOException $e) {
        // Log error and redirect
        header("Location: /");
        exit();
    }
}
}