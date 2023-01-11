<?php
namespace App\DesignPatterns\Creational\SingleTone;

/**
 * This file is part of the Policy app.
 *
 * @author Anonymus <anonymous@test.com>
 */

class Database
{
    protected $pdo;
    
    protected function getPdo(): \PDO
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "policy";

        if ($this->pdo === null) {
            // set the PDO error mode to exception
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ];
            try {
                $this->pdo = new \PDO("mysql:host=$servername;dbname=$db", $username, $password, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), $e->getCode());
            }
        }
        return $this->pdo;
    }
    /**
     * Fetch an array of products from database
     *
     * @return array
     */
    public function fetchProducts(): array
    {
        $sql = "SELECT * FROM products";
        return $this->getPdo()->prepare($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
}