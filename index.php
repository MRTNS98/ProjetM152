<?php
/**
 * Auteur : Micaël Rodrigues & Miguel Martins
 * Date : 15.12.2016
 * Fichier : index.php
 * Decription : Sert de routeur vers les pages demandées 
 */
$action = trim(filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING));
if ($action == "")
{
    $action = "Accueil";
}

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
            include_once 'Controllers/ShowAccueil.php';
            break;
        case 'AddContent':
            include_once 'Controllers/addContent.php';
            break;
        case 'Like':
            include_once 'Controllers/like.php';
            break;
        case 'Dislike':
            include_once 'Controllers/dislike.php';
            break;
        default:
            require_once ('Views/404.php');
            break;
    }
} catch (Exception $ex) {
    require_once ('Views/500.php');
}
