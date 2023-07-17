<?php session_start();
include_once('./../config/mysql.php');
include_once('./../config/user.php');
include_once('./../variables.php');
?>

<?php
//  Verification du formulaire soumis
if(
    !isset($_POST['title'])  
    || !isset($_POST['recipe'])
    )
{
    echo 'Il faut un titrre et une recette pour soumettre le formulaire';
    return;
}

$title = $_POST['title'];
$recipe = $_POST['recipe'];

//Faire insertiion en base
$insertRecipe = $mysqlClient->prepare('INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)');
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'is_enabled' => 1,
    'author' => $loggedUser['email'],
]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Creation de recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- MESSAGE DE SUCCES -->
        <?php include_once("./../header.php"); ?>
        <h1>Reccete ajoutées avec succès</h1>
        <div class="card-body">
            <h5 class="card-title"><?php echo $title ; ?></h5>
            <p class="card-text"><b>Email</b> : <?php echo $loggedUser['email']; ?></p>
            <p class="card-text"><b>Recette</b> : <?php echo strip_tags($recipe); ?></p>
        </div>
    </div>
    <?php include_once("./../footer.php"); ?>
</body>
</html>