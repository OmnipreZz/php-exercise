



    <a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016">Y'a quoi ici?</a><br>

    <?php
        if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) {
            echo $_GET['dateDebut'] . ' ' . $_GET['dateFin'];
        }
    ?>