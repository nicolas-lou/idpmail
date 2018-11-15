<?php
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
}else{
include ("../data/connexion.php");
};
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Boite de reception</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <script src="../js/main.js"></script>
    </head>
    <body>
        <h1>Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
            <p><a href="./home.php">Accueil</a></p>
            <p><a href="../data/deco.php">Deconnexion</a></p>
        <h3>Boite de reception</h3>    
            <?php
            $login = $_SESSION['login'];
            $mails=$connexion->query("SELECT sender,prenom,nom,email,idmail,objet,msg,recipient from inmail,users WHERE recipient like $login and login=sender ORDER BY idmail desc ");
            $mails->setFetchMode(PDO::FETCH_OBJ);        
            foreach($mails as $row){            
            echo "<a href='./mailcontainer.php?id={$row->idmail}'>Expediteur : {$row->prenom} {$row->nom} ({$row->email}) Objet: {$row->objet}</a>";
            }        
            ?>            
    </body>
</html>