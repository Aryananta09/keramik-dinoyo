<?php

class Pesanan extends Controller {
    public function index($user_id){
     $data['pesanan'] = $this->Model('PesananModel')->getAllPesananUser($user_id);
        $this->view('pesanan/index', $data);
   }

   public function form($id){
     $data['metode'] = $this->Model('metodeModel')->getAllMetode($id);
     $data['produk'] = $this->Model('ProdukModel') -> getAllProduk();
     $this->view('pesanan/formpesanan', $data);
   }

   public function form_process(){
     $id = $_POST['user_id'];
     if($this->Model('PesananModel')-> insert($_POST)>0){
         Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
         header('Location: ' . BASEURL . '/pesanan/' . $id);
         exit;
     }
     else{
         Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
         header('Location: ' . BASEURL . '/pesanan/' . $id);
         exit;
     }
  }
}