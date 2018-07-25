



    <?php
        if (isset($_POST['nom'])) {
            echo "sexe: ".$_POST["sexe"]."<br />";
            echo "Nom: ".$_POST["nom"]."<br />";
            echo "Prénom: ".$_POST["prenom"]."<br/>";
            echo "Fichier: ".$_POST["file"];   
        } else { 
    ?>
        <form id="form1" action="index.php" method="POST">
            Nom: <input type="text" name="nom"><br>
            Prénom: <input type="text" name="prenom"><br>
            Envoi de fichier: <input type="file" name="file"><br>
            <SELECT name="sexe" size="1">
            <OPTION>Mr
            <OPTION>Mme
            <input type="submit" value="OK">
        </form>
    <?php
        }
    ?>