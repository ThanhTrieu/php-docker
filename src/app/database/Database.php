<?php

declare(strict_types=1);

namespace app\database;

use \PDO;
use \PDOException;

final class Database
{
    private static ?Database $instance = null;
    public $connection;

    public static function getInstance(): Database
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
    public function closeConnection()
    {
        $this->connection = null;
    }
}