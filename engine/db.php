<?php

function getConnection(){
    static $conn = null;
    if(!$conn){
        $conn = mysqli_connect("localhost", "root", "", 'fire');
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