<?php

namespace App\Controllers;

use Models\User;
use Exception;

class AuthController
{
    /**
     * Handle user registration
     */
    public function register()
    {
        $data = [
            'fullName' => '',
            'email'    => '',
            'errors'   => []
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullName  = trim($_POST['lastname'] ?? '');
            $email     = trim($_POST['email'] ?? '');
            $password  = $_POST['password'] ?? '';

            $data['fullName'] = $fullName;
            $data['email']    = $email;

            $data['errors'] = $this->validateRegister($_POST);

            if (empty($data['errors'])) {
                // The Model's register method handles Database::getConnection() internally now
                $result = User::register($fullName, $email, $password);

                if (empty($result)) {
                    header('Location: /login');
                    exit;
                } else {
                    // result contains the error array from the Model
                    $data['errors'] = $result;
                }
            }
        }

        $this->render('Auth/register', [
            'title' => 'Sign Up',
            'data'  => $data
        ]);
    }

    /**
     * Handle user login
     */
    public function login()
    {
        $data = [
            'email'  => '',
            'errors' => []
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email    = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $data['email'] = $email;
            $data['errors'] = $this->validateLogin($_POST);

            if (empty($data['errors'])) {

                $user = User::login($email, $password);

                if ($user) {
                    // Redirect based on the role property of the returned User object
                   
                    header("Location:/");
                    exit;
                } else {
                    $data['errors']['LoginErr'] = 'Invalid email or password';
                }
            }
        }

        $this->render('Auth/login', [
            'title' => 'Sign In',
            'data'  => $data
        ]);
    }

    public function logout()
    {
        User::logout();
        header('Location: /login');
        exit;
    }

    // --- Private Helper Methods ---

    private function validateRegister(array $post): array
    {
        $errors = [];
        if (empty($post['firstname'])) $errors['FirstErr'] = 'First name is required';
        if (empty($post['lastname']))  $errors['LastErr']  = 'Last name is required';
        
        if (empty($post['email']) || !filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['EmailErr'] = 'Valid email is required';
        }

        if (empty($post['password']) || strlen($post['password']) < 8) {
            $errors['PasswordErr'] = 'Password must be at least 8 characters';
        }
        return $errors;
    }

    private function validateLogin(array $post): array
    {
        $errors = [];
        if (empty($post['email'])) $errors['EmailErr'] = 'Email is required';
        if (empty($post['password'])) $errors['PasswordErr'] = 'Password is required';
        return $errors;
    }

    protected function render(string $view, array $data = []): void
    {
        extract($data);
        // Path adjusted: assuming AuthController is in App/Controllers/
        $viewFile = __DIR__ . '/../../Views/' . $view . '.php';
        
        if (!file_exists($viewFile)) {
            die("View not found: {$viewFile}");
        }
        require $viewFile;
    }
}