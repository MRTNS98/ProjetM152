<?php

require_once 'Models/library.php';

if (isset($_GET["idPost"]))
{
    $arrayLike = NbLikeById($_GET["idPost"]);
    $finalLike = $arrayLike[0][0] + 1;
    UpdateLike($finalLike, $_GET["idPost"]);
}

