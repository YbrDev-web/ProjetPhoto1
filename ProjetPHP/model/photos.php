<?php

require_once '../core/database.php';

class Photos {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM photos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function upload($filename, $filepath) {
        $stmt = $this->db->prepare("INSERT INTO photos (filename, filepath) VALUES (?, ?)");
        return $stmt->execute([$filename, $filepath]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM photos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>