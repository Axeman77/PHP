<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";
require_once ENGINE_DIR . "/user.php";


session_start();
if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    header("Location: /login.php");
    exit;
}

$userId = $_SESSION['user_id'];
$user = getUserById($userId);
echo render("lk", ['user' => $user]);