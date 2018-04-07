<?php
session_start();
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";
require_once ENGINE_DIR . "/user.php";



if (isset($_SESSION['login'])) {
    $id = $_SESSION['login'];
    var_dump($_SESSION['login']);
    $data = queryAll("SELECT login, name FROM users WHERE id = '{$id}'");
    var_dump($data);
    include TEMPLATES_DIR . '/lk.php';
} else {
    header('location: /index.php');
}

?>