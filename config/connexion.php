<?php

class Database
{
    private string $host = "localhost";
    private string $dbname = "fitconnect";
    private string $username = "root";
    private string $password = "";

    private ?PDO $conn = null;

    public function getConnection(): ?PDO
    {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->conn->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

        return $this->conn;
    }
}
?>