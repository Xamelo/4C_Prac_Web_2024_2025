<?php
    echo "Kod aplikacji z pętlą for: ";
    for ($i = 100; $i >= 90; $i--)
    {
        echo $i." ";
    }
    
    echo "<br>Kod aplikacji z pętlą while: ";
    $i = 100;
    while ($i >= 90) {
        echo $i." ";
        $i--;
    }

    echo "<br>Kod aplikacji z pętlą do ...while: ";
    $i = 100;
    do
    {
        echo $i." ";
        $i--;
    }while($i >= 90);
?>