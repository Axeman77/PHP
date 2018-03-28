<div class = gallery>
    <?php foreach ($files as $image): ?>
    <div>
        <a href="<?=$image?>">
            <img alt='' width='100' src="<?=$image?>">
        </a>
    </div>
<?php endforeach; ?>
</div>