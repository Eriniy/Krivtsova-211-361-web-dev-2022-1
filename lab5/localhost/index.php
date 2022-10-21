<?php
$title = 'Все о котиках';
$title1 = 'Кривцова';
date_default_timezone_set("Europe/Moscow");
$today = date('d.m.Y в H-i:s');  
$array = array('Погладить','Покормить','Поласкать','Обнять','Поиграть','Дать вкусняшку', 'Не мешать спать'); 
?>
<head>
    <meta charset="utf-8">
    <title>FirstPage</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="main_page.html" id="logo">Главная</a>
        <a href="#"><span class="nav">Обо мне</span></a>
        <a href="#"><span class="nav">Навыкки</span></a>
        <span class="right">
            <a href="one_form.html"><span class="nav">Обратная связь</span></a>
            <a href="two_form.html"><span class="nav">Войти</span></a>
        </span>
    </header>

    <div class="wrap">
        <main class="main">
            <secion class="title">
                <h1>Все о котиках</h1>
            </section>
              <section class="history">
                <div class="text">
                    <h2>Когда появились кошчки?</h2>
                    <p>Чтобы ответить на этот вопрос нам придётся вернуться на 66 млн. лет назад, во времена, когда до появления кошкообразных (Feliformia) оставалось ещё несколько миллионов лет. В те времена появилось семейство Miacidae, представители которого, предположительно являлись предками хищных (Carnivora). А первые Carnivora были предками кошкообразных (Feliformia) и собакообразных (Caniformia).</p>
                </div>
                
                <img src="cat1.jpg" alt="cat1" title="12333"> 

              </section> 
              <section class="new">
                <h2>Мини-альбом</h2>
                <div class="text_img">
                        <?php
                            include "../localhost/include/db.php";
                            $sql = "SELECT * FROM image";
                            $result = mysqli_query($db, $sql);
                            
                            if (!$result) die('Error result');
                            
                            while ($row_img = mysqli_fetch_assoc($result)) {
                                ?>
                                    <img title="<?php echo $row_img['name'];?>" src="<?php echo $row_img['src']?>" height="300" />
                                    
                                <?php

                                
                            }
                        ?>
                    </div>
              </section>

              <section class="formule_cats_love">
                <h2>Рецепт достижния любви котиков</h2>
                <? foreach ($array as $n => $row) {
                    echo ($n + 1) . '.' . $row . "<br>\r\n";
                } ?>

              </section> 

              <section class="albom_cats">
                <div class="text">
                    <h2>Когда появились кошечки?</h2>
                    <p>Все котики любят проводить свое свободное время за едой, еще бы, она же великолепна!</p>
                    <p>Сейчас можно углубиться в историю котика через его фотографии, мы так старались сдлать его фоточки неповторимыми, так что оцените по достоинству</p>
                </div>
                <? echo '<img title="wewe" src="cat'.(date('s') % 2+1).'.jpg" alt="Меняющаяся фотография">'; ?>

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