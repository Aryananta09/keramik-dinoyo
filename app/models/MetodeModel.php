<?php

class MetodeModel{
    private $table  = 'metode_pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMetode($user_id){
        $this->db->query('SELECT * FROM ' . $this->table . ' where user_id=:user_id');
        $this->db->bind('user_id', $user_id);
        return $this->db->resultSet();
    }

    public function tambahMetode($data){
        $noRek = $data['noRek'];
        $query = "INSERT INTO metode_pembayaran VALUES
        (:user_id, '', :metode , :namaBank, :namaRek, $noRek )";
        $this->db->query($query);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('metode', $data['metode']);
        $this->db->bind('namaBank', $data['namaBank']);
        $this->db->bind('namaRek', $data['namaRek']);

        $this->db->exec();
        return $this->db->rowCount();
    }

    public function hapusMetode($id){
        $query= "DELETE FROM metode_pembayaran WHERE pembayaran_id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->exec();
        return $this->db->rowCount();
    }
}