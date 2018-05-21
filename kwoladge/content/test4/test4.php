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
<li class="current"><a href="/kwoladge/test.php">Контроль знаний</a></li>
    <?php if(isset($_COOKIE['authorized']) && $_COOKIE['authorized']==1):?>
        <li><a href="/author/author.php">Об авторах</a></li>
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

<form id="form" data-id="4" method="post" enctype="text/plain" name="form">

<div class="QS" data-time="666">
    <p>1. Для чего предназначен класс, производный от CrecordView:</p>
    <input name="RadioGroup1" value="1" type="radio">а) для отображения данных в окне приложения,<br><input name="RadioGroup1" value="2" type="radio">б) для отображения документа в окне приложения<br><input name="RadioGroup1" value="3" type="radio">в) для отображения приложения.<br>
</div>
<div class="QS" data-time="666">
    <p>2. Какой стиль нужно установить для текстового поля, отображающего ключевое поле таблицы базы данных:</p>
    <input name="RadioGroup2" value="1" type="radio">а) Read-only,<br><input name="RadioGroup2" value="2" type="radio">б) Uppercase,<br><input name="RadioGroup2" value="3" type="radio">в) No hide selection,<br><input name="RadioGroup2" value="4" type="radio">г) Password.<br>
</div>
<div class="QS" data-time="1332">
    <p>3. Какому типу должна соответствовать переменная m_ID_User:</p>
    <input name="RadioGroup3" value="1" type="radio">а) CString,<br><input name="RadioGroup3" value="2" type="radio">б) long,<br><input name="RadioGroup3" value="3" type="radio">в) int.<br>
</div>
<div class="QS" data-time="1332">
    <p>4. Какому типу должна соответствовать переменная m_UserFirstName:</p>
    <input name="RadioGroup4" value="1" type="radio">а) long,<br><input name="RadioGroup4" value="2" type="radio">б) CString,<br><input name="RadioGroup4" value="3" type="radio">в) int.<br>
</div>
<div class="QS" data-time="1332,1998">
    <p>5. Какие классы Visual C++ помогают реализовать добавление и удаление записей достаточно просто:</p>
    <input name="q5" value="1" type="checkbox">а) CRecordDelete,<br><input name="q5" value="2" type="checkbox">б) CRecordView,<br><input name="q5" value="3" type="checkbox">в) CRecordSet,<br><input name="q5" value="4" type="checkbox">г) CRecordAdd.<br>
</div>
<div class="QS" data-time="1332">
    <p>6. Какой узел необходимо развернуть в дереве ресурсов для работы с панелью инструментов:</p>
    <input name="RadioGroup6" value="1" type="radio">а) Dialog,<br><input name="RadioGroup6" value="2" type="radio">б) ToolBar,<br><input name="RadioGroup6" value="3" type="radio">в) Menu,<br><input name="RadioGroup6" value="4" type="radio">г) Icon.<br>
</div>
<div class="QS" data-time="1332">
    <p>7. Какое окно откроется, если вы сделаете двойной щелчок на новой пиктограмме:</p>
    <input name="RadioGroup7" value="1" type="radio">а) ToolBar,<br><input name="RadioGroup7" value="2" type="radio">б) ToolBar Propeties,<br><input name="RadioGroup7" value="3" type="radio">в) ToolBar Button Propeties,<br><input name="RadioGroup7" value="4" type="radio">г) ToolBar Add Propeties.<br>
</div>
<div class="QS" data-time="1332">
    <p>8. Какой идентификатор следует присвоить пиктограмме, означающей добавление элемента:</p>
    <input name="RadioGroup8" value="1" type="radio">а) ID_ADD,<br><input name="RadioGroup8" value="2" type="radio">б) ID_RECORD_ADD,<br><input name="RadioGroup8" value="3" type="radio">в) ID_RECORD.<br>
</div>
<div class="QS" data-time="1332">
    <p>9. В каком классе следует организовать перехват сообщений, посылаемых, когда пользователь щелкает на пиктограмме или выбирает пункт меню с целью отобразить записи таблиц:</p>
    <input name="RadioGroup9" value="1" type="radio">а) в классе документа,<br><input name="RadioGroup9" value="2" type="radio">б) в классе представления.<br>
</div>
<div class="QS" data-time="666">
    <p>10. Предлагает ли Class Wizard имя функций по умолчанию для обработчиков командных сообщений:</p>
    <input name="RadioGroup10" value="1" type="radio">а) да,<br><input name="RadioGroup10" value="2" type="radio">б) нет.<br>
