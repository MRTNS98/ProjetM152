<?php

require_once 'Models/library.php';

if (isset($_GET["idPost"]))
{
    $arrayLike = NbDislikeById($_GET["idPost"]);
    $finalDislike = $arrayDislike[0][0] + 1;
    UpdateDislike($finalDislike, $_GET["idPost"]);
}

