<?php

namespace App\Models;

use PDO;
use PDOException;

class ProgramLatihan
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=latihan_db", "root", "");
        } catch (PDOException $e) {
            die("DB Error: " . $e->getMessage());
        }
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM program_latihan");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data)
    {
        $sql = "INSERT INTO program_latihan (nama, tanggal, jenis_latihan, details, status) 
                VALUES (:nama, :tanggal, :jenis_latihan, :details, :status)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM program_latihan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data)
    {
        $data['id'] = $id;
        $sql = "UPDATE program_latihan SET nama = :nama, tanggal = :tanggal, jenis_latihan = :jenis_latihan,
                details = :details, status = :status WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM program_latihan WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
