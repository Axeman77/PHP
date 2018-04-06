<?php
function getConnection(){
    static $conn = null;
    if(!$conn){
        $config = include CONFIG_DIR . "/db.php";
        $conn = mysqli_connect(
            $config["host"], $config["login"], $config["password"], $config['database']
        );
    }
    return $conn;
}

function queryAll($sql){
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql){
    return queryAll($sql)[0];
}

function execute($sql){
    return mysqli_query(getConnection(), $sql);
}