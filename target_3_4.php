<meta charset="utf-8">
<title>Домашнее задание_3_4</title>

<ul>
  <li><a href="index.php">Задание №1</a></li>
  <li><a href="target_3_4.php">Задание №3-4</a></li>
  <li><a href="target_5.php">Задание №5</a></li>
  <li><a href="target_6.php">Задание №6</a></li>
  <li><a href="target_7.php">Задание №7</a></li>
</ul>

<?php


// Задание № 3 и № 4

function mult ( $a, $b ) {

    return ($a * $b);
};

function dev ( $a, $b ) {

    return ($a / $b);
};

function sum ( $a, $b ) {

    return ($a + $b);
};

function sub ( $a, $b ) {

    return ($a - $b);
};

echo 'a * b = ' . mult(5,10) . '<br>';
echo 'a / b = ' . dev(10,5) . '<br>';
echo 'a + b = ' . sum(100,30) . '<br>';
echo 'a - b = ' . sub(25,5) . '<br>';

function mathOperation ( $a, $b, $operation ) {
    switch ( $operation ) {
        case "mult":
            return mult ( $a, $b );
            break;
        case "dev":
            return dev ( $a, $b );
            break;
        case "sum":
            return sum ( $a, $b );
            break;
        case "sub":
            return sub ( $a, $b );
            break;
    };
};

echo 'a * b = ' . mathOperation (100,10, mult) . '<br>';
echo 'a / b = ' . mathOperation (100,10, dev) . '<br>';
echo 'a + b = ' . mathOperation (100,10, sum) . '<br>';
echo 'a - b = ' . mathOperation (100,10, sub) . '<br>';


?>