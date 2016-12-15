<?php
require_once 'Models/library.php';


$listCat = GetCategories();

if(!isset($_POST["submitContent"]))
{
    $listSec = GetSection();
    include_once 'Views/formAddContent.php';
}
else
{
    if (isset($_POST["Autor"]) && isset($_POST["Categorie"])
            && isset($_POST["Section"]))
    echo $_POST["Autor"];
    echo $_POST["Categorie"];
    echo $_POST["Section"];
    
    foreach ($listCat as $cat) {
        if ($_POST["Categorie"] == $cat["nomCategorie"])
        {
            if (isset($_POST[$cat["nomCategorie"]]))
            {
                echo $_POST[$cat["nomCategorie"]];
                
                if ($cat["nomCategorie"] == "Image")
                {
                    print_r($_FILES["Image"]);
                }
            }
        }
    }
    
    echo $_POST["Description"];
}
