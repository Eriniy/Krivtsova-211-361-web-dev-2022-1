<?php 
    include 'header.html';
?>
<?php
    $login='demo';
    $password='pass'
?>
<div class="wrap">
        <main class="main_form2">
            <form name="log_in" action="#" enctype="multipart/form-data" method="post" class="center">
                <legend class="form2_legend">Авторизация</legend>
                <input type="text" name="login" placeholder="логин" class="txt_block"><br>
                <input type="password" name="pass" placeholder="пароль" class="txt_block"><br>
                <input type="checkbox" name="remember" value="Запомнить меня" class="checkbox"><label class="form2_label">Запомнить меня</label><br>
                <input type="submit" value="Войти" class="button">

                <? if (isset($_POST['login']) & isset($_POST['pass'])) {if ($_POST['login'] == $login & $_POST['pass'] == $password) echo "<p>Авторизация прошла успешно!</p>";} ?>
            </form>          
        </main>
        <footer>

            <span class="left">Все права защищены &copy; 2022</span>
            <span class="right">
                <span class="contact">+7 (991) 648-48-27</span>
                <span class="contact">yul.krivaya@bk.ru</span>
            </span>
        
        </footer>
    </div>
</body>
</html>