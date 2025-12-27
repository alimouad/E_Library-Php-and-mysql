<?php

namespace App\Models;

use Config\Database;

use PDO;
use Exception;

class Admin extends User
{
    public function __construct($id, $fullName, $email, $password, $role)
    {
        parent::__construct($fullName, $email, $password, $role, $id);
    }


    /**
     * Get all registered members (excluding admins)
     */
    public static function getAllMembers()
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT id, full_name, email, role FROM users WHERE role = 'reader'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Remove a member from the system
     */
    public static function deleteMember($userId)
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ? AND role != 'admin'");
        return $stmt->execute([$userId]);
    }
    /**
     * Get totals for the admin dashboard
     */
    public static function getDashboardStats()
    {
        $pdo = \Config\Database::getConnection();

        $stats = [];
        $stats['total_books'] = $pdo->query("SELECT COUNT(*) FROM books")->fetchColumn();
        $stats['total_users'] = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'user'")->fetchColumn();
        // Example: $stats['active_borrows'] = $pdo->query("SELECT COUNT(*) FROM borrows WHERE status = 'active'")->fetchColumn();

        return $stats;
    }
}
