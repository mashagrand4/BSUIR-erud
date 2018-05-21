<!-- (C) 2010 Nesterenkov Sergey, BSUIR -->
<!DOCTYPE html>
<HTML>
<HEAD>
<LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<META HTTP-EQUIV="Content-Language" CONTENT="ru">
<title>Об авторах</title>
<base target="_top">
</HEAD><BODY>
<header class="header_style">
 <a href="/"><img id="logo" src="../wrap/images/logo.png"></a></h1>
<nav class="nav">
    <ul>
      <li><a href="/index.php">Оглавление</a></li>
      <li><a href="/program/program.php">Программа</a></li>
      <li><a href="/theory/theory.php">Теория</a></li>
      <li><a href="/practice/practice.php">Практика</a></li>
      <li class="current"><a href="#">Об авторах</a></li>
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

<main class="author">
    <img style="width: 13.8%; padding-right: 5px;" src="../wrap/images/12_100229_1_71629.jpg">
    <img src="../wrap/images/12_100229_1_71635.jpg">
   <p>Машинская М.Ю., Комличенко В.Н., Кириенко Н.А. </p>
</main>


</BODY>
</HTML>