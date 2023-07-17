<?php session_start();
    include_once('./../config/mysql.php');
    include_once('./../config/user.php');
    include_once('./../variables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Ajout de recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once("./../header.php") ?>
        <!-- Create the fomular-->
        <form action="<?php echo($rootUrl . 'recipes/post_create.php'); ?>" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Ajouter le titre de la recette</label>
                <input type="text" id="title" name="title" class="form-control">
                <div id="title-help" class="form-text">Choisissez un titre percutant !</div>
            </div>
            <div class="mb-3">
                <label for="recipe" class="form-label">Description de la recette</label>
                <textarea id="recipe" name="recipe" class="form-control" placeholder="Seulement du contenu vous appartenant ou libre de droits." > </textarea>
            </div>  
                
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    <div class="container">

    <?php include_once("./../footer.php") ?>
</body>
</html>