<?php

Class Admin extends Controller{

    public function index(){
        $data['pesanan'] = $this->Model('PesananModel')->getAllPesanan();
        $data['nomor_row'] = 1;
        $this->view('admin/index', $data);
    } 
    public function formEdit($id){
        $data['pesanan'] = $this->Model('PesananModel')-> getPesananByID($id);
        $this->view('admin/formEdit', $data);
    }

    public function update(){
        if($this->Model('PesananModel')-> update($_POST)>0){
            Flasher::setFlash('Berhasil', 'Diupdate', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Diupdate', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

}