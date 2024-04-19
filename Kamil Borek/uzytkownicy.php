<?php
$connection = mysqli_connect("localhost", "root", "", "portal");

$ask = "SELECT COUNT(*) FROM dane";
$result = mysqli_query($connection, $ask);
$resultText = mysqli_fetch_array($result);
?>

<html lang="pl-PL">
    <head>
        <title>Portal społecznościowy</title>
        <link rel="stylesheet" href="styl5.css"/>
    </head>
    <body>
        <header>
            <div class="leftBanner">
                <h2>Nasze osiedle</h2>
            </div>
            <div class="rightBanner">
                <?php echo "<h5>Liczba użytkowników portalu " . $resultText[0] . "</h5>"; mysqli_close($connection);?>
            </div>
        </header>
        <main>
            <div class="leftMain">
                <h3>Logowanie</h3>
                <form action="uzytkownicy.php" method="post">
                    <label>
                        login</br>
                        <input type="text" name="login" id="login"/></br>
                        hasło</br>
                        <input type="text" name="password" id="login"/></br>
                        <input type="submit" value="Zaloguj"/>
                    </label>
                </form>
            </div>
            <div class="rightMain">
                <h3>Wizytówka</h3>
                <div class="card">
                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "portal");
                    if (isset($_POST['login']) && isset($_POST['password']))
                    {
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                        if ($login != "" && $password != "")
                        {
                            $passwordHashed = sha1($password);

                            $question = "SELECT * FROM uzytkownicy WHERE login = \"$login\"";
                            $result2 = mysqli_query($connection, $question);
                            if (mysqli_num_rows($result2) == 0)
                            {
                                echo "Login nie istnieje";
                            }
                            else
                            {
                                $row = mysqli_fetch_assoc($result2);
                                if ($password == $row['haslo'])
                                {
                                    $question = "SELECT `uzytkownicy`.`login`, `dane`.`rok_urodz`, `dane`.`przyjaciol`, `dane`.`hobby`, `dane`.`zdjecie` FROM `uzytkownicy`, `dane`
                                    WHERE `uzytkownicy`.`login` = \"$login\"";
                                    $result2 = mysqli_query($connection, $question);
                                    $row = mysqli_fetch_assoc($result2);
                                    $rokUrodz = $row['rok_urodz'];
                                    $przyjaciol = $row['przyjaciol'];
                                    $hobby = $row['hobby'];
                                    $zdjecie = $row['zdjecie'];
                                    echo "<img src=\"$zdjecie\" alt=\"osoba\">";
                                    $wiek = 2024 - $rokUrodz;
                                    echo "<h4>$login ($wiek)</h4>";
                                    echo "<p>hobby: $hobby</p>";
                                    echo "<h1><img src=\"icon-ong.png\">$przyjaciol</h1>";
                                    echo "<a href=\"dane.html\">";
                                    echo "<button>Wiecej informacji</button>";
                                    echo "</a>";
                                }
                                else
                                {
                                    echo "Hasło nieprawidłowe";
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </main>
        <footer>
            Stronę wykonał: Kamil Borek
        </footer>
    </body>
</html>