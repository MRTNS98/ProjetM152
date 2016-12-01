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
        include_once 'Views/navbar.php';
        ?>

        <section class="strandardCenter">

            <!-- Inseré postImage.php -->

            <!-- Inseré postVidéo -->
            <article class="post">
                <header>
                    <h3>Try to Remember</h3>
                </header>
                <section>
                    <div class="postPicture">
                        <figure>
                            
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8IoUUAcN-Ng" frameborder="0" allowfullscreen></iframe>
                        </figure>
                        
                        
                    </div>
                    <p class="postDesc">
                        Une description ?
                    </p>
                </section>
                <footer class="postFooter">
                    <button class="btn btn-success">Like</button>
                    <button class="btn btn-danger">Dislike</button>
                    <p class="text-danger">Nb Dislike</p>
                    <p class="text-success">Nb Like</p>
                </footer>
            </article>

            <!-- Inseré postBlague -->

        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>
