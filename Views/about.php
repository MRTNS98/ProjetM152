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
            <article class="post">
                <header>
                    <h3>A Propos de nous !!</h3>
                </header>
                <section>
                    <div class="postBlague">
                        <p class="pBlague">
                            GE-BLAGUE est un projet qui a été réalisé dans le cadre du Module 152.
                            <br>
                            <br>
                            Le projet a été réalisé par :
                            <br>
                             - Martins de Freitas Miguel
                            <br>
                             - Santos Rodrigues Micaël
                            <br>
                            <br>
                            Version : 1.0
                        </p>
                    </div>
                </section>
                <footer class="postFooter">
                </footer>
            </article>
        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>
