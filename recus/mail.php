<?php
include ("../database/connexion.php");
$id = $_GET['id'];
$login = $_SESSION['login'];
$mail=$connexion->query("SELECT sender,objet,msg from inmail WHERE idmail like $id");
$mail->setFetchMode(PDO::FETCH_OBJ);        
foreach($mail as $row){            
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<meta charset='utf-8'/>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    echo "<link rel='stylesheet' type='text/css' media='screen' href='main.css' />";
    echo "<script src='main.js'></script>";
    echo "</head>";
    echo "<body>";
    echo "<h2>$row->objet</h2>";
    echo "<p>$row->msg</p>";
    echo "</body>";
    echo "</html>";    
    }


?>
