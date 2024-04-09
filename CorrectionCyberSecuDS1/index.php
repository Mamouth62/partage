<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation</title>
</head>
<body>

<?php
var_dump($_POST);
?>
    <fieldset> 
        <legend>
            Formulaire
        </legend>
        <form method="post" action="index.php">
            <input type="text" name="nom" placeholder="nom"/>
            <input type="text" name="email" placeholder="email"/>
            <input type="text" name="age" placeholder="age"/>
            <textarea name="commentaire" placeholder="commentaire"></textarea>
            <input type="submit" name="envoyer" value="Envoyer"/>
        </form>
    </fieldset>
</body>
</html>