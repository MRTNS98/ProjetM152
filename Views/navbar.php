<?php
/**
 * 
 */
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">GE-BLAGUE</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- class="active" -->
                <li class="dropdown">
                    <a href="index.php?action=ShowImage" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Images<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php
                        foreach ($List as $Sections) {
                            echo "<li><a href = 'index.php?action=ShowImage&Section=".$Sections['NomSection']."'>" . $Sections['NomSection'] . "</a></li> ";
                        }
                        ?>
                        <li class="divider"></li>
                        <li><a href="index.php?action=ShowImage">Voir Tout</a></li>
                        <!--            <li class="divider"></li>
                                    <li><a href="#">A voir</a></li>-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="index.php?action=ShowVideo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vidéos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php
                        foreach ($List as $Sections) {
                            echo "<li><a href = 'index.php?action=ShowVideo&Section=".$Sections['NomSection']."'>" . $Sections['NomSection'] . "</a></li> ";
                        }
                        ?>
                        <li class="divider"></li>
                        <li><a href="index.php?action=ShowVideo">Voir Tout</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="index.php?action=ShowBlague" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blagues<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php
                        foreach ($List as $Sections) {
                            echo "<li><a href = 'index.php?action=ShowBlague&Section=".$Sections['NomSection']."'>" . $Sections['NomSection'] . "</a></li> ";
                        }
                        ?>
                        <li class="divider"></li>
                        <li><a href="index.php?action=ShowBlague">Voir Tout</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?action=AddContent">Ajouter</a></li>
                <li><a href="index.php?action=About">A Propos</a></li>
            </ul>
        </div>
    </div>
</nav>
