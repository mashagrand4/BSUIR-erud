<!-- (C) 2016 Mary Mashinskaya, BSUIR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
    <LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
    <LINK rel=stylesheet href="css/Style.css" type=text/css>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="Content-Language" CONTENT="ru">
    <title>Программа дисциплины</title>
    <base target="_top">
</HEAD>
<BODY>
    <header class="header_style">
     <a href="/"><img id="logo" src="../wrap/images/logo.png">
     <nav class="nav">
        <ul>
          <li><a href="/index.php">Оглавление</a></li>
          <li><a href="/program/program.php">Программа</a></li>
          <li><a href="/theory/theory.php">Теория</a></li>
          <li class="current"><a href="#">Практика</a></li>
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
    <div class="div_main">
        <div class="SOT"><a href="content/labs/labs.php" >Лабораторный практикум</a></div>
        <div class="SOT"><a href="content/study_mat/study_mat.php" >Учебный материал</a></div>
        <div class="SOT"><a href="content/course_proj/course_proj.php" >Положение о выполнении курсовой работы</a></div>
    </div>

</BODY>
</HTML>