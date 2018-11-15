<?php
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
}else{
include ("../data/connexion.php");
    if(isset($_GET['q'])){
        $recherche = $_GET['q'];
    }else{
        $recherche = "";
    };
};
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>rechercher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <script src="../js/main.js"></script>
    </head>
    <body>
        <h1><?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
            <p><a href="./home.php">Accueil</a></p>
            <p><a href="../data/deco.php">Deconnexion</a></p>
        <form role="search">
            <legend>Rechercher un mail</legend> 
            <input type="search" id="maRecherche" name="q"
            placeholder="Recherchez dans vos mails"
            aria-label="Rechercher parmi les emails">
            <button>Rechercher</button>
        </form>   
            <?php
            $login = $_SESSION['login'];
            $mails=$connexion->query("select * from inmail WHERE (sender = $login or recipient = $login) and objet like '%{$recherche}%'");
            $mails->setFetchMode(PDO::FETCH_OBJ);        
                foreach($mails as $row){
                    if($row->sender==$login){
                        echo "<a href='./mailcontainer.php?id={$row->idmail}'>Destinataire : {$row->recipientname} Objet: {$row->objet}</a>";
                    }else{
                        echo "<a href='./mailcontainer.php?id={$row->idmail}'>Expediteur: {$row->sendername}  Objet: {$row->objet}</a>";
                    }           
                }        
            ?>                    
    </body>
</html>