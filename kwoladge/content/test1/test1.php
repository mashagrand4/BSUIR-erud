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

<form id="form" method="post" data-id="1" enctype="text/plain" name="form">

<div class="QS" data-time="1998">
<p>1. С чем позволяет архитектура “документ-представление” связать данные?</p>
<input type="radio" name="RadioGroup1" value="1" />а)с их адресами<br>
<input type="radio" name="RadioGroup1" value="2" />б)с указателями<br>
<input type="radio" name="RadioGroup1" value="3" />в)с их представления<br>
<input type="radio" name="RadioGroup1" value="4" />г)с другими данными<br>
</div>

<div class="QS" data-time="666">
<p>2. Отображаются ли изменения, вносимые в документ в одном из представлений, во всех других представлениях?2</p>
<input type="radio" name="RadioGroup2" value="1" />а)да<br>
<input type="radio" name="RadioGroup2" value="2" />б)в случае задания специального режима<br>
<input type="radio" name="RadioGroup2" value="3" />в)нет<br>
</div>

<div class="QS" data-time="666">
<p>3. Можно ли при разработке приложений использовать готовые классы представления?</p>
<input type="radio" name="RadioGroup3" value="1" />а)да<br>
<input type="radio" name="RadioGroup3" value="2" />б)нет<br>
</div>

<div class="QS" data-time="666">
<p>4. Можно ли при разработке приложений создавать собственные классы представления?</p>
<input type="radio" name="RadioGroup4" value="1" />а)да<br>
<input type="radio" name="RadioGroup4" value="2" />б)нет<br>
</div>

<div class="QS" data-time="666,1332,1998">
<p>5. Сообщения каких устройств и элементов интерфейса можно обрабатывать в приложениях?</p>
<input type="checkbox" name="q5" value="1" />а)клавиатуры<br>
<input type="checkbox" name="q5" value="2" />б)мыши<br>
<input type="checkbox" name="q5" value="3" />в)пунктов меню<br>
</div>

<div class="QS" data-time="1332">
<p>6. В объекте какого класса хранятся данные при использовании архитектуры “документ-представление”?</p>
<input type="radio" name="RadioGroup6" value="1" />а)CView<br>
<input type="radio" name="RadioGroup6" value="2" />б)CDocument<br>
<input type="radio" name="RadioGroup6" value="3" />в)Cobject<br>
</div>

<div class="QS" data-time="1332">
<p>7. Какой класс библиотеки MFC предназначен для управления окном просмотра, обработки информации, вводимой пользователем, и отображения документа в окне?</p>
<input type="radio" name="RadioGroup7" value="1" />а)Документа<br>
<input type="radio" name="RadioGroup7" value="2" />б)Представления<br>
<input type="radio" name="RadioGroup7" value="3" />в)Окна<br>
</div>

<div class="QS" data-time="666">
<p>8. Какое программное средство создает основной шаблон приложения?</p>
<input type="radio" name="RadioGroup8" value="1" />а)AppWizard<br>
<input type="radio" name="RadioGroup8" value="2" />б)Конструктор<br>
<input type="radio" name="RadioGroup8" value="3" />в)ClassWizard<br>
</div>

<div class="QS" data-time="666,1998">
<p>9. Какие классы содержит каркас приложения, сгенерированный AppWizard?</p>
<input type="checkbox" name="q9" value="1" />а)Документа<br>
<input type="checkbox" name="q9" value="2" />б)Контекста устройства<br>
<input type="checkbox" name="q9" value="3" />в)Представления<br>
<input type="checkbox" name="q9" value="4" />г)Окна<br>
</div>

<div class="QS" data-time="1332">
<p>10.В объект какого класса добавляется код для отслеживания действий мыши? </p>
<input type="radio" name="RadioGroup10" value="1" />а)CDocument<br>
<input type="radio" name="RadioGroup10" value="2" />б)CView<br>
<input type="radio" name="RadioGroup10" value="3" />в)CMainFrame<br>
<input type="radio" name="RadioGroup10" value="4" />в)CObject<br>
</div>

<div class="QS" data-time="666,1332,1998">
<p>11.В объекты какого класса добавляется код для рисования линий? </p>
<input type="checkbox" name="q11" value="1" />а)CDocument<br>
<input type="checkbox" name="q11" value="2" />б)CView<br>
<input type="checkbox" name="q11" value="3" />в)CLine<br>
<input type="checkbox" name="q11" value="4" />в)CObject<br>
</div> 

