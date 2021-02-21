<?php

require_once('./model/User.php');
require_once('./model/Article.php');
require_once('./model/Comment.php');



function home(){
    $article = new Article();
    $articles = $article->getArticles();
    require_once('./view/home.php');
}

function articles(){
    require_once('./view/articles.php');
}

function article($articleId){
    // TODO: Récupérér le détail d'un article avec le modèle Article
    $articleModel = new Article(); // Je crée un objet de type article qui fait référence à mon modèle d'article permettant d'interagir avec la BD
    $articles = $articleModel->getArticles(); // J'appelle la méthode qui me permet de récuperer tous les articles via un select en BD
    $articleDetail = $articleModel->getArticle($articleId);

    $commentModel = new Comment();
    $comments = $commentModel->getCommentsByArticleId($articleId);
   
    require_once('./view/article.php'); // On inclut la Vue qui utilisera les variables articles et article (pour le détail du milieu)
}

function addComment($articleId){
   
    $commentModel = new Comment();
    $commentModel->addComment($_POST['description'], $_POST['author'], $articleId);
    //Redirection vers la page de l'article concerné
    header('location: ?action=article&article_id=' . $articleId);
}

function notifyComment($commentId, $articleId){
    $commentModel = new Comment();
    $commentModel->notifyComment($commentId);

    //Redirection vers la page de l'article concerné
    header('location: ?action=article&article_id=' . $articleId);
}