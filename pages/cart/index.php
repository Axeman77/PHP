<?php
$cart = [];
if (!empty($_SESSION['cart'])) {
    $productsIds = array_keys($_SESSION['cart']);
    $products = getProductByIds($productsIds);
    foreach ($products as $product) {
        $cart[] = [
            'id' => $product["id"],
            'name' => $product["name"],
            'model' => $product["model"],
            'txt' => $product["txt"],
            'path' => $product["path"],
            'price' => $product["price"],
            'product' => $product,
            'count' => $_SESSION['cart'][$product['id']]
        ];
    }
}
echo render("cart", ['cart' => $cart]);


