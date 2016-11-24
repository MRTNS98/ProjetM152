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
            
            <article class="post">
                <header>
                    <h1>Place Holder Title</h1>
                </header>
                <hr>
                <section>
                    <div class="postPicture">
                        <figure>
                            <img src="" alt="Random picture">
                        </figure>
                    </div>
                    <p class="postDesc">
                        Une description ?
                    </p>
                </section>
                <footer class="postFooter">
                    <button class="btn btn-default">Like</button>
                    <button class="btn btn-default">Dislike</button>
                    <p>Nb Like</p>
                    <p>Nb Dislike</p>
                </footer>
            </article>
            
        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>
