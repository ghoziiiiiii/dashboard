<?php
class ProfilmisiModel {
    private $table = 'profilmisi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProfilmisi() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProfilmisiById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahProfilmisi($data) {
        $query = "INSERT INTO profilmisi (judul, subjudul, isi) 
        VALUES (:judul, :subjudul, :isi)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('subjudul', $data['subjudul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateProfilmisi($data) {
        $query = "UPDATE profilmisi SET judul=:judul, subjudul=:subjudul, isi=:isi WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('subjudul', $data['subjudul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteProfilmisi($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariProfilmisi() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}