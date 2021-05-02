<?php

class Db {

    //Attribut qui va nous permettre de gérer la connexion à la base MySQL
    protected $db;

    public function __construct(){
        $env = parse_ini_file(__DIR__ . '/../.env');
        
                $this->db = new PDO('mysql:dbname=' . $env['db_name'] . ';host=' . $env['db_host'], $env['db_user'], $env['db_password']);
           
           
       
        
    }
}