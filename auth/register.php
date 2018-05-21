<?php
require_once('../db/config.php');
$dbh = new DB_Connection();

if(isset($_POST['hidden']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['name']) && isset($_POST['info'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $info = $_POST['info'];
    $data = $dbh->execQuery("INSERT  INTO users (id,name,email,is_admin,is_teacher,password,information) VALUES ('','$name','$email',0,0,'$pass','$info')");
    if($data != false){
        setcookie("authorized", 1, time() + 7600,"/");

        $data = $dbh->execQuery("SELECT id FROM users where email = '$email'");
        $user = $data->fetchAll(PDO::FETCH_ASSOC);
        $mas=reset($user);
        setcookie("u_id", $mas['id'], time() + 7600,"/");

        ?>
        <script>
            setTimeout(
                function(){alert('Регистрация прошла успешно');},500)
            setTimeout(
                function(){window.location = "/"},550)
        </script>
        <?php
    }else{
        ?>
        <script>
            setTimeout(
                function(){alert('Произошла ошибка. Проверьте правильность введенных данных!');},500)
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
    <link rel="stylesheet" media="screen" href="styles.css" >
    <META HTTP-EQUIV="Content-Language" CONTENT="ru">
    <title>Авторизация пользователя</title>
    <base target="_top">
</HEAD>

<BODY>
<header class="header_style">
<a href="/"><img id="logo" src="../wrap/images/logo.png"></a>

    <nav class="nav">
        <ul>
            <li class="current"><a href="login.php">Оглавление</a></li>
            <li><a href="/program/program.php">Программа</a></li>
            <li><a href="/theory/theory.php">Теория</a></li>
            <li><a href="/practice/practice.php">Практика</a></li>
            <li><a href="/author/author.php">Об авторах</a></li>
            <li><a href="/kwoladge/test.php">Контроль знаний</a></li>
            <?php if(isset($_COOKIE['authorized']) && $_COOKIE['authorized']==1):?>
                <li><a target="_self" href="/profile.php">Профиль</a></li>
                <li><a target="_self" href="/?logout=1">Выйти</a></li>
            <?php else: ?>
                <li><a target="_self" href="/auth/login.php">Войти</a></li>
                <li><a target="_self" href="/auth/register.php">Зарегистрироваться</a></li>
            <?php endif;?>
        </ul>
    </nav>
</header>

<div class="div_main" style="height: 700px">
    <div class="change-password" style="margin-top: 0;margin-bottom: 50px">
        <form class="contact_form" action="#" method="post" name="contact_form">
            <ul>
                <li>
                    <h2>Регистрация</h2>
                    <span class="required_notification">* Обязательные для заполнения поля</span>
                </li>
                <li>
                    <label for="name">Имя:</label>
                    <input type="text" name="name" placeholder="Петр Иванов" required />
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="john_doe@example.com" required />
                    <span class="form_hint">Правильный вариант "name@something.com"</span>
                </li>
                <li>
                    <label for="pass">Пароль:</label>
                    <input type="password" name="pass" placeholder="пароль" required pattern=".+"/>
                </li>
                <li>
                    <label for="message">О себе:</label>
                    <textarea name="info" cols="40" rows="6" ></textarea>
                </li>
                <li>
                    <input type="hidden" name="hidden" value="reg">
                    <button class="submit" type="submit">Регистрация</button>
                </li>
                <style>
                    .form_hint{
                        right: 0;
                        top:16px;
                    }
                    input{
                        height: 35px  !important;
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