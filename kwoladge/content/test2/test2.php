<!— (C) 2016 Mary Mashinskaya, BSUIR —>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//RU">
<HTML>
<HEAD>
<LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
<LINK rel=stylesheet href="../../css/style.css" type=text/css>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<META HTTP-EQUIV="Content-Language" CONTENT="ru">
<title>Создание SDI-приложений</title>
<base target="_top">
    <script src="../../../js/lib/jquery.min.js"></script>
    <script src="../../../js/lib/jquery.cookie.js"></script>
</HEAD>
<BODY>

<header class="header_style">
<a href="/"><img id="logo" src="../../wrap/images/logo.png"></a>
<nav class="nav">
<ul>
<li><a href="/index.php">Оглавление</a></li>
<li><a href="/program/program.php">Программа</a></li>
<li><a href="/theory/theory.php">Теория</a></li>
<li><a href="/practice/practice.php">Практика</a></li>
<li><a href="/author/author.php">Об авторах</a></li>
    <li class="current"><a href="/kwoladge/test.php">Контроль знаний</a></li>
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

<form id="form" data-id="2" method="post" enctype="text/plain" name="form">

<div data-time="666,2664" class="QS">
    <p>1. Какие из стандартных команд входят в меню File:</p>
    <input type="checkbox" value="1" name="q1">а) New,<br><input type="checkbox" value="2" name="q1">б) Undo,<br><input type="checkbox" value="3" name="q1">в) Find, <br><input type="checkbox" value="4" name="q1">г) Save. <br>
</div>
<div data-time="1332" class="QS">
    <p>2. MFC заменяет надпись Recent File именем</p>
    <input type="radio" value="1" name="RadioGroup2">а) открытых файлов,<br><input type="radio" value="2" name="RadioGroup2">б) последнего открытого файла,<br><input type="radio" value="3" name="RadioGroup2">в) файлов, открытых в этот день.<br>
</div>
<div data-time="1998" class="QS">
    <p>3. AppWizard устанавливает максимальное количество последних использованных файлов, равное </p>
    <input type="radio" value="1" name="RadioGroup3">а) 1,<br><input type="radio" value="2" name="RadioGroup3">б) 3,<br><input type="radio" value="3" name="RadioGroup3">в) 4,<br><input type="radio" value="4" name="RadioGroup3">г) 2.<br>
</div>
<div data-time="1332" class="QS">
    <p>4. MFC хранит имена последних использованных файлов в файле:</p>
    <input type="radio" value="1" name="RadioGroup4">а) MiniDrawDoc.h,<br><input type="radio" value="2" name="RadioGroup4">б) MiniDraw.ini,<br><input type="radio" value="3" name="RadioGroup4">в) MiniDrawDoc.cpp,<br><input type="radio" value="4" name="RadioGroup4">г) MiniDraw.h.<br>
</div>
<div data-time="666" class="QS">
    <p>5. Если в процессе выполнения программы MiniDraw расширение файла при открытии или сохранении не указано, то в диалоговых окнах Open и Save As отобразится список</p>
    <input type="radio" value="1" name="RadioGroup5">а) всех файлов c расширением программы,<br><input type="radio" value="2" name="RadioGroup5">б) всех файлов с расширением .cpp,<br><input type="radio" value="3" name="RadioGroup5">в) всех файлов.<br>
</div>
<div data-time="1998" class="QS">
    <p>6. Можно ли задать расширение файлов с помощью мастера AppWizard:</p>
    <input type="radio" value="1" name="RadioGroup6">а) нет,<br><input type="radio" value="2" name="RadioGroup6">б) да,<br><input type="radio" value="3" name="RadioGroup6">в) только заново создав приложение.<br>
</div>
<div data-time="1332" class="QS">
    <p>7. Требуется ли определять обработчики для команд New, Open…, Save и SaveAs…</p>
    <input type="radio" value="1" name="RadioGroup7">а) да,<br><input type="radio" value="2" name="RadioGroup7">б) нет.<br>
</div>
<div data-time="666" class="QS">
    <p>8. Требуется ли писать код для поддержки команд New, Open…, Save и SaveAs…</p>
    <input type="radio" value="1" name="RadioGroup8">а) да,<br><input type="radio" value="2" name="RadioGroup8">б) нет.<br>
</div>
<div data-time="1998" class="QS">
    <p>9. Какая функция класса CWinApp (от которого порождался класс приложения MiniDraw) обрабатывает команду New меню File:</p>
    <input type="radio" value="1" name="RadioGroup9">а) OnNew,<br><input type="radio" value="2" name="RadioGroup9">б) OnFile,<br><input type="radio" value="3" name="RadioGroup9">в) OnFileNew.<br>
</div>
<div data-time="666" class="QS">
    <p>10. Какая виртуальная функция вызывается для удаления текущего содержимого документа:</p>
    <input type="radio" value="1" name="RadioGroup10">а) DeleteContents,<br><input type="radio" value="2" name="RadioGroup10">б) DeleteFile,<br><input type="radio" value="3" name="RadioGroup10">в) DeleteDoc,<br><input type="radio" value="4" name="RadioGroup10">г) Delete.<br>
