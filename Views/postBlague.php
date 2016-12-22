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

            <!-- PAGE A RENDRE DYNAMIQUE -->

            <article class="post">
                <header>
                    <h3>Title</h3>
                </header>
                <section>
                    <div class="postBlague">
                        <p class="pBlague">

                        </p>
                    </div>
                </section>
                <footer class="postFooter">
                    <button class="btn btn-success">Like</button>
                    <button class="btn btn-danger">Dislike</button>
                    <p class="text-danger">Nb Dislike</p>
                    <p class="text-success">Nb Like</p>
                </footer>
            </article>

        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>