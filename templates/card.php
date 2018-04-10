<h1><?= $product['name'] ?></h1>
<div>
  Товар: <?= $product['model'] ?><br>
  Описание: <?= $product['txt'] ?><br>
  Цена: <?= $product['price'] ?> $
</div>
<img src="<?= "/images/{$product['path']}" ?>" alt="img">
<div>
  <button id="add_to_cart" data-id="<?= $product['id'] ?>">Add to cart</button>
</div>
<script>
    $(function () {
        $("#add_to_cart").on("click", function () {
            var id = $(this).data('id');
            $.ajax({
                url: "/cart/add_to_cart",
                type: "POST",
                data: {
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
