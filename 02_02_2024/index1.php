<table>
    <tr>
        <td>ID</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Rok urodzenia</td>
        <td>Miejsce urodzenia</td>
    </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_ludzi";
        $connect = mysqli_connect($host, $user, $pass, $db);
        $select = "SELECT * FROM ludzie";
        $result = mysqli_query($connect, $select);

        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$row[0]</td>"; //$row["ID"]
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "</tr>";
        }
    ?>
</tabe>