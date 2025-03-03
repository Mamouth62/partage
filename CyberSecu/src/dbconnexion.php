<?php
require_once("identifiant.php");
try{
    $dbh = new PD0('mysql:host='.$serveur.';dbname='.bd, $login, $password);
}catch(PDOException $e){
    $dbh = NULL;
}