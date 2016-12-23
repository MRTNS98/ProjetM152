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
            <?php
            /**
             * Micael Rodrigues // Miguel Martins
             * I.IN-P4B
             * Version 2.0: 23.12.2016 
             */
            foreach ($ShowBlague as $Blague) {
                ?>    
                <article class="post">
                    <header>
                        <h3><?php echo $Blague["Titre"]; ?></h3>
                    </header>
                    <section>
                        <div class="postBlague">
                            <p class="pBlague">
                                <?php
                                echo $Blague["Description"];
                                ?>
                            </p>
                        </div>
                    </section>
                    <footer class="postFooter">
                        <button class="btn btn-success" id="<?= $Blague['idContenu'] ?>">Like</button>
                        <button class="btn btn-danger">Dislike</button>
                        <p class="text-danger"><?php echo $Blague["nbLike"]; ?></p>
                        <p class="text-success"><?php echo $Blague["nbDislike"]; ?></p>
                    </footer>
                </article>
                <?php
            }
            ?>
        </section>

        <?php
        include_once 'Views/footer.php';
        ?>
        <script>

            $(".btn-success").click(function (e) {
                console.log(e.target.id);
                var i = e.target.id;
                alert("Like");
                $.ajax(
                        {
                            type: "POST",
                            url: "Controllers/like.php",
                            data: {
                                idPost: i;
                            }
                        }
                ).done(function () {
                    alert("ajax Like");
                });
            });

            $(".btn-danger").click(function () {
                alert("disLike");
                $.ajax(
                        {
                            type: "POST",
                            url: "Controllers/dislike.php",
                            data: {
                                idPost: "1"
                            }
                        }
                ).done(function () {
                    alert("ajax disLike");
                });
            });
            /*$.ajax(
             {
             type: "POST",
             url: "Controllers/like.php",
             data: {
             idPost: "1"
             }
             }
             ).always(function{alert("Like");});
             };*/
        </script>
    </body>
</html>