<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- Menu -->
<!-- Détail de l'article -->
<!-- Listing des commentaires associés à l'article -->
<nav>
    <ul>
        <li>
            <a href="?">Accueil</a>
            <a href="?action=articles">Listing</a>
            <a href="?action=article">Détail</a>
        </li>
    </ul>
</nav>

    <!-- TODO: Afficher le titre et la description d'un article + listing de commentaires. 
    Préparer la mise en forme de cette page articel -->
    
    <h1><?= $article['title'] ?></h1>
    <img src="<?= $article['picture'] ?>" width="200"/>
    
</body>
</html>