<?php
    $suma = 0;
    $liczba = 10;
    $liczbaZsumowanych = 0;

    while ($suma <= 1000)
    {
        $suma += $liczba;
        $liczba++;
        $liczbaZsumowanych++;
    }

    echo "Uzyskana suma: " . $suma . "<br>";
    echo "Liczba zsumowanych liczb: " . $liczbaZsumowanych;
?>