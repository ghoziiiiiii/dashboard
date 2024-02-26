<?php
class UserModel {
    private $table = 'login';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUser() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahUser($data) {
        $query = "INSERT INTO login (username, password) VALUES (:username, :password)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateUser($data) {
        $query = "UPDATE login SET username=:username, password=:password WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteUser($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariUser() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}