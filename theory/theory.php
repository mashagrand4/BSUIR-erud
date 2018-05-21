<!DOCTYPE html>

<HTML>
<HEAD>
    <LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
    <LINK rel=stylesheet href="css/Style.css" type=text/css>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <title>Теория по курсу</title>
</HEAD>

<BODY>

<header class="header_style">
<a href="/"><img id="logo" src="../wrap/images/logo.png"></a>
 <nav class="nav">
    <ul>
      <li><a href="/index.php">Оглавление</a></li>
      <li><a href="/program/program.php">Программа</a></li>
      <li class="current"><a href="#">Теория</a></li>
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

<div class="links">
    <ol>
        <li><a href="content/introduction/introduction.php">Введение. Предмет и содерджание дисциплины</a></li>
        <li><a href="content/lk1/lk11.php">Основные методы и инструментальные средства разработки программных приложений</a></li>
        <li><a href="content/lk1/lk11.php#unc2">Принципы функционирования программ под Windows. Управление графическим выводом</a></li>
        <li><a href="content/lk1/lk11.php#unc3">Средство автоматизированной разработки приложений AppWizard. Основные этапы разработки Windows-приложений</a></li>
        <li><a href="content/lk1/lk11.php#unc4">Архитектура Document-View. SDI- и MDI-приложения</a></li>
        <li><a href="content/lk1/lk11.php#unc5">Сообщения и команды. Обработка сообщений с помощью ClassWizard</a></li>
        <li><a href="content/lk1/lk11.php#unc6">Вывод на экран графической информации. Рисование графических примитивов</a></li>
        <li><a href="content/lk1/lk11.php#unc7">Сохранение и восстановление состояния объектов</a></li>
        <li><a href="content/lk1/lk11.php#unc8">Работа с файловой системой</a></li>
        <li><a href="content/lk1/lk11.php#unc9">Диалоги. Классы окон. Элементы управления</a></li>
        <li><a href="content/lk1/lk11.php#unc10">Обзор классов окон библиотеки MFC. Стандартные диалоговые панели</a></li>
        <li><a href="content/lk1/lk11.php#unc11">Доступ к базам данных на основе технологии ODBC</a></li>
        <li><a href="content/lk1/lk11.php#unc12">Программирование операций с таблицами базы данных</a></li>
        <li><a href="content/lk1/lk11.php#unc13">Управление базой данных ODBC. Классы для работы с базами данных</a></li>
        <li><a href="content/lk1/lk11.php#unc13">Доступ к данным в Visual C++</a></li>
        <li><a href="content/lk1/lk11.php#unc14">Потоки в Visual C++</a></li>
        <li><a href="content/lk1/lk11.php#unc15">Создание и использование динамически связываемых библиотек(DLL)</a></li>
        <li><a href="content/lk1/lk11.php#unc16">Введение в технологии OLE и ActiveX. Основные понятия COM</a></li>
        <li><a href="content/lk1/lk11.php#unc17">Обзор технологий ActiveX и OLE</a></li>
        <li><a href="content/lk1/lk11.php#unc18">Использование элементов ActiveX для разработки интерфейса приложения</a></li>
        <li><a href="content/lk1/lk11.php#unc19">Использование технологии OLE DB для доступа к базе данных</a></li>
        <li><a href="content/lk1/lk11.php#unc20">программирование сетевых приложений в Visual C++</a></li>
        <li><a href="content/lk1/lk11.php#unc21">Создание сетевого приложения</a></li>
    </ol>
</div>

    <footer class="footer_style">
        <p>БГУИР 2016</p>
    </footer>

</BODY>
</HTML>