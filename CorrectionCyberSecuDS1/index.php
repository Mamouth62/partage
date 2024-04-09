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
if(isset($_POST["envoyer"])) {
    $nom = filter_input(INPUT_POST,"nom", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
    $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT);
    $commentaire = filter_input(INPUT_POST,"commentaire", FILTER_SANITIZE_STRING);
    echo "nom : $nom";
    echo "email : $email";
    echo "age : $age";
    echo "commentaire : $commentaire";
}
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