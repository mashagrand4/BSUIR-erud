
<!-- (C) 2010 Nesterenkov Sergey, BSUIR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
    <LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
    <LINK rel=stylesheet href="css/style.css" type=text/css>
    <script src="/js/lib/jquery.min.js"></script>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="Content-Language" CONTENT="ru">
    <title>Программа дисциплины</title>
    <base target="_top">
</HEAD>
<BODY>

<header class="header_style">
     <a href="/"><img id="logo" src="../wrap/images/logo.png"></a>
        <nav class="nav">
        <ul>
            <li><a href="/index.php">Оглавление</a></li>
            <li><a href="/program/program.php">Программа</a></li>
            <li><a href="/theory/theory.php">Теория</a></li>
            <li><a href="/practice/practice.php">Практика</a></li>
            <li><a href="../author/author.php">Об авторах</a></li>
            <li class="current"><a href="#">Контроль знаний</a></li>
            <?php if (isset($_COOKIE['authorized']) && $_COOKIE['authorized'] == 1): ?>
                <li><a target="_self" href="/profile.php">Профиль</a></li>
                <li><a target="_self" href="/?logout=1">Выйти</a></li>
            <?php else: ?>
                <li><a target="_self" href="/auth/login.php">Войти</a></li>
                <li><a target="_self" href="/auth/register.php">Зарегистрироваться</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<br><br>

<p>
<div id="SOT" class="test1"><a href="content/test1/test1.php" >Тест 1:Создание SDI-приложений</a></div>
</p><br>
<p>
<div id="SOT" class="test2"><a href="content/test2/test2.php" >Тест 2:Хранение данных</a></div>
</p><br>
<p>
<div id="SOT" class="test3"><a href="content/test3/test3.php" >Тест 3:Стандартные элементы управленияй</a>
</div>
</p><br>
<p>
<div id="SOT" class="test4"><a href="content/test4/test4.php" >Тест 4:Разработка приложения управления
        базой данных</a></div>
</p>


</BODY>
</HTML>
<?php if (!isset($_COOKIE['authorized'])): ?>
    <script>
        alert("Страница доступна только для авторизированных пользователей!");
        setTimeout(function () {
            location.href = '/'
        },50)
    </script>
<?php endif; ?>