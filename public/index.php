<?php
header('Content-Type:text/html; charset=utf-8;');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/db.php";


$conn = mysqli_connect( "localhost", "root", "", "fire");
$id = mysqli_escape_string($conn, $_GET['id']);
$res = query("SELECT * FROM products WHERE id = {$id}", $conn);
var_dump($res);
mysqli_close($conn);


?>

<form action="">
    <input type="text" name="id">
    <input type="submit">
</form>