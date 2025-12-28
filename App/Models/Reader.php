<?php

namespace App\Models;

use Config\Database;

class Reader extends User
{
    public function __construct($id, $fullName, $email, $password, $role)
    {
        parent::__construct($fullName, $email, $password, $role, $id);
    }

    public static function getStats()
    {
        $pdo = Database::getConnection();

        // Total Books
        $total_books = $pdo->query("SELECT COUNT(*) FROM books")->fetchColumn();
        return $total_books;
    }
}
