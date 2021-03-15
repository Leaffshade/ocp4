<?php

require_once('./model/User.php');
require_once('./model/Article.php');
require_once('./model/Comment.php');



function adminHome(){
    
    require_once('./view/admin/admin.php');
}

function adminArticles(){
    
    $articleModel = new Article(); // Je crée un objet de type article qui fait référence à mon modèle d'article permettant d'interagir avec la BD
    $articles = $articleModel->getArticles();
    require_once('./view/admin/admin-articles.php');
}

function adminComments(){
    $commentModel = new Comment(); // Je crée un objet de type comment qui fait référence à mon modèle de commentaire permettant d'interagir avec la BD
    $comments = $commentModel->getNotifiedComments();
    require_once('./view/admin/admin-comments.php');
}

function editArticle($articleId){
    $articleModel = new Article(); // Je crée un objet de type article qui fait référence à mon modèle d'article permettant d'interagir avec la BD
    $article = $articleModel->getArticle($articleId);
    require_once('./view/admin/admin-edit.php');
}

function deleteComment($commentId){
    $commentModel = new Comment(); // Je crée un objet de type comment qui fait référence à mon modèle de commentaire permettant d'interagir avec la BD
    $comment = $commentModel->deleteComment($commentId);
    header('Location: ?action=admin_comments');
    // require_once('./view/admin/admin-comments.php');
}

function deleteArticle($articleId){
    $articleModel = new Article(); // Je crée un objet de type article qui fait référence à mon modèle d'article permettant d'interagir avec la BD
    $article = $articleModel->deleteArticle($articleId);
    header('Location: ?action=admin_articles');
    // require_once('./view/admin/admin-article.php');
}

function notnotifyComment($commentId){
    $commentModel = new Comment(); // Je crée un objet de type comment qui fait référence à mon modèle de commentaire permettant d'interagir avec la BD
    $comment = $commentModel->notnotifyComment($commentId);
    header('Location: ?action=admin_comments');
    // require_once('./view/admin/admin-comments.php');
}