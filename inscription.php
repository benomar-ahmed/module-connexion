<?php

$mysqli = new mysqli("localhost","root","","moduleconnexion");
$message = "Les mots de passes ne sont pas identiques !";

if(isset($_POST['submit'])){
    if($_POST['password']==$_POST['password1']){
        $result = mysqli_query($mysqli,"INSERT INTO utilisateurs (`login`,`nom`,`prenom`,`password`) VALUES ('".$_POST['login']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['password']."');");
        
    }
}
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
            <input type="text" name="login" id="login" required="required">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required="required">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required="required">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required="required">
            <label for="password1">Retapez votre mot de passe :</label>
            <input type="password" name="password1" id="password1" required="required">
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