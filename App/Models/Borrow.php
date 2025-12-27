<?php

namespace App\Models;

use Config\Database;
use PDO;
use Exception;

class Borrow
{

    public static function create($readerId, $bookId)
    {
        $pdo = Database::getConnection();

        // Start transaction
        $pdo->beginTransaction();

        try {
            $stmt = $pdo->prepare("
                INSERT INTO borrows (readerId, bookId, borrowDate) 
                VALUES (?, ?, NOW())
            ");
            $stmt->execute([$readerId, $bookId]);
            $stmt = $pdo->prepare("UPDATE books SET status = 'borrowed' WHERE id = ?");
            $stmt->execute([$bookId]);

            $pdo->commit();
            return true;
        } catch (Exception $e) {
            // If anything fails, undo all changes
            $pdo->rollBack();
            error_log($e->getMessage());
            return false;
        }
    }
    public static function getHistoryByReader($readerId)
    {
        $pdo = Database::getConnection();

        // We must include br.bookId here so the View can use it for the return link
        $sql = "SELECT 
                b.title, 
                b.author, 
                br.id AS borrowId, 
                br.bookId, 
                br.borrowDate, 
                br.returnDate 
            FROM borrows br
            JOIN books b ON br.bookId = b.id
            WHERE br.readerId = ?
            ORDER BY br.borrowDate DESC";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$readerId]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    /**
     * Mark a book as returned and update book status
     */
    public static function returnBook($borrowId, $bookId)
    {
        $pdo = Database::getConnection();
        $pdo->beginTransaction();

        try {
            // 1. Update the borrow record with the current timestamp
            $stmt = $pdo->prepare("UPDATE borrows SET returnDate = NOW() WHERE id = ?");
            $stmt->execute([$borrowId]);

            // 2. Set the book status back to available
            $stmt = $pdo->prepare("UPDATE books SET status = 'available' WHERE id = ?");
            $stmt->execute([$bookId]);

            $pdo->commit();
            return true;
        } catch (\Exception $e) {
            $pdo->rollBack();
            return false;
        }
    }
}
