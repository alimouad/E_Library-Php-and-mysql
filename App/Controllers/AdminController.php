<?php

namespace App\Controllers;

use App\Models\Book;
use App\Core\Auth;
use App\Models\Admin;
use Exception;

class AdminController
{
    public function dashboard()
    { 
        Auth::requireAdmin();
        $this->render('Admin/home_admin', [
            'title' => 'Admin Dashboard'
        ]);
    }

    public function books()
    {
        Auth::requireAdmin();
        $data = [
            'title'       => '',
            'description' => '',
            'author'      => '',
            'year'        => '',
            'errors'      => []
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['title']       = trim($_POST['title'] ?? '');
            $data['author']      = trim($_POST['author'] ?? '');
            $data['year']        = trim($_POST['publication_year'] ?? '');
            $data['description'] = trim($_POST['description'] ?? '');

            $data['errors'] = $this->validateInputs($_POST);

            if (empty($data['errors'])) {
                // Capture the result from the model
                $result = Book::addBook(
                    $data['title'],
                    $data['author'],
                    $data['description'],
                    $data['year']
                );

                if (empty($result)) {
                    $_SESSION['SUCCESS_MESSAGE'] = 'Book added successfully';
                    header('Location: /admin/books');

                    exit;
                } else {
                    $data['errors'] = $result;
                }
            }
        }
        $books = Book::fetchaAllBooks();
        $this->render('Admin/books', [
            'title' => 'Manage Books',
            'books' => $books,
            'data'  => $data
        ]);
    }
    public function deleteBook()

    {
        Auth::requireAdmin();

        $id = $_GET['id'] ?? null;

        if ($id) {
            if (Book::deleteBook($id)) {
                $_SESSION['SUCCESS_MESSAGE'] = 'Book deleted successfully';
            } else {
                $_SESSION['ERROR_MESSAGE'] = 'Failed to delete the book';
            }
        }
        // 3. Redirect back to the books table
        header('Location: /admin/books');
        exit;
    }

    private function validateInputs(array $post): array
    {
        $errors = [];

        if (empty($post['title'])) {
            $errors['titleErr'] = 'Title of book is required';
        }
        if (empty($post['author'])) {
            $errors['authorErr'] = 'Author name is required';
        }
        if (empty($post['publication_year'])) {
            $errors['yearErr'] = 'Year of publication is required';
        }
        if (empty($post['description']) || strlen($post['description']) < 8) {
            $errors['descriptionErr'] = 'Description must be at least 8 characters';
        }

        return $errors;
    }

    // get all Members 
    public function members()
    {
        Auth::requireAdmin();
        $result = Admin::getAllMembers();

        $this->render('Admin/members', [
            'title'  => 'Manage Members',
            'members' => $result
        ]);
    }
    public function deleteMembers()
    {
        Auth::requireAdmin();
        $id = $_GET['id'] ?? null;

        if ($id) {
            if (Admin::deleteMember($id)) {
                $_SESSION['SUCCESS_MESSAGE'] = 'Member deleted successfully';
            } else {
                $_SESSION['ERROR_MESSAGE'] = 'Failed to delete the member';
            }
        }
        // 3. Redirect back to the books table
        header('Location: /admin/members');
        exit;
    }
    protected function render(string $view, array $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            die("View not found: {$viewFile}");
        }
        $layoutFile = __DIR__ . '/../Layout/admin.php';

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
