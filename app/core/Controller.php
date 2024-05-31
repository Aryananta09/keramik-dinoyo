<?php 

Class Controller {
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }

    public function Model($modelName, $data = [])
    {
        include_once __DIR__ . "/../models/$modelName.php";
        return new $modelName;
    }
}