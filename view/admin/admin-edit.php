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
     <!-- Importation de la librairie TinyMCE (editeur de texte riche) -->
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Permettre de transformer les balises html <textearea> en éditeur de texte riche -->
    <script>tinymce.init({
        selector:'textarea', 
        plugins: "textcolor",
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor"
        });</script>

</head>
    <body>

<!-- BLOG -->
<div class="main-container">

<?php include_once(__DIR__ . '/../header.php'); ?>
     

<!-- MIDDLE-CONTAINER -->
<div class="middle-container container">

    <div class="block w-100">
        <form method="POST" action="?action=edit_article_action&article_id=<?php echo $article['id']; ?>"  enctype="multipart/form-data">
            <div>
                <label>Titre</label>
                    <input type="text" name="title" value="<?php echo $article['title'] ?>" class="form-control">
            </div>
            <div>
                <label>Image</label>
                    <input type="file" name="image" value="" class="form-control">
            </div>
            <div>
                <label>Article</label>
                    <textarea rows="10" class="form-control" name="description">
                <?php echo $article['content'] ?>
            </textarea>
            </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>

    <footer>
    <!-- Placez ici le contenu du pied de page -->
    </footer>

    </body>
</html>