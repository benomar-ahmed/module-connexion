<?php

session_start();
$mysqli = new mysqli("localhost","root","","moduleconnexion");
$login_admin = "admin";
$password_admin = "admin";


if(isset($_GET['submit'])){
    $result = mysqli_query($mysqli,"SELECT * FROM `utilisateurs` WHERE `login`='".$_GET['login']."' and `password`='".$_GET['password']."'; ");
    $row = $result->fetch_all();
    if($row==true){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['password'] = $_GET['password'];
        header('Location: http://localhost/module-connexion/module-connexion/index_connexion.php');
        
    }
    elseif($_GET['login'] == $login_admin && $_GET['password'] == ){

    }

    
    else{
        echo "Le login et/ou le mot de passe est incorrect.";
    }
}

?>