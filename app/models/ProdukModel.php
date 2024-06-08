<?php

class ProdukModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduk(){
        $this->db->query('SELECT * FROM produk');
        return $this->db->resultSet();
    }

    public function insert($nama, $kategori, $harga, $gambar)
    {
        $this->db->query("INSERT INTO produk VALUES ('' , :nama, :kategori, :harga, :gambar)");

        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('harga', $harga);
        $this->db->bind('gambar', $gambar);
        $this->db->exec();

        return $this->db->rowCount();
        
    }
    public function hapusProduk($id){
        $query= "DELETE FROM produk WHERE id_produk = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->exec();
        return $this->db->rowCount();
    }
}