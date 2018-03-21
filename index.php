<?php
header('Content-Type: text/html;charset=UTF-8');

//задание №1

$a = 5;
$b = -7;

if ( $a >= 0 && $b >= 0 ) {
      echo  '$a - $b =  ';
      echo  $a - $b;
    } else if ( $a < 0 && $b < 0 ) {
      echo  '$a * $b =  ';
      echo  $a * $b;
    } else {
      echo  '$a + $b =  ';
      echo  $a + $b;
} // end ifelse

?>;