</div>
<div class="QS" data-time="1332">
    <p>11. Для чего вызывается метод SetReadOnly() в функции OnRecordAdd:</p>
    <input name="RadioGroup11" value="1" type="radio">а) для присвоения значения TRUE атрибуту “только для чтения” элемента управления,<br><input name="RadioGroup11" value="2" type="radio">б) для присвоения значения FALSE атрибуту “только для чтения” элемента управления.<br>
</div>
<div class="QS" data-time="1998">
    <p>12. Для чего вызывается функция UpdateData() в функции OnRecordAdd:</p>
    <input name="RadioGroup12" value="1" type="radio">а) для отображения на экране первой записи,<br><input name="RadioGroup12" value="2" type="radio">б) для отображения на экране новой заполненной записи,<br><input name="RadioGroup12" value="3" type="radio">в) для отображения на экране новой пустой записи.<br>
</div>
<div class="QS" data-time="2664">
    <p>13. Какая переменная выясняет, от какой записи происходит переход: от существовавшей или от вновь добавленной:</p>
    <input name="RadioGroup13" value="1" type="radio">а) m_Adding,<br><input name="RadioGroup13" value="2" type="radio">б) m_Add,<br><input name="RadioGroup13" value="3" type="radio">в) m_CAdd,<br><input name="RadioGroup13" value="4" type="radio">г) m_bAdding.<br>
</div>
<div class="QS" data-time="1332">
    <p>14. Какая функция определяет, можно ли обновлять источник данных:</p>
    <input name="RadioGroup14" value="1" type="radio">а) CanDo(),<br><input name="RadioGroup14" value="2" type="radio">б) CanUpdate(),<br><input name="RadioGroup14" value="3" type="radio">в) Update(),<br><input name="RadioGroup14" value="4" type="radio">г) UpdateData().<br>
</div>
<div class="QS" data-time="1332">
    <p>15. Для чего программа вызывает функцию Requery():</p>
    <input name="RadioGroup15" value="1" type="radio">а) для формирования запроса,<br><input name="RadioGroup15" value="2" type="radio">б) для формирования новой выборки данных,<br><input name="RadioGroup15" value="3" type="radio">в) для записи данных в БД.<br>
</div>
<div class="QS" data-time="666">
    <p>16. Что позволяет сделать метод MoveNext():</p>
    <input name="RadioGroup16" value="1" type="radio">а) перейти к отображению следующей записи таблицы,<br><input name="RadioGroup16" value="2" type="radio">б) перейти к отображению предыдущей записи таблицы.<br>
</div>
<div class="QS" data-time="1998">
    <p>17. Какой метод позволяет выяснить, достигнут ли конец последовательности записей:</p>
    <input name="RadioGroup17" value="1" type="radio">а) IsEOFile(),<br><input name="RadioGroup17" value="2" type="radio">б) EOFile(),<br><input name="RadioGroup17" value="3" type="radio">в) IsEOF(),<br><input name="RadioGroup17" value="4" type="radio">г) EOF().<br>
</div>
<div class="QS" data-time="1332">
    <p>18. Какой метод класса выборки данных используется для помещения указателя записи на последнюю запись в текущей выборке:</p>
    <input name="RadioGroup18" value="1" type="radio">а) MoveNext,<br><input name="RadioGroup18" value="2" type="radio">б) MoveLast,<br><input name="RadioGroup18" value="3" type="radio">в) MoveTo.<br>
</div>
<div class="QS" data-time="666">
    <p>19. Где будет находиться указатель текущей записи, когда все записи из текущей выборки будут удалены:</p>
    <input name="RadioGroup19" value="1" type="radio">а) в начале выборки,<br><input name="RadioGroup19" value="2" type="radio">б) в конце выборки.<br>
</div>
<div class="QS" data-time="1998">
    <p>20. Какая функция обновляет содержимое окна представления:</p>
    <input name="RadioGroup20" value="1" type="radio">а) CanUpdate(),<br><input name="RadioGroup20" value="2" type="radio">б) Update(),<br><input name="RadioGroup20" value="3" type="radio">в) UpdateData(FALSE),<br><input name="RadioGroup20" value="4" type="radio">г) UpdateData(TRUE).<br>
</div>
<div class="QS" data-time="666">
    <p>21. В каком классе организуется перехват команд сортировки:</p>
    <input name="RadioGroup21" value="1" type="radio">а) CDBView,<br><input name="RadioGroup21" value="2" type="radio">б) CDBDoc,<br><input name="RadioGroup21" value="3" type="radio">в) CDBApp.<br>
</div>
<div class="QS" data-time="666,1332,1998,2664">
    <p>22. Какая функция вызывает функцию DoFilter():</p>
    <input name="q22" value="1" type="checkbox">а) OnFilterFirstName(),<br><input name="q22" value="2" type="checkbox">б) OnFilterMiddleName(),<br><input name="q22" value="3" type="checkbox">в) OnFilterLastName(),<br><input name="q22" value="4" type="checkbox">г) OnFilterEMail().<br>
