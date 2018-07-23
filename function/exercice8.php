

    <?php
        function add($nbr1 = 2, $nbr2 = 2, $nbr3 = 2) {
            echo $nbr1 + $nbr2 +$nbr3;
        }
        add(rand(1, 10), rand(1, 10), rand(1, 10));
    ?>