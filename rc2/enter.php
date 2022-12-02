<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Форма авторизации</title>

    </head>
    <body>
        <div class="container">
            <h1>Авторизация</h1>
            <form action="sign.php" method="POST">
                <input type="text" name="login" id="login" placeholder="Login">
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit" class="btn">Войти</button>
            </form>
        </div>
    </body>
</html>