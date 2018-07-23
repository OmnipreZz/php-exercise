


    <?php 
        function test($nbr1, $nbr2) {
            echo "nombre1 = ".$nbr1.","." "."nombre2 = ".$nbr2."<br>";
            if ($nbr1 > $nbr2) {
                echo "Le premier nombre est le plus grand";
            } else if ($nbr1 < $nbr2) {
                echo "Le premier nombre est plus le petit";
            } else if ($nbr1 == $nbr2) {
                echo "Les deux nombres sont identiques";
            }
        }
        test(rand(1, 10), rand(1,10));
    ?>