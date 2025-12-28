<?php

namespace App\Models;

use Config\Database;

use PDO;

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

    // get admin stats
    public static function getDashboardStats()
    {
        $pdo = Database::getConnection();

        $stats = [];
        // Total Books
        $stats['total_books'] = $pdo->query("SELECT COUNT(*) FROM books")->fetchColumn();
        $stats['active_members'] = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'reader'")->fetchColumn();
        $stats['books_issued'] = $pdo->query("SELECT COUNT(*) FROM borrows WHERE returnDate IS NULL")->fetchColumn();
        return $stats;
    }
}
