<?php
declare(strict_types=1);

namespace app\model;

use app\singleton\Database;
use \PDO;

class AccountModel
{
    private ?Database $db = null;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getData() : array
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