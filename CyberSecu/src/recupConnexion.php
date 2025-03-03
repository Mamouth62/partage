<?php
require_once 'src/header.php';
require_once 'src/footer.php';
var_dump($_POST);
echo 'recupConnexion <br />';
//var_dump($_POST);
//$nom = $_POST['nom'];
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$password = $_POST['password'];
echo "Nom : $nom <br /> Password : $password";
if (empty($nom)) {
    errorMessage("Veuillez ne pas laissé d'espace vide");
}
if (empty($password)) {
    errorMessage("Veuillez ne pas laissé d'espace vide");
}
if(strlen($password)<12){
    errorMessage('Veuillez saisir plus de 12 caractères');
}
echo '<br>';
if(preg_match ('/\d/',$password)) {
    echo 'Veuillez saisir un chiffre';
}
echo '<br>';
if(preg_match ('/[A-Z]/', $password)) {
    echo 'Veuillez saisir une majuscule';
}
if(preg_match ('/[a-z]/', $password)) {
    echo 'Veuillez saisir une minuscule';
}
echo '<br>';
if(preg_match ('/[^a-za-Z\d]/', $password)) {
    echo 'Veuillez saisir un caractère spécial';
}
//Testtest75@!
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
$solution = '';
$verify = password_verify($password,$solution);
if($verify){
    echo'le mot de passe est correct';
}else{
    echo 'le mot de passe est incorrect';
}


