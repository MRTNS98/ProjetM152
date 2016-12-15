<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="Css/SomeStyle.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="Bootstrap//js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        include_once 'Controllers/listSection.php';
        ?>

        <section class="strandardCenter">
            <div class="addForm">
                <h3>Partagez vos blagues avec le monde entier !</h3>
                <form method="POST" action="addContent.php" class="form-horizontal" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputAutor" class="col-lg-2 control-label">Auteur :</label>
                            <div class="col-lg-10">
                                <input type="text" name="Autor" class="form-control" id="inputAutor" placeholder="Nom de l'auteur">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="selectCateg" class="col-lg-2 control-label">Catégorie :</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="Categorie" id="selectCateg" onchange="categInterface()">
                                    <?php
                                    foreach ($listCat as $cat) {
                                        echo "<option>" . $cat["nomCategorie"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="selectSection" class="col-lg-2 control-label">Section :</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="Section" id="selectSection">
                                    <?php
                                    foreach ($listSec as $sec) {
                                        echo "<option>" . $sec["NomSection"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" id="lblImage">Image :</label>
                            <label class="col-lg-2 control-label" id="lblCodeVideo" style="display:none">Code vidéo :</label>
                            <label class="col-lg-2 control-label" id="lblBlague" style="display:none">Blague :</label>
                            <div class="col-lg-10">
                                <input type="file" name="Image" id="picUpload">
                                <input type="text" name="Video" class="form-control" id="inputCodeVideo" style="display:none" placeholder="lFGHkULtQRQ">
                                <textarea class="form-control" name="Blague" rows="3" id="textAreaBlague" style="display:none" placeholder="Toto...."></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" id="lblDescription">Description :</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="Description" rows="3" id="textAreaDescription"></textarea>
                            </div>
                        </div>

                        <input type="submit" name="submitContent" value="Ajouter" class="btn btn-default">
                    </fieldset>
                </form>
            </div>

            <script>
                function categInterface() {
                    d = document.getElementById("selectCateg").value;
                    switch (d) {
                        case "<?php echo $listCat[0]["nomCategorie"] ?>":
                            document.getElementById("lblImage").style.display = 'block';
                            document.getElementById("lblCodeVideo").style.display = 'none';
                            document.getElementById("lblBlague").style.display = 'none';

                            document.getElementById("picUpload").style.display = 'block';
                            document.getElementById("inputCodeVideo").style.display = 'none';
                            document.getElementById("textAreaBlague").style.display = 'none';

                            document.getElementById("textAreaDescription").style.display = 'block';
                            document.getElementById("lblDescription").style.display = 'block';
                            break;
                        case "<?php echo $listCat[1]["nomCategorie"] ?>":
                            document.getElementById("lblImage").style.display = 'none';
                            document.getElementById("lblCodeVideo").style.display = 'block';
                            document.getElementById("lblBlague").style.display = 'none';

                            document.getElementById("picUpload").style.display = 'none';
                            document.getElementById("inputCodeVideo").style.display = 'block';
                            document.getElementById("textAreaBlague").style.display = 'none';

                            document.getElementById("textAreaDescription").style.display = 'block';
                            document.getElementById("lblDescription").style.display = 'block';
                            break;
                        case "<?php echo $listCat[2]["nomCategorie"] ?>":
                            document.getElementById("lblImage").style.display = 'none';
                            document.getElementById("lblCodeVideo").style.display = 'none';
                            document.getElementById("lblBlague").style.display = 'block';

                            document.getElementById("picUpload").style.display = 'none';
                            document.getElementById("inputCodeVideo").style.display = 'none';
                            document.getElementById("textAreaBlague").style.display = 'block';

                            document.getElementById("textAreaDescription").style.display = 'none';
                            document.getElementById("lblDescription").style.display = 'none';
                            break;
                    }
                }
            </script>
        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>
