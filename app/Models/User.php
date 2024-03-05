<?php

declare(strict_types=1);

namespace fnogcps\Ptube\Models;

use fnogcps\Ptube\DBConnection;
use PDO;
use PDOException;

class User
{
    private object $db;
    private object $model;

    public function __construct(DBConnection $db = new DBConnection())
    {
        $this->db = $db->getInstance();
    }

    public function create(string $user, string $name, string $pwd)
    {
        $q = $this->db->prepare('INSERT INTO users (user, name, password) VALUES (:user, :name, :pwd)');
        $q->bindValue('user', $user, PDO::PARAM_STR);
        $q->bindValue('name', $name, PDO::PARAM_STR);
        $q->bindValue('pwd', $pwd, PDO::PARAM_STR);
        $q->execute();
    }

    public function delete(string $user)
    {
        $q = $this->db->prepare('DELETE FROM users WHERE (user = :user)');
        $q->bindValue('user', $user, PDO::PARAM_STR);
        $q->execute();
    }

    public function get(string $user)
    {
        $q = $this->db->prepare('SELECT * FROM users WHERE (user = :user)');
        $q->bindValue('user', $user, PDO::PARAM_STR);
        $q->execute();
        return $q->fetchAll();
    }

    public function update(string $user, string $new_name)
    {
        $q = $this->db->prepare('UPDATE users SET name = :new_name WHERE (user = :user)');
        $q->bindValue('user', $user, PDO::PARAM_STR);
        $q->bindValue('new_name', $new_name, PDO::PARAM_STR);
        $q->execute();
    }
}
