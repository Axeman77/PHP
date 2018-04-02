<div class = gallery>
    <?php foreach ($images as $image):?>
        <div>
            <a href="/photo.php?id=<?=$image['id']?>">
            <img width="200" src="/img/small/<?=$image['path']?>" alt="">
          </a>
        </div>
    <?php endforeach; ?>
</div>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'photo'/>
    <input type="submit"/>
</form>