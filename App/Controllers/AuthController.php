<?php

namespace App\Controllers;

use App\Models\User;

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
            // Keep fullname as a single variable to match your Model's signature
            $data['fullName'] = trim($_POST['name'] ?? '');
            $data['email']    = trim($_POST['email'] ?? '');
            $password         = $_POST['password'] ?? '';

            $data['errors'] = $this->validateRegister($_POST);

            if (empty($data['errors'])) {
                $result = User::register($data['fullName'], $data['email'], $password);

                if (empty($result)) {
                    header('Location: /login');
                    exit;
                } else {
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
            $data['email'] = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $data['errors'] = $this->validateLogin($_POST);

            if (empty($data['errors'])) {
                $user = User::login($data['email'], $password);

                if ($user) {
                    // Determine redirect path based on the object's role
                    $redirect = ($user->getRole() === 'admin') ? '/adminhome' : '/';

                    header("Location: $redirect");
                    exit;
                } else {
                    $data['errors']['LoginErr'] = 'Invalid email or password';
                }
            }
        }

        $this->render('Auth/login', [
            'title' => 'Sign In',
            'data'  => $data,
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
        // Validating against 'fullname' to match your form/model preference
        if (empty($post['name'])) {
            $errors['NameErr'] = 'Full name is required';
        }

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

    protected function render(string $view, array $data = [], string $layout = 'auth'): void
    {
        extract($data);

        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            die("View not found: {$viewFile}");
        }

        ob_start();
        require $viewFile;
        $content = ob_get_clean();
        $layoutFile = __DIR__ . '/../Layout/' . $layout . '.php';

        if (file_exists($layoutFile)) {
            require $layoutFile;
        } else {

            echo $content;
        }
    }
}
