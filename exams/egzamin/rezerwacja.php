<?php
    echo "Dodano rezerwację do bazy";
    $connection = mysqli_connect("localhost", "root", "", "baza");
    $data = $_POST['data'];
    $osoby = $_POST['osoby'];
    $telefon = $_POST['telefon'];
    $query = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', '$osoby', '$telefon');";
    mysqli_query($connection, $query);
    mysqli_close($connection);
?>