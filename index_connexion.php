<?php
include 'connex.php';

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
        </ul>
        </nav>
    </header>

    <main id="main_connex">
        <?php echo "Bienvenue dans votre compte ".'<span>'.$_SESSION['login'].'</span>'; ?>
    </main>
</body>
</html>