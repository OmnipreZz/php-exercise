



    <form action="index.php" method="POST">
        Nom: <input type="text" name="nom"><br>
        Prénom: <input type="text" name="prenom"><br>
        <SELECT name="sexe" size="1">
        <OPTION>Mr
        <OPTION>Mme
        <input type="submit" value="OK">
    </form>

    <?php
        echo "sexe: ".$_POST["sexe"]."<br />";
        echo "Nom: ".$_POST["nom"]."<br />";
        echo "Prénom: ".$_POST["prenom"];   
    ?> 