<?php

function uploadFile ( $destination, $atrName = 'file', $callback = null ) {
    if(isset($_FILES[$atrName])) {
        $tmp = $_FILES[$atrName]['tmp_name'];
        $filePaht = $destination . $_FILES[$atrName]['name'];
        move_uploaded_file($tmp, $filePaht);
        if (!is_null( $callback )){
            $callback( $_FILES[$atrName] );
        }
    }
}

function uploadImg (){
    require_once VENDOR_DIR . "/funcImgResize.php";
    $dir = PUBLIC_DIR . "/img/";
    uploadFile($dir, 'photo', function ($file) use ($dir){
        $fileName = $file['name'];
        img_resize($dir . $fileName, $dir . "/small/{$fileName}",200, 150);
        execute("INSERT INTO images (name, path)
                VALUES ('{$fileName}', '{$fileName}')");
        });
}