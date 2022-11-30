<?php

$mysqli = new mysqli("localhost","root","","moduleconnexion");
$message = "Les mots de passes ne sont pas identiques !";



if(isset($_POST['submit'])){
    if($_POST['password']==$_POST['password1']){
        $result = mysqli_query($mysqli,"INSERT INTO utilisateurs (`login`,`nom`,`prenom`,`password`) VALUES ('".$_POST['login']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['password']."');");
        header('Location: http://localhost/module-connexion/module-connexion/connexion.php');
    }
}
?>