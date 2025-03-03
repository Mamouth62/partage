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
    $cpt = 0;
    echo "nom : $nom";
    echo "email : $email";
    echo "age : $age";
    echo "commentaire : $commentaire";
    if(empty($nom)){
        echo "<br/> Veuillez saisir un nom";
    } else if(preg_match('([^A-Za-z\s])',$nom)) {
            echo '<br/> Veuillez ne pas mettre de caractères spéciaux';
        }
    else if(preg_match('/\d/',$nom)) {
        echo "<br> Veuillez ne pas mettre de chiffres";
    } else {
        $cpt++;
    }
    if(empty($email)){
        echo "<br> Veuillez saisir un email";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<br> Veuillez saisir une adresse email valide";
    } else{
        $cpt++;
    }
    else if(!filter_var($age, FILTER_VALIDATE_INT)){
    if(empty($age)){
        echo "<br> Veuillez saisir votre age";     
    } else if(filter_var($age, FILTER_VALIDATE_INT)){
        echo "<br> Veuillez saisir votre age en chiffre";
    } else if($age<18){
        echo'<br> age supérieur à 18 ';
    } else {
        $cpt++;
    }
    if(empty($commentaire)){
        echo"<br> commentaire";
        }
    }
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