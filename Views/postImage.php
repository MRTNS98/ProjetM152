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
                echo '<img src = "Uploads/Images/' . $Picture['lienContenu'] . '.jpg" alt = "' . $Picture['Auteur'] . '">';
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
            <button class="btn btn-success" name="Like">Like</button>
            <?php
            // Pas Sur de cette ligne de code pour ajouter des likes //
            if (!isset($_GET['Like'])) {
                $Like = 0;
            } else {
                $Like = $_GET['Like'] + 1;
                UpdateLike($Like, $Picture['idContenu']);
            }
            ///////////////////////////////////////////////////////////
            ?>
            <button class="btn btn-danger" name="Dislike">Dislike</button>
            <?php
            echo '<p class = "text-danger">' . $Picture['nbLike'] . '</p>';
            echo '<p class = "text-success">' . $Picture['nbDislike'] . '</p>';
            ?>
        </footer>
    </article>
    <?php
}
?>
