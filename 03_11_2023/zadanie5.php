<?php
    $percentageResult = 50;
    if ($percentageResult >= 99)
        echo "Ocena 6";
    elseif ($percentageResult >= 86)
        echo "Ocena 5";
    elseif ($percentageResult >= 74)
        echo "Ocena 4";
    elseif ($percentageResult >= 50)
        echo "Ocena 3";
    elseif ($percentageResult >= 40)
        echo "Ocena 2";
    else
        echo "Ocena 1";
?>