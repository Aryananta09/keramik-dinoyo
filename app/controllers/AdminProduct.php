<?php

class AdminProduct extends Controller {
    public function index(){
        $data['produk'] = $this->Model('ProdukModel') -> getAllProduk();
        $this->view('adminProduct/index', $data);
    }
    public function productForm(){
        $this->view('adminProduct/addProduct');
    }

    public function insertProduct()
    {
        $nama = $_POST["nama"];
        $kategori = $_POST["kategori"];
        $harga = $_POST["harga"];

        //upload gambar
        $gambar = $this -> uploadProduct();
        if (!$gambar){
            return false;
        }
        

        if($this->Model('ProdukModel') ->insert($nama, $kategori, $harga, $gambar) > 0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL .'/adminProduct');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL .'/adminProduct');
            exit;
        }
    
    }

    public function uploadProduct(){
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
        move_uploaded_file($tmpName, '../public/uploads/produk/' . $namaFile);

        return $namaFile;
    }
    public function hapus($id_produk){
        if($this->Model('ProdukModel')-> hapusProduk($id_produk)>0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/adminProduct');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/adminProduct');
            exit;
        }  
    }
}