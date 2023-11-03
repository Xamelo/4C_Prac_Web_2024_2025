<?php
    $sideA = 10;
    $sideB = 9;
    $sideC = 8;
    if (pow($sideA, 2) * pow($sideB, 2) > pow($sideC, 2))
        echo "trojkat jest ostrokatny";
    elseif (pow($sideA, 2) * pow($sideB, 2) == pow($sideC, 2))
        echo "trojkat jest prostokatny";
    else
        echo "trojkat jest rozwartokatny";
?>