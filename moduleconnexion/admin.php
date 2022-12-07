<?php
include 'connect.php';
include 'base_de_donnee.php';
$result = mysqli_query($mysqli,"SELECT * FROM utilisateurs;");
$row = $result->fetch_all();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-admin.css">
    <link rel="stylesheet" href="style.css">
    <title>Espace Admin</title>
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

    <main id="main-admin">
        <div class="div-admin">
            <p>Base de données des utilisateurs<p>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Login</td>
                        <td>Prenom</td>
                        <td>Nom</td>
                        <td>Password</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i=0; isset($row[$i]) ; $i++) { 
                            echo "<tr>";
                            for ($j=0; isset($row[$i][$j]) ; $j++) 
                            { 
                                echo "<td>" . $row[$i][$j] . "</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <a href="https://github.com/benomar-ahmed/module-connexion.git"><img src="../Images/icon-github.png" alt="Le logo de github"></a>
    </footer>
</body>
</html>
