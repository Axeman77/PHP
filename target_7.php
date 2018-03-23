<meta charset="utf-8">
<title>Домашнее задание_7</title>

<header>
    <ul>
        <li><a href="index.php">Задание №1</a></li>
        <li><a href="target_3_4.php">Задание №3-4</a></li>
        <li><a href="target_5.php">Задание №5</a></li>
        <li><a href="target_6.php">Задание №6</a></li>
        <li><a href="target_7.php">Задание №7</a></li>
    </ul>
</header>

<!--Задание №7-->


<?php

    function getTime () {
//        date_default_timezone_set('Europe/Moscow');
        $hours = date('H');
        $min = date('i');
        $hours_t = $hours % 10;
        $min_t = $min % 10;

        if ($hours_t === 0 || $hours_t >= 5 || ($hours >= 11 && $hours <= 19)) {
                $hours .= ' часов';
              } else if ($hours_t === 1) {
                $hours .= ' час';
              } else {
                $hours .= ' часа';
              }

          if ($min_t === 0 || $min_t >= 5 || ($min >= 11 && $min <= 19)) {
                $min .= ' минут';
              } else if ($min_t === 1) {
                $min .= ' минута';
             } else {
                $min .= ' минуты';
              }

        return  $hours .': '.
            	$min;
    };



echo getTime();
?>

