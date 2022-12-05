<?php

include 'connect.php';


if(isset($_POST['submit'])){

    if($_POST['password'] == $_POST['verify-password']){
        $requete = mysqli_query($mysqli,"INSERT INTO utilisateurs (`login`,`nom`,`prenom`,`password`) VALUES ('".$_POST['login']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['password']."');");
        // echo "OK";
        header('Location: connexion.php');
    }

    else{
        echo "Les mots de passe ne sont pas identiques !";
    }

    // $requete2 = mysqli_query($mysqli,"SELECT `login`,`nom`,`prenom` FROM utilisateurs; ");
    // $row = $requete2->fetch_all();
    // var_dump($row);
    // for($i=0;$row[$i];$i++){
    //     for($j=0;$row[$j];$j++){
    //         if($row[$i][$j]==$_POST['login'] and $row[$i][1]==$_POST['nom'] and $row[$i][2]==$_POST['prenom']){
    //             echo "L'utilisateur exite déjà !";
    //         }
    //     }
        
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
                <input type="text" name="login" required="required">

                <label for="nom">Nom :</label>
                <input type="text" name="nom" required="required">

                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" required="required">

                <label for="password">Mot de passe :</label>
                <input type="password" name="password" required="required">

                <label for="password1">Retapez votre mot de passe :</label>
                <input type="password" name="verify-password" required="required">

                <input type="submit" value="S'inscrire" name="submit">
        </form>
    </main>

    <footer>
    <a href="https://github.com/benomar-ahmed/module-connexion.git"><img src="../Images/icon-github.png" alt="Le logo de github"></a>
    </footer>


</body>
</html>