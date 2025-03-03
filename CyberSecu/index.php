<?php
//<script>alert('Attaque XSS');</script>
require_once 'src/dbconnexion.php';
require_once 'src/header.php';
require_once 'src/functions.php';
if ($dbh !=null){
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
/*if($page == 'connexion'){
require_once 'src/connexion.php';
}
else{
if($page=='recupConnexion'){
require_once 'src/recupConnexion.php';
}
else{
echo '<h1> Accueil </h1>';
}
}*/
switch ($page) {
    case 'connexion':
        if (!file_exists('src/connexion.php')) {
            error();
        } else {
            require_once 'src/connexion.php';
        }
        break;
    case 'recupConnexion':
        require_once 'src/recupConnexion.php';
        break;
    case 'inscription':
        require_once 'src/inscription.php';
        break;
    case 'recupInscription':
        require_once 'src/recupInscription.php';
        break;
    default:
        echo '<h1> Accueil </h1>';
}
require_once 'src/footer.php';
}else{
    echo 'Maintenance en cours';
}