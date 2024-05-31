<?php

class Pesanan extends Controller {
    public function index(){
        $this->view('pesanan/index');
   }

   public function form(){
        $this->view('pesanan/formpesanan');
   }

   public function form_process(){
        $this->view('pesanan/index');
   }
}