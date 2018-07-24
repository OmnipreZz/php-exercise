


    <a href="index.php?batiment=12&salle=101">Y'a quoi ici?</a><br>

    <?php
        if (isset($_GET['batiment']) AND isset($_GET['salle'])) {
            echo $_GET['batiment'] . ' ' . $_GET['salle'];
        }
    ?>