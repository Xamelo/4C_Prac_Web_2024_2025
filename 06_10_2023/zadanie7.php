<?php
    $number1 = 543;
    $number2 = 983;
    $number3 = 13;
    if ($number1 < $number2 && $number1 < $number3)
        echo "najmniejsza liczba jest " . $number1;
    else if ($number2 < $number1 && $number2 < $number3)
        echo "najmniejsza liczba jest " . $number2;
    else
        echo "najmniejsza liczba jest " . $number3;
?>