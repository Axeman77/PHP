<style type="text/css">
    <?php include PUBLIC_DIR .  "/css/style.css" ?>
</style>
<div class = gallery>
    <?php foreach ($images as $image):?>
        <div>
            <a href="/item.php?id=<?=$image['id']?>">
                <img width="200" src="/images/<?=$image['path']?>" alt="">
            </a>
        </div>
    <?php endforeach; ?>
</div>