</div>
<div class="QS" data-time="666">
    <p>23. Должен ли метод DoFilter() быть защищенным?:</p>
    <input name="RadioGroup23" value="1" type="radio">а) да,<br><input name="RadioGroup23" value="2" type="radio">б) нет.<br>
</div>
<div class="QS" data-time="1332">
    <p>24. Должен ли метод DoFilter() быть виртуальным?:</p>
    <input name="RadioGroup24" value="1" type="radio">а) да,<br><input name="RadioGroup24" value="2" type="radio">б) нет.<br>
</div>
<div class="QS" data-time="666">
    <p>25. С чем сравнивает функция DoFilter() подсчитанное количество записей в создаваемой выборке:</p>
    <input name="RadioGroup25" value="1" type="radio">а) с 0,<br><input name="RadioGroup25" value="2" type="radio">б) с 1,<br><input name="RadioGroup25" value="3" type="radio">в) с максимально возможным количеством записей.<br>
</div>
<div class="QS" data-time="1332,2664">
    <p>26. Какие стандарты доступа к базам данных поддерживает библиотека MFC:</p>
    <input name="q26" value="1" type="checkbox">а) OAO,<br><input name="q26" value="2" type="checkbox">б) ODBC,<br><input name="q26" value="3" type="checkbox">в) BAO,<br><input name="q26" value="4" type="checkbox">г) DAO.<br>
</div>
<div class="QS" data-time="1332">
    <p>27. На какое имя нужно изменить имя класса CRecordSet, чтобы заменить интерфейс доступа с ODBC на DAO:</p>
    <input name="RadioGroup27" value="1" type="radio">а) CDaRecordSet,<br><input name="RadioGroup27" value="2" type="radio">б) CDaoRecordSet,<br><input name="RadioGroup27" value="3" type="radio">в) DaoRecordSet,<br><input name="RadioGroup27" value="4" type="radio">г) CDaoRecord.<br>
</div>
<div class="QS" data-time="666">
    <p>28. Как реализованы ODBC-классы:</p>
    <input name="RadioGroup28" value="1" type="radio">а) как набор модулей DLL,<br><input name="RadioGroup28" value="2" type="radio">б) в виде объектов OLE. <br>
</div>
<div class="QS" data-time="1332">
    <p>29. Как реализованы классы DAO:</p>
    <input name="RadioGroup29" value="1" type="radio">а) как набор модулей DLL,<br><input name="RadioGroup29" value="2" type="radio">б) в виде объектов OLE.<br>
</div>
<div class="QS" data-time="666">
    <p>30. На работу с какими базами данных ориентирована DAO:</p>
    <input name="RadioGroup30" value="1" type="radio">а) формата .mdb,<br><input name="RadioGroup30" value="2" type="radio">б) формата .xls,<br><input name="RadioGroup30" value="3" type="radio">в) формата .db,<br>
</div>
<div class="QS" data-time="1332">
    <p>31. Как называется класс источника данных в ODBC:</p>
    <input name="RadioGroup31" value="1" type="radio">а) CData,<br><input name="RadioGroup31" value="2" type="radio">б) CDatabase,<br><input name="RadioGroup31" value="3" type="radio">в) CDaoData,<br><input name="RadioGroup31" value="4" type="radio">г) CDaoDatabase.<br>
</div>
<div class="QS" data-time="2664">
    <p>32. Как называется класс источника данных в DAO:</p>
    <input name="RadioGroup32" value="1" type="radio">а) CData,<br><input name="RadioGroup32" value="2" type="radio">б) CDataBase,<br><input name="RadioGroup32" value="3" type="radio">в) CDaoData,<br><input name="RadioGroup32" value="4" type="radio">г) CDaoDatabase.<br>
</div>
<div class="QS" data-time="666">
    <p>33. Включают ли классы DAO методы, которым нет аналогов в классах ODBC:</p>
    <input name="RadioGroup33" value="1" type="radio">а) да,<br><input name="RadioGroup33" value="2" type="radio">б) нет.<br>
</div>
<div class="QS" data-time="1332">
    <p>34. Включают ли классы ODBC методы, которым нет аналогов в классах DAO:</p>
    <input name="RadioGroup34" value="1" type="radio">а) да,<br><input name="RadioGroup34" value="2" type="radio">б) нет.<br>
