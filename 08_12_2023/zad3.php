<?php
    echo "Kod aplikacji z pętlą for: ";
    for ($i = 100; $i <= 125; $i += 5)
    {
        echo $i." ";
    }

    echo "<br>Kod aplikacji z pętlą while: ";
    $i = 100;
    while($i <= 125)
    {
        echo $i." ";
        $i +=5;
    }

    echo "<br>Kod aplikacji z pętlą do ...while: ";
    $i = 100;
    do
    {
        echo $i." ";
        $i += 5;
    }while($i <= 125);
?>