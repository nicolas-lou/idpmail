<?php 
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nouveau Message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
        <script src="../js/index.js"></script>
    </head>
    <body>
            <form method="post" action="./mailsender.php">                
                <legend>Nouveau Message</legend>
                <label for="to">A :</label>   
                <input type="email" name="to" id="to" required/>       
                <div class="form-group">
                <label for="about">Objet :</label>
                <input type="text" name="about" id="about" required />       
                <textarea id="msg" name="msg" rows="20" cols="50">
                </textarea> 
                <input type="submit" value="Envoyer" />
            </form>
    </body>
</html>