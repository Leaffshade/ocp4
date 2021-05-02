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
<?php include_once('header.php'); ?>    

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container d-flex flex-wrap flex-md-nowrap">
<div class="block w-25 me-3">
        
        <div class="text-center block-title">
            <h2>Derniers articles</h2>
        </div>

        <ul class="ps-0 articles-list">
            <?php
               
                $i = 0;
                foreach($articles as $article){ 
                    if($i >= 5){
                        break;
                    }
                    ?>
                    <li>
                        <a class="d-block py-3 px-2" href="?action=article&article_id=<?= $article['id'] ?>">
                            <?= $article['title'] ?>
                        </a>
                    </li>
            <?php
            $i++;
            
        } ?>      
        </ul>
    </div>

    <div class="block w-50 me-3">
        <!-- PROFILE (MIDDLE-CONTAINER) -->
        <div class="profile-picture big-profile-picture clear">
            <img class="img1" width="158px" height="150px" alt="jeanbigpicture"
             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcGazpvDy-yzjHZFOXnL1UuXCa2upBJCo3hw&usqp=CAU.jpg">
            </img>
        </div>
        
        <h1 class="user-name text-center">Jean Forteroche</h1><br>
        
        <h5>Jean Forteroche, né dans la région parisienne en 1956, a suivi des études de philosophie.<br> 
            Il devient finalement instituteur, puis écrivain.<br> 
            Marié, quatre enfants, il vit à Saint-Maur-des-Fossés dans le Val de Marne.<br>

            <br>Ses premières publications sont des romans de science fiction pour la jeunesse.<br> 
            Il est ensuite récompensé par le Prix Goya du premier roman pour Le Monde d'en haut.<br> 
            Il écrit aussi pour des revues qui lui commandent des articles.<br>
        </h5>
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
                            <?php if(isset($_GET['login_error'])) { ?>
                                <h6><?php echo $_GET['login_error']; ?></h6>
                            <?php } ?>
                        </div>
            
                    <div class="d-flex justify-content-center d-flex justify-content-center d-flex mb-4 pe-4" >
                        <button type="submit" class="sign-in btn btn-outline-success">S'identifier</a>
                    </div>
            <div class="mp_oublie">
                    <p class="scnd-font-color text-center"><a href="?">Mot de passe oublié ?</a></p>
                </form>
            </aside>
            </div> 
    </div>

<article>
    <div class="middle-container container d-flex">
        <div class="block w-90 me-3">
            <h3>Aperçu du livre</h3><br>
                <h4>« L’aigle aveuglé referma lentement le bec, Galshan effleura son plumage.<br> 
                    — Voilà ton aigle, Galshan. C’est avec toi qu’il va voler maintenant... » 
                    Galshan passe l’hiver chez son grand-père qu’elle connaît à peine, 
                    car il vit seul au cœur des steppes de l'Alaska. 
                    En découvrant son fort caractère et les dures conditions de vie, 
                    Galshan s’inquiète des cent cinquante-trois jours à venir. 
                    Mais le dressage d’un aigle va leur permettre d’apprendre à se connaître... »
                </h4>
        </div>
    </div>
</article>
        </section>
       
</body>
    <script src="js.js"></script>
        <footer>
            <!-- Placez ici le contenu du pied de page -->
        </footer>
</body>
</html>