<div class="QS" data-time="1332,1998,2664">
<p>12.Для чего используется мастер ClassWizard?</p>
<input type="checkbox" name="q12" value="1" />а)для настройки окна<br>
<input type="checkbox" name="q12" value="2" />б)для обработки командных сообщение<br>
<input type="checkbox" name="q12" value="3" />в)для обработки сообщений мыши<br>
<input type="checkbox" name="q12" value="4" />в)для инициализациии команд меню<br>
</div>

<div class="QS" data-time="666,1332">
<p>13.Для чего используется редактор ресурсов?</p>
<input type="checkbox" name="q13" value="1" />а)для создания элементов пользовательского интерфейса<br>
<input type="checkbox" name="q13" value="2" />б)для изменения меню<br>
<input type="checkbox" name="q13" value="3" />в)для рисования<br>

</div> 

<div class="QS" data-time="1332">
<p>14.Какая функция в классе CLine используется для рисования линии?</p>
<input type="radio" name="RadioGroup14" value="1" />а)OnDraw()<br>
<input type="radio" name="RadioGroup14" value="2" />б)Draw()<br>
<input type="radio" name="RadioGroup14" value="3" />в)GetLine()<br>
<input type="radio" name="RadioGroup14" value="4" />в)AddLine()<br>
</div>

<div class="QS" data-time="1332">
<p>15.Какой параметр передается в функцию Draw()?</p>
<input type="radio" name="RadioGroup15" value="1" />а)указатель на класс представления<br>
<input type="radio" name="RadioGroup15" value="2" />б)указатель на контекст устройства<br>
<input type="radio" name="RadioGroup15" value="3" />б)указатель на функцию рисования<br>
</div>

<div class="QS" data-time="2664">
<p>16.В какую функцию передается указатель на объект класса CDC?</p>
<input type="radio" name="RadioGroup16" value="1" />а)AddLine()<br>
<input type="radio" name="RadioGroup16" value="2" />б)GetNumLines()<br>
<input type="radio" name="RadioGroup16" value="3" />б)GetLine()<br>
<input type="radio" name="RadioGroup16" value="4" />б)Draw()<br>
</div>

<div class="QS" data-time="666,1332,1998">
<p>17.Что содержит класс CDC?</p>
<input type="checkbox" name="q17" value="1" />а)перо<br>
<input type="checkbox" name="q17" value="2" />б)функции рисования графических примитивов<br>
<input type="checkbox" name="q17" value="3" />в)шрифт<br>
<input type="checkbox" name="q17" value="4" />в)настройки принтера<br>
</div>

<div class="QS" data-time="666">
<p>18.От какого класса порождается класс CLine?</p>
<input type="radio" name="RadioGroup18" value="1" />а)CObject<br>
<input type="radio" name="RadioGroup18" value="2" />б)CDocument<br>
<input type="radio" name="RadioGroup18" value="3" />в)CView<br>
</div>

<div class="QS" data-time="1332">
<p>19.От какого класса порождается класс CMiniDrawDoc?</p>
<input type="radio" name="RadioGroup19" value="1" />а)CObject<br>
<input type="radio" name="RadioGroup19" value="2" />б)CDocument<br>
<input type="radio" name="RadioGroup19" value="3" />в)CView<br>
</div>

<div class="QS" data-time="1332">
<p>20.Объектом какого класса является переменная m_LineArray?</p>
<input type="radio" name="RadioGroup20" value="1" />а)CObArray<br>
<input type="radio" name="RadioGroup20" value="2" />б)порожденного от CObArray<br>
<input type="radio" name="RadioGroup20" value="3" />в)порождающего CObArray<br>
</div>

<div class="QS" data-time="666,1332">
<p>21.Что сохраняет класс CObArray?</p>
<input type="checkbox" name="q21" value="1" />а)массив переменных<br>
<input type="checkbox" name="q21" value="2" />б)массив объектов<br>
<input type="checkbox" name="q21" value="3" />в)массив представлений<br>
<input type="checkbox" name="q21" value="4" />г)функции рисования<br>
</div>

<div class="QS" data-time="666">
<p>22.Является ли переменная m_LineArray защищенной?</p>
<input type="radio" name="RadioGroup22" value="1" />а)Да<br>
<input type="radio" name="RadioGroup22" value="2" />б)Нет<br>
</div>

