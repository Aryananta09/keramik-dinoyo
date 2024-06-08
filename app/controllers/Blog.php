<?php

Class Blog extends Controller{
    public function index(){
        $blogs = $this->Model('BlogModel') -> getAllBlog();
    
    // Mengubah format tanggal di dalam data blog
    foreach ($blogs as &$blog) {
        $date = new DateTime($blog['tanggal']);
        $blog['formatted_tanggal'] = $date->format('d F Y'); // Format tanggal menjadi 'DD F Y'
    }

    $data['blog'] = $blogs;
    $this->view('blog/index', $data);
    }
}