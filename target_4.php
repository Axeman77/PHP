<meta charset="utf-8">
<title>HW3_4</title>

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


// Задание № 4

function translit($str) {

    $words = [
                "а"=>"a",
                "б"=>"b",
                "в"=>"v",
                "г"=>"g",
                "д"=>"d",
                "е"=>"e",
                "ё"=>"e",
                "ж"=>"zh",
                "з"=>"z",
                "и"=>"i",
                "й"=>"i",
                "к"=>"k",
                "л"=>"l",
                "м"=>"m",
                "н"=>"n",
                "о"=>"o",
                "п"=>"p",
                "р"=>"r",
                "с"=>"s",
                "т"=>"t",
                "у"=>"u",
                "ф"=>"f",
                "х"=>"kh",
                "ц"=>"tc",
                "ч"=>"ch",
                "ш"=>"sh",
                "щ"=>"shch",
                "ы"=>"y",
                "э"=>"e",
                "ю"=>"iu",
                "я"=>"ia",
                "ь"=>""
    ];

    foreach ($words as $key => $value)
    {
        $value = $words[$value];
        return $value;
    }
};

echo translit('скрипт');

?>