<div class="QS" data-time="666">
<p>23.Что хранится в массиве m_LineArray?</p>
<input type="radio" name="RadioGroup23" value="1" />а)Указатели<br>
<input type="radio" name="RadioGroup23" value="2" />б)Переменные<br>
<input type="radio" name="RadioGroup23" value="3" />б)Функции<br>
</div>

<div class="QS" data-time="666">
<p>24.Индексируются ли указатели, сохраненные в массиве  m_LineArray?</p>
<input type="radio" name="RadioGroup24" value="1" />а)Да<br>
<input type="radio" name="RadioGroup24" value="2" />б)Нет<br>
</div>

<div class="QS" data-time="1998">
<p>25.Что возвращает функция GetUpperBound класса CObArray?</p>
<input type="radio" name="RadioGroup25" value="1" />а)наименьший индекс<br>
<input type="radio" name="RadioGroup25" value="2" />б)текущий индекс<br>
<input type="radio" name="RadioGroup25" value="3" />б)наибольший индекс<br>
</div>

<div class="QS" data-time="1998">
<p>26.Какая переменная хранит дескриптор указателя мыши?</p>
<input type="radio" name="RadioGroup26" value="1" />а)m_PointOld<br>
<input type="radio" name="RadioGroup26" value="2" />б)m_Dragging<br>
<input type="radio" name="RadioGroup26" value="3" />б)m_HCross<br>
</div>

<div class="QS" data-time="2664">
<p>27.Членом какого класса является функция AfxGetApp?</p>
<input type="radio" name="RadioGroup27" value="1" />а) CView<br>
<input type="radio" name="RadioGroup27" value="2" />б)CObject<br>
<input type="radio" name="RadioGroup27" value="3" />б)CDocument<br>
<input type="radio" name="RadioGroup27" value="4" />б)никакого<br>
</div>

<div class="QS" data-time="1332">
<p>28.Как называется функция, которая вызывается операционной системой и которой передается идентификатор происшедшего события?</p>
<input type="radio" name="RadioGroup28" value="1" />а)дескриптор окна<br>
<input type="radio" name="RadioGroup28" value="2" />б)процедура окна<br>
<input type="radio" name="RadioGroup28" value="3" />б)метод окна<br>
<input type="radio" name="RadioGroup28" value="4" />б)состояние окна<br>
</div>

<div class="QS" data-time="666">
<p>29.Создается ли процедура окна с помощью библиотеки MFC автоматически?</p>
<input type="radio" name="RadioGroup29" value="1" />а)Да<br>
<input type="radio" name="RadioGroup29" value="2" />б)Нет<br>
</div>

<div class="QS" data-time="666">
<p>30.Может ли программа обрабатывать нужное сообщение внутри  любого наиболее подходящего для этого класса?</p>
<input type="radio" name="RadioGroup30" value="1" />а)Да<br>
<input type="radio" name="RadioGroup30" value="2" />б)Нет<br>
</div>

<div class="QS" data-time="1332">
<p>31.Как называются сообщения, генерируемые объектами пользовательского интерфейса?</p>
<input type="radio" name="RadioGroup31" value="1" />а)пользовательские<br>
<input type="radio" name="RadioGroup31" value="2" />б)командные<br>
<input type="radio" name="RadioGroup31" value="3" />б)обрабатывающие<br>
</div>

<div class="QS" data-time="1332">
<p>32.Как называются константы, записанные заглавными буквами и начинающиеся с префикса WM_ в диалоговом окне мастера ClassWizard?</p>
<input type="radio" name="RadioGroup32" value="1" />а)функции<br>
<input type="radio" name="RadioGroup32" value="2" />б)идентификаторы<br>
<input type="radio" name="RadioGroup32" value="3" />б)параметры<br>
</div>

<div class="QS" data-time="666">
<p>33.Какое сообщение передается при каждом нажатии левой кнопки мыши, если указатель находится внутри окна представления?</p>
<input type="radio" name="RadioGroup33" value="1" />а)WM_LBUTTONDOWN<br>
<input type="radio" name="RadioGroup33" value="2" />б)WM_RBUTTONDOWN<br>
<input type="radio" name="RadioGroup33" value="3" />б)WM_LBUTTONUP<br>
<input type="radio" name="RadioGroup33" value="4" />б)WM_MOUSEMOVE<br>
</div>

