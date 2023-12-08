<?php
    echo "Kod aplikacji z pętlą for:<br>";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i." ".sqrt($i)."<br>";
    }

    echo "<br>Kod aplikacji z pętlą while:<br>";
    $i = 1;
    while ($i <= 10) {
        echo $i." ".sqrt($i)."<br>";
        $i++;
    }

    echo "<br>Kod aplikacji z pętlą do ...while:<br>";
    $i = 1;
    do
    {
        echo $i." ".sqrt($i)."<br>";
        $i++;
    }while($i <= 10);
?>