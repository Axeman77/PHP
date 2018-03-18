<?php
header('Content-Type: text/html;charset=UTF-8');



$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true?  приводит их к одному типу данных, а затем сравнивает
var_dump((int)'012345');     // Почему 12345?
var_dump((float)123.0 === (int)123.0); // Почему false?Думаю, сравнивать не должен
var_dump((int)0 === (int)'hello, world'); // Почему true? Думаю, что оба значения в чилхах приведены к нулю, хотя сравнивать не должен тождественное равенство

$titile = 'Titele 1';
$content = 'HW';
?>

<h1><?php echo $titile?></h1>
<p><?= $content?></p>