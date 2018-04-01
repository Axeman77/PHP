<?php

function uploadFile ( $destination, $atrName = 'file' ) {
    if(isset($_FILES['$atrName'])) {
        $tmp = $_FILES['$atrName']['tmp_name'];
        $filePaht = $destination . $_FILES['$atrName']['name'];
        move_uploaded_file($tmp, $filePaht);
    }
}