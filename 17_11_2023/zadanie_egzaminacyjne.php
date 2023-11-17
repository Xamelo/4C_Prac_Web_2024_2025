<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Kalkulator</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Kalkulator walut</h1>
        </header>
        <main>
            <span class="calculator_header"><h2>Wprowadz wartosc waluty:</h2>
            <ol>
                <li>euro</li>
                <li>dolary</li>
                <li>franki</li>
            </ol></span>
        </main>
    </body>
    <?php
        $valueType = 1;
        $pl = 30;
        switch ($valueType) {
            case 1:
                $result = $pl * 4.32;
                echo "Waluta przeliczona w euro: " . $result;
                break;
            case 2:
                $result = $pl * 3.21;
                echo "Waluta przeliczona w dolarach: " . $result;
                break;
            case 3:
                $result = $pl * 3.98;
                echo "Waluta przeliczona we frankach: " . $result;
                break;
        }
    ?>
</html>