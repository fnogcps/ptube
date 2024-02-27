<?php

declare(strict_types=1);

namespace fnogcps\Ptube;

use Dotenv;
use PDO;
use PDOException;

final class DBConnection
{
    private object $conn;
    public function __construct()
    {
        Dotenv\Dotenv::createImmutable(__DIR__. '../..')->load();
        $dsn = $_SERVER['DB_ADAPTER'] . ':dbname=ptube;host='.
            $_SERVER['DB_HOST']. ';port='. $_SERVER['DB_PORT'];

        try {
            $this->conn = new PDO(
                $dsn,
                $_SERVER['DB_USER'],
                $_SERVER['DB_PWD']
            );

            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->conn->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_OBJ
            );
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public function getInstance(): object
    {
        return $this->conn;
    }
}
