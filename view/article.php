<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
</head>
    <body>

<!-- BLOG -->
<div class="main-container">
 <?php include_once 'header.php'; ?>

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container d-flex flex-wrap flex-md-nowrap">
<div class="block w-25 me-3">
        
        <div class="text-center block-title">
            <h2>Derniers articles</h2>
        </div>

        <ul class="ps-0 articles-list">
            <?php
            $i = 0;
            foreach ($articles as $article) {
                if ($i >= 5) {
                    break;
                } ?>
                    <li>
                        <a class="d-block py-3 px-2" href="?action=article&article_id=<?= $article[
                            'id'
                        ] ?>">
                            <?= $article['title'] ?>
                        </a>
                    </li>
            <?php $i++;
            }
            ?>
        </ul>
        
    </div>
    <div class="block w-50 me-3">
        <h1><?= $articleDetail['title'] ?></h1>
       
        <?php if (
            isset($articleDetail['picture']) &&
            $articleDetail['picture'] !== 'NULL'
        ) { ?>
            <!--<img src="<?= $articleDetail['picture'] ?>" width="100%" />-->
            <img src="./assets/images/uploads/<?= $articleDetail[
                'picture'
            ] ?>"/>
        <?php } ?>
        <h4><?= $articleDetail['content'] ?></h4>

        <div>
            <h2>Commentaires</h2>

    <form method="POST" action="?action=add_comment&article_id=<?= $articleDetail[
        'id'
    ] ?>">
        <div>
            <label class="d-block text-white">Commentaire</label>
            <textarea class="w-75 form-control" name="description" rows="5"></textarea>
        </div>
        <div>
            <label class="d-block text-white">Auteur</label>
            <input name="author" class="w-75 form-control"/>
        </div>
        <button class="btn btn-primary mt-2" type="submit">Envoyer</button>
    </form>

    <?php
    if (count($comments) == 0) { ?>
            <p>Aucun commentaire</p>
        <?php }

    foreach ($comments as $comment) { ?>
            <p><?php echo $comment['description']; ?> <br/> by <?= $comment[
     'author'
 ] ?></p>
        
            <?php if ($comment['notified'] == 0) { ?>
                <a href="?action=notify_comment&comment_id=<?php echo $comment[
                    'id'
                ]; ?>&article_id=<?php echo $articleDetail[
    'id'
]; ?>" class="btn btn-danger">Signaler</a>
            <?php } else { ?>
                <span>Déjà signalé</span>
            <?php } ?>
        <?php }
    ?>
        </div>
    </div>
  
<!-- RIGHT CONTAINER -->      
<!-- Connexion Compte -->   
    <div class="right-container">
        <section>  
            <aside> 
            <form action="?action=login" method="POST">
                    <div class="account_block">
                        <h2 class="titular">CONNEXION A VOTRE COMPTE</h2>

                        <div class="formulaire d-flex mb-2 pe-2">
                            <div class="px-2 d-flex align-items-center">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                                <input type="text" placeholder="Laura" class="email text-input" name="login">
                        </div>

                        <div class="formulaire d-flex pe-2 mb-2">
                            <div class="px-2 d-flex align-items-center">
                                <i class="fas fa-lock"></i>
                            </div>
                                <input type="password" placeholder="Mot de passe" class="password text-input" name="password">
                        </div>  

                        <div>
                            <?php if (isset($_GET['login_error'])) { ?>
                                <h6><?php echo $_GET['login_error']; ?></h6>
                            <?php } ?>
                        </div>
            
                    <div class="d-flex justify-content-center" >
                        <button type="submit" class="sign-in btn btn-outline-success">S'identifier</a>
                    </div>
            <div class="mp_oublie">
                    <p class="scnd-font-color text-center"><a href="?">Mot de passe oublié ?</a></p>
                </form>
            </aside>
</div> 
</div>
    </section>      
<!-- </body> -->

    <footer>
    <!-- Placez ici le contenu du pied de page -->
    </footer>

    </body>
</html>