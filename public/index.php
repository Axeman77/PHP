<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/autoload.php";
session_start();

if (!$path = preg_replace(["#^/#", "#[?].*#"], "", $_SERVER['REQUEST_URI'])) {
    $path = "product/index";
}

$pageName = PAGES_DIR . "/" . $path . ".php";

if (file_exists(($pageName))) {
    include $pageName;
}