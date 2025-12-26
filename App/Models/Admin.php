<?php

namespace Models;

use PDO;
use Exception;

class Admin extends User {
    public function __construct($id, $fullName, $email, $password, $role) {
        parent::__construct($fullName, $email, $password, $role, $id);
    }

    
    // Function to add a new book to the database
    
    public function addBook(PDO $db, $title, $author,$year, $description, $status) {
        try {
            // 1. Prepare the SQL statement
            $sql = "INSERT INTO books (title, author,year, description, status) 
                    VALUES (:title, :author,:year,  :description,:status )";
            
            $stmt = $db->prepare($sql);

            // 2. Execute with sanitized data to prevent SQL Injection
            return $stmt->execute([
                ':title' => $title,
                ':author' => $author,
                ':year' => $year,
                ':description' => $description,
                ':status' => $status
            ]);
            
        } catch (\PDOException $e) {
            // Log error or throw exception
            throw new Exception("Error adding book: " . $e->getMessage());
        }
    }
}