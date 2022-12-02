<?php
$db_host = 'localhost';
$db_user = 'root'; //имя пользователя совпадает с именем БД
$db_password = ''; //пароль, указанный при создании БД
$database = 'shop'; //имя БД, которое было указано при создании
$link = mysqli_connect($db_host, $db_user, $db_password, $database);
if ($link == False) {
    die("Cannot connect DB");
}
?>