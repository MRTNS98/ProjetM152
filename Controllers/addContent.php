<?php
require_once 'Models/library.php';


$listCat = GetCategories();
$listSec = GetSection();

if(!isset($_POST["submitContent"]))
{
    include_once 'Views/formAddContent.php';
}
else
{
    if (isset($_POST["Autor"]) && isset($_POST["Categorie"])
            && isset($_POST["Section"]) && isset($_POST["Title"]))
    echo $_POST["Autor"];
    echo $_POST["Categorie"];
    echo $_POST["Section"];
    
    foreach ($listSec as $sec) {
        if ($_POST["Section"] == $sec["NomSection"])
        {
            $selectedSection = $sec;
        }
    }
    
    foreach ($listCat as $cat) {
        if ($_POST["Categorie"] == $cat["nomCategorie"])
        {
            if ($_POST["Categorie"] == "Image")
            {
                $UUID = uniqid();
                
                print_r($_FILES["Image"]);
                //Verifier type,errors,size
                if (strpos($_FILES["Image"]["type"], 'image') !== false)
                {
                    echo "is image -> ".$_FILES["Image"]["type"]."<br>";
                    if ($_FILES["Image"]["error"] == 0)
                    {
                        echo "as no error -> ".$_FILES["Image"]["error"]."<br>";
                        if ($_FILES["Image"]["size"] < 1000000)
                        {
                            echo "is smaller than 1'000'000 bytes -> ".$_FILES["Image"]["size"];
                        }
                    }
                }
                
                //Type de fichier
                $validType = array('image/jpeg','image/pjpeg','image/gif', 'image/png');
                if (!in_array($_FILES["Image"]["type"], $validType))
                {
                    echo "format non supporté";
                }
                
                //Upload image
                if (strpos($_FILES["Image"]["type"], 'image') !== false && $_FILES["Image"]["error"] == 0 && $_FILES["Image"]["size"] < 1000000)
                {
                    $ext = pathinfo($_FILES["Image"]["name"], PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES["Image"]["tmp_name"], realpath(".")."\Uploads\\Images\\".$UUID.".".$ext );
                    InsertDataPicture($_POST["Title"],$UUID.".".$ext,$_FILES["Image"]["name"],$_POST["Autor"],$cat["idCategorie"],$selectedSection["idSection"],$_POST["Description"]);
                }
            }
            
            if ($_POST["Categorie"] == "Video")
            {
                $link = $_POST["Video"];
                
                if (strlen($link) > 11)
                {
                    $codeVideo = "";
                    $count = 0;
                    while ($count < 12)
                    {
                        $codeVideo = $codeVideo . $link[strlen($link) - 1 - $count];
                        $count = $count + 1;
                    }
                    $codeVideo = strrev($codeVideo);
                }
                else
                {
                    $codeVideo = $link;
                }
                
                echo ":";
                echo $codeVideo;
                echo ":";
                InsertDataVideo($_POST["Title"],$codeVideo,$_POST["Autor"],$cat["idCategorie"],$selectedSection["idSection"],$_POST["Description"]);
            }
            
            if ($_POST["Categorie"] == "Blague")
            {
                echo $_POST["Blague"];
            }
        }
    }
    
    echo $_POST["Description"];
}
