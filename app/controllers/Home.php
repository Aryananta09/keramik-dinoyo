<?php 

class Home extends Controller {
    public function index(){
        $data['produk'] = $this->Model('ProdukModel') -> getAllProduk();
        $this->view('home/index', $data);
   }
}