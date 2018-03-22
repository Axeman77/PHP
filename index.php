<meta charset="utf-8">
<title>Домашнее задание_1</title>

<ul>
  <li><a href="index.php">Задание №1</a></li>
  <li><a href="target_3_4.php">Задание №3-4</a></li>
  <li><a href="target_5.php">Задание №5</a></li>
  <li><a href="target_6.php">Задание №6</a></li>
  <li><a href="target_7.php">Задание №7</a></li>
</ul>

<?php

//задание №1

$a = 5;
$b = -7;

if ( $a >= 0 && $b >= 0 ) {
      echo  'a - b =  ' . ( $a - $b );

    } else if ( $a < 0 && $b < 0 ) {
      echo  'a * b =  ' . ( $a * $b );

    } else {
      echo  'a + b =  ' . ( $a + $b );

} // end ifelse

?>;