<?php
    if (isset($_GET['name']) && isset($_GET['surname'])) {
        echo $_GET['name'] . "<br/>" . $_GET['surname'];
    }
?>