<div class="QS" data-time="1332">
<p>34.Какую позицию указателя будет содержать параметр point функции OnLButtonDown при нажатии левой кнопки мыши?</p>
<input type="radio" name="RadioGroup34" value="1" />а)первоначальную <br>
<input type="radio" name="RadioGroup34" value="2" />б)текущую<br>
<input type="radio" name="RadioGroup34" value="3" />б)обе позиции<br>
</div>

<div class="QS" data-time="1998">
<p>35.Вызов какой функции приводит к захвату мыши?</p>
<input type="radio" name="RadioGroup35" value="1" />а)GetClientRect() <br>
<input type="radio" name="RadioGroup35" value="2" />б)ClientToScreen()<br>
<input type="radio" name="RadioGroup35" value="3" />б)SetCapture()<br>
</div>

<div class="QS" data-time="666">
<p>36.Какая функция возвращает текущие координаты окна представления?</p>
<input type="radio" name="RadioGroup36" value="1" />а)GetClientRect() <br>
<input type="radio" name="RadioGroup36" value="2" />б)ClientToScreen()<br>
<input type="radio" name="RadioGroup36" value="3" />б)SetCapture()<br>
</div>

<div class="QS" data-time="1998">
<p>37.Какая функция ограничивает перемещения указателя в пределах заданных координат, удерживая его в окне представления?</p>
<input type="radio" name="RadioGroup37" value="1" />а)GetClientRect() <br>
<input type="radio" name="RadioGroup37" value="2" />б)ClientToScreen()<br>
<input type="radio" name="RadioGroup37" value="3" />б)::ClipCursor()<br>
</div>

<div class="QS" data-time="1332">
<p>38.Как называется операция “::“, стоящая перед функцией ClipCursor()?</p>
<input type="radio" name="RadioGroup38" value="1" />а)расширение области действия <br>
<input type="radio" name="RadioGroup38" value="2" />б)расширение области видимости<br>
<input type="radio" name="RadioGroup38" value="3" />б)расширение области параметров<br>
</div>

<div class="QS" data-time="666,1332,1998">
<p>39.Что делает мастер ClassWizard, когда создает обработчик сообщения?</p>
<input type="checkbox" name="q39" value="1" />а)объявляет функцию обработки сообщения<br>
<input type="checkbox" name="q39" value="2" />б)определяет функцию обработки сообщения<br>
<input type="checkbox" name="q39" value="3" />в)заносит в схему сообщений данные об обработчике сообщения<br>
</div>

<div class="QS" data-time="1998">
<p>40.Что позволяет библиотеке MFC вызывать для каждого типа сообщения соответствующий обработчик?</p>
<input type="radio" name="RadioGroup40" value="1" />а)маршрут сообщений<br>
<input type="radio" name="RadioGroup40" value="2" />б)список обработчиков<br>
<input type="radio" name="RadioGroup40" value="3" />б)карта сообщений<br>
</div>

<div class="QS" data-time="666">
<p>41.Объект какого класса создает функция OnMouseMove для рисования внутри окна?</p>
<input type="radio" name="RadioGroup41" value="1" />а)контекста устройства<br>
<input type="radio" name="RadioGroup41" value="2" />б)окна<br>
<input type="radio" name="RadioGroup41" value="3" />б)представления<br>
</div>

<div class="QS" data-time="666">
<p>42.Какая функция задает режим рисования?</p>
<input type="radio" name="RadioGroup42" value="1" />а)SetROP2()<br>
<input type="radio" name="RadioGroup42" value="2" />б)SetCursor()<br>
<input type="radio" name="RadioGroup42" value="3" />б)SetText()<br>
</div>

<div class="QS" data-time="1998">
<p>43.Какое сообщение обрабатывается при отпускании левой кнопки мыши?</p>
<input type="radio" name="RadioGroup43" value="1" />а)M_LBUTTONUP<br>
<input type="radio" name="RadioGroup43" value="2" />б)W_LBUTTONUP<br>
<input type="radio" name="RadioGroup43" value="3" />б)WM_LBUTTONUP<br>
</div>

