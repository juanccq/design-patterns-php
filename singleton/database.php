<?php
class Database {
    private static $instance;
    private $connection;

    private function __construct()
    {
        // $this -> connection = mysqli_connect("localhost", "username", "password", "database");
        $this -> connection = true;
    }

    public static function getInstance() {
        echo "\nNew instance requested";

        if(!isset(self::$instance)) {
            echo "\nCreate a new instance";
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this -> connection;
    }
}

// Usage
$db = Database::getInstance();
$connection = $db->getConnection();

$db2 = Database::getInstance();
$connection2 = $db2->getConnection();