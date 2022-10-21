<?php 
    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', 'root'); //Имя пользователя
    define('DB_PASSWORD', ''); //Пароль
    define('DB_NAME', 'lab5_data'); //Имя БД   
   
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
?>
