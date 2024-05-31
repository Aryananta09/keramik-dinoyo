<?php

Class Admin extends Controller{

    public function index(){
        $this->view('admin/index');
    }
    public function blog(){
        $this->view('admin/manageBlog');
    }
    public function product(){
        $this->view('admin/manageProduct');
    }
    public function blogForm(){
        $this->view('admin/addBlog');
    }
    public function productForm(){
        $this->view('admin/addProduct');
    }
}