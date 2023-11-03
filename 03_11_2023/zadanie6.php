<?php
    $sideA = 10;
    $sideB = 9;
    $sideC = 8;
    if (pow($sideA, 2) * pow($sideB, 2) == pow($sideC, 2))
        echo "trojkat jest prostokatny";
    elseif ($sideA == $sideB || $sideB == $sideA || $sideA == $sideC)
        echo "trojkat jest rownoramienny";
    elseif ($sideA == $sideB && $sideB == $sideC)
        echo "trojkat jest rownoboczny;
?>
