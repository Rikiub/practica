<?php

require_once "config.php";

class BaseDatos extends PDO
{
    private $conn;

    public function __construct()
    {
        $dsn = "mysql:host=" . _DB_HOST_ . ";dbname=" . _DB_NAME_;

        try {
            $this->conn = new PDO($dsn, _DB_USER_, _DB_PASS_);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Conexión Fallida" . $e->getMessage());
        }
    }

    public function Conex()
    {
        return $this->conn;
    }
}
