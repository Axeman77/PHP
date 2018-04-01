<div class = gallery>
    <?php foreach ($files as $file): ?>
        <div>
            <a href="/img/<?=$file?>" target="_blank">
                <img alt='' width='100' src="/img/<?=$file?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'file'>
    <input type="submit">
</form>