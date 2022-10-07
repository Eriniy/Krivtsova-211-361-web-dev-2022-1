<?php
$title = 'Все о котиках';
date_default_timezone_set("Europe/Moscow");
$today = date('d.m.Y в H-i:s');  
$array = array('Погладить','Покормить','Поласкать','Обнять','Поиграть','Дать вкусняшку', 'Не мешать спать');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
    <title>Кривцова</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="allStyle.css">

</head>
<body>
    <header>
        <a href="page1.php" id="logo">Главная</a>
        <a href="#aboutCats"><span class="nav">О котиках</span></a>
        <a href="#formule"><span class="nav">Рецепт</span></a>
        <span class="right">
            <a href="<?php	
            $name='Обратная связь'; 
            $link='one_form.html';	
            $current_page=true;	

            echo $link;	

            ?>"><?php	

            if( $current_page )	
            echo $name;	
                ?>
            </a>
            <a href="<?php	
            $name='Войти'; 
            $link='two_form.html';	
            $current_page=true;	

            echo $link;	

            ?>"><?php	

            if( $current_page )	
            echo $name;	
                ?>
            </a>
        </span>
    </header>

    <div class="wrap">

        <main class="main">
            <secion class="title">
                <h1><?= $title ?></h1>
            </section>
            <section class="history">
                <a id="abourCats"></a>
                <div class="text">
                    <h2>Когда появились кошчки?</h2>
                    <p>Чтобы ответить на этот вопрос нам придётся вернуться на 66 млн. лет назад, во времена, когда до появления кошкообразных (Feliformia) оставалось ещё несколько миллионов лет. В те времена появилось семейство Miacidae, представители которого, предположительно являлись предками хищных (Carnivora). А первые Carnivora были предками кошкообразных (Feliformia) и собакообразных (Caniformia).</p>
                </div>
            <img src="img/cat.jpg" alt="cat">

            </section> 

            <section class="formule_cats_love">
                <a id="formule"></a>
                <h2>Рецепт достижния любви котиков</h2>
                <? foreach ($array as $n => $row) {
                    echo ($n + 1) . '.' . $row . "<br>\r\n";
                } ?>
                
            </section> 

            <section class="albom_cats">
                 <div class="text">
                    <h2>Фотоальбом котиков</h2>
                    <p>Все котики любят проводить свое свободное время за едой, еще бы, она же великолепна!</p>
                    <p>Сейчас можно углубиться в историю котика через его фотографии, мы так старались сдлать его фоточки неповторимыми, так что оцените по достоинству</p>
                </div>
                <? echo '<img src="img/cat'.(date('s') % 2+1).'.jpg" alt="Меняющаяся фотография">'; ?>

            </section>  
        </main>


        <footer>
            <span class="left">Все права защищены &copy; <?= $today?></span>
            <span class="right">
                <span class="contact">+7 (991) 648-48-27</span>
                <span class="contact">yul.krivaya@bk.ru</span>
            </span>
        
        </footer>

    </div>

</body>
</html>