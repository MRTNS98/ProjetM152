<?php
$action = trim(filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING));
try {
    switch ($action) {
        case 'ShowImage':
            require_once ('Controllers/ShowImage.php');
            break;
        case 'ShowBlague':
            include_once 'Controllers/ShowBlague.php';
            break;
        case 'ShowVideo':
            include_once 'Controllers/ShowVideo.php';
            break;
        case 'Accueil':
            include_once 'Controllerts/ShowAccueil.php';
            break;
        default:
            require_once ('Views/404.php');
            break;
    }
} catch (Exception $ex) {
    require_once ('Views/500.php');
}
