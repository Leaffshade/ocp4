<?php

require_once 'Db.php';

class User extends Db
{
    public function addUser($login, $password)
    {
        //Requetes SQL INSERT
        $query = $this->db->prepare(
            'INSERT INTO user(login, password) VALUES (?, ?)'
        );
        return $query->execute([
            $login,
            password_hash($password, PASSWORD_DEFAULT),
        ]);
    }

    public function login($login)
    {
        //Requetes SQL INSERT
        $query = $this->db->prepare('SELECT * FROM user WHERE login = ?');
        $query->execute([$login]);
        return $query->fetch();
    }

    public function getUsers()
    {
        //Requetes SQL SELECT
        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute();
    }

    // ----------------------------------------
}
