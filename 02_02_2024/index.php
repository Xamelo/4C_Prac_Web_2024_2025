<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "baza_filmow";
    $connect = mysqli_connect($host, $user, $pass, $db);
    $zapytanie = "SELECT * FROM filmy";
    $result = mysqli_query($connect, $zapytanie);

    while ($wiersz_danych = mysqli_fetch_row($result)) {
        for ($i = 0; $i < count($wiersz_danych); $i++) {
            print $wiersz_danych[$i] . " ";
        }
        print "<br/>";
    }
?>