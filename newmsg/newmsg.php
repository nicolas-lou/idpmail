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
        <div id="newmsg">
            <form method="post" action="/newmsg/sending.php">                
                    <div class="form-group">
                        <legend>Nouveau Message</legend>
                        <label for="to">A :</label>   
                        <input type="email" name="to" id="to" required/>       
                    </div>
                        <div class="form-group">
                        <label for="about">Objet :</label>
                        <input type="text" name="about" id="about" required />       
                    </div>
                    <div class="form-group"> 
                        <textarea id="msg" name="msg" rows="20" cols="100">
                        </textarea> 
                    </div>           
                    <div class="form-group"> 
                        <input type="submit" value="Envoyer" />
                    </div>                     
            </form>
        </div>
    </body>
</html>