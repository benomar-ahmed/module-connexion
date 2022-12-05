<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
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

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required="required">

            <input type="submit" value="Valider" name="submit">
        </form>
    </main>

    <footer>
        <a href="https://github.com/benomar-ahmed/module-connexion.git"><img src="../Images/icon-github.png" alt="Le logo de github"></a>
    </footer>
</body>
</html>