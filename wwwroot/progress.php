<?php
error_reporting(0);
session_start();

$i = ini_get('session.upload_progress.name');

$key = ini_get('session.upload_progress.prefix') . $_GET[$i];
//print_r($key);exit;
if (isset($_SESSION[$key])) {
        $current = $_SESSION[$key]["bytes_processed"];
        $total = $_SESSION[$key]["content_length"];
        echo $current < $total ? ceil($current / $total * 100) : 100;
}else{
        echo 100;
}