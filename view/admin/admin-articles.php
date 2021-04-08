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

<?php include_once(__DIR__ . '/../header.php'); ?>

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container">
    
    <div class="block w-100">
        <div class="Block_gestion_article">
            <h1>Gestion des articles</h1>
            <!-- 
                1. Lister tous les articles
                2. Sur chaque article, ajouter la possibilité de supprimer et modifier l'article
                3. Ajouter la possibilité d'ajouter un nouvel article
            -->
        <table class='table table-bordered  table-dark w-50 mx-auto'>
            <tbody>
                <?php foreach($articles as $article){ ?>
                    <tr>
                        <td> <?php echo $article['title'] ?></td>
                        <td>
                            <a href="?action=edit_article&article_id=<?php echo $article['id']; ?>" class="btn">
                                <i class="fas fa-edit"></i>
                            </a>
                       
                            <a href="?action=delete_article&article_id=<?php echo $article['id']; ?>" class="btn">
                                <i class="fas fa-trash"></i>
                            </a>
                       </td>
                       <!-- <a href="?action=add_article&article_id=<?php echo $article['id']; ?>" class="btn">
                            <i class="fal fa-plus-circle"></i> -->
                    </tr>   
                <?php } ?>             
            <tbody>

        </table>
        <div class="d-flex justify-content-center">
            <a href="?action=add_article" class='btn text-white'>
                <i class="fas fa-plus-circle"></i> Ajouter un nouvel article
            </a>
        </div>    
    </div>   
</div>

<!-- RIGHT CONTAINER -->      
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