<?php

class Db {

    //Attribut qui va nous permettre de gérer la connexion à la base MySQL
    protected $db;

    public function __construct(){
                $this->db = new PDO('mysql:dbname=blog;host=127.0.0.1', 'root', '');
           
           
       
        
    }
}