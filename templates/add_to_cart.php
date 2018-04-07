<style type="text/css">
    <?php include PUBLIC_DIR .  "/css/style.css" ?>
</style>
<div class = cart>
    <h1>Корзина товаров:</h1>
    <?php
    session_start();
    var_dump($_SESSION ['cart'][0]);
    foreach ($_SESSION ['cart'][0] as $product):?>
        <div>
                Наименование: <?=$product['name']?><br>
                <img width="200" src="/images/<?=$product['path']?>" alt="img"><br>
                Описание: <?=$product['txt']?> <br>
                Цена: <?=$product['price']?> $<br>
        </div>
    <?php endforeach; ?>
</div>
// не получается вывести несколько товаров


