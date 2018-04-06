<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";

setcookie("cook", "hey!");
echo "HI";
var_dump($_COOKIE['cook']);
/*
if(isset($_COOKIE['cook2'])){
    echo "кука есть!";
}else{
    setcookie("cook2", "hey!", time() + 60 * 2);
    echo "Привет!!!!";
}*/
