<div class=cart>
  <h1>Корзина товаров:</h1>
  <div class="cart-items">
      <?php if (empty($cart)): ?>
        <div>Корзина пуста!</div>
      <?php else: ?>
          <?php foreach ($cart as $item): ?>
          <div class="cart-item">
            Наименование: <?= $item['name'] ?>;<br>
            Количество: <?= $item['count'] ?>
              <? $item['name'] ?><br>
            <img width="200" src="/images/<?= $item['path'] ?>" alt="img"><br>
            Описание: <?= $item['txt'] ?> <br>
            Цена: <?= $item['price'] ?> $<br>
            Количество:
            <form action="" method="post" class="quantity">
              <div>
                <button class="remove" data-id="<?= $item['id'] ?>">-</button>
              </div>
              <div>
                <input type="text" name="quantity" value="1" size="2"/>
              </div>
              <div>
                <button class="add" data-id="<?= $item['id']; var_dump($_POST); ?>">+</button>
              </div>
            </form>
            <a href="/cart/remove_from_cart?id=<?= $item['id']; ?>">Удалить</a>
          </div>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>
  <script>
      $(function () {
          $(".add").on("click", function () {
              var id = $(this).data('id');
              $.ajax({
                  url: "/cart/add_to_cart",
                  type: "POST",
                  data: {
                      cart_add: true,
                      id: id
                  },
                  success: function (response) {
                      response = JSON.parse(response);
                      if (response.status == "ok") {
                          alert("Товар добавлен в корзину");
                      }
                  }
              });
          });
      });
  </script>
