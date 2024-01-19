<?php
    $fields = ['name', 'surn', 'sex', 'age', 'class'];
    foreach ($fields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            echo "Wypełnij wszystkie dane";
            break;
        }
        if ($field == end($fields)) {
            echo "Dziekuję za wypełnienie formularza<br/>";
            echo "Dane: <br/>";
            echo "Imię: " . $_POST['name'] . "<br/>";
            echo "Nazwisko: " . $_POST['surn'] . "<br/>";
            echo "Płeć: " . $_POST['sex'] . "<br/>";
            echo "Wiek: " . $_POST['age'] . "<br/>";
            echo "Klasa: " . $_POST['class'] . "<br/>";
        }
    }
?>