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

            <?php
            /**
             * Micael Rodrigues // Miguel Martins
             * I.IN-P4B
             * Version 1.0: 08.12.2016
             * Version 2.0: 22.12.2016 
             */
            foreach ($ShowVideo as $Video) {
                ?>
                <article class="post">
                    <header>
                        <?php
                        echo '<h3>' . $Video['Titre'] . '</h3>';
                        ?>
                    </header>
                    <section>
                        <div class="postPicture">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $Video['lienContenu']; ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p class="postDesc">
                            <?php
                            echo $Video['Description'];
                            ?>
                        </p>
                    </section>
                    <footer class="postFooter">
                        <button class="btn btn-success">Like</button>
                        <button class="btn btn-danger">Dislike</button>
                        <?php
                        echo '<p class = "text-danger">' . $Video['nbLike'] . '</p>';
                        echo '<p class = "text-success">' . $Video['nbDislike'] . '</p>';
                        ?>
                    </footer>
                </article>
                <?php
            }
            ?>
        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
    </body>
</html>