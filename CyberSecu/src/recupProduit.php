<?php
//var_dump($_POST);
$nomProduit = filter_input(INPUT_POST,'nomProduit',FILTER_SANITIZE_STRING);
$DescriptionProduit = filter_input(INPUT_POST,'DescriptionProduit',FILTER_SANITIZE_STRING);
$prixHT = filter_input(INPUT_POST,'prixHT',FILTER_SANITIZE_STRING);
if($prixHT===false){
    $prixHT= 'Le prix des pas valide !';
}
