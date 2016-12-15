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

            <!-- Inseré postImage.php -->

            <!-- Inseré postVidéo -->

            <!-- Inseré postBlague -->
            <div class="addForm">
                <form method="POST" action="?" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputAutor" class="col-lg-2 control-label">Auteur :</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputAutor" placeholder="Nom de l'auteur">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="selectCateg" class="col-lg-2 control-label">Catégorie :</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="selectCateg">
                                    <option>Image (non dynamique)</option>
                                    <option>Vidéo (non dynamique)</option>
                                    <option>Blague (non dynamique)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="selectSection" class="col-lg-2 control-label">Section :</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="selectSection">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Image :</label>
                            <label class="col-lg-2 control-label">Code vidéo :</label>
                            <label class="col-lg-2 control-label">Blague :</label>
                            <div class="col-lg-10">
                                <input type="file">
                                <input type="text" class="form-control" id="inputCodeVideo" placeholder="lFGHkULtQRQ">
                                <input type="text" class="form-control" id="inputBlague" placeholder="Toto....">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Description :</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="textArea"></textarea>
                            </div>
                        </div>

                        <input type="submit" value="Ajouter" class="btn btn-default">
                    </fieldset>
                </form>
            </div>

        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>
