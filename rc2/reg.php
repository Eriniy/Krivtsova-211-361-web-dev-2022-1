<?php

include "db_connect.php";

if (!empty($_POST)){
    $result = mysqli_query($link, "SELECT * FROM users WHERE login=\"".$_POST['login']."\"");
    
    //echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) == 0){
        $salt = "f?*-Q@t03#6_z";
        $pass = sha1($sal . $_POST["password"]);

        mysqli_query($link, "INSERT INTO users (username, login, hash) VALUES (
            \"".$_POST["name"]."\", 
            \"".$_POST["login"]."\",
            \"".$pass."\"
            )"
        );
    }
    //$id = mysqli_insert_id($connect);
    header("Location: sign.php");
}

echo "<form method=\"POST\">
<div>
    <label>ФИО</label>
    <input type=\"text\" name=\"name\">
</div>

<div>
    <label>Логин</label>
    <input type=\"text\" name=\"login\">
</div>

<div>
    <label>Пароль</label>
    <input type=\"password\" name=\"password\">
</div>

<div>
    <button type=\"submit\">Регистрация</button>
</div>
</form>";
?>