</div>
<div class="QS" data-time="666,1332,1998,2664">
    <p>35. Что предпримет программа, если набор записей при выполнении фильтрации оказался пустым? </p>
    <input name="q35" value="1" type="checkbox">а) выведет сообщение об этом,<br><input name="q35" value="2" type="checkbox">б) закроет выборку, <br><input name="q35" value="3" type="checkbox">в) присвоит строковой переменной фильтра пустое значение,<br><input name="q35" value="4" type="checkbox">г) откроет выборку записей.<br>
</div>
<div class="QS" data-time="1332,1998">
    <p>36. Что можно выбрать в диалоговом окне на втором этапе AppWizard при разработке приложения управления базой данных:</p>
    <input name="q36" value="1" type="checkbox">а) None,<br><input name="q36" value="2" type="checkbox">б) Header files only,<br><input name="q36" value="3" type="checkbox">в) Database view without file support.<br>
</div>
<div class="QS" data-time="1332">
    <p>37. С какими объектами обмениваются данными элементы редактирования в БД-приложениях:</p>
    <input name="RadioGroup37" value="1" type="radio">а) с переменными-членами класса CDBView,<br><input name="RadioGroup37" value="2" type="radio">б) с переменными-членами класса CDBSet,<br><input name="RadioGroup37" value="3" type="radio">в) с источником данных.<br>
</div>
<div class="QS" data-time="1332">
    <p>38. Что возвращает функция GetDlgItem():</p>
    <input name="RadioGroup38" value="1" type="radio">а) значение элемента управления,<br><input name="RadioGroup38" value="2" type="radio">б) указатель на элемент управления.<br>
</div>
<div class="QS" data-time="666,1332,1998">
    <p>39. Куда осуществляет переход функция OnMove:</p>
    <input name="q39" value="1" type="checkbox">а) к следующей записи,<br><input name="q39" value="2" type="checkbox">б) к предыдущей записи,<br><input name="q39" value="3" type="checkbox">в) к другой записи.<br>
</div>
<div class="QS" data-time="1332,1998">
    <p>40. С какими объектами обмениваются данными переменные-члены класса CDBSet:</p>
    <input name="q40" value="1" type="checkbox">а) с переменными-членами класса CDBView,<br><input name="q40" value="2" type="checkbox">в) с источником данных,<br><input name="q40" value="3" type="checkbox">г) с элементами редактирования на диалоговой форме.<br>
</div>
<div class="QS" data-time="1332">
    <p>41. Сортировка выполняется, когда выборка данных:</p>
    <input name="RadioGroup41" value="1" type="radio">а) закрывается,<br><input name="RadioGroup41" value="2" type="radio">б) открывается.<br>
</div>
<div class="QS" data-time="1998">
    <p>42. Для чего используется переменная m_strSort:</p>
    <input name="RadioGroup42" value="1" type="radio">а) для выбора режима сортировки,<br><input name="RadioGroup42" value="2" type="radio">б) для установки флага сортировки,<br><input name="RadioGroup42" value="3" type="radio">в) для задания поля, по которому осуществляется сортировка.<br>
</div>
<div class="QS" data-time="666,1998">
    <p>43. Когда анализируется строковая переменная m_strSort:</p>
    <input name="q43" value="1" type="checkbox">а) при открытии выборки данных,<br><input name="q43" value="2" type="checkbox">б) при записи в источник данных,<br><input name="q43" value="3" type="checkbox">в) при обновлении выборки данных.<br>
</div>
<div class="QS" data-time="666">
    <p>44. Какому методу передается строковая переменная, определяющая поле, по которому требуется выполнить фильтрацию:</p>
    <input name="RadioGroup44" value="1" type="radio">а) DoFilter(),<br><input name="RadioGroup44" value="2" type="radio">б) OnFilterMiddleName(),<br><input name="RadioGroup44" value="3" type="radio">в) OnFilterLastName().<br>
</div>
<div class="QS" data-time="666,1332">
    <p>45. Что такое строка фильтрации «ИдентификаторПоля=значение»?</p>
    <input name="q45" value="1" type="checkbox">а) выражение на языке SQL,<br><input name="q45" value="2" type="checkbox">б) значение переменной m_strFilter,<br><input name="q45" value="3" type="checkbox">б) Имя поля таблицы данных.<br>
</div>
<div class="QS" data-time="666">
    <p>46. Могут ли содержаться пробелы в строке фильтрации?</p>
    <input name="RadioGroup46" value="1" type="radio">а) нет,<br><input name="RadioGroup46" value="2" type="radio">б) да.<br>
</div>
<div class="QS" data-time="1332">
    <p>47. Обязательно ли выполнять закрытие выборки данных для выполнения сортировки по другому полю?</p>
    <input name="RadioGroup47" value="1" type="radio">а) нет,<br><input name="RadioGroup47" value="2" type="radio">б) да.<br>
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