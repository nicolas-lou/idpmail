<?php session_start();
include ("../database/connexion.php");

?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boite d'envoie'</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
    <div id="liens_nav_boite">
        <p><a href="/accueil/accueil.php">Accueil</a></p>
        <p><a href="/">Deconnexion</a></p>
    </div>
    <fieldset> 
    <legend>Boite de reception</legend>    
    <div id="boite_msg">
        <?php
        $login = $_SESSION['login'];
        $mails=$connexion->query("SELECT sender,prenom,nom,idmail,objet,msg,recipient from outmail,users WHERE sender like $login and login=recipient ORDER BY idmail desc ");
        $mails->setFetchMode(PDO::FETCH_OBJ);        
        foreach($mails as $row){            
            echo "<a href='/recus/msgs.php?id={$row->idmail}'>{$row->prenom} {$row->nom} {$row->objet}</a>";
          }        
        ?>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
        <a href="/recus/msgs.php">12xemple de ligne de mail envoyé</a>
    </div>    
    </fieldset>
    
</body>
</html>