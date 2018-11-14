<?php 
session_start();
include ("../database/connexion.php");


$to = $_POST['to'];

$destinataire=$connexion->query("SELECT login from users WHERE email like '$to' ");
$destinataire->setFetchMode(PDO::FETCH_OBJ);

foreach($destinataire as $row){
  $loginDest=$row->login;
}

$stmt = $connexion->prepare('INSERT INTO inmail (sender,recipient,objet,msg) VALUES (:sender, :recipient, :objet, :msg)');
 
$loginExp = $_SESSION['login'];
$objet = $_POST['about'];
$msg = $_POST['msg'];
$stmt->bindValue(':sender', $loginExp,PDO::PARAM_INT);
$stmt->bindValue(':recipient', $loginDest,PDO::PARAM_INT);
$stmt->bindValue(':objet', $objet,PDO::PARAM_STR);
$stmt->bindValue(':msg', $msg,PDO::PARAM_STR);
$stmt->execute(); 

header("Location: ../accueil/accueil.php");






?>