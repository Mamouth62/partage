<?php
require_once 'src/header.php';
require_once 'src/footer.php';
echo 'recupForm';
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$age = filter_input(INPUT_POST, 'age', FILTER_NUMBER_INT);
$commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);
var_dump($_POST);
echo "Nom: $nom <br /> Email: $email <br /> Age: $age <br /> Commentaire:$commentaire";
if(empty($nom)){
    echo '<br>'.'Veuillez saisir un nom'.'</br>';

} else {
    if(strlen($nom)>=10){
    echo'</br>'.'Veuillez saisir plus de 30 caractères'.'</br>';
    }else{
        if(preg_match ('/\d/',$nom)) {
            echo '<br />Veuillez ne pas saisir de chiffre';
    }else{
        if(preg_match ('/[^a-za-Z\d]/', $nom)) {
            echo 'Veuillez ne pas saisir un caractère spécial';
            }
        }      
    }
}

if(empty($email)){
    echo '<br /> Veuillez saisir un email';
}else{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo'<br />Veuillez saisir un email valide';
}else{
    if(strlen($email)>=255){
        echo '<br /> Veuillez saisir un email plus court';
      }
    }
}

if(empty($commentaire)){
    echo '<br>'.'Veuillez saisir un commentaire'.'</br>';

} else {
    if(strlen($commentaire)>=1){
    echo'</br>'.'Veuillez saisir plus de 1 caractères'.'</br>';
    }
}

