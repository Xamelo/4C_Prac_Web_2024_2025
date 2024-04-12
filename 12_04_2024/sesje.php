<?php
session_start();

$_SESSION["color"] = "blue";

echo $_SESSION ["color"];

session_unset();

session_destroy();

//haszowanie hasła
$a = sha1("haslo");
?>