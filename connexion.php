<?php session_start(); ?>
<?php
    if( $_SESSION['LOGGED_OUT'] == 1){
        $_SESSION['LOGGED_OUT'] = 1;
        header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Supprimer la recette ?</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once('./header.php'); ?>
        <?php $_SESSION['LOGGED_OUT'] = 1;?>
        <h1>Voulez vous vraimment vous deconnecter ?</h1>
        <form action="connexion.php" method="POST">  
            <button type="submit" class="btn btn-danger">Deconnexion est définitive</button>
        </form>
        <br />
    </div>

    <?php include_once('./footer.php'); ?>
    <?php session_destroy(); ?>
</body>
</html>