<?php
    $age = 18;
    if ($age > 0 && $age < 11)
        echo "dziecko";
    else if ($age >= 11 && $age < 18)
        echo "nastolatek";
    else if ($age >= 18)
        echo "dorosly";

    echo "<br>";
    switch ($age)
    {
        case $age > 0 && $age < 11:
            echo "dziecko";
            break;
        case $age >= 11 && $age < 18:
            echo "nastolatek";
            break;
        case $age >= 18:
            echo "dorosly";
            break;
    }
?>