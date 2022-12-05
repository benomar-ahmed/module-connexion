<?php

session_start();
include 'base_de_donnee.php';
$resultat = mysqli_query($mysqli,"SELECT * FROM utilisateurs");
$row = $resultat->fetch_all();
for($i=0;isset($row[$i]);$i++){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['id'] = $row[$i][0];
        $_SESSION['nom'] = $row[$i][2];
        $_SESSION['prenom'] = $row[$i][3];
    // }
    // if (isset($_POST['submit_btn'])) {
    //     $message = "";
    //     $login = $_POST['login'];
    //     $password = $_POST['mdp'];
    //     $prenom = $_POST['fname'];
    //     $nom = $_POST['lname'];
    //     $id = $_SESSION['id'];
    //     $uplogin = "UPDATE `connexion` SET `login` = '$login' WHERE `connexion`.`id` = '$id'";
    //     $uppassword = "UPDATE `connexion` SET `password` = '$password' WHERE `connexion`.`id` = '$id'";
    //     $upfname = "UPDATE `connexion` SET `prenom` = '$prenom' WHERE `connexion`.`id` = '$id'";
    //     $uplname = "UPDATE `connexion` SET `nom` = '$nom' WHERE `connexion`.`id` = '$id'";
    //         if (!empty($_POST['login'])) {
    //             if (mysqli_query($mysqli, $uplogin)){
    //                 $_SESSION['login'] = $login;
    //             }
    //         }
    // }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="admin.php">Espace Admin</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <form action="" method="post">
            <label for="login">Login :</label>
            <input type="text" name="login" value="">

            <label for="login">Nom :</label>
            <input type="text" name="nom" value="">

            <label for="login">Prénom :</label>
            <input type="text" name="prenom" value="">

            <label for="login">Mot de passe :</label>
            <input type="text" name="password" value="">

            <input type="submit" value="Modifier">
        </form>
    </main>

    <footer>
        <a href="https://github.com/benomar-ahmed/module-connexion.git"><img src="../Images/icon-github.png" alt="Le logo de github"></a>
    </footer>


</body>
</html>