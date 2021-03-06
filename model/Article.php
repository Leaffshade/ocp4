<?php

require_once 'Db.php';

class Article extends Db
{
    // Methodes CRUD : Create - Read -  Update - Delete

    public function addArticle($data, $imageName)
    {
        //Requetes SQL INSERT dans la table comment (fonctionnalité admin d'ajout d'un nouvel article)
        $query = $this->db->prepare(
            'INSERT INTO article(title, content, picture, published_date, user_id) VALUES(?, ?, ?, NOW(), ?)'
        );
        $res = $query->execute([
            $data['title'],
            $data['description'],
            $imageName,
            $_SESSION['id'],
        ]);
        return $res;
    }

    public function getArticles()
    {
        //Requetes SQL SELECT dans la table article pour récupérer tous les articles (page index)
        $query = $this->db->prepare('SELECT * FROM article');
        $query->execute([]);
        return $query->fetchAll();
    }

    public function getArticle($id)
    {
        //Requetes SQL SELECT dans la table article pour récupérer un article en particulier (page de détail)
        //TODO: Faire la requete qui permet de récupérer un article
        $query = $this->db->prepare('SELECT * FROM article WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch();
    }

    public function updateArticle($id, $data, $imageName)
    {
        //Requetes SQL UPDATE dans la table article pour modifier un article (admin)
        $query = $this->db->prepare(
            'UPDATE article SET title = ?, content = ?, picture = ? WHERE id = ?'
        );
        $query->execute([
            $data['title'],
            $data['description'],
            $imageName,
            $id,
        ]);
    }

    public function deleteArticle($id)
    {
        //Requetes SQL DELETE dans la table article pour supprimer un article (admin)
        $query = $this->db->prepare('DELETE FROM article WHERE id = ?');
        $query->execute([$id]);
    }
}
