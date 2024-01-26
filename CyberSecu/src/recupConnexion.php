<?php
require_once 'src/header.php';
echo 'recupConnexion <br />';
//var_dump($_POST);
//$nom = $_POST['nom'];
$nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_STRING);
$password = $_POST['password'];
echo "Nom : $nom Password : $password";
require_once 'src/footer.php';