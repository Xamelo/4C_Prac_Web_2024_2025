<?php
    if (isset($_POST['name']) && isset($_POST['surname'])) {
        echo $_POST['name'] . "<br/>" . $_POST['surname'];
    }
?>