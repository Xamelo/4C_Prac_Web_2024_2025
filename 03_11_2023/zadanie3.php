<?php
    $nameOfProduct = "elektronika";
    $keyboard = 200;
    $dress = 100;
    $bread = 2;
    $cost = 0;
    switch ($nameOfProduct) {
        case "elektronika":
            $cost = $keyboard + $keyboard * 0.12;
            echo "cena za produkt wynosi: ".$cost;
            break;
        case "odzież":
            $cost = $dress + $dress * 0.09;
            echo "cena za produkt wynosi: ".$cost;
            break;
        case "pieczywo":
            $cost = $bread + $bread * 0.03;
            echo "cena za produkt wynosi: ".$cost;
            break;
    }
?>