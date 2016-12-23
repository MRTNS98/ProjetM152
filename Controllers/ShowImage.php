<?php

/*
 * Micael Rodrigues && Miguel Martins
 * I.IN-P4B
 * V1: 15.12.2016
 * V2: 22.12.2016
 */
require_once 'Models/library.php';

$Test = GetSection();
if (isset($_GET["Section"])) {
    foreach ($Test as $Sect) {
        if ($_GET['Section'] == $Sect["NomSection"]) 
        {
            $ShowPicture = getData($Sect["NomSection"],"Image");
            include_once 'Views/postImage.php';
        }
    }
} else {
    $ShowPicture = getDataCategorie("Image");
    //print_r($ShowPicture);
    include_once 'Views/postImage.php';
}