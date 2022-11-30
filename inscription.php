<?php
include 'inscrip.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <form action="" method="post">
            <label for="login">Login :</label>
            <input type="text" name="login" class="champ" id="login" required="required">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" class="champ" id="nom" required="required">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" class="champ" id="prenom" required="required">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" class="champ" id="password" required="required">
            <label for="password1">Retapez votre mot de passe :</label>
            <input type="password" name="password1" class="champ" id="password1" required="required">
            <input type="submit" value="S'inscrire" name="submit"><br>
            <?php if(isset($_POST['submit'])){
                    if($_POST['password']!=$_POST['password1']){
                        echo $message;
                    }
            }
    ?>
        </form>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>