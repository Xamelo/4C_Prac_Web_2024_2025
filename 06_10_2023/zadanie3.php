<?php
    $number = 149;
    if ($number >= 100 && $number < 150)
        echo "liczba miesci sie w przedziale <100;150)";
    else
        echo "liczba nie miesci sie w przedziale <100;150)";

    echo "<br>";
    switch ($number >= 100 && $number < 150)
    {
        case true:
            echo "liczba miesci sie w przedziale <100;150)";
            break;
        case false:
            echo "liczba nie miesci sie w przedziale <100;150)";
            break;
    }
?>