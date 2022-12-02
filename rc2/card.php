<!DOCTYPE html>
<html long="ru">
<head>
    <meta charset="utf-8">
    <title>Krivaya</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="inline"><a href="index.php" class="menu"><img src="../rc2/img/logo_rc.jpg" class="logo"></a></div>
            <div class="inline"><a href="index.php" class="menu">Главная</a></div>
            <div class="inline"><a href="card.php" class="menu">Магазин</a></div>
            <div class="inline"><a href="enter.php" class="menu">Войти</a></div>
            <div class="inline"><a href="reg.php" class="menu">Регистрация</a></div>
            <div class="inline"><a href="exit.php" class="menu" id="exit">Выход</a></div>
        </header>
        <main>

            <div class="catalog">
                <table class="cards_teble">
                    <tr>
                        <?php
                            include "db_connect.php";

                            $query_id = "SELECT * FROM product";

                            $result_id = mysqli_query($link, $query_id);
                            while ($row_id = mysqli_fetch_assoc($result_id)) {
                                $id = $row_id['id'];
                                $name = $row_id['name'];
                                $price = $row_id['price'];
                                $smallc = $row_id['smallc'];

                                echo '<td><div>
                                <h3>'. $name .'</h3>
                                <img src="img/p'.$id.'.jpg">
                                <p>'.$smallc.'</p>
                                <p>Цена: '.$price.'</p>
                                <button type="submit" class="btn_buy" value="'.$id.'"><a href="page.php?id='.$id.'">Buy</a></button>
                                </div></td>';
                                // header("Location: page.php?id=".$id);
                            }  
                            
                            // $salt = "f?*-Q@t03#6_z";
                            // $pass = sha1($sal . "admin");
                            // echo $pass;

                        ?>
                    </tr>
                </table>
            </div>
            
            


        </main>
        <footer>
            <span class="left">
                <span>Все права защищены &copy; by krivtsova</span><br>

            </span> 
            <span class="right">
                <span>Tel.: +7(923) 112-21-12</span><br>
                <span>Email: strongshop@bk.ru</span><br>

                
            </span> 

        </footer>
    </div>
</body>
</html>