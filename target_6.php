<meta charset="utf-8">
<title>HW3_6</title>

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

$menu = ['Задание №1','Задание №2','Задание №3','Задание №4','Задание №5','Задание №6','Задание №7','Задание №8','Задание №9'];

function menuRender($menu) {
    echo '<ul>';
    foreach ($menu as $key => $value) {
        echo '<li>'.$value.'</li>';
    }
    echo '</ul>';
}
menuRender($menu);

?>
