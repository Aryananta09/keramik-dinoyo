<?php

Class Metode extends Controller{
    public function index($user_id){
        $data['metode'] = $this->Model('MetodeModel') -> getAllMetode($user_id);
        $this->view('metode/index', $data);
    }

    public function tambah(){
        $id = $_POST['user_id'];
        if($this->Model('MetodeModel')-> tambahMetode($_POST)>0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/metode/' . $id);
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/metode/' . $id);
            exit;
        }
    }

    public function hapus($id_pembayaran, $userid){
        $id = $userid;
        if($this->Model('MetodeModel')-> hapusMetode($id_pembayaran)>0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/metode/' . $id);
            exit;
        }
        else{
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/metode/' . $id);
            exit;
        }
        
    }
}