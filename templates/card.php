<h1><?=$product['name']?></h1>
<div>
  Товар:<?=$product['model']?><br>
  Описание: <?=$product['txt']?>
</div>
<img src="<?="/images/{$product['path']}"?>" alt="img">
<div>
    <a href="add_to_basket.php?id=<?=$product['id']?>"></a>
</div>
