<?php
class GaleryModel
{
    private $table = 'galery';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGalery()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGaleryById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahGalery($data)
    {
        $query = "INSERT INTO galery (foto, judul, keterangan ) VALUES (:foto,  :judul, :keterangan )";
        $this->db->query($query);
        $this->db->bind('foto', $data['foto']);
         $this->db->bind('judul', $data['judul']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateGalery($data)
    {
        $query = "UPDATE Galery SET foto=:foto, judul=:judul, keterangan=:keterangan WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('foto', $data['foto']);
         $this->db->bind('judul', $data['judul']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteGalery($id)
    {
        $getUser = $this->getGaleryById($id);

        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        if ($getUser && isset($getUser['foto'])) {
            $pathFile = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $getUser['foto'];
            if (file_exists($pathFile)) {
                unlink($pathFile);
            }
        }

        return $this->db->rowCount();
    }

    public function cariGalery()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE keterangan LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
