<meta charset="utf-8">
<title>Домашнее задание_6</title>

<header>
    <ul>
        <li><a href="index.php">Задание №1</a></li>
        <li><a href="target_3_4.php">Задание №3-4</a></li>
        <li><a href="target_5.php">Задание №5</a></li>
        <li><a href="target_6.php">Задание №6</a></li>
        <li><a href="target_7.php">Задание №7</a></li>
    </ul>
</header>

<?php

function power($val, $pow) {
    	if ($pow <= 1) {
        		return $val;
	}
	return $val * power($val, $pow - 1);
}

echo '$val в степени $pow = ' . power(2,2);

?>


