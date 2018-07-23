



    <?php
        function person($age, $genre) {
            if ($genre == 1) {
                $genre = "homme";
            }

            if ($genre == 2) {
                $genre = "femme";
            }

            if ($age < 18) {
                if ($genre == "homme") {
                    echo "Vous êtes un"." ".$genre." "."et vous êtes mineur";
                } else {
                    echo "Vous êtes une"." ".$genre." "."et vous êtes mineur";
                }
            } else {
                if ($genre == "homme") {
                    echo "Vous êtes un"." ".$genre." "."et vous êtes majeur";
                } else {
                    echo "Vous êtes une"." ".$genre." "."et vous êtes majeur";
                }
            }
        }

        person(rand(1, 100), rand(1, 2));
    ?>