<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>IDP Full Stack Mail</title>
<meta name="viewport" content="width=device-width, initial-scale=1">        
<link rel="stylesheet" type="text/css" media="screen" href="/css/index.css" />
<script src="index.js"></script>
</head>
    <body>
    <h1>Messagerie Full Stack</h1>
        <form method="post" action="validation.php"> 
                <label for="login">Login :</label>
                <input type="number" name="login" id="login" required />                
                <label for="pass">Mot de passe :</label>
                <input type="password" name="pass" id="pass" required />
                <input type="submit" value="Login" />
            <a href="/signup/signup.php">Création de compte</a>
        </form>
    </body>
</html>