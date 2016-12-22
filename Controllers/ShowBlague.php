<?php
/*
 * Miguel Martins && Micael Rodrigues
 * I.IN-P4B
 * V1: 15.12.2016
 * V2: 22.12.2016
 */
//require_once 'Models/library.php';
//
//$ShowBlague = getDataCategorie("Blague");
//
//include_once 'Views/postBlague.php';
require_once 'Models/library.php';

$Test = GetSection();
if (isset($_GET["Section"])) {
    foreach ($Test as $Section) {
        if ($_GET['Section'] == $Section["NomSection"]) 
        {
            $ShowBlague = getData($Section["NomSection"],"Blague");
            include_once 'Views/postBlague.php';
        }
    }
} else {
    $ShowBlague = getDataCategorie("Blague");
    include_once 'Views/postBlague.php';
}
