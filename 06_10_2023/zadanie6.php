<?php
    $year = 2000;
    $leapYear = false;
    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
        $leapYear = true;
    if ($leapYear)
        echo "Luty: 29";
    else 
        echo "Luty: 28";

    echo "<br>";
    switch ($leapYear)
    {
        case true:
            echo "Luty: 29";
            break;
        case false:
            echo "Luty: 28";
            break;
    }
?>