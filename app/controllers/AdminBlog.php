<?php

class AdminBlog extends Controller{
    public function index(){
    $blogs = $this->Model('BlogModel') -> getAllBlog();
    
    // Mengubah format tanggal di dalam data blog
    foreach ($blogs as &$blog) {
        $date = new DateTime($blog['tanggal']);
        $blog['formatted_tanggal'] = $date->format('d F Y'); // Format tanggal menjadi 'DD F Y'
    }

    $data['blog'] = $blogs;
    $this->view('adminBlog/index', $data);
    }
    public function blogForm(){
        $this->view('adminBlog/addBlog');
    }
    public function insertBlog()
    {
        $judul = $_POST["judul"];
        $isi = $_POST["isi"];
        $tanggal = $_POST["tanggal"];

        //upload gambar
        $gambar = $this -> uploadBlog();
        if (!$gambar){
            return false;
        }
        

        if($this->Model('BlogModel') ->insert($judul, $isi, $tanggal, $gambar) > 0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL .'/adminBlog');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL .'/adminBlog');
            exit;
        }
    
    }

    public function uploadBlog(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah gambar diupload
        if ($error === 4){
            echo "<script>
            alert ('pilih gambar terlebih dahulu!');
            </script>";
            return false;
        }

        // cek ekstensi file yang diupload
        $ekstensigambarValid = ['jpg', 'jpeg','png'];
        $ekstensigambar = explode('.' , $namaFile);
        $ekstensigambar = strtolower(end($ekstensigambar));
        if (!in_array($ekstensigambar, $ekstensigambarValid)){
            echo "<script>
            alert ('Yang Anda Upload Bukan Gambar!');
            </script>";
            return false;
        }

        //cek ukuran gambar
        if ($ukuranFile > 2000000){
            echo "<script>
            alert ('Ukuran Gambar Terlalu Besar!');
            </script>";
            return false;
        }

        //upload
        move_uploaded_file($tmpName, '../public/uploads/blog/' . $namaFile);

        return $namaFile;
    }
    public function hapus($id){
        if($this->Model('BlogModel')-> hapusBlog($id)>0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/adminBlog');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/adminBlog');
            exit;
        }  
    }
    
}