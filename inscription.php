<?php

$mysqli = new mysqli("localhost","root","","moduleconnexion");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <form action="" method="post">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <label for="password1">Retapez votre mot de passe :</label>
            <input type="password" name="password1" id="password1">
            <input type="submit" value="Créez mon compte">
        </form>

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>