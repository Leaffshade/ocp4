<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<!-- Menu -->
<!-- Détail de l'article -->
<!-- Listing des commentaires associés à l'article -->


    <!-- TODO: Afficher le titre et la description d'un article + listing de commentaires. 
    Préparer la mise en forme de cette page articel -->
  
</head>
    <body>

<!-- BLOG -->
<div class="main-container">

 <?php include_once('header.php'); ?>

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container d-flex">
    <div class="block w-75 me-3">
        <!-- PROFILE (MIDDLE-CONTAINER) -->
        <div class="profile-picture big-profile-picture clear">
            <img width="158px" height="150px" alt="jeanbigpicture"
             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcGazpvDy-yzjHZFOXnL1UuXCa2upBJCo3hw&usqp=CAU.jpg">
        </div>
        
        <h1 class="user-name text-center">Jean Forteroche</h1>

        <ul>
            <?php
                foreach($articles as $article){ ?>
                    <li>
                        <a href="?action=article&article_id=<?= $article['id'] ?>">
                            <?php= $article['title'] ?>
                        </a>
                    </li>
            <?php } ?>

        </ul>
</div>
      
<!-- Connexion Compte -->
     
<div class="right-container w-25">
    <section>  
        <aside> 
            <form action="Page1.php" method="POST">
                <div class="account block">
                    <h2 class="titular">CONNEXION A VOTRE COMPTE</h2>


                    <h1><?= $article['title'] ?></h1>
    <img src="<?= $article['picture'] ?>" width="200"/>


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



  
    
</body>
</html>