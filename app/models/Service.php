<?php
class Service
{
    private $conn;
    private $table = 'services';

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
