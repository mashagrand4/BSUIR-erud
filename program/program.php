<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
    <LINK rel=stylesheet href="css/style_word.css" type=text/css>
    <LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="Content-Language" CONTENT="ru">
    <title>Программа</title>
    <base target="_top">
</HEAD>

<BODY>
    <header class="header_style">
        <a href="/"><img id="logo" src="../wrap/images/logo.png"></a>
        <nav class="nav">
            <ul>
              <li><a href="/index.php">Оглавление</a></li>
              <li class="current"><a href="#">Программа</a></li>
              <li><a href="/theory/theory.php">Теория</a></li>
              <li><a href="/practice/practice.php">Практика</a></li>
              <li><a href="../author/author.php">Об авторах</a></li>
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

    <main>
        <iframe  src="str.html" width=99% height=100%>
    </main>

    <footer class="footer_style">
    <p>БГУИР 2016</p>
    </footer>
</BODY>
</HTML>
