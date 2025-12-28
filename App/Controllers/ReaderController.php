<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Core\Auth;
use App\Models\User;
use App\Models\Reader;

class ReaderController
{

    public function index()

    {
        
        Auth::requireLogin();
        $books = Book::fetchaAllBooks();
        $total_books = Reader::getStats();
        $this->render('User/home', [
            'title' => 'Reader Dashboard',
            "books" => $books,
            'totalBooks' => $total_books
        ]);
    }

    public function borrow()
    {
        Auth::requireLogin();
        $bookId = $_GET['id'] ?? null;
        $readerId = $_SESSION['user_id'];

        if ($bookId) {
            // 3. Call the Model
            $success = Borrow::create($readerId, $bookId);

            if ($success) {
                $_SESSION['SUCCESS_MESSAGE'] = "You have successfully borrowed the book!";
            } else {
                $_SESSION['ERROR_MESSAGE'] = "Failed to borrow book. It might be already taken.";
            }
        }

        // 4. Redirect back to the library catalog
        header('Location: /');
        exit;
    }
    public function history()
    {
        Auth::requireLogin();

        $readerId = $_SESSION['user_id'];
        // 2. Fetch data from Model
        $history = Borrow::getHistoryByReader($readerId);

        // 3. Render view
        $this->render('User/history', [
            'title' => 'My Borrowing History',
            'history' => $history
        ]);
    }

    public function return()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $borrowId = $_GET['borrow_id'] ?? null;
        $bookId = $_GET['book_id'] ?? null;

        if ($borrowId && $bookId) {
            $success = Borrow::returnBook($borrowId, $bookId);

            if ($success) {
                $_SESSION['SUCCESS_MESSAGE'] = "Book returned successfully!";
            } else {
                $_SESSION['ERROR_MESSAGE'] = "Error returning the book.";
            }
        }

        header('Location: /history');
        exit;
    }

    public function profile()
    {
        Auth::requireLogin();

        $user = User::getById($_SESSION['user_id']);

        // 3. Render the view
        $this->render('User/profile', [
            'title' => 'My Profile',
            'user'  => $user
        ]);
    }

    protected function render(string $view, array $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            die("View not found: {$viewFile}");
        }
        $layoutFile = __DIR__ . '/../Layout/reader.php';

        if (file_exists($layoutFile)) {
            ob_start();
            require $viewFile;
            $content = ob_get_clean();
            require $layoutFile;
        } else {
            require $viewFile;
        }
    }
}
