<?php

/*
 * Micael Rodrigues
 * I.IN-P4B
 * V1: 15.12.2016
 * V2: 22.12.2016
 */
require_once 'Models/library.php';

$Test = GetSection();
if (isset($_GET["Section"])) {
    foreach ($Test as $Section) {
        if ($_GET['Section'] == $Section["NomSection"]) 
        {
            $ShowPicture = getData($Section["NomSection"],"Image");
            include_once 'Views/postImage.php';
        }
    }
} else {
    $ShowPicture = getDataCategorie("Image");
    print_r($ShowPicture);
    //include_once 'Views/postImage.php';
}