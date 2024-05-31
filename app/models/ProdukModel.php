<?php

class ProdukModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert($nama, $kategori, $harga, $gambar)
    {
        $this->db->query("INSERT INTO produk (nama, kategori, harga, gambar) VALUES (':nama', ':kategori', ':harga', ':gambar')");
        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('harga', $harga);
        $this->db->bind('gambar', $gambar);
        $this->db->exec();
        
    }
}