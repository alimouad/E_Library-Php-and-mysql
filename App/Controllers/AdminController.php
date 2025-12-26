<?php
namespace App\Controllers;

use App\Models\User;
use PDOException;

class AdminController
{
    public function dashboard(){
     
           // Render login view
        $this->render('Admin/home_admin', [
            'title'  => 'Admin dashboard'     
        ]);
    }
    public function books(){
        $this->render('Admin/books',[
            'title' => 'Adding Books'
        ]);
    }

    public function members(){
        $this->render('Admin/members',[
            'title' => 'Adding members'
        ]);
    }
    
     protected function render(string $view, array $data = [])
    {
        // Extract data to make variables available in view
        extract($data);

        // Build view file path
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        // Check if view exists
        if (!file_exists($viewFile)) {
            die("View not found: {$viewFile}");
        }

        // Layout file path
        $layoutFile = __DIR__ . '/../Layout/admin.php';
        
        if (file_exists($layoutFile)) {
            // Start output buffering to capture view content
            ob_start();
            require $viewFile;
            $content = ob_get_clean();
            
            // Load layout with content
            require $layoutFile;
        } else {
            // Load view directly without layout
            require $viewFile;
        }
    }
}