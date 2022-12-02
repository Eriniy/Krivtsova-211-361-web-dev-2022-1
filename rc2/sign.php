<?php
    session_start();
    date_default_timezone_set("Europe/Moscow");
    $today = date('d.m.Y в H-i:s');
    $today_unix = strtotime($today);  

    $login = $_POST['login'];
    $pass = $_POST['password'];

    $salt = "f?*-Q@t03#6_z";
    $pass = sha1($sal . $pass);
    

    

    include "db_connect.php";

    $query = "SELECT * FROM `Users` WHERE `login` = '$login'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $arr =  mysqli_fetch_array($result);
        $hash = $arr['hash']; 
        
        if ($pass == $hash){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user'] = [
                "id" => $arr['id'],
                "username" => $arr['username']
            ];

            header('Location: index.php');
        }

    }   
    else {
        header('Location: enter.php');
    } 




?>