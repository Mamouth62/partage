<?php
//var_dump($_POST);
echo 'recupProduit<br />';
$nomProduit = filter_input(INPUT_POST, 'designation', FILTER_SANITIZE_STRING);
$DescriptionProduit = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$prixHT = filter_input(INPUT_POST, 'prixHTT', FILTER_SANITIZE_STRING);
if (empty($prixHT)) {
    errorMessage("Veuillez saisir un prix");
} else {

    if ($prixHT === false) {
        errorMessage("Veuillez saisir un prix valide");
    } else {
        echo "designation: $designation <br /> Description: $description <br /> PrixHTT: $prixHTT euros";
    }}
