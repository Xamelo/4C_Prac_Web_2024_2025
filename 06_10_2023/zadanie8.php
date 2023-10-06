<?php
    $number1 = 133;
    $number2 = 135;
    $number3 = 13;
    if ($number1 == $number2 || $number1 == $number3 || $number2 == $number3)
        echo "przynajmniej dwie liczby sa takie same";
    else 
        echo "nie ma dwoch takich samych liczb";

    echo "<br>";
    switch ($number1 == $number2 || $number1 == $number3 || $number2 == $number3)
    {
        case true:
            echo "przynajmniej dwie liczby sa takie same";
            break;
        case false:
            echo "nie ma dwoch takich samych liczb";
            break;
    }
?>