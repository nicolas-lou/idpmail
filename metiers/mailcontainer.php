<?php 
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
}else{
include ("../data/connexion.php");
$id = $_GET['id'];
$connexion->exec("UPDATE inmail SET lu=1 WHERE idmail={$id}");
};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Message frome ??</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <script src="../js/main.js"></script>
    </head>
    <body>
        <h1>Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
        <p><a href="./home.php">Accueil</a></p>
        <p><a href="./inbox.php">Boite de récéption</a></p>
        <p><a href="../data/deco.php">Deconnexion</a></p>
        <?php 
            $login = $_SESSION['login'];
            $mail=$connexion->query("SELECT sender,objet,msg from inmail WHERE idmail like $id");
            $mail->setFetchMode(PDO::FETCH_OBJ);        
            foreach($mail as $row){ 
            echo "<h2>$row->objet</h2>";
            echo "<p>$row->msg</p>";                   
            };
        ?>
    </body>
</html>