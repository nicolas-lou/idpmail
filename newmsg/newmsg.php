<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nouveau Message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" type="text/css" media="screen" href="../css/index.css" />
        <script src="index.js"></script>
    </head>
    <body>
            <form method="post" action="/newmsg/sending.php">                
                <legend>Nouveau Message</legend>
                <label for="to">A :</label>   
                <input type="email" name="to" id="to" required/>       
                <div class="form-group">
                <label for="about">Objet :</label>
                <input type="text" name="about" id="about" required />       
                <textarea id="msg" name="msg" rows="20" cols="100">
                </textarea> 
                <input type="submit" value="Envoyer" />
            </form>
    </body>
</html>