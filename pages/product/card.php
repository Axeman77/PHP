<?php
$id = $_GET['id'];
$product = getProductById($id);
echo render("card", ['product' => $product]);
?>
