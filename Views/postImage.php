<!DOCTYPE html>
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
             * Version 2.0: 15.12.2016 
             */
            foreach ($ShowPicture as $Picture) {
                ?>
                <article class="post">
                    <header>
                        <?php
                        echo '<h3>' . $Picture['Titre'] . '</h3>';
                        ?>
                    </header>
                    <section>
                        <div class="postPicture">
                            <?php
                            echo '<figure>';
                            echo '<img src = "Uploads/Images/'.$Picture['lienContenu'].'" alt = "' . $Picture['NomImage'] . '">';
                            echo '</figure>';
                            ?>
                        </div>
                        <p class="postDesc">
                            <?php
                            echo $Picture['Description'];
                            ?>
                        </p>
                    </section>
                    <footer class="postFooter">
                        <button class="btn btn-success" name="Like" id="<?= $Picture['idContenu'] ?>">Like</button>
                        <button class="btn btn-danger" name="Dislike" id="<?= $Picture['idContenu'] ?>">Dislike</button>
                        <?php
                        echo '<p class = "text-danger">' . $Picture['nbDislike'] . '</p>';
                        echo '<p class = "text-success">' . $Picture['nbLike'] . '</p>';
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
        <script>

            $(".btn-success").click(function (e) {
                console.log(e.target.id);
                var i = e.target.id;
                $.ajax(
                        {
                            type: "GET",
                            url: "index.php?action=Like",
                            data: 'idPost='+ i
                        }
                ).done(function () {
                    alert("Le post a bien été like");
                });
            });

            $(".btn-danger").click(function (e) {
                console.log(e.target.id);
                var i = e.target.id;
                $.ajax(
                        {
                            type: "GET",
                            url: "index.php?action=Dislike",
                            data: 'idPost='+ i
                        }
                ).done(function () {
                    alert("Le post a bien été dislike");
                });
            });
        </script>
    </body>
</html>