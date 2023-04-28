<?php 

class Database{

    public $conn;
    private $db = 'OOPProject';
    
    public function init(){
    $this->conn = new mysqli('0.0.0.0', 'root',
'root');
    $this->conn->query("CREATE DATABASE IF NOT EXISTS ". $this->db);
     $this->conn = new mysqli('0.0.0.0', 'root',
'root', $this->db);  
    }
}