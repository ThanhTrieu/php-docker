<?php

declare(strict_types=1);

namespace app\singleton;

use \PDO;
use \PDOException;

final class Database
{
    private static ?Database $instance = null;
    public ?PDO $connection = null;

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
            $this->connection = new PDO('mysql:host=fpt_db;dbname=fpt_btec', 'root', 'root');
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
    public function closeConnection() : void
    {
        $this->connection = null;
    }
}