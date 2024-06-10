<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8"/>
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css"/>
</head>
<body>
    <header>
        <section class="prawy">
            <h2>Nasze osiedle</h2>
        </section>
        <section class="lewy">
            <?php
                $id = mysqli_connect("localhost", "root", "", "portal");
                $q = "SELECT COUNT(*) FROM dane;";
                $result = mysqli_query($id, $q);
                echo "<h5>"."Liczba użytkowników portalu:".mysqli_fetch_row($result)[0]."</h5>";
                mysqli_close($id);
            ?>
        </section>
    </header>
    <main>
        <section class="lewy">
            <h3>Logowanie</h3>
            <form action="uzytkownicy.php" method="post">
                <label for="login">login</label><br/>
                <input type="text" name="login" id="login"/><br/>
                <label for="haslo">hasło</label><br/>
                <input type="password" name="haslo" id="haslo"/><br/>
                <input type="submit" value="Zaloguj"/>
            </form>
        </section>
        <section class="prawy">
            <h3>Wizytówka</h3>
            <div class="wizytowka">
                <?php
                    skrypt2();
                ?>
            </div>
        </section>
    </main>
    <footer>
        Stronę wykonał: 0000000
    </footer>
</body>
</html>
<?php
    function skrypt2()
    {
        $id = mysqli_connect("localhost", "root", "", "portal");
        if (!empty($_POST['login']) || !empty($_POST['haslo'])) {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $q = "SELECT haslo FROM uzytkownicy WHERE uzytkownicy.login = '$login';";
            $result = mysqli_query($id, $q);

            if (mysqli_num_rows($result) != 1) {
                echo "login nie istnieje";
                return;
            } else {
                if (sha1($haslo) != mysqli_fetch_row($result)[0]) {
                    echo "hasło nieprawidłowe";
                } else {
                    $q2 = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM
                     uzytkownicy JOIN dane ON uzytkownicy.id = dane.id WHERE uzytkownicy.login = '$login';";
                    $result2 = mysqli_query($id, $q2);
                    $row = mysqli_fetch_array($result2);
                    $wiek = 2024 - $row['rok_urodz'];
                    echo "<img src=".$row['zdjecie']." alt='osoba'/><br/>";
                    echo "<h4>".$login." (".$wiek.")</h4>";
                    echo "<h1><img src='icon-on.png'/>".$row['przyjaciol']."</h4>";
                    echo "<a href='dane.html'><button>Więcej informacji</button>";
                }
            }
        } else {
            return;
        }
        mysqli_close($id);
    }
?>