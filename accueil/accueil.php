<?php 
session_start() ;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="index.js"></script>
</head>
<body>
    <h1 class="titre">Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
    <div id="menu_home">
    <a href="../newmsg/newmsg.php">Nouveau message</a>
    <a href="/recus/boite.php">Boite de reception (<?php echo $nonlus ?>)</a>
    <a href="/recus/envoye.php">Messages envoyés (<?php echo $recus ?>)</a>
    <a href="/find/find.php">Recherche de mail</a>
    <a href="#">Deconnexion</a>






    </div>

</form>
</body>
</html>