<?php
class ProfilvisiModel {
    private $table = 'profilvisi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProfilvisi() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProfilvisiById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahProfilvisi($data) {
        $query = "INSERT INTO profilvisi (judul, subjudul, isi) 
        VALUES (:judul, :subjudul, :isi)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('subjudul', $data['subjudul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateProfilvisi($data) {
        $query = "UPDATE profilvisi SET judul=:judul, subjudul=:subjudul, isi=:isi WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('subjudul', $data['subjudul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteProfilvisi($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariProfilvisi() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}