</div>
<div data-time="1332" class="QS">
    <p>11. Какой функцией обрабатывается команда Open…</p>
    <input type="radio" value="1" name="RadioGroup11">а) OnOpen,<br><input type="radio" value="2" name="RadioGroup11">б) OnFileOpen,<br><input type="radio" value="3" name="RadioGroup11">в) OnOpenFile.<br>
</div>
<div data-time="666,1332" class="QS">
    <p>12. Функция Serialize предназначена для</p>
    <input type="checkbox" value="1" name="q12">а) выполнения операции чтения данных,<br><input type="checkbox" value="2" name="q12">б) выполнения операции записи данных,<br><input type="checkbox" value="3" name="q12">в) архивации данных.<br>
</div>
<div data-time="2664" class="QS">
    <p>13. Какая функция обрабатывает команду Save</p>
    <input type="radio" value="1" name="RadioGroup13">а) OnSave,<br><input type="radio" value="2" name="RadioGroup13">б) Save,<br><input type="radio" value="3" name="RadioGroup13">в) OnSaveFile,<br><input type="radio" value="4" name="RadioGroup13">г) OnFileSave.<br>
</div>
<div data-time="666" class="QS">
    <p>14. Какое стандартное диалоговое окно отображается, если документ сохраняется впервые</p>
    <input type="radio" value="1" name="RadioGroup14">а) SaveAs,<br><input type="radio" value="2" name="RadioGroup14">б) Save,<br><input type="radio" value="3" name="RadioGroup14">в) SaveFile,<br><input type="radio" value="4" name="RadioGroup14">г) FileSave.<br>
</div>
<div data-time="1998" class="QS">
    <p>15. В каком файле мастер AppWizard определяет минимальную реализацию функции Serialize:</p>
    <input type="radio" value="1" name="RadioGroup15">а) MiniDraw.cpp,<br><input type="radio" value="2" name="RadioGroup15">б) MiniDrawView.cpp<br><input type="radio" value="3" name="RadioGroup15">в) MiniDrawDoc.cpp<br><input type="radio" value="4" name="RadioGroup15">г) MiniDraw.h<br>
</div>
<div data-time="1332" class="QS">
    <p>16. На объект какого класса MFC передает ссылку функции Serialize:</p>
    <input type="radio" value="1" name="RadioGroup16">а) CFile,<br><input type="radio" value="2" name="RadioGroup16">б) CArchive,<br><input type="radio" value="3" name="RadioGroup16">в) Archive.<br>
</div>
<div data-time="1332" class="QS">
    <p>17. Какое значение возвращает функция IsStoring, если файл открыт для чтения </p>
    <input type="radio" value="1" name="RadioGroup17">а) TRUE,<br><input type="radio" value="2" name="RadioGroup17">б) FALSE.<br>
</div>
<div data-time="666" class="QS">
    <p>18. Какое значение возвращает функция IsStoring, если файл открыт для записи:</p>
    <input type="radio" value="1" name="RadioGroup18">а) TRUE,<br><input type="radio" value="2" name="RadioGroup18">б) FALSE.<br>
</div>
<div data-time="666,1998" class="QS">
    <p>19. Для каких данных функция Serialize использует перегруженные операторы “&gt;&gt;” и “&lt;&lt;”:</p>
    <input type="checkbox" value="1" name="q19">а) переменная типа int<br><input type="checkbox" value="2" name="q19">б) объект класса CLine,<br><input type="checkbox" value="3" name="q19">в) объект класса CString.<br>
</div>
<div data-time="1332" class="QS">
    <p>20. Что необходимо включить в определение класса CLine, чтобы обеспечить поддержку сериализации </p>
    <input type="radio" value="1" name="RadioGroup20">а) конструктор с параметрами,<br><input type="radio" value="2" name="RadioGroup20">б) два макроса,<br><input type="radio" value="3" name="RadioGroup20">в) конструктор по умолчанию. <br>
</div>
<div data-time="666,1332" class="QS">
    <p>21. Какие макросы нужно включить в определение класса CLine для поддержания сериализации</p>
    <input type="radio" value="1" name="RadioGroup21">а) DECLARE_SERIAL, <br><input type="radio" value="2" name="RadioGroup21">б) IMPLEMENT_SERIAL,<br><input type="radio" value="3" name="RadioGroup21">в) DECLARE_SER,<br><input type="radio" value="4" name="RadioGroup21">г) DECLARE_IMPLEMENT.<br>
</div>
<div data-time="666" class="QS">
    <p>22. Что означает первый параметр, переданный макросу IMPLEMENT_SERIAL:</p>
    <input type="radio" value="1" name="RadioGroup22">а) имя самого класса,<br><input type="radio" value="2" name="RadioGroup22">б) имя файла, содержащего описание класса<br><input type="radio" value="3" name="RadioGroup22">в) имя базового класса.<br>
