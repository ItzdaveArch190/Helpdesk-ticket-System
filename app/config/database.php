<?php
    declare(strict_types=1);

    require dirname(__DIR__, 2) . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
    $dotenv->load();



    class Database
    {

        private PDO $connection;

        public function opencon(): PDO
        {
            $host = $_ENV['DBHOST']; 
            $name = $_ENV['DBNAME'];
            $username = $_ENV['DBUSER'];

            $dataSourceName = "mysql:host=$host; dbname=$name; charset=utf8mb4";

            $this->connection = new PDO(
            $dataSourceName, 
            $username,
            null,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
            );

            return $this->connection;
        }
    }
?>