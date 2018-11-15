<?php session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Message frome ??</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
<div id="liens_nav_boite">
 <p><a href="/accueil/accueil.php">Accueil</a></p>
 <p><a href="/recus/boite.php">Boite de récéption</a></p>
 <p><a href="/">Deconnexion</a></p>
 </div>
 <div id="msgs_container">
 <?php include("/mail.php"); ?>
</div>

</body>
</html>