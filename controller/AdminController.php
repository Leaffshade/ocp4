<?php

require_once('./model/User.php');
require_once('./model/Article.php');
require_once('./model/Comment.php');



function adminHome(){
    //Si la session existe, je suis connecté, donc je peux accéder à l'espace admin
    if(isset($_SESSION['id'])){
        require_once('./view/admin/admin.php');
    } else {
        header('Location: ?');
    }
    
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

function editArticleAction() {
    $articleModel = new Article();
    $data = $_POST;
    $articleModel->updateArticle($_GET['article_id'], $data);
    header('Location: ?action=admin_articles');
}

// Fonction qui permet l'affichage de la page d'ajout d'un article
function addArticle(){
    require_once('./view/admin/admin-add.php');
}


// Fonction qui permet de valider l'ajout d'un article
function addArticleAction(){
    $data = $_POST;
    $image = $_FILES['image'];
    $dest = __DIR__ . '/../assets/images/uploads/' . $image['name'];
    move_uploaded_file($image['tmp_name'], $dest);
    $articleModel = new Article();
    $articleModel->addArticle($data, $image['name']);
    header('Location: ?action=admin_articles');
}

// Fonction qui est appelée depuis le script d'ajout d'un utilisateur
function createUser($login, $password) {
    $user = new User();
    $res = $user->addUser($login, $password);
    echo $res;
}

function login(){
    var_dump($_POST);
    $userModel = new User();
    $user = $userModel->login($_POST['login']);
    if(!$user){
        header('Location: ?login_error=Utilisateur non trouvé');
        die();
    }
    $res = password_verify($_POST['password'], $user['password']);
    if(!$res){
        header('Location: ?login_error=Mot de passe incorrect');
        die();
    }
    $_SESSION['id'] = $user['id'];
    header('Location: ?action=admin_home');
}

function logout(){
    session_unset();
    header('Location: ?');
}