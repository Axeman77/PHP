<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";
require_once ENGINE_DIR . "/user.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $login = $_POST['login'];
   $pass = $_POST['password'];
   if($user = getUserByLoginPass($login, $pass)){
       session_start();
       $_SESSION['user_id'] = $user['id'];
       header("Location: /lk.php");
       exit;
   }
   $message =  "Неправильный логин-пароль!";

}
echo render('login',['message' => $message]);
?>


