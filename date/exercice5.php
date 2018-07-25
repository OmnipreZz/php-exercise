




    <?php
        $dateToday = new DateTime (date("d-m-Y"));
        $date = new DateTime ('16-05-2016');
        echo date_diff($date,$dateToday)->format("%a jours");
    ?> 
