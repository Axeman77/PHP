<meta charset="utf-8">
<title>HW3_2</title>

<ul>
  <li><a href="index.php">Задание №1</a></li>
  <li><a href="target_2.php">Задание №2</a></li>
  <li><a href="target_3.php">Задание №3</a></li>
  <li><a href="target_4.php">Задание №4</a></li>
  <li><a href="target_5.php">Задание №5</a></li>
  <li><a href="target_6.php">Задание №6</a></li>
  <li><a href="target_7.php">Задание №7</a></li>
  <li><a href="target_8.php">Задание №8</a></li>
  <li><a href="target_9.php">Задание №9</a></li>
</ul>

<?php


// Задание № 2

$i=0;

do {
  if ( $i == 0 ) {
      echo "$i - Это 0 <br/>";
  } elseif ( $i % 2 == 0 ) {
      echo "$i - Чётное <br/>";
  } else {
      echo "$i - Нечётное <br/>";
  }
  $i++;
} while ($i<=10);

?>