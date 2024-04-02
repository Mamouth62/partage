<?php
echo 'recupInscription';
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
var_dump($_POST);
if(empty($nom)){
    echo '<br>'.'Veuillez saisir un nom'.'</br>';

} else {
    if(strlen($nom)>=30){
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

if(empty($prenom)){
    echo '<br>'.'Veuillez saisir un nom'.'</br>';

} else {
    if(strlen($prenom)>=30){
    echo'</br>'.'Veuillez saisir plus de 30 caractères'.'</br>';
    }else{
        if(preg_match ('/\d/',$prenom)) {
            echo '<br />Veuillez ne pas saisir de chiffre';
    }else{
        if(preg_match ('/[^a-za-Z\d]/', $prenom)) {
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
