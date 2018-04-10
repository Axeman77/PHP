<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $content = $_POST['content'];
    execute("INSERT INTO comments (name, content) 
              VALUES('{$name}', '{$content}')");
}

echo render('comments', ['name' => $name, 'content' => $content]);
?>



