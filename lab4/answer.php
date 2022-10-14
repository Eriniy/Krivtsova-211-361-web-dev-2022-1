<?php 
    include 'header.html';
?>
<?php
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $message=$_POST['message'];
        $type_mess=$_POST['type_mess'];
        // $radioB=$_POST['radioB'];
        if (isset($_POST['radioB'])) {$radioB=$_POST['radioB'];} else {$radioB='';}
    }
?>
<?
    echo '<p>Здравствуйте, '.$_POST['name'].'</p>';
    if ($_POST['type_mess'] == 'предложение'){
        echo '<p> Спасибо за ваше предложние:</p>';
        echo '<textarea>'.$_POST['message'].'</textarea>';
    }else{
        echo '<p>Мы рассмотрим вашу жалобу:</p>';
        echo '<textarea>'.$_POST['message'].'</textarea>';
    }
    if (isset($_FILES['file_f']) & $_FILES['file_f'] != '') echo '<p>Вы приложили следующий файл: '.$_FILES['file_f']['name'].'</p>';

    echo '<p><a href="form_of_com.php?N='.$_POST['name'].'&E='.$_POST['email'].'&R='.$radioB.'">Заполнить снова</a></p>';

?>

