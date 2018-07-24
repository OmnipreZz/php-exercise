



    <a href="index.php?nom=Nemare&prenom=Jean">Quel est mon age?</a><br>

    <?php
        if (isset($_GET['age'])) {
            echo $_GET['age'];
        } else {
          echo "age non défini";
        }
    ?>