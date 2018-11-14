<?php

$user="root";
$pass= "";
$db = "idpmail";

try {
    $connexion = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}
?>