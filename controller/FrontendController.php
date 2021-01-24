<?php

require_once('./model/User.php');
require_once('./model/Article.php');



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
    require_once('./view/article.php');
}