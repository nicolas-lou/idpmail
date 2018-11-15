<?php session_start();
include ("../database/connexion.php");
if(isset($_GET['q'])){
    $recherche = $_GET['q'];
}else{
    $recherche = "";
}
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>rechercher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1><?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
    <div id="liens_nav_boite">
        <p><a href="/accueil/accueil.php">Accueil</a></p>
        <p><a href="/">Deconnexion</a></p>
    </div>
    <form role="search">
        <div>
            <input type="search" id="maRecherche" name="q"
            placeholder="Rechercher sur le site…"
            aria-label="Rechercher parmi le contenu du site">
            <button>Rechercher</button>
        </div>
    </form>
    <fieldset> 
    <legend>Rechercher un mail</legend>    
    <div id="boite_msg">
        <?php
        $login = $_SESSION['login'];
        $mails=$connexion->query("select * from inmail WHERE (sender = 3 or recipient = 3) and objet like '%{$recherche}%'");
        $mails->setFetchMode(PDO::FETCH_OBJ);        
        foreach($mails as $row){            
            echo "<a href='/recus/msgs.php?id={$row->idmail}'>{$row->sendername} {$row->recipientname} {$row->objet}</a>";
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