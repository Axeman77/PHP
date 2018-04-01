<?php

header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";

function displayHello () {
    echo "Hello, World!";
};

function getGallery () {
    return array_filter(
        scandir(PUBLIC_DIR . "/img"),
        function($item){return !in_array($item,[".",".."]);}
    );
};



// read
function listFolderFiles($dir){ // $dir - папка с файлами
    $list = scandir($dir); // получаем список файлов указанной директории
    echo '<ol>'; // открываем нумерованный список
    foreach($list as $k){ // для каждого имени файла полученного scandir
        if(false !== ($k != ".") && ($k != "..")){ // исключая имена '.' и '..'
            echo '<li>' . $k; // открываем тег, вложенного элемента с именем файла
            if(is_dir($dir . '/' . $k)) { // если в папке $dir $k - папка, то
                listFolderFiles($dir . '/' . $k); // запускаем рекурсивно нашу функцию для вложенной папки
            }
            echo '</li>'; // закрываем тег
        }
    }
    echo '</ol>'; // закрываем тег
}
// delete
function removeDirectory($dir) {
    if ( $objs = glob($dir . "/*" )) { // если в папке есть вложенные папки, помещаем в переменную все директории
        foreach( $objs as $k ) { // для каждого элемента массива директорий
            is_dir($k) ? removeDirectory($k) : unlink($k); // если элемент не папка, то сразу удаляем, иначе запускаем рекурсивно нашу функцию для вложенной папки
        }
    }
    rmdir($dir); // если в папке только файлы то сразу их удаляем
}

function render ($template, $params = [], $useLayout = true) {
    $content = renderTemplate($template, $params);
    if ($useLayout) {
        $content = renderTemplate('layouts/layout', ['content' => $content]);
    }
    return $content;
}


function renderTemplate ($template, $params = []) {
    ob_start();
    extract($params);
    include TEMPLATES_DIR . "/{$template}.php";
    return ob_get_clean();
}