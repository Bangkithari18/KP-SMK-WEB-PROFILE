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
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
