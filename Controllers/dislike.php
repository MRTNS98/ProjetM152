<?php

require_once 'Models/library.php';

if (isset($_GET["idPost"]))
{
    $arrayDislike = NbDislikeById($_GET["idPost"]);
    $finalDislike = $arrayDislike[0][0] + 1;
    UpdateDislike($finalDislike, $_GET["idPost"]);
}

