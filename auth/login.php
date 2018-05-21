<?php
require_once('../db/config.php');
$dbh = new DB_Connection();

if (isset($_POST['pass']) && isset($_POST['email'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $data = $dbh->execQuery("SELECT id FROM users where email = '$email' AND password = '$pass'");
    $user = $data->fetchAll(PDO::FETCH_ASSOC);
    if (count($user) > 0) {
        setcookie("authorized", 1, time() + 7600, "/");
        $ids = reset($user);
        setcookie("u_id", $ids['id'], time() + 7600, "/");
        ?>
        <script>
            setTimeout(
                function () {
                    alert('Успешно авторизированы!');
                }, 500)
            setTimeout(
                function () {
                    window.location = "/"
                }, 500)
        </script>
        <?php
    } else {
        ?>
        <script>
            setTimeout(
                function () {
                    alert('Произошла ошибка. Проверьте правильность введенных данных!');
                }, 500)
        </script>
        <?php
    }
}
?>
<!-- (C) 2016 Mashinskaya Mariya, BSUIR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
    <LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
    <LINK rel=stylesheet href="/auth/styles.css" type=text/css>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf8">
    <link rel="stylesheet" media="screen" href="styles.css">
    <META HTTP-EQUIV="Content-Language" CONTENT="ru">
    <title>Авторизация пользователя</title>
    <base target="_top">
</HEAD>

<BODY>
<header class="header_style">
    <a href="/"><img id="logo" src="../wrap/images/logo.png"></a>

    <nav class="nav">
        <ul>
            <li class="current"><a href="/">Оглавление</a></li>
            <li><a href="/program/program.php">Программа</a></li>
            <li><a href="/theory/theory.php">Теория</a></li>
            <li><a href="/practice/practice.php">Практика</a></li>
            <li><a href="/author/author.php">Об авторах</a></li>
            <li><a href="/kwoladge/test.php">Контроль знаний</a></li>
            <?php if (isset($_COOKIE['authorized']) && $_COOKIE['authorized'] == 1): ?>
                <li><a target="_self" href="/profile.php">Профиль</a></li>
                <li><a target="_self" href="/?logout=1">Выйти</a></li>
            <?php else: ?>
                <li><a target="_self" href="/auth/login.php">Войти</a></li>
                <li><a target="_self" href="/auth/register.php">Регистрация</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<div class="div_main" style="height: 500px">
    <div class="change-password" style="margin-top: 0;margin-bottom: 50px">
        <form class="contact_form" action="#" method="post" name="contact_form">
            <ul>
                <li>
                    <h2>Авторизация пользователя</h2>
                    <span class="required_notification">* Обязательные для заполнения поля</span>
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input style="height: 35px" type="email" name="email" placeholder="john_doe@example.com" required/>
                    <span class="form_hint">Правильный вариант "name@something.com"</span>
                </li>
                <li>
                    <label for="pass">Пароль:</label>
                    <input style="height: 35px" type="password" name="pass" required pattern="{3,16}"/>
                    <span class="form_hint">Пароль не должен быть меньше 4-ёх символов</span>
                </li>
                <li>
                    <button class="submit" type="submit">Войти</button>
                </li>
                <style>
                    .form_hint {
                        right: 0;
                        top: 16px;
                    }
                </style>
            </ul>
        </form>
    </div>
</div>

<footer class="footer_style">
    <p>БГУИР 2016</p>
</footer>

</BODY>
</HTML>
