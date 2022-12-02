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
            <?
            include "db_connect.php";

            $result = mysqli_query($link, "SELECT * FROM product WHERE id=".$_GET['id']);
            

            if(!$result || mysqli_num_rows($result) == 0){
                echo "В базе данных нет страниц.";
                header("Location: card.php");
            }
            else{
                $row_id = mysqli_fetch_assoc($result);
                $id = $row_id['id'];
                $name = $row_id['name'];
                $price = $row_id['price'];
                $amount = $row_id['amount'];
                $content = $row_id['content'];
                
                echo '
                <h3>'.$name.'</h3>
                <img src="../rc2/img/p'.$id.'.jpg" class="big">
                <p>Цена: '.$price.'</p>
                <p>Кол-во товаров: '.$amount.'</p>
                <p>Описание: '.$content.'</p>
                ';

            }    

            ?>


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