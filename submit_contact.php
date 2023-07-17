<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Message bien reçu !</h1>
        
    <div class="card">
        <div class="card-body">
        <?php 
            if (
                (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
                || (!isset($_GET['message']) || empty($_GET['message']))
                )
            {
                echo('Il faut un email et un message valides pour soumettre le formulaire.');
                return;
            }
        ?>
        <h5 class="card-title">Rappel de vos informations</h5>;
        <p class="card-text"><b>Email</b> :<?php  echo $_GET['email']; ?> </p>;
        <p class="card-text"><b>Message</b> :<?php    echo $_GET['message']; ?> </p>;

        </div>
    </div>
</body>

</html>