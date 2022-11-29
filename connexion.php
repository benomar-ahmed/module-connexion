<?php

$mysqli = new mysqli("localhost","root","","moduleconnexion");

if(isset($_GET['submit'])){
    $resultat = mysqli_query($mysqli,"SELECT `login` FROM utilisateurs; ");
    $ligne = $resultat->fetch_all();
    $resultat_mdp = mysqli_query($mysqli,"SELECT `password` FROM utilisateurs; ");
    $ligne_mdp = $resultat_mdp->fetch_all();
    var_dump($ligne);
    var_dump($ligne_mdp);
    
    for ($i=0; isset($ligne[$i]) ; $i++) { 
        for($j=0;isset($ligne_mdp[$j]);$j++){
            
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php include 'header.php';?>

    <main>
        <form action="" method="get">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" required="required">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required="required">
            <input type="submit" value="Valider" name="submit">
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>