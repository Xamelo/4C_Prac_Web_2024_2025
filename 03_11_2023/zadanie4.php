<?php
    $year = 2000;
    $century = ceil($year / 100);
    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
        echo "rok ".$year." jest przestepny i nalezy do stulecia ".$century;
    }
    else {
        echo "rok ".$year." nie jest przestepny i nalezy do stulecia ".$century;
    }
?>