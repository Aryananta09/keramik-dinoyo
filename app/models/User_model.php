<?php

class User_Model {
    private $table = 'users';
    private $db;
    private $dbh;
    private $stmt;

    public function __construct(){
        $this->db = new Database();
    }


    public function getByUsername($username){
        $this->db->query("Select * from " . $this->table . " where username=:username" );
        $this->db->bind('username', $username);
        return $this->db->single();
    }
    public function insert($data)
    {
        $pass = $data['password'];
        $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

        $this->db->query("INSERT INTO users VALUES ('', :username , :pass , 'user')");
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', $hashedPassword);

        $this->db->exec();
        return $this->db->rowCount();
    }

}