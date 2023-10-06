<?php
    $number = 0;
    if ($number > 0)
        echo "liczba jest dodatnia";
    else if($number < 0)
        echo "liczba jest ujemna";
    else
        echo "liczba jest równa zeru";

    echo "<br>";
    switch ($number)
    {
        case 0:
            echo "liczba jest rowna zeru";
            break;
        case $number < 0:
            echo "liczba jest ujemna";
            break;
        case $number > 0:
            echo "liczba jest dodatnia";
            break;
    }
?>