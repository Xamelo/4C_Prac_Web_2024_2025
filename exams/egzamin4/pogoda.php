<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8"/>
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css"/>
</head>
<body>
    <header>
        <section class="pierwszy">
            zdjecie
        </section>
        <section class="drugi">
            <h1>Prognoza dla Wrocławia</h1>
        </section>
        <section class="trzeci">
            <h3>maj, 2019 r.</h3>
        </section>
    </header>
    <main>
        <table>
            <tr>
                <th>DATA</th> <th>TEMPERATURA W NOCY</th> <th>TEMPERATURA W DZIEŃ</th> <th>OPADY [mm/h]</th> <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $id = mysqli_connect("localhost", "root", "", "prognoza");
                $q = "SELECT * FROM pogoda WHERE pogoda.miasta_id = 1 ORDER BY pogoda.data_prognozy ASC;";
                $result = mysqli_query($id, $q);
                while ($row = mysqli_fetch_array  ($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['data_prognozy']."</td>";
                    echo "<td>".$row['temperatura_noc']."</td>";
                    echo "<td>".$row['temperatura_dzien']."</td>";
                    echo "<td>".$row['opady']."</td>";
                    echo "<td>".$row['cisnienie']."</td>";
                    echo "</tr>";
                }
                mysqli_close($id);
            ?>
        </table>
    </main>
    <section class="nizej">
        <section class="lewy">
            zdjecie
        </section>
        <section class="prawy">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
    </section>
    <footer>
        <p>stronę wykonał: 00000000</p>
    </footer>
</body>
</html>