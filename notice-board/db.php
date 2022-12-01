<?php
session_start();
header('Construt-Type: text/html; charset=utf-8');
$db = new mysqli("localhost","root","111111","WEPP");
$db->set_charset("utf8");

function query($query)
(
    global $db;
    return $db->query($query);
)
?>