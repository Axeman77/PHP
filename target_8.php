<meta charset="utf-8">
<title>HW3_8</title>

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

// Задание № 3

$cityRegion = [
    "Московская область"    => ["Москва", "Мытищи", "Руза", "Химки", "Клин",],

    "Ленинградская область" => ["Санкт-Петербург","Всеволожск","Павловск","Кронштадт",],

    "Рязанская область"     => ["Рязань","Кораблино","Скопин","Касимов",],

    "Владимирская область"  => ["Владимир","Ковров","Киржач","Александров",],

];

foreach ($cityRegion as $region => $cities)
{
    echo ( "<br/>" . " $region: " . "<br/>" );
    foreach ($cities as $key => $value)
    {
        if (mb_substr ($value, 0, 1)  == "К")
        {
            echo $value . "</br>";
          }
    }
}

?>