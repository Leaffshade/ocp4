<?php

require_once('./controller/FrontendController.php');

if(!isset( $_GET['action'])){
    //Afficher la page d'accueil
    home();
} else if($_GET['action'] == 'articles'){
    // Afficher la page de listing des articles
    articles();
}  else if($_GET['action'] == 'article'){
    // Afficher la page de détail d'un article
    article($_GET['article_id']);
    var_dump('toto');
}