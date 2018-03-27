<h1><?=$title?></h1>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name = 'file'>
    <input type="submit">
    <select name="" id="">
        <?php foreach ($list as $key => $value):?>
            <option value="<?=$key?>"><?=$value?></option>
        <?php endforeach;?>
    </select>
</form>
