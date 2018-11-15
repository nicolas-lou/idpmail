<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/index.css" />
    <script src="index.js"></script>
    </head>
        <body>
        <div class="home">
            <h1 class="titre">Création de compte</h1>
            <form method="post" action="/signup/signupchecking.php">
                <fieldset>
                    <div class="form-group">
                        <legend>Sign Up</legend>
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" required />
                    </div>
                    <div class="form-group">    
                        <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" id="prenom" required />
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                    <div class="form-group">
                        <label for="phone">Numéro de téléphone :</label>
                        <input type="number" name="phone" id="phone" max="10" required />
                    </div>
                    <div class="form-group">
                        <label for="login">Login :</label>
                        <input type="number" name="login" id="login" max="20" required />
                    </div>
                    <div class="form-group">
                        <label for="pass">Mot de passe :</label>
                        <input type="password" name="pass" id="pass" required />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" />
                    </div>      
                </fieldset>
            </form>
        </div>
        </body>
</html>