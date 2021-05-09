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

<?php include_once __DIR__ . '/../header.php'; ?>

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container">

    <div class="block w-100">
        <nav>
            <ul class="d-flex flex-wrap">
                <li class="w-100 mb-3">
                    <button class="gestion" type=button>
                        <a href="?action=admin_articles">Gestion des articles</a>
                    </button>
                </li>
                <li class="w-100 mb-3">
                    <button class="gestion" type=button>
                        <a href="?action=admin_comments">Gestion des commentaires</a>
                    </button>
                </li>
                <li class="w-100 mb-3"> <!-- taille bouton-->
                    <button class="gestion" type=button>
                        <a href="?action=logout">Déconnexion</a>
                    </button>
                </li>
            </ul>
        </nav>     
    </div>
   
</body>
<script src="js.js"></script>

    <footer>
    <!-- Placez ici le contenu du pied de page -->
    </footer>

</body>
</html>