<?php 
    include 'header.html';
?>
<?php
    if (isset($_GET['N'])) {$name =$_GET['N'];} else {$name='';}
    if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
    if (isset($_GET['R'])) {$radioB =$_GET['R'];} else {$radioB='';}

?>

<div class="wrap">
        <main class="main_form1">
            <form name="log_in" action="answer.php" enctype="multipart/form-data" method="post" class="center">
                <legend class="form1_legend">Форма обратной связи</legend>
                <label class="left_label">ФИО</label><input type="text" name="name" value="<?=$name ?>" placeholder="ФИО"  class="txt_block"><br>
                <label class="left_label">e-mail</label><input type="text" name="email" placeholder="email" value="<?=$email ?>" class="txt_block"><br>
                <p><label for="textarea">Введите текст сообщения</label></p>
                <textarea name="message"></textarea><br>
                <select size="1" name="type_mess" class="select">
                    <option selected disabled>выберите тип</option>
                    <option value="жалоба">предложение</option>
                    <option value="предложение">жалоба</option>
                </select>
                <p class="p_left">Откуда вы узнали о нас?</p>
                <div class="radio">
                    <label>реклама из интернета</label><input name="radioB" type="radio" value="1" <?php if ($radioB == '1') echo ' checked="checked"' ?>>
                    <label>рассказали друзья</label><input name="radioB" type="radio" value="2" <?php if ($radioB == '2') echo ' checked="checked"' ?>>
                </div>
                <input type="file" name="file_f" class="file"><br>
                <span><label class="form1_label">Даю согласие на обработку данных</label></span><input type="checkbox" name="know" value="network" class="checkbox"><br>
                <input type="submit" value="Отправить" class="button">

                
                
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