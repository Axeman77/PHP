<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/calculation.php";
require_once TEMPLATES_DIR . "/calc.php";

$res = calculation();
echo $res;

