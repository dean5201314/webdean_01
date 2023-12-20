<?php
date_default_timezone_set("Asia/Taipei");
session_start();

class DB{
    protected $dsn="mysql:localhost;charset:utf8;dbname=db10;";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,'root','');        
    }

    public function all($where='',$other=''){
        
    }
    
}

?>