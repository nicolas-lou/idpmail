<?php
 session_start(); 
 include ("/database/connexion.php");

$login = $_POST['login'];
$password = $_POST['pass'];

$resultats=$connexion->query("SELECT * from users WHERE login like $login and password like '$password'");
$resultats->setFetchMode(PDO::FETCH_OBJ);


if(isset($resultats)){
     foreach($resultats as $row){
          $_SESSION['prenom']=$row->prenom;
          $_SESSION['nom']=$row->nom;   
          $_SESSION['login']=$row->login;       
        };
        header("Location: /accueil/accueil.php");

}else{
     header("Location: /index.php");
}









?>