</div>
<div data-time="1998" class="QS">
    <p>23. Что означает второй параметр, переданный макросу IMPLEMENT_SERIAL:</p>
    <input type="radio" value="1" name="RadioGroup23">а) имя самого класса,<br><input type="radio" value="2" name="RadioGroup23">б) имя файла, содержащего описание класса<br><input type="radio" value="3" name="RadioGroup23">в) имя базового класса.<br>
</div>
<div data-time="1332" class="QS">
    <p>24. От какого класса должен быть прямо или косвенно порожден класс, объекты которого могут быть сериализованы:</p>
    <input type="radio" value="1" name="RadioGroup24">а) CObArray,<br><input type="radio" value="2" name="RadioGroup24">б) CObject,<br><input type="radio" value="3" name="RadioGroup24">в) CArchive,<br><input type="radio" value="4" name="RadioGroup24">г) CLine.<br>
</div>
<div data-time="1332" class="QS">
    <p>25. Что показывает флаг изменений:</p>
    <input type="radio" value="1" name="RadioGroup25">а) содержит ли документ сохраненные данные, <br><input type="radio" value="2" name="RadioGroup25">б) содержит ли документ несохраненные данные,<br><input type="radio" value="3" name="RadioGroup25">в) содержит ли документ данные. <br>
</div>
<div data-time="666" class="QS">
    <p>26. Когда MFC проверяет флаг изменений:</p>
    <input type="radio" value="1" name="RadioGroup26">а) перед вызовом функции DeleteContents,<br><input type="radio" value="2" name="RadioGroup26">б) в функции DeleteContents,<br><input type="radio" value="3" name="RadioGroup26">в) после функции DeleteContents.<br>
</div>
<div data-time="666,1332,2664" class="QS">
    <p>27. Когда MFC вызывает функцию DeleteContents</p>
    <input type="checkbox" value="1" name="q27">а) перед созданием нового документа, <br><input type="checkbox" value="2" name="q27">б) перед открытием уже существующего документа,<br><input type="checkbox" value="3" name="q27">в) перед сохранением данных,<br><input type="checkbox" value="4" name="q27">г) перед выходом из программы. <br>
</div>
<div data-time="1332,1998" class="QS">
    <p>28. Когда класс CDocument устанавливает значение флага изменений в FALSE:</p>
    <input type="checkbox" value="1" name="q28">а) когда документ изменен,<br><input type="checkbox" value="2" name="q28">б) когда документ открыт,<br><input type="checkbox" value="3" name="q28">в) когда документ сохранен.<br>
</div>
<div data-time="1332" class="QS">
    <p>29. Какая функция вызывается для установки флага изменений в TRUE при каждом изменении документа</p>
    <input type="radio" value="1" name="RadioGroup29">а) SetFlag,<br><input type="radio" value="2" name="RadioGroup29">б) SetModifiedFlag.<br>
</div>
<div data-time="666" class="QS">
    <p>30. Записывает ли функция CObArray::Serialize в файл информацию о классе объекта:</p>
    <input type="radio" value="1" name="RadioGroup30">а) да,<br><input type="radio" value="2" name="RadioGroup30">в) нет.<br>
</div>


<br><br>
<center>
<input style="
				width:150px;height:25px;background:rgb(98, 124, 163);
				border:0px;border-radius:4px;-webkit-box-shadow: 0px 12px 25px -5px #000000;
                -moz-box-shadow: 0px 12px 25px -5px #000000;
                box-shadow: 0px 12px 25px -5px #000000;" 
				onmouseout="reset_color(this);" onmouseover="change_color(this);" 
				
type="button" value="Принять ответ" name="ok" onclick="Test()"/>
<input  style="
				width:150px;height:25px;background:rgb(98, 124, 163);
				border:0px;border-radius:4px;-webkit-box-shadow: 0px 12px 25px -5px #000000;
                -moz-box-shadow: 0px 12px 25px -5px #000000;
                box-shadow: 0px 12px 25px -5px #000000;" 
				onmouseout="reset_color(this);" onmouseover="change_color(this);" 

type="reset" value="Сбросить" name="res" onclick="resa()" />
    <input  style="
				width:150px;height:25px;background:rgb(98, 124, 163);
				border:0px;border-radius:4px;-webkit-box-shadow: 0px 12px 25px -5px #000000;
                -moz-box-shadow: 0px 12px 25px -5px #000000;
                box-shadow: 0px 12px 25px -5px #000000;"
            onmouseout="print(this);"

            type="reset" value="Печать" name="print" onclick="printt()" />
<center>

</form><br><br>

<div id="show">
	<table id="results-table"  style='display:none;' cellpadding="0" cellspacing="0" border="1">
		<thead><tr><th>№ вопроса:</th></tr></thead>
		<tbody><tr><td>Рез-т:</td></tr></tbody>
	</table>
</div>
<br><br><br><br>

<footer class="footer_style">
<p>БГУИР 2016</p>
</footer>

<script src="../../../js/test_results.js"></script>

</body>
</html>