<?php
class About
{
    private $conn;
    private $table = 'about';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAbout()
    {
        $query = "SELECT * FROM " . $this->table . " LIMIT 1";
        $stmt = $this->conn->prepare($query);

        if (!$stmt->execute()) {
            return false; // Mengembalikan false jika query gagal
        }
        return $stmt;
    }
}
