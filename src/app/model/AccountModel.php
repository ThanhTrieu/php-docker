<?php

namespace app\model;

use app\database\Database;
use \PDO;

class AccountModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getData()
    {
        $data = [];
        $sql = "SELECT * FROM `account`";
        $stmt = $this->db->connection->prepare($sql);
        if($stmt){
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
            }
        }
        return $data;
    }

    public function __destruct()
    {
        $this->db->closeConnection();
    }
}