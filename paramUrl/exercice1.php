
  
    <a href="index.php?nom=Nemare&prenom=Jean">Quel est mon nom?</a><br>

    <?php
        if (isset($_GET['nom']) AND isset($_GET['prenom'])) {
            echo $_GET['prenom'] . ' ' . $_GET['nom'];
        }
    ?>

