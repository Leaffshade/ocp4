
<?php

// Routeur: Décider en fonction de l'URL, la fonction du controleur à appeler
require_once('./controller/FrontendController.php');
require_once('./controller/AdminController.php');

session_start();


if(!isset( $_GET['action'])){
    //Afficher la page d'accueil en appelant la fonction home du controler
    home();
} 
else if($_GET['action'] == 'articles'){
    // Afficher la page de listing des articles
    articles();

}  

else if($_GET['action'] == 'article'){
    // Afficher la page de détail d'un article en appelant la fonction article du controleur
    article($_GET['article_id']);
} 

else if($_GET['action'] == 'add_comment') {
    addComment($_GET['article_id']);

} 

else if($_GET['action'] == 'notify_comment'){
    notifyComment($_GET['comment_id'], $_GET['article_id']);
} 

else if ($_GET['action'] == 'admin_home'){
    adminHome();
} 

else if ($_GET['action'] == 'admin_articles'){
    adminArticles();
} 

else if ($_GET['action'] == 'admin_comments'){
    adminComments();
}

 else if ($_GET['action'] == 'edit_article'){
     editArticle($_GET['article_id']);
}

else if ($_GET['action'] == 'edit_article_action') {
    editArticleAction();
}

else if ($_GET['action'] == 'delete_comment'){
    deleteComment($_GET['comment_id']);
}

else if ($_GET['action'] == 'delete_article'){
    deleteArticle($_GET['article_id']);
}

else if ($_GET['action'] == 'notnotify_comment'){
    notnotifyComment($_GET['comment_id']);
}

else if($_GET['action'] == 'add_article') {
    addArticle();
} 
else if($_GET['action'] == 'add_article_action') {
    addArticleAction();
}

else if($_GET['action'] == 'image') {
    //Todo: A ajuster en fonction de l'hébergeur
    showImage();
} 
else if($_GET['action'] == 'login') {
    login();
}
else if($_GET['action'] == 'logout'){
    logout();
}
