<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css" />
</head>
    <body>

<!-- BLOG -->
<div class="main-container">

 <?php include_once('header.php'); ?>


<!-- MIDDLE-CONTAINER -->
<div class="middle-container container d-flex flex-wrap flex-md-nowrap">
<div class="block w-25 me-3">
        
        <div class="text-center block-title">
            <h2>Derniers articles</h2>
        </div>

        <ul class="ps-0 articles-list">
            <?php
                foreach($articles as $article){ ?>
                    <li>
                        <a class="d-block py-3 px-2" href="?action=article&article_id=<?= $article['id'] ?>">
                            <?= $article['title'] ?>
                        </a>
                    </li>
            <?php } ?>
        </ul>
        
    </div>
    <div class="block w-50 me-3">
        <h1><?= $articleDetail['title'] ?></h1>
        <p><?= $articleDetail['content'] ?></p>
    </div>

<!-- RIGHT CONTAINER -->      
<!-- Connexion Compte -->
     
    <div class="right-container">
        <section>  
            <aside> 
                <form action="Page1.php" method="POST">
                    <div class="account block">
                        <h2 class="titular">CONNEXION A VOTRE COMPTE</h2>

                    <div class="formulaire d-flex mb-2 pe-2">
                        <div class="px-2 d-flex align-items-center">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    
                        <input type="text" placeholder="votrenom@gmail.com" class="email text-input">
                    
                    </div>  
                    <!--<div class="logoform">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>-->
                

                    <div class="formulaire d-flex pe-2 mb-2">
                        <div class="px-2 d-flex align-items-center">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="text" placeholder="Mot de passe" class="password text-input">






                        <?php
        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est bon
        {
        // On affiche les codes
        ?>
            <h1>Voici les codes d'accès :</h1>
            <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p> 

            <?php
        }
        else // Sinon, on affiche un message d'erreur
        {
            // echo '<p>Mot de passe incorrect</p>';
        }
        ?>






                    </div>    
                <!-- <div class="logoform">
                        <i class="fas fa-lock"></i>
                    </div>-->
            
                    <div class="d-flex justify-content-center">
                        <a class="sign-in btn btn-outline-success">S'identifié</a>
                    </div>
            
                    <p class="scnd-font-color text-center"><a href="?">Mot de passe oublié ?</a></p>
                </form>
            </aside>
                    </div> 
    </div>

<article>
<div class="middle-container container d-flex">
    <div class="block w-75 me-3">

        
</div>
</div>
</article>
    </section>
       
</body>
<script src="js.js"></script>

<!-- Listing des 5 derniers tweets -->

    <!-- <ul>
        <li>
            <a href="?">Accueil</a>
            <a href="?action=tweets">Listing</a>
            <a href="?action=article">Détail</a>
        </li>
    </ul>
    <h1>Accueil</h1> -->

    <footer>
    <!-- Placez ici le contenu du pied de page -->
    </footer>

    </body>
</html>