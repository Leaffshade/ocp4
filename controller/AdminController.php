<?php

require_once('./model/User.php');
require_once('./model/Article.php');
require_once('./model/Comment.php');



function adminHome(){
    
    require_once('./view/admin/admin.php');
}

function adminArticles(){
    
    require_once('./view/admin/admin-articles.php');
}

function adminComments(){
    
    require_once('./view/admin/admin-comments.php');
}

