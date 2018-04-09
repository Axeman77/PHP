<div class = gallery>
    <?php foreach ($products as $product):?>
      <div>
        <a href="/card.php?id=<?=$product['id']?>">
          <?=$product['name']?><br>
          <img width="200" src="/images/<?=$product['path']?>" alt="img"><br>
            <?=$product['price']?> $
        </a>
      </div>
    <?php endforeach; ?>
</div>
