<?php
header('Content-Type: text/html;charset=utf-8');
include_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "/render.php";
require_once ENGINE_DIR . "/uploads.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $content = $_POST['content'];
    execute("INSERT INTO comments (name, content) 
              VALUES('{$name}', '{$content}')");
}
?>

<form action="" method="post">
    Имя: <input type="text" name="name"/> <br>
    Комментарий:<br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <input name="" value="Send" type="submit"/>
</form>

<form action="" method="post">
  <input name='operation' value="+" type="submit"/>
  <input name='operation' value="-" type="submit"/>
  <input name='operation' value="*" type="submit"/>
  <input name='operation' value="/" type="submit"/>
</form>
