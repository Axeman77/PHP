<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if ($user = getUserByLoginPass($login, $pass)) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: /lk/index");
        exit;
    }
    $message = "Неправильный логин-пароль!";
}
echo render('login', ['message' => $message]);



