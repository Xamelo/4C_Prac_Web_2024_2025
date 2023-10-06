<?php
    $number1 = 10;
    $number2 = 3;
    if ($number1 % $number2 == 0)
        echo "liczba pierwsza jest podzielna przez liczbe druga";
    else
        echo "liczba pierwsza nie jest podzielna przez liczbe druga";

    echo "<br>";
    switch ($number1 % $number2 == 0)
    {
        case true:
            echo "liczba pierwsza jest podzielna przez liczbe druga";
            break;
        case false:
            echo "liczba pierwsza nie jest podzielna przez liczbe druga";
            break;
    }
?>