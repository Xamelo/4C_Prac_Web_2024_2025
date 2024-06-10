<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8"/>
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_2.css"/>
</head>
<body>
<header>
    <h1>Portal dla wędkarzy</h1>
</header>
<main>
    <section class="leftUpper">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
        <?php
            $id = mysqli_connect("localhost", "root", "", "wedkowanie");
            $q = "SELECT nazwa, akwen, wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3;";
            $result = mysqli_query($id, $q);
            while ($row = mysqli_fetch_array($result)) {
                echo "<li>".$row['nazwa']." pływa w rzece ".$row['akwen'].", ".$row['wojewodztwo']."</li>";
            }
        ?>
        </ol>
    </section>
    <section class="right">
        <img src="ryba1.jpg" alt="Sum"/><br/>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section class="leftBottom">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th><th>Gatunek</th><th>Występowanie</th>
            </tr>
            <?php
                $q = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE `styl_zycia` = 1;";
                $result = mysqli_query($id, $q);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nazwa']."</td>";
                    echo "<td>".$row['wystepowanie']."</td>";
                    echo "</tr>";
                }
                mysqli_close($id);
            ?>
        </table>
    </section>
</main>
<footer>
    <p>Stronę wykonał: 00000000000</p>
</footer>