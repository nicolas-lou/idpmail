<?php session_start();
$id = $_GET['id'];
$login = $_SESSION['login'];
$mail=$connexion->query("SELECT sender,objet,msg from inmail WHERE idmail like $id");
$mail->setFetchMode(PDO::FETCH_OBJ);        
foreach($mail as $row){            
    echo "<a href='/recus/msgs.php?id={$row->idmail}'>{$row->prenom} {$row->nom} {$row->objet}</a>";
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Objet du message</h2>
    <p>Corps du message </p>
    
</body>
</html>