

    <a href="index.php?langage=PHP&serveur=LAMP">Y'a quoi ici?</a><br>

    <?php
        if (isset($_GET['langage']) AND isset($_GET['serveur'])) {
            echo $_GET['langage'] . ' ' . $_GET['serveur'];
        }
    ?>