<?php

namespace App\Models; // Changed to match your User model namespace

use Config\Database;
use PDO;

class Book
{
    public ?int $id;
    public string $title;
    public string $author;
    public string $year;
    public string $description;
    public string $status;

    public function __construct($title, $author, $year, $description, $status = 'available', $id = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->description = $description;
        $this->status = $status;
    }

    /**
     * Adds a book to the database
     */
    public static function addBook($title, $author, $description, $year, $status = 'available')
    {
        $pdo = Database::getConnection();
        $errors = [];

        // 1. Prepare SQL
        $stmt = $pdo->prepare("
            INSERT INTO books (title, author, description, year, status)
            VALUES (?, ?, ?, ?, ?)
        ");

        // 2. Execute - Fixed the order to match the VALUES (?, ?, ?, ?, ?)
        if (!$stmt->execute([$title, $author, $description, $year, $status])) {
            $errors['db'] = "Failed to save the book to the database.";
        }

        return $errors;
    }

    /**
     * Fetch all books
     */
    public static function fetchaAllBooks()
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Deletes a book from the database by ID
     */
    public static function deleteBook($id)
    {
        $pdo = \Config\Database::getConnection();
        $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