<div class="QS" data-time="1332">
<p>44.Какая функция завершает захват мыши?</p>
<input type="radio" name="RadioGroup44" value="1" />а)ClipCursor()<br>
<input type="radio" name="RadioGroup44" value="3" />б)ReleaseCapture()<br>
<input type="radio" name="RadioGroup44" value="4" />б)SetCapture()<br>
</div>

<div class="QS" data-time="666,1998">
<p>45.Какие параметры передаются всем обработчикам сообщений мыши?</p>
<input type="checkbox" name="q45" value="1" />а)nFlags<br>
<input type="checkbox" name="q45" value="2" />б)NULL<br>
<input type="checkbox" name="q45" value="3" />в)point<br>
<input type="checkbox" name="q45" value="4" />в)R3_NOT<br>
</div>

<div class="QS" data-time="666">
<p>46.Какой параметр показывает состояние кнопок мыши в момент наступления события?</p>
<input type="radio" name="RadioGroup46" value="1" />а)nFlags<br>
<input type="radio" name="RadioGroup46" value="2" />б)m_HCross<br>
<input type="radio" name="RadioGroup46" value="3" />б)point<br>
<input type="radio" name="RadioGroup46" value="4" />б)this<br>
</div>

<div class="QS" data-time="1332">
<p>47.В каком файле хранится информация о ресурсах?</p>
<input type="radio" name="RadioGroup47" value="1" />а)MiniDraw.ico<br>
<input type="radio" name="RadioGroup47" value="2" />б)MiniDraw.rc<br>
<input type="radio" name="RadioGroup47" value="3" />б)MiniDraw.rc2<br>
</div>

<div class="QS" data-time="666">
<p>48.В каком файле хранится информация о значке программы?</p>
<input type="radio" name="RadioGroup48" value="1" />а)MiniDraw.ico<br>
<input type="radio" name="RadioGroup48" value="2" />б)MiniDraw.rc<br>
<input type="radio" name="RadioGroup48" value="3" />б)MiniDraw.rc2<br>
</div>

<div class="QS" data-time="1332">
<p>49.Какая функция позволяет настраивать окно представления MiniDraw?</p>
<input type="radio" name="RadioGroup49" value="1" />а)ShowWindow()<br>
<input type="radio" name="RadioGroup49" value="2" />б)PreCreateWindow()<br>
<input type="radio" name="RadioGroup49" value="3" />б)UpdateWindow()<br>
</div>

<div class="QS" data-time="1998">
<p>50.Какую функцию предоставляет класс CCmdUI для того, чтобы сделать команду меню доступной или заблокировать ее?</p>
<input type="radio" name="RadioGroup50" value="1" />a)SetCheck()<br>
<input type="radio" name="RadioGroup50" value="2" />b)SetRadio()<br>
<input type="radio" name="RadioGroup50" value="3" />c)Enable()<br>
<input type="radio" name="RadioGroup50" value="4" />d)SetText()<br>
</div>

<div class="QS" data-time="666">
<p>51.Какую функцию предоставляет класс CCmdUI для того, чтобы сделать команду меню выбранной или отменить ее выбор?</p>
<input type="radio" name="RadioGroup51" value="1" />a)SetCheck()<br>
<input type="radio" name="RadioGroup51" value="2" />b)SetRadio()<br>
<input type="radio" name="RadioGroup51" value="3" />c)Enable()<br>
<input type="radio" name="RadioGroup51" value="4" />d)SetText()<br>
</div>

<div class="QS" data-time="1332">
<p>52.С помощью какой функции, предоставляемой классом CCmdUI,  можно отметить команду меню с помощью специального маркера?</p>
<input type="radio" name="RadioGroup52" value="1" />a)SetCheck()<br>
<input type="radio" name="RadioGroup52" value="2" />b)SetRadio()<br>
<input type="radio" name="RadioGroup52" value="3" />c)Enable()<br>
<input type="radio" name="RadioGroup52" value="4" />d)SetText()<br>
</div>

<div class="QS" data-time="2664">
<p>53.С помощью какой функции, предоставляемой классом CCmdUI,  можно изменить надпись  команды меню?</p>
<input type="radio" name="RadioGroup53" value="1" />a)SetCheck()<br>
<input type="radio" name="RadioGroup53" value="2" />b)SetRadio()<br>
<input type="radio" name="RadioGroup53" value="3" />c)Enable()<br>
<input type="radio" name="RadioGroup53" value="4" />d)SetText()<br>
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
</center>

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