<?php 

class Shop extends Controller {
    public function index(){
        $data['produk'] = $this->Model('ProdukModel') -> getAllProduk();
        $this->view('shop/index', $data);
   }
}