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
if (empty($date)){
    echo '<br /> Veuillez saisir une année de naissance';
}else{
    $annee = substr($date, 0,-6);
    $mois = substr($date,5,-3);
    $jour = substr($date,8);
    if (!checkdate($mois,$jour,$annee)){
    echo '<br /> Veuillez saisir une date de naissance valide';
    }
}

if (strlen($date)>10){
    echo 'pas assez de caractère !';
}
function validateDate($date, $format ='Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

if (validateDate($date, 'Y-m-d')===false){
    echo "date n'est pas conforme !";
} 