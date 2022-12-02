<?php
session_start();

?>
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
    <link rel="stylesheet" href="../rc2/style.css">
    <script src="script.js"></script>
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
            <div class="inline right name"><?= $_SESSION['user']['username'] ?></div>
        </header>
        <main>
            <section class="info">
                <table class="table_prev">
                    <tr>
                        <td>
                        <img src="../rc2/img/logo_rc.jpg">

                        </td>
                        <td>
                            <h1>Наш интернет магазин приветствует вас! Добро пожаловать!</h1><br>
                            <p>Только мы даем самые низкие цены на свою продукцию, а если вы найдете еще дешевле, то мы снизим цену еще больше. Наш интернет магазин работает на рынке более 5 лет и мы уже давно зарекомендовали себя как надежного и уверенного поставщика товара. Покупая в нашем магазине, вы будете всегда счастливы и рады вернуться к нам снова.</p><br>
                            <p>Представленный ассортимент является самым широким и у нас есть все, что вам нужно. Наши менеджеры всегда будут рады вам помочь.</p>

                        </td>
                    </tr>
                </table>
            </section>

            <section class="product_category">
                <div class="block_line">
                    <div class="card">
                        <h3>FOOD</h3>
                        <img src="../rc2/img/food.jpg">
                        <p>Value</p>
                        <button class="btn_buy"><a href="card.php">Buy</a></button>
                    </div>
                    <div class="card">
                        <h3>PLAYS</h3>
                        <img src="../rc2/img/play.jpg">
                        <p>Value</p>
                        <button class="btn_buy"><a href="card.php">Buy</a></button>
                    </div>
                    <div class="card">
                        <h3>CLOTHER</h3>
                        <img src="../rc2/img/clother.jpg">
                        <p>Value</p>
                        <button class="btn_buy"><a href="card.php">Buy</a></button>
                    </div>
                </div>

            </section>

            <section class="about">
                <h2>Товары для животных в зоомагазине «POMPOM»</h2>
                <p>Домашние питомцы обеспечивают хорошее настроение, приносят радость своим хозяевам. Но их содержание требует надлежащего ухода. Ведь чтобы питомцы были здоровыми, веселыми, красивыми, полными сил и энергии, их нужно обеспечить подходящей пищей, витаминами, аксессуарами для игр, развития, времяпровождения. В зоомагазине «Мой Зоодом» имеется весь спектр товаров для животных, рыбок, рептилий, птиц. У нас можно приобрести по низкой стоимости качественную пищу и аксессуары для домашних любимцев.</p>

                <p>Вся имеющаяся в нашем каталоге продукция изготовлена проверенными отечественными и зарубежными производителями. Проходит тщательные лабораторные исследования. Качество и безопасность соответствует всем мировым стандартам.</p>

                <p>Для кошек и собак вы сможете подобрать повседневные и лечебные корма, различные виды кормушек, подставок, поилок, контейнеры для переноски, домики и лежанки, многое другое.</p>

                <h2>Наши преимущества</h2>
                <ul>
                    <li>Зоомагазин «Мой Зоодом» имеет множество положительных отзывов покупателей. Мы гарантируем индивидуальный подход к каждому клиенту. У нас можно быстро подобрать и купить первоклассные товары по выгодной цене. Мы сотрудничаем лишь с проверенными поставщиками, гарантируем высокое качество.</li>
                    <li>Оплата принимается наличными, банковскими картами, электронными деньгами. Периодически проводятся акции. Предоставляются существенные скидки. Доставка осуществляется по Москве и Московской области.</li>
                    <li>Наши консультанты помогут подобрать наиболее подходящие товары для вашего питомца. Подробно ответят на вопросы по использованию лечебных кормов и витаминов, дозировке, методу кормления. Проконсультируют по правильному содержанию и уходу за любыми питомцами.</li>
                    <li>Наши консультанты помогут подобрать наиболее подходящие товары для вашего питомца. Подробно ответят на вопросы по использованию лечебных кормов и витаминов, дозировке, методу кормления. Проконсультируют по правильному содержанию и уходу за любыми питомцами.</li>
                    <li>Сделав покупку у нас, вы не только купите качественную продукцию, но и сможете неплохо сэкономить. Ведь наши цены одни из наиболее низких в Москве. Среди наших основных преимуществ можно отметить:</li>
                        <ol>
                            <li>Высокую квалификацию сотрудников</li>
                            <li>Выгодную стоимость.</li>
                            <li>Большой ассортимент продукции</li>
                            <li>Хорошее настроение</li>
                        </ol>
                </ul>
            </section>
            


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