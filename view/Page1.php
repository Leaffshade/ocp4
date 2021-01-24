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
<div class="main-container" >

 <?php include_once('header.php'); ?>

<!-- Petite photo profil menu -->
 <div class="profile-menu">
                    <p>Me <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
                    <div class="profile-picture small-profile-picture">
                        <img width="40px" alt="olaf picture" src="assets/images/olaf.jpg">
                    </div>
                </div>

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container d-flex">
    <div class="block w-75 me-3">
        <!-- PROFILE (MIDDLE-CONTAINER) -->
        <div class="profile-picture big-profile-picture clear">
            <img width="158px" height="150px" alt="Olaf picture"
                src="assets/images/olaf.jpg">
        </div>
        
        <h1 class="user-name text-center">Olaf</h1>

        <ul>
            <?php
                foreach($articles as $article){ ?>
                    <li>
                        <a href="?action=article&article_id=<?= $article['id'] ?>">
                            <?= $article['title'] ?>
                        </a>
                    </li>
            <?php } ?>

        </ul>

<p>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?></p> <!--Faille XSS: Pour sécurisé les données-->


        <!-- <?php
function DireBonjour($nom)
{
    echo 'Bienvenue ' . $nom . ' !<br />';
}

DireBonjour($nom);
?> -->

</div>

       
<!-- Connexion Compte -->
     
<div class="right-container w-25">
    <section>  
        <aside> 
            <form action="cible.php" method="POST">
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
            <?php
            /* du PHP ici */
            ?>

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