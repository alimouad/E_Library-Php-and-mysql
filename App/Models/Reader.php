<?php

namespace App\Models;
use PDO;

class User extends Model
{
    protected $table = 'users';

    public function findByEmail(string $email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email LIMIT 1";
        $stmt = $this->query($sql, ['email' => $email]);

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function create(array $data)
    {
        $sql = "INSERT INTO {$this->table} (name, email, password)
            VALUES (:name, :email, :password)";

        return $this->query($sql, [
            'name'     => $data['name'], 
            'email'    => $data['email'],
            'password' => $data['password']  
        ])->rowCount() > 0;
    }

    public function verifyPassword($password, $hashedPassword)
    {
        return password_verify($password, $hashedPassword);
    }
}