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
<form id="form" data-id="3" method="post" enctype="text/plain" name="form">

<div class="QS" data-time="1332">
    <p>1. Сколько диалоговых окон может иметь SDI-приложение?</p>
    <input name="RadioGroup1" value="1" type="radio">Одно<br><input name="RadioGroup1" value="2" type="radio">Любое количество<br><input name="RadioGroup1" value="3" type="radio">Не больше 4<br><input name="RadioGroup1" value="4" type="radio">Два<br>
</div>
<div class="QS" data-time="666,1332">
    <p>2. Что включено в класс диалогового окна?</p>
    <input name="q2" value="1" type="checkbox">Переменные<br><input name="q2" value="2" type="checkbox">Функции-члены<br><input name="q2" value="3" type="checkbox">Элементы управления<br>
</div>
<div class="QS" data-time="1332">
    <p>3. Что содержат ресурсы диалога?</p>
    <input name="RadioGroup3" value="1" type="radio">Переменные<br><input name="RadioGroup3" value="2" type="radio">Элементы управления<br><input name="RadioGroup3" value="3" type="radio">Функции-члены<br>
</div>
<div class="QS" data-time="1332">
    <p>4. Что является первым шагом процесса организации диалогового окна в приложении?</p>
    <input name="RadioGroup4" value="1" type="radio">Создание класса окна<br><input name="RadioGroup4" value="2" type="radio">Формирование ресурса окна<br><input name="RadioGroup4" value="3" type="radio">Выбор типа окна<br>
</div>
<div class="QS" data-time="666">
    <p>5. Как называется окно, которое всегда выводится поверх остальных окон и которое обязательно надо закрыть, чтобы приступить к работе с другими окнами?</p>
    <input name="RadioGroup5" value="1" type="radio">Модальное<br><input name="RadioGroup5" value="2" type="radio">Немодальное<br>
</div>
<div class="QS" data-time="1332">
    <p>6. Как называется окно, которое позволяет пользователю, не закрывая его, приступить к работе в других окнах, а потом опять вернуться к нему?</p>
    <input name="RadioGroup6" value="1" type="radio">Модальное<br><input name="RadioGroup6" value="2" type="radio">Немодальное<br>
</div>
<div class="QS" data-time="666">
    <p>7. Можно ли изменять размеры элементов управления на поверхности диалогового окна?</p>
    <input name="RadioGroup7" value="1" type="radio">Да<br><input name="RadioGroup7" value="2" type="radio">Нет<br>
</div>
<div class="QS" data-time="666">
    <p>8. Какой элемент управления используется только как поле для вывода надписи?</p>
    <input name="RadioGroup8" value="1" type="radio">Static text<br><input name="RadioGroup8" value="2" type="radio">List text<br><input name="RadioGroup8" value="3" type="radio">Edit box<br><input name="RadioGroup8" value="4" type="radio">Check box<br>
</div>
<div class="QS" data-time="1998">
    <p>9. Какой элемент управления используется для ввода текста?</p>
    <input name="RadioGroup9" value="1" type="radio">Static text<br><input name="RadioGroup9" value="2" type="radio">List text<br><input name="RadioGroup9" value="3" type="radio">Edit box<br><input name="RadioGroup9" value="4" type="radio">Check box<br>
</div>
<div class="QS" data-time="666">
    <p>10. Может ли быть элемент управления “текстовое поле” многострочным?</p>
    <input name="RadioGroup10" value="1" type="radio">Да<br><input name="RadioGroup10" value="2" type="radio">Нет<br>
</div>
<div class="QS" data-time="666">
    <p>11. Какой элемент управления предназначен для начала каких-либо действий после его нажатия?</p>
    <input name="RadioGroup11" value="1" type="radio">Button<br><input name="RadioGroup11" value="2" type="radio">List text<br><input name="RadioGroup11" value="3" type="radio">Edit box<br><input name="RadioGroup11" value="4" type="radio">Check box<br>
</div>
<div class="QS" data-time="1332,2664">
    <p>12. Какой элемент управления используется для установки опций?</p>
    <input name="q12" value="1" type="checkbox">Button<br><input name="q12" value="2" type="checkbox">Radio button<br><input name="q12" value="3" type="checkbox">Edit box<br><input name="q12" value="4" type="checkbox">Check box<br>
</div>
<div class="QS" data-time="666,1332">
    <p>13. Какой элемент управления используется для выбора одного элемента из заранее подготовленного набора?</p>
    <input name="q13" value="1" type="checkbox">Combo box<br><input name="q13" value="2" type="checkbox">List box<br><input name="q13" value="3" type="checkbox">Edit box<br><input name="q13" value="4" type="checkbox">Check box<br>
</div>
<div class="QS" data-time="666">
    <p>14. При использовании какого элемента управления пользователь может менять элементы в наборе по своей воле, то есть пополнять заранее подготовленный набор элементов?</p>
    <input name="RadioGroup14" value="1" type="radio">Combo box<br><input name="RadioGroup14" value="2" type="radio">List box<br><input name="RadioGroup14" value="3" type="radio">Edit box<br><input name="RadioGroup14" value="4" type="radio">Check box<br>
</div>
<div class="QS" data-time="666">
    <p>15. Какой префикс имеют идентификаторы диалоговых окон?</p>
    <input name="RadioGroup15" value="1" type="radio">IDD_<br><input name="RadioGroup15" value="2" type="radio">IDC_<br><input name="RadioGroup15" value="3" type="radio">ICD_<br><input name="RadioGroup15" value="4" type="radio">DDE_<br>
</div>
<div class="QS" data-time="1332">
    <p>16. Какой префикс имеют идентификаторы элементов управления?</p>
    <input name="RadioGroup16" value="1" type="radio">IDD_<br><input name="RadioGroup16" value="2" type="radio">IDC_<br><input name="RadioGroup16" value="3" type="radio">ICD_<br><input name="RadioGroup16" value="4" type="radio">DDE_<br>
</div>
<div class="QS" data-time="666,1998">
    <p>17. Чему может соответствовать ассоциированная переменная класса диалогового окна по отношению к элементу управления?</p>
    <input name="q17" value="1" type="checkbox">Его значению<br><input name="q17" value="2" type="checkbox">Идентификатору элемента управления<br><input name="q17" value="3" type="checkbox">Объекту его класса<br>
</div>
<div class="QS" data-time="666,1332,1998,2664">
    <p>18. С какими типами переменных может быть ассоциирован элемент управления “текстовые поля”?</p>
    <input name="q18" value="1" type="checkbox">Int<br><input name="q18" value="2" type="checkbox">CString<br><input name="q18" value="3" type="checkbox">Float<br><input name="q18" value="4" type="checkbox">Long<br>
</div>
<div class="QS" data-time="2664">
    <p>19. С какими типами переменных может быть ассоциирован элемент управления “флажки”?</p>
    <input name="RadioGroup19" value="1" type="radio">Int<br><input name="RadioGroup19" value="2" type="radio">CString<br><input name="RadioGroup19" value="3" type="radio">Float<br><input name="RadioGroup19" value="4" type="radio">BOOL<br>
</div>
<div class="QS" data-time="666">
    <p>20. С какими типами переменных может быть ассоциирован элемент управления “переключатели”?</p>
    <input name="RadioGroup20" value="1" type="radio">Int<br><input name="RadioGroup20" value="2" type="radio">CString<br><input name="RadioGroup20" value="3" type="radio">Float<br><input name="RadioGroup20" value="4" type="radio">BOOL<br>
</div>
<div class="QS" data-time="1332,1998">
    <p>21. С какими типами переменных может быть ассоциирован элемент управления “список”?</p>
    <input name="q21" value="1" type="checkbox">Int<br><input name="q21" value="2" type="checkbox">CString<br><input name="q21" value="3" type="checkbox">Объектом класса CListBox<br><input name="q21" value="4" type="checkbox">BOOL<br>
</div>
<div class="QS" data-time="666">
    <p>22. Какие параметры могут быть использованы для проверки достоверности ввода данных?</p>
    <input name="RadioGroup22" value="1" type="radio">Максимальная длина вводимого значения<br><input name="RadioGroup22" value="2" type="radio">Нижний предел вводимого значения<br><input name="RadioGroup22" value="3" type="radio">Верхний предел вводимого значения<br>
</div>
<div class="QS" data-time="1332">
    <p>23. Имена всех функций, которые выполняют обмен данными, начинаются с …</p>
    <input name="RadioGroup23" value="1" type="radio">DDV_<br><input name="RadioGroup23" value="2" type="radio">DDX_<br><input name="RadioGroup23" value="3" type="radio">DVX_<br><input name="RadioGroup23" value="4" type="radio">DXV_<br>
</div>
<div class="QS" data-time="666">
    <p>24. Что еще включает в свое имя каждая функция, которая начинается с DDX_ ?</p>
    <input name="RadioGroup24" value="1" type="radio">имя элемента управления<br><input name="RadioGroup24" value="2" type="radio">имя класса<br><input name="RadioGroup24" value="3" type="radio">тип элемента управления<br>
</div>
<div class="QS" data-time="666">
    <p>25. Имена всех функций, которые отвечают за проверку заданных ограничений на вводимые данные, начинаются с …</p>
    <input name="RadioGroup25" value="1" type="radio">DDV_<br><input name="RadioGroup25" value="2" type="radio">DDX_<br><input name="RadioGroup25" value="3" type="radio">DVX_<br><input name="RadioGroup25" value="4" type="radio">DXV_<br>
</div>
<div class="QS" data-time="1332">
    <p>26. Какая функция вызывается при любом запуске приложения?</p>
    <input name="RadioGroup26" value="1" type="radio">OnOk()<br><input name="RadioGroup26" value="2" type="radio">InitInstance()<br><input name="RadioGroup26" value="3" type="radio">Init()<br><input name="RadioGroup26" value="4" type="radio">Instance()<br>
</div>
<div class="QS" data-time="1332">
    <p>27. Какой функцией производится вывод диалогового окна на экран?</p>
    <input name="RadioGroup27" value="1" type="radio">AfxMessageBox()<br><input name="RadioGroup27" value="2" type="radio">DoModal()<br><input name="RadioGroup27" value="3" type="radio">DialModal()<br><input name="RadioGroup27" value="4" type="radio">Modal()<br>
</div>
<div class="QS" data-time="1332">
    <p>28. Какое значение возвращает функция DoModal()?</p>
    <input name="RadioGroup28" value="1" type="radio">Логическое<br><input name="RadioGroup28" value="2" type="radio">Числовое<br><input name="RadioGroup28" value="3" type="radio">Строковое<br><input name="RadioGroup28" value="4" type="radio">Никакого<br>
</div>
<div class="QS" data-time="666">
    <p>29. Какая функция выводит на экран сообщение?</p>
    <input name="RadioGroup29" value="1" type="radio">AfxMessageBox()<br><input name="RadioGroup29" value="2" type="radio">DoModal()<br><input name="RadioGroup29" value="3" type="radio">AfxMessage ()<br><input name="RadioGroup29" value="4" type="radio">AfxBox()<br>
</div>
<div class="QS" data-time="1332">
    <p>30. Создается ли Windows-окно диалога при создании объекта класса CDialog?</p>
    <input name="RadioGroup30" value="1" type="radio">Да<br><input name="RadioGroup30" value="2" type="radio">Нет<br>
</div>
<div class="QS" data-time="1332">
    <p>31. Какое окно надо вызвать, чтобы установить сортировку для списка?</p>
    <input name="RadioGroup31" value="1" type="radio">Dialog View<br><input name="RadioGroup31" value="2" type="radio">List Box Properties<br><input name="RadioGroup31" value="3" type="radio">Dialog Properties<br><input name="RadioGroup31" value="4" type="radio">Dialog Styles<br>
</div>
<div class="QS" data-time="1998">
    <p>32. Чтобы связать по значению список с ассоциированной переменной, ClassWizard формирует функцию …</p>
    <input name="RadioGroup32" value="1" type="radio">DDV_LBString()<br><input name="RadioGroup32" value="2" type="radio">DDX_LPString()<br><input name="RadioGroup32" value="3" type="radio">DDX_LBString()<br><input name="RadioGroup32" value="4" type="radio">LBString()<br>
</div>
<div class="QS" data-time="1332">
    <p>33. Чтобы связать индекс выбранного элемента из списка с ассоциированной переменной, ClassWizard формирует функцию …</p>
    <input name="RadioGroup33" value="1" type="radio">DDV_LPInd()<br><input name="RadioGroup33" value="2" type="radio">DDX_LBIndex()DDX_Index()<br>
</div>
<div class="QS" data-time="2664">
    <p>34. Какая функция следит за ограничением длины вводимой строки?</p>
    <input name="RadioGroup34" value="1" type="radio">MaxChars()<br><input name="RadioGroup34" value="2" type="radio">MaxString()<br><input name="RadioGroup34" value="3" type="radio">DDV_MaxC()<br><input name="RadioGroup34" value="4" type="radio">DDV_MaxChars()<br>
</div>
<div class="QS" data-time="666">
    <p>35. Какая функция возвращает индекс выбранного элемента из списка?</p>
    <input name="RadioGroup35" value="1" type="radio">.GetCurSel()<br><input name="RadioGroup35" value="2" type="radio">.GetIndex()<br><input name="RadioGroup35" value="3" type="radio">.GetCurInd()<br><input name="RadioGroup35" value="4" type="radio">.GetSelCur()<br>
</div>
<div class="QS" data-time="2664">
    <p>36. Какая функция используется для обновления содержимого элементов управления диалогового окна соответственно состоянию связанных с ними переменных-членов?</p>
    <input name="RadioGroup36" value="1" type="radio">Update(TRUE)<br><input name="RadioGroup36" value="2" type="radio">UpdateData(TRUE)<br><input name="RadioGroup36" value="3" type="radio">Update(FALSE)<br><input name="RadioGroup36" value="4" type="radio">UpdateData(FALSE)<br>
</div>
<div class="QS" data-time="1332">
    <p>37. Какая функция используется для обновления содержимого переменных-членов соответственно элементам управления?</p>
    <input name="RadioGroup37" value="1" type="radio">Update(TRUE)<br><input name="RadioGroup37" value="2" type="radio">UpdateData(TRUE)<br><input name="RadioGroup37" value="3" type="radio">Update(FALSE)<br><input name="RadioGroup37" value="4" type="radio">UpdateData(FALSE)<br>
</div>
<div class="QS" data-time="1332">
    <p>38. Дублирует ли MFC содержимое текстового поля в переменную-член в случае, если пользователь нажал Cancel при выходе из окна?</p>
    <input name="RadioGroup38" value="1" type="radio">Да<br><input name="RadioGroup38" value="2" type="radio">Нет<br>
</div>
<div class="QS" data-time="1332,1998">
    <p>39. Что обычно существует для каждого диалогового окна в приложении?</p>
    <input name="q39" value="1" type="checkbox">Шаблоны<br><input name="q39" value="2" type="checkbox">Ресурс диалога<br><input name="q39" value="3" type="checkbox">Класс<br><input name="q39" value="4" type="checkbox">Библиотеки<br>
</div>
<div class="QS" data-time="1332">
    <p>40. Посредством чего создаются ресурсы диалога?</p>
    <input name="RadioGroup40" value="1" type="radio">Редактора функций<br><input name="RadioGroup40" value="2" type="radio">Редактора ресурсов<br><input name="RadioGroup40" value="3" type="radio">Редактора библиотек<br>
</div>
<div class="QS" data-time="1332">
    <p>41. Класс диалогового окна в проекте является производным от класса …</p>
    <input name="RadioGroup41" value="1" type="radio">CObject<br><input name="RadioGroup41" value="2" type="radio">CDialog<br><input name="RadioGroup41" value="3" type="radio">Dialog<br><input name="RadioGroup41" value="4" type="radio">Document<br>
</div>
<div class="QS" data-time="1998">
    <p>42. Обычно каждый элемент управления, включенный в состав ресурсов диалога, имеет в классе окна соответствующий …</p>
    <input name="RadioGroup42" value="1" type="radio">член-функцию<br><input name="RadioGroup42" value="2" type="radio">член-указатель<br><input name="RadioGroup42" value="3" type="radio">член-переменную<br><input name="RadioGroup42" value="4" type="radio">член-параметр<br>
</div>
<div class="QS" data-time="1332">
    <p>43. Обязательно ли создавать новый класс, когда мастер ClassWizard обнаружит новый диалог?</p>
    <input name="RadioGroup43" value="1" type="radio">Да<br><input name="RadioGroup43" value="2" type="radio">Нет<br>
</div>
<div class="QS" data-time="666,1998">
    <p>44. После того, как пользователь ввел имя нового класса для диалогового окна и нажал OK, ClassWizard создаст новый класс и подготовит файлы с расширением …</p>
    <input name="q44" value="1" type="checkbox">.h<br><input name="q44" value="2" type="checkbox">.doc<br><input name="q44" value="3" type="checkbox">.cpp<br>
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