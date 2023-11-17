<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Języki</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Wybierz język strony internetowej</h1>
        </header>
        <main>
            <h2>Wprowadz język:</h2>
            <ol>
                <li>angielski</li>
                <li>niemiecki</li>
                <li>hiszpański</li>
            </ol>
        </main>
    </body>
    <?php
        $jezyk = 3;
        switch ($jezyk) {
            case 1:
                echo "angielski";
                break;
            case 2:
                echo "niemiecki";
                break;
            case 3:
                echo "hiszpański";
                break;
            default:
                echo "polski";
                break;
        }
    ?>
</html>