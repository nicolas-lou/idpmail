<?php 
session_start();
include ("../database/connexion.php");

$login = $_SESSION['login'];
// compte nb message non lu
$resultats=$connexion->query("SELECT COUNT(*) as test FROM inmail WHERE lu=0 and recipient={$login} ");
$resultats->setFetchMode(PDO::FETCH_OBJ);
$row =$resultats->fetchAll();
$nonlus= $row[0]->test;
// compte nb message reçus
$resultats=$connexion->query("SELECT COUNT(*) as test FROM inmail WHERE sender={$login} ");
$resultats->setFetchMode(PDO::FETCH_OBJ);
$row =$resultats->fetchAll();
$recus= $row[0]->test;



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Votre messagerie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" type="text/css" media="screen" href="/css/index.css" />
        <script src="index.js"></script>
    </head>
    <body>
        <div class="home">
            <h1 class="titre">Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
            <div id="menu_home">
                <a href="../newmsg/newmsg.php">Nouveau message</a>
                <a href="/recus/boite.php">Boite de reception (<?php echo $nonlus ?>)</a>
                <a href="/recus/envoye.php">Messages envoyés (<?php echo $recus ?>)</a>
                <a href="/find/find.php">Recherche de mail</a>
                <a href="../signup/deco.php">Deconnexion</a> 
            </div>
        </div>  
    </body>
</html>