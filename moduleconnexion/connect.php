<?php


session_start();
include 'base_de_donnee.php';
$requete = mysqli_query($mysqli,"SELECT login, password, nom, prenom, id FROM utilisateurs");
$message="";
$check = 0;

if(isset($_POST['submit'])){
    $row = $requete->fetch_all();
    for($i=0;isset($row[$i]);$i++){
        if ($_POST['login'] === $row[$i][0] AND $_POST['password'] === $row[$i][1]){
            $_SESSION['login'] = $_POST['login'];
            $connexion = $_SESSION['login'];
            $check = 1;
        }
    }
    if($check == 0){
        echo "Le login et/ou le mot de passe est incorrect";
    }
    elseif($check == 1){
        echo "Bonjour ".$_SESSION['login'];
    }
    
}


// if(isset($_POST['submit'])){
//     $requete2 = mysqli_query($mysqli,"SELECT *  FROM utilisateurs");
//     $row2 = $requete2->fetch_all();
//     var_dump($row2);
//     // $i=0;
//     // if($_POST['login'] !== $row[$i][0] AND $_POST['password'] !== $row[$i][1]){
//     //     echo "Le login et/ou le mot de passe est incorrect !";
//     // }
// }


?>