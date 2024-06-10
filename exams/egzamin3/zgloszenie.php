<?php
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $q = "INSERT INTO `zawody_wedkarskie` VALUES (NULL, 0, $lowisko, '$data', '$sedzia');";

    $id = mysqli_connect('localhost', 'root', '', 'wedkarstwo');
    mysqli_query($id, $q);
    mysqli_close($id);
?>