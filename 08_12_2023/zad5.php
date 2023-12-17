<?php
    function funkcja($x)
    {
        return $x**2 - 4;;
    }

    function metodaPolowienia($funkcja, $a, $b, $epsilon)
    {
        if ($funkcja($a) * $funkcja($b) >= 0)
        {
            echo "Błąd: Funkcja nie spełnia warunków wymaganych dla metody połowienia.";
            return;
        }

        $c = $a;
        while (($b - $a) >= $epsilon)
        {
            $c = ($a + $b) / 2;
            if (abs($funkcja($c)) < $epsilon)
            {
                break;
            }

            if ($funkcja($c) * $funkcja($a) < 0)
            {
                $b = $c;
            }
            else
            {
                $a = $c;
            }
        }

        echo "Przybliżone miejsce zerowe: " . $c;
    }

    $a = 5;
    $b = 20;
    $epsilon = 1;

    metodaPolowienia('funkcja', $a, $b, $epsilon);
?>
