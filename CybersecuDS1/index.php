<?php
//<script>alert('Attaque XSS');</script>
require_once 'src/header.php';
require_once 'src/functions.php';
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
switch ($page) {
    case 'form':
        require_once 'src/form.php';
        break;
    case 'recupForm':
        require_once 'src/recupForm.php';
        break;
    default:
        echo '<h1> Accueil </h1>';
}
require_once 'src/footer.php';
