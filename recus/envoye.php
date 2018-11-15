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
            <p><a href="/accueil/accueil.php">Accueil</a></p>
            <p><a href="../signup/deco.php">Deconnexion</a></p>
        <h3>Boite d'envoie</h3>    
            <?php
            $login = $_SESSION['login'];
            $mails=$connexion->query("SELECT sender,prenom,nom,email,idmail,objet,msg,recipient from inmail,users WHERE sender like $login and login=recipient ORDER BY idmail desc ");
            $mails->setFetchMode(PDO::FETCH_OBJ);        
            foreach($mails as $row){            
            echo "<a href='/recus/msgs.php?id={$row->idmail}'>Destinataire {$row->prenom} {$row->nom} ({$row->email}) Objet: {$row->objet}</a>";
            }        
            ?>                        
    </body>
</html>