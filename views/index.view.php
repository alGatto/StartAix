<!DOCTYPE HTML>
<HTML>
<HEAD>
    <title>Formulaire</title>
    <meta charset="utf-8">
</HEAD>
<BODY>
<form method="post">
    <label for="nom">Nom: </label>
    <input type="text" name="nom" id="nom" required="required" />
    <br />
    <label for="prenom">Prénom: </label>
    <input type="text" name="prenom" id="prenom" required="required"/>
    <br />
    <label for="message">Message: </label>
    <textarea name="message" id="message" required="required"></textarea>
    <br />
    <input type="submit" name="envoyer" value="Envoyer" />
</form>
</BODY>
</HTML>