<div class=cart>
  <h1>Корзина товаров:</h1>
    <?php if (empty($cart)): ?>
      <div>Корзина пуста!</div>
    <?php else: ?>
        <?php foreach ($cart as $item): ?>
        <div>
          Наименование: <?= $item['name'] ?>;<br>
          Количество: <?= $item['count'] ?>
            <? $item['name'] ?><br>
          <img width="200" src="/images/<?= $item['path'] ?>" alt="img"><br>
          Описание: <?= $item['txt'] ?> <br>
          Цена: <?= $item['price'] ?> $<br>
          <a href="/cart/remove_from_cart?id=<?= $item['id']; ?>">Удалить</a>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>

