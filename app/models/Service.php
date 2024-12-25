<?php
class Service
{
    private $conn;
    private $table = 'master_info';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getServices()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY Id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
