<?php
class Contact
{
    private $conn;
    private $table = 'contact';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getContact()
    {
        $query = "SELECT * FROM " . $this->table . " LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
