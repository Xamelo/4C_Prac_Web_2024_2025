<?php
    $number = 57;
    if ($number % 2 == 0)
        echo "liczba jest parzysta";
    else
        echo "liczba jest nieparzysta";

    echo "<br>";
    switch($number % 2 == 0)
    {
        case true:
            echo "liczba jest parzysta";
            break;
        case false:
            echo "liczba jest nieparzysta";
            break;
    }
?>