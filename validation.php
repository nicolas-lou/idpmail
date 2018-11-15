<?php
 session_start(); 
 include ("/database/connexion.php");

$login = $_POST['login'];
$password = $_POST['pass'];
$resultats=$connexion->query("SELECT * from users WHERE login like $login and password like '$password'");
$resultats->setFetchMode(PDO::FETCH_OBJ);
$row =$resultats->fetchAll();


$_SESSION['prenom']=$row[0]->prenom;
$_SESSION['nom']=$row[0]->nom;   
$_SESSION['login']=$row[0]->login;
header("Location: ../accueil/accueil.php");
          
       
?>