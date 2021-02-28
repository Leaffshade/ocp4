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
      <form>
        <div>
            <label>Titre</label>
            <input type="text" value="<?php echo $article['title'] ?>" class="form-control">
        </div>
        <div>
            <label>Article</label>
            <textarea rows="10" class="form-control">
                <?php echo $article['content'] ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
        
        
        
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