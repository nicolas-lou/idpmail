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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>       
        <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
        <script src="../js/index.js"></script>
    </head>
    <body>
        <h1>Bonjour <?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
            <p><a href="./home.php">Accueil</a></p>
            <p><a href="../data/deco.php">Deconnexion</a></p>
            <form method="post" action="./mailsender.php">                
                <div class="form-group">
                    <label for="to">A :</label>   
                    <input type="email" name="to" id="to" class="form-control form-control-sm" required/>
                </div>     
                <div class="form-group">
                    <label for="about">Objet :</label>
                    <input type="text" name="about" id="about" class="form-control form-control-sm" required />
                </div>
                <div class="form-group">       
                    <textarea id="msg" name="msg" rows="20" cols="50" class="form-control form-control-sm"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
    </body>
</html>