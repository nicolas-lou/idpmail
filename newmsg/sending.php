<?php 
session_start();
include ("../database/connexion.php");


$to = $_POST['to'];
$objet = $_POST['about'];
$msg = $_POST['msg'];
$loginDest;

$destinataire=$connexion->query("SELECT DISTINCT login from users WHERE email like $to");

foreach($resultats as $row){
          $loginDest=$row->login;
  }

  $connexion->exec("INSERT INTO inmail (lu,sender,recipient,objet,msg) VALUES (0,$_SESSION['login'],$loginDest,'$objet','$msg')");  

  header("Location: ../accueil/accueil.php");






?>