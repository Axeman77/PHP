<?php
session_start();
if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    header("Location: /log/index");
    exit;
}
$userId = $_SESSION['user_id'];
$user = getUserById($userId);
echo render("lk", ['user' => $user]);