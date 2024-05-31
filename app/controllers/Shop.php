<?php 

class Shop extends Controller {
    public function index(){
        $this->view('shop/index');
   }

   public function insert()
    {
        $nama = addslashes($_POST['nama']);
        $kategori = addslashes($_POST['kategori']);
        $harga = addslashes($_POST['harga']);

        $imagePath = "";

        $uploadDir = 'uploads/produk/';

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (isset($_FILES['upload_gambar']) && $_FILES['upload_gambar']['error'] === UPLOAD_ERR_OK) {
            $uploadFile = $uploadDir . basename($_FILES['upload_gambar']['name']);

            if (move_uploaded_file($_FILES['upload_gambar']['tmp_name'], $uploadFile)) {
                $imagePath = $uploadFile;
            } else {
                die('Upload failed.');
            }
        }

        $user_id = $_SESSION['user_id'];

        // $postModel = $this->loadModel('PostModel');
        // $postModel->insert($title, $content, $imagePath, $user_id);

        $destinasiModel = $this->Model('ProdukModel');
        $destinasiModel->insert($nama, $kategori, $harga, $imagePath);

        header('Location: ' . BASEURL .'/shop');
        exit;
    }
}