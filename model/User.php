<?php

require_once('Db.php');

class User extends Db {

    public function addUser(){
        //Requetes SQL INSERT
        //$query = $this->db->prepare('INSERT INTO user(name, login, password) VALUES ("Laura", "laura", "laura")');
        //$query->execute();
    }

    public function getUsers(){
        //Requetes SQL SELECT
        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute();
    }




}