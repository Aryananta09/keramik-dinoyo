<?php

class BlogModel{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog(){
        $this->db->query('SELECT * FROM blog');
        return $this->db->resultSet();
    }

    public function insert($judul, $isi, $tanggal, $gambar)
    {
        $this->db->query("INSERT INTO blog VALUES ('' , :judul, :isi, :gambar, :tanggal)");

        $this->db->bind('judul', $judul);
        $this->db->bind('isi', $isi);
        $this->db->bind('tanggal', $tanggal);
        $this->db->bind('gambar', $gambar);
        $this->db->exec();

        return $this->db->rowCount();
        
    }
    public function hapusBlog($id){
        $query= "DELETE FROM blog WHERE id_blog = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->exec();
        return $this->db->rowCount();
    }
}