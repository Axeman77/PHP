<div class = gallery>
    <?php foreach ($files as $file): ?>
    <div>
        <a href="<?=$file?>" target="_blank">
            <img alt='' width='100' src="<?=$file?>">
        </a>
    </div>
<?php endforeach; ?>
</div>