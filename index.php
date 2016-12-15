<?php
$action = trim(filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING));
try {
    switch ($action) {
        case 'ShowImage';
            require_once ('Controllers/ShowImage.php');
            break;
        default:
            require_once ('Base.php');
            break;
    }
} catch (Exception $ex) {
    require_once ('Base.php');
}
