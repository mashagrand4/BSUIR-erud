<!-- (C) 2010 Nesterenkov Sergey, BSUIR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
<LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<META HTTP-EQUIV="Content-Language" CONTENT="ru">
<title>Ввведение</title>
<base target="_top">
</HEAD><BODY>
<header class="header_style">
<a href="/"><img id="logo" src="../../../wrap/images/logo.png"></a>
 <nav class="nav">
    <ul>
      <li><a href="/index.php">Оглавление</a></li>
      <li><a href="/program/program.php">Программа</a></li>
      <li class="current"><a href="#">Теория</a></li>
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
<br><br>

<div style="font-size:20;"><center><strong>ВВЕДЕНИЕ</strong></center></div><br><br>
<div style="font-size:14;margin:0px 200px 20px 200px;text-indent:70px;line-height: 1.4">
<p>Дисциплина «Визуальные средства разработки программных приложений» позволяет студентам получить теоретические знания и практические навыки в области разработки прикладных приложений на основе средств визуального проектирования и программирования. Курс базируется на средствах визуального программирования на языке С++ в среде Microsoft Developer Studio с использованием библиотеки классов Microsoft Foundation Classes (MFC).<p>
<p>Visual C++ представляет собой мощный  и сложный инструмент для создания Windows-приложений. Несмотря на то, что объем и сложность разрабатываемых программ увеличиваются, для их создания от программиста требуется не больше, а меньше усилий, если он научился правильно выбирать инструментальные средства.</p>
<p>Среда разработки оснащена набором мастеров (Wizard), формирующих программный код. Этот продукт позволяет в считанные секунды создать вполне работоспособное приложение Windows . Включенная в состав Visual C++ библиотека классов (MFC) содержит практически весь программный интерфейс Windows и позволяет пользоваться при программировании средствами более высокого уровня, чем обычные вызовы функций. Визуальные средства разработки интерфейса пользователя превращают процесс создания разнообразных меню, диалоговых окон, элементов управления в довольно увлекательный процесс выбора и настройки графических средств. Для этого используются мастера (или генераторы) приложений. Программист, отвечает на вопросы  мастера приложений и определяет свойства приложения - поддерживает ли оно многооконный режим, технологию OLE, трехмерные органы управления, справочную систему. Генератор приложений создаст приложение, отвечающее требованиям, и предоставит исходные тексты. Пользуясь им как шаблоном (или каркасом), программист сможет быстро разрабатывать свои приложения.</p>
</div>

<center><input style="width:150px;height:25px;background:rgb(98, 124, 163);
						border:0px;border-radius:4px;-webkit-box-shadow: 0px 12px 25px -5px #000000;
                      -moz-box-shadow: 0px 12px 25px -5px #000000;
                      box-shadow: 0px 12px 25px -5px #000000;" onmouseout="reset_color(this);" onmouseover="change_color(this);" type="button" value="Назад" onclick="history.back()">
<center>
<br><br><br><br><br><br>
<footer class="footer_style">
<p>БГУИР 2016</p>
</footer>

<script type="text/javascript">
function reset_color(num1){
 num1.style.backgroundColor = 'rgb(98, 124, 163)';
}

function change_color(num){
 num.style.backgroundColor = 'rgb(138, 162, 207)';
}
</script>

</BODY></HTML>