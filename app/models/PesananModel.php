<?php

class PesananModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllPesanan(){
        $this->db->query('SELECT * FROM pesanan ');
        return $this->db->resultSet();
    }
    public function getPesananByID($id_order){
        $this->db->query('SELECT * FROM pesanan where id_order =:id_order');
        $this->db->bind('id_order', $id_order);
        return $this->db->single();
    }

    public function getAllPesananUser($user_id){
        $this->db->query('SELECT * FROM pesanan where id_user =:user_id');
        $this->db->bind('user_id', $user_id);
        return $this->db->resultSet();
    }

    public function insert($data){
        $query = "INSERT INTO pesanan VALUES
        ('' ,:id_produk, :id_metode, :nama, :alamat, :no_telp, :produk, :jumlah, :metode_bank , :user_id, :tanggal , 'Menunggu Pembayaran')";
        $this->db->query($query);
        $this->db->bind('id_produk', $data['id_produk']);
        $this->db->bind('id_metode', $data['metode']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['nomer']);
        $this->db->bind('produk', $data['produk']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('metode_bank', $data['nama_metode']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('tanggal', $data['tanggal']);

        $this->db->exec();
        return $this->db->rowCount();
    }
    public function update($data){
        $query = "UPDATE pesanan SET status =:statusOrder
            WHERE id_order =:id_order;";
        $this->db->query($query);
        $this->db->bind('statusOrder', $data['status']);
        $this->db->bind('id_order', $data['id_order']);
        $this->db->exec();
        return $this->db->rowCount();
    }
}