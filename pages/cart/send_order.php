<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    execute("INSERT INTO order (name, quantity) 
              VALUES('{$name}', '{$quantity}')");
}

