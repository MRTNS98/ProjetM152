<?php
/*
 * Miguel Martins && Micael Rodrigues
 * I.IN-P4B
 * V1: 15.12.2016
 * V2: 22.12.2016
 */
//require_once 'Models/library.php';
//
//$ShowVideo = getDataCategorie("Video");
//
//include_once 'Views/postVideo.php';
//<?php
require_once 'Models/library.php';

$Test = GetSection();
if (isset($_GET["Section"])) {
    foreach ($Test as $Section) {
        if ($_GET['Section'] == $Section["NomSection"]) 
        {
            $ShowVideo = getData($Section["NomSection"],"Video");
            include_once 'Views/postVideo.php';
        }
    }
} else {
    $ShowVideo = getDataCategorie("Video");
    include_once 'Views/postVideo.php';
}