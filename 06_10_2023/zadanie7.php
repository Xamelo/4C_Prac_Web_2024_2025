<?php
    $number1 = 54311;
    $number2 = 983;
    $number3 = 1311;
    if ($number1 < $number2 && $number1 < $number3)
        echo "najmniejsza liczba jest " . $number1;
    else if ($number2 < $number1 && $number2 < $number3)
        echo "najmniejsza liczba jest " . $number2;
    else
        echo "najmniejsza liczba jest " . $number3;

    echo "<br>";
    switch ($number1) {
        case $number1 < $number2 && $number1 < $number3:
            echo "najmniejsza liczba jest " . $number1;
            break;
        case $number2 < $number1 && $number2 < $number3:
            echo "najmniejsza liczba jest " . $number2;
            break;
        case $number3 < $number1 && $number3 < $number2:
            echo "najmniejsza liczba jest " . $number3;
            break;
    }
?>