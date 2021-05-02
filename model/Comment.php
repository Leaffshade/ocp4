<?php

require_once('Db.php');

class Comment extends Db {

    // Methodes CRUD : Create - Read -  Update - Delete

 public function addComment($description, $author, $articleId){
        //Requetes SQL INSERT dans la table comment (fonctionnalité admin d'ajout d'un nouveau commentaire)
        $query = $this->db->prepare('INSERT INTO comment(description, date, author, article_id, notified) VALUES(?, NOW(), ?, ?, 0)');
        $res = $query->execute([$description, $author, $articleId]);
        return $res;
    }

    public function getComments(){
        //Requetes SQL SELECT dans la table article pour récupérer tous les commentaires (page index)
        $query = $this->db->prepare('SELECT * FROM comment');
        $query->execute();
        return $query->fetchAll(); /* Affiche toutes les entrées */
    }

    public function getCommentsByArticleId($articleId){
        //Requetes SQL SELECT dans la table article pour récupérer tous les commentaires (page index)
        $query = $this->db->prepare('SELECT * FROM comment WHERE article_id = ?');
        $query->execute([$articleId]);
        return $query->fetchAll(); /* Affiche toutes les entrées */
    }

    public function getComment($id){
        //Requetes SQL SELECT dans la table Comment pour récupérer un commentaire en particulier (page de détail)
        $query = $this->db->prepare('SELECT * FROM comment WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch();
       
    }

    public function updateComment($id, $data){
        //Requetes SQL UPDATE dans la table Comment pour modifier un commentaire (admin)
       
    }

    public function deleteComment($id){
        
        //Requetes SQL DELETE dans la table Comment pour supprimer un commentaire (admin)
        $query = $this->db->prepare('DELETE FROM comment WHERE id = ?');
        $query->execute([$id]);
    }

    public function notifyComment($id){
        $query = $this->db->prepare('UPDATE comment SET notified = 1 WHERE id = ?');
        $query->execute([$id]);
    }

    public function getNotifiedComments(){
        //Requetes SQL SELECT dans la table article pour récupérer tous les commentaires (page index)
        $query = $this->db->prepare('SELECT * FROM comment WHERE notified = 1');
        $query->execute();
        return $query->fetchAll(); /* Affiche toutes les entrées */
    }

 
    public function notnotifyComment($id){
        //Requetes SQL SELECT dans la table article pour récupérer tous les commentaires (page index)
        $query = $this->db->prepare('UPDATE comment SET notified = 0 WHERE id = ?');
        $query->execute([$id]);
    }







}