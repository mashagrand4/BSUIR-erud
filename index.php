<?php

if(isset($_GET['logout']) && $_GET['logout']==1){
    setcookie('authorized', '', time() - 3600, '/');
    setcookie('u_id', '', time() - 3600, '/');
    ?>
    <script type="">
        setTimeout(
                function(){window.location = "/"},820)
    </script>
    <?php
}
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
	<LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<META HTTP-EQUIV="Content-Language" CONTENT="ru">
	<title>ЭРУД</title>
	<base target="_top">
</HEAD>
<body>
    <div class="wrapper">
        <header class="header_style">
         <a href="/"><img id="logo" src="wrap/images/logo.png"></a>
         <nav class="nav">
            <ul>
              <li class="current"><a href="index.php">Оглавление</a></li>
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
                  <li><a target="_self" href="/auth/register.php">Регистрация</a></li>
              <?php endif;?>
            </ul>
          </nav>
        </header>

        <div class="div_main">
            <h1>ЭРУД</h1>
            <h3>по дисциплине</h3>
            <h2>"Визуальные средства разработки программных приложений"</h2>
            <div class="navigation">
                <div class="nav_images"><a HREF="/program/program.php" TITLE=""><img src="/wrap/images/111.jpg"></a></div>
                <div class="nav_images"><a HREF="/theory/theory.php" TITLE=""><img src="/wrap/images/222.jpg"></a></div>
                <div class="nav_images"><a HREF="/practice/practice.php" TITLE=""><img src="/wrap/images/333.jpg"></a></div>
                <div class="nav_images"><a HREF="/kwoladge/test.php" TITLE=""><img src="/wrap/images/444.jpg"></a></div>
            </div>
        </div>

        <footer class="footer_style">
            <p>БГУИР 2017</p>
        </footer>
    </div>

</BODY>
</HTML>
