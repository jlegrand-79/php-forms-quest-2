<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-forms-quest-2</title>
</head>
<body>

    <form  method="post" action="thanks.php">
    <label  for="prenom">Prénom :</label>
<input  type="text"  id="prenom"  name="user_firstname" require>
</div>
<div>
    <label  for="nom">Nom :</label>
    <input  type="text"  id="nom"  name="user_lastname" require_once>
    </div>
    <div>
<label  for="courriel">Courriel :</label>
<input type="email" id="courriel"  name="user_email" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" require>
</div>
<div>
<label  for="message">Message :</label>
<textarea  id="message"  name="user_message" require></textarea>
</div>
<div>
<label  for="tel">Téléphone :</label>
<input  type="text"  id="tel"  name="user_tel" require>
</div>
<div>
<label  for="courriel">Sujet :</label>
<select  id="subject"  name="user_subject" require>
<option value="">-- Choisissez un sujet --</option>
<option value="Sujet 1">Sujet 1</option>
<option value="Sujet 2">Sujet 2</option>
<option value="Sujet 3">Sujet 3</option>
<option value="Sujet 4">Sujet 4</option>
</select>
        </div>
            
<div  class="button">
<button  type="submit">Envoyer votre message</button>
</div>
</form>


</body>
</html>
