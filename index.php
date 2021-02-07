<link rel="stylesheet" href="assets/css/style.css" />

<?php

// Routeur: Décider en fonction de l'URL, la fonction du controleur à appeler

require_once('./controller/FrontendController.php');

if(!isset( $_GET['action'])){
    //Afficher la page d'accueil en appelant la fonction home du controler
    home();
} else if($_GET['action'] == 'articles'){
    // Afficher la page de listing des articles
    articles();
}  else if($_GET['action'] == 'article'){
    // Afficher la page de détail d'un article en appelant la fonction article du contoleur
    article($_GET['article_id']);
}