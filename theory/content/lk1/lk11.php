<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>Теория</TITLE>
	<LINK rel=stylesheet href="/wrap/css/style.css" type=text/css>
	<LINK rel=stylesheet href="../../css/Style.css" type=text/css>
	
</HEAD>

<body>

<header class="header_style">
<a href="/"><img id="logo" src="../../../wrap/images/logo.png"></a>
 <nav class="nav">
    <ul>
      <li><a href="/index.php">Оглавление</a></li>
      <li><a href="/program/program.php">Программа</a></li>
      <li><a href="/theory.php">Теория</a></li>
      <li class="current"><a href="#">Практика</a></li>
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

<div class="LP">

<h1>1. Основные методы и инструментальные средства разработки программных приложений</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Одным из основных визуальных средств разработки Windows-приложений на языке С++ является среда разработки Visual Studio 2005/2008, интерфейс которых достаточно похож. Рассмотрим основные возможности данной среды программирования.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Среда разработки Visual Studio 2008 позволяет разрабатывать программы на нескольких языках программирования: C++, C#, Visual Basic и ASP.NET. При первом старте вы можете увидеть окно, в котором среда попросит вас указать предпочитаемый вами язык программирования. От вашего выбора зависит, какие типы файлов и проектов будут предлагаться вам при создании нового приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_df538a75.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выбрав предпочтения, загрузится непосредственно главное окно среды разработки. В центре окна располагается рабочая область. По умолчанию в ней загружается WEB страничка, состоящая из четырех разделов:
</p>
<ul>
	<li>
	<strong>Recent projects</strong> – в этом разделе расположен список последних проектов, с которыми вы работали. При первом запуске этот список будет пуст. Внизу списка есть две ссылки для открытия существующего проекта и создания нового проекта.
	</li>
	<li>
	<strong>Get started</strong> – в этом разделе находятся ссылки на разделы файла помощи с информацией для тех, кто впервые работает с Visual Studio или впервые начинает разрабатывать программы.
	</li>
	<li>
	<strong>Getting started</strong> – в этом разделе находятся ссылки на последние документы, связанные со средой разработки и программированием.
	</li>
	<li>
	<strong>MSDN: Visual Headlines</strong> – занимает основную часть окна и содержит последние новости из мира языка программирования.
	</li>
</ul>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_35a9c681.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	По краям окна могут находиться панели и окна, которые вы можете перемещать и располагать по вашему усмотрению.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_b3325511.png" style="float: bottom;" alt=""></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В этих окнах находятся дополнительные инструменты, которые вы будете использовать во время работы. В данном примере эти окна свернуты, поэтому вы можете видеть на рисунке выше только тоненькие панели слева и справа. На этих панелях находятся заголовки панелей, которые будут всплывать, если навести на них курсором мыши. У каждой такой панели в заголовки есть название панели и три кнопки
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_c85e0100.png" style="float: bottom;" alt=""></span><span style="color: #2a2a2a;">- </span>эта кнопка вызывает меню настройки панели.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_724f3e96.png" style="float: bottom;" alt=""></span><span style="color: #2a2a2a;">- </span>если эта кнопка нажата, то панель будет закреплена на поверхности главного окна. Если копка отжата, то панель будет автоматически прятаться, когда она теряет фокус ввода, как это показано на рисунке выше.
</p>
<p style="margin-right: 0in; font-weight: normal;">
	Если у вас достаточно большое окно, то я бы рекомендовал бы закрепить панели, чтобы они не прятались автоматически и основные команды были всегда под рукой.
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_80ee0ec.png" style="float: bottom;" alt=""></span><span style="color: #2a2a2a;">- </span>закрыть текущую панель. Ненужные панели, которые вы используете очень редко в своей работе можно закрыть. Если вы пока не знаете, что будет нужно или не нужно, то лучше оставить окна по умолчанию, потому что панели по умолчанию действительно нужны практически постоянно. Если вы закрыли какое-то окно, то впоследствии его можно будет открыть, выбрав название окна в меню <strong>View</strong>.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для просмотра всех доступных панелей, желательно сейчас создать какой-либо проект в среде разработки, чтобы вам проще было читать этот документ. В этом случае, вы одновременно сможете читать и видеть результат в собственном окне. Для создания проекта выберите меню <strong>File → New → Project</strong>. Перед вами откроется следующее окно:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_550a7868.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С левой стороны представлены различные категории проектов, а справа иконки проектов, которые вы можете создавать.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Внизу окна укажите имя для нового приложения и путь, где оно должно располагаться и нажмите <strong>ОК</strong>.
</p>
<h2>1.1. Работа с решениями (Solution)</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Основной панелью, с которой мы познакомимся - панель <strong>Solution Explorer</strong> – эксплорер решения. Вариант панели для одного из тестовых проектов можно увидеть справа от этого текста. Если у вас эта панель не отображается, то ее можно включить, выбрав меню <strong>View → Solution Explorer</strong>.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_d2dc07f1.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все проекты, которые вы будете создавать в Visual Studio, заключаются в решение. Одно решение – это как папка для проектов и может содержать несколько проектов. Это очень удобно, потому что очень часто решения действительно должны состоять из нескольких проектов и благодаря объединению в одном виртуальном пространстве, мы можем работать со всеми этими проектами, как с одним целым.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, программа может состоять из исполняемого файла и из библиотеки кода Class Library. Для реализации этого вам придется создать два проекта, каждый из которых будет компилировать свой файл. Объединив оба проекта в одно решение, вы сможете держать их под рукой в окне <strong>Solution Explorer</strong> и одновременно работать с обоими проектами.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Итак, взглянем на окно <strong>Solution Explorer</strong>. В нем содержимое представлено в виде дерева. Корнем дерева выступает имя решения. В данном случае, решение имеет имя FindRecordProject. По умолчанию решения получают такое же имя, как и проект. Чтобы переименовать решение, нужно щелкнуть правой кнопкой по имени решения (по корневому элементу дерева) и в контекстном меню выбрать пункт меню Rename. На месте имени решения появится встроенное поле для редактирования, в котором вы можете ввести новое имя для решения. Ввод имени нужно завершить нажатием клавиши Enter.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Конфигурация решения сохраняется в файле с расширением .sln. Впоследствии, если вы захотите открыть все решение в целом, нужно открывать именно этот файл, а не файлы проектов, такие как csproj. Если же у вас в решении только один проект, то можно открывать файл проекта, решение будет открыто автоматически.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Давайте посмотрим, какие еще команды есть в контекстном меню решения (пример этого меню можно увидеть на рисунке справа):
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_5352b75b.png" style="float: bottom;" alt=""></span>
</p>
<ul>
	<li>
	<strong>Build Solution</strong> – собрать решение. Будут полностью собраны все проекты решения;
	</li>
	<li>
	<strong>Rebuild Solution</strong> – пересобрать решение;
	</li>
	<li>
	<strong>Clean Solution</strong> – очистить решение;
	</li>
	<li>
	<strong>Batch build</strong> – настройка проектов, которые нужно будет пересобрать;
	</li>
	<li>
	<strong>Configuration Manager</strong> – вызывает окно, в котором можно управлять конфигурациями решения;
	</li>
	<li>
	<strong>Add</strong> – этот пункт содержит подпункты, с помощью которых в решение можно добавить дополнительные проекты. Это может быть:
	<ol>
		<li>
		<strong>New Project</strong> – создать новый проект и добавить его в решение. Выбрав это меню, вы увидите окно создания нового проекта, как при выборе меню File → New → Project.
		</li>
		<li>
		<strong>Existing Project</strong> – отобразит стандартное окно открытия файла, с помощью которого вы можете найти уже существующий проект в вашей файловой системе и добавить его в решение;
		</li>
		<li>
		<strong>New Web Site</strong> – позволяет создать проект нового WEB сайта;
		</li>
		<li>
		<strong>Existing Web Site</strong> – добавить в решении существующий сайт;
		</li>
		<li>
		New Item – добавить в решение новый элемент;
		</li>
		<li>
		<strong>Existing Item</strong> – добавить в решение существующий элемент;
		</li>
		<li>
		<strong>New Solution Folder</strong> – создать новую папку в решении.
		</li>
	</ol></li>
	<li>
	<strong>Set StartUp Projects</strong> – вызывает окно конфигурации решения, в котором вы можете указать, какой из проектов и как должен запускаться при нажатии клавиши F5 во время разработки;
	</li>
	<li>
	<strong>Paste</strong> – вставить из буфера обмена;
	</li>
	<li>
	<strong>Rename</strong> – переименовать решение;
	</li>
	<li>
	<strong>Open Folder in Windows Explorer</strong> – открыть папку решения в окне проводника Windows;
	</li>
	<li>
	<strong>Properties</strong> – отобразить окно свойств решения.
	</li>
</ul>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_5e65dd3c.png" style="float: bottom;" alt=""></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим некоторые из команд, которые могут представлять для вас наибольший интерес во время разработки. Большинство из рассмотренных команд не требуют дополнительных пояснений, потому что они просто выполняют какое-то простое действие. Например, с первыми тремя пунктами все понятно, они просто вызываются и выполняют свои действия. Интерес вызывает меню <strong>Batch Build</strong>. Что это такое? Вызвав это меню, перед вами откроется окно настройки сборки, как показано на рисунке выше. Здесь перечислены все проекты решения и указаны возможные конфигурации (вторая колонка списка).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В последней колонке <strong>Build</strong> вы можете указать галкой, какие конфигурации и проекты вас интересуют. Нажав кнопку <strong>Build, Rebuild</strong> или <strong>Clean</strong> в этом окне, вы можете запустить процесс сборки, пересборки или очистки всех выбранных проектов. Получается эффект пакетной компиляции.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_da632356.png" style="float: bottom;" alt=""></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Следующий пункт пеню, который вас может заинтересовать – это <strong>Configuration Manager</strong>. Выберите сейчас его, и перед вами откроется окно, как показано на рисунке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Слева наверху находится выпадающий список, в котором перечислены конфигурации решения. По умолчанию существует две конфигурации (если только у вас не Visual Studio Express Edition, который не позволяет работать с конфигурациями): <strong>Debug</strong> и <strong>Run</strong>. В выпадающем списке есть еще пункты, с помощью которых вы можете создать новые конфигурации или вызвать окно редактирования уже существующих конфигураций.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Следующая команда, которая может заинтересовать вас – <strong>Set StartUp Project</strong>. Выбрав ее, перед вами откроется окно, в котором вы можете выбрать проект, который должен запускаться при нажатии клавиши F5 во время разработки. Итак, выбрав команду Set StartUp Project, перед вами появится окно, как показано на рисунке ниже:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_ee68f19c.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Это окно свойств решения, просто оно открыто в разделе <strong>Startup Project</strong>. Какой это раздел, можно определить по дереву, находящемуся слева. В основной части окна находится три переключателя, с помощью которых вы можете задать, какой проект должен запускаться при нажатии F5:
</p>
<ul>
	<li>
	<strong>Current Project</strong> – текущий проект;
	</li>
	<li>
	<strong>Single startup project</strong> – вне зависимости от того, какой сейчас текущий проект, всегда будет запускаться тот, который выбран в выпадающем списке после этого пункта;
	</li>
	<li>
	<strong>Multiple startup projects </strong>– запускаться будут несколько проектов и в списке после пункта вы можете указать, как они должны запускаться. Щелкнув по этой колонке можно выбрать для каждого проекта один из трех вариантов: 
	</li>
</ul>
<ol>
	<li>
	<strong>None</strong> – проект не будет запускаться;
	</li>
	<li>
	<strong>Start</strong> – проект будет запущен на выполнение в режиме отладки;
	</li>
	<li>
	<strong>Start without debugging</strong> – запустить
	без
	отладки.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если ваше решение состоит из одной библиотеки кода и одного исполняемого файла, то логично было бы выбрать второй пункт (Single startup project) и явно указать проект в решении, который должен запускаться.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Окно свойств решения можно вызвать, если щелкнуть по решению правой кнопкой и выбрать в контекстном меню пункт Properties. Раздел Startup Project, который является наиболее интересным, мы уже рассмотрели. Вторым по значимости, на мой взгляд, является раздел Project Dependencies. В этом разделе вы можете выбрать в выпадающем списке проект, а в основном списке (он на рисунке пуст, потому что решение состоит только из одного проекта) можно указать, от чего зависит наш проект. Например,<span style="color: #2a2a2a;">
	</span>исполняемый файл может зависеть от библиотеки кода. Это значит, что библиотека кода должна компилироваться раньше, чем исполняемый файл. С помощью зависимостей мы можем указать эту проблему, и среда разработки послушно будет компилировать проекты в соответствии с их зависимостями.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При работе с тестовыми примерами и с маленькими программами программисты не обращают внимания на решения и работают в основном только с проектами. Это не является ошибкой, потому что файл решения – создается просто для вашего удобства. Используйте его там, где необходимо, а если вы не используете его, то можете даже не сохранять или удалять, чтобы он не занимал лишнее место на диске. Хотя, файлы sln настолько маленькие, что проще не обращать на них никакого внимания.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_b8326abd.png" style="float: bottom;" alt=""></span>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>1.2. Работа с классами (Class View).</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Следующей панелью, с которой мы познакомимся - панель <strong>Class View</strong> – представление классов. Если у вас эта панель не отображается, то ее можно включить, выбрав меню <strong>View → Class View</strong>.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_ff511423.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все классы, которые вы будете создавать в Visual Studio, заключаются в представление. В нем отображаются созданные классы, глобальные переменные и функции, макросы и константы, карты сообщений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В верхней части этого окна отображаются перечисленные выше данные используемые в проекте, а в нижней части будут отображаться элементы входящие в данную группу ( в данный класс). При нажатии правой кнопки мыши по выбранному классу вызывается контекстное меню:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #2a2a2a;"><img src="i_8133601b9eac8a59_html_cde88428.png" style="float: bottom;" alt=""></span>
</p>
<ul>
	<li>
	View
	Class
	Diagram – Просмотр (создание) диаграммы классов UML;
	</li>
	<li>
	Go
	To
	Definition – показать код описания (.cpp файл);
	</li>
	<li>
	Go
	To
	Declaration – показать код объявления (.h файл); 
	</li>
	<li>
	Browse Definition – подключить определение;
	</li>
	<li>
	Find
	All
	References – найти все ссылки на данный класс;
	</li>
	<li>
	Filter
	To
	Type – показать только данный класс в данном окне (при помощи стрелок на панели можно вернуться);
	</li>
	<li>
	Add: 
	</li>
</ul>
<ol>
	<li>
	Add
	Function – добавить метод – функцию (будет вызван мастер);
	</li>
	<li>
	Add
	Variable – добавить переменную (будет вызван мастер);
	</li>
</ol>
<ul>
	<li>
	Сортировки и группировки для просмотра
	</li>
	<li>
	Properties – вызовет окно свойств
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим окно свойств «Properties». Верхняя строка указывает на имя класса. Ниже (выделено) панель инструментов. Первые два элемента указывают вид просмотра: Categorized, Sort.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Третий элемент Properties – просмотр свойств класса:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_117c3233.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Закладка Events – просмотр (добавление функций) обрабатываемых команд данным классом.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_e6dc0713.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Messages – просмотр (добавление функций) обрабатываемых сообщений поступающих
окну:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2b8e30a2.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Overrides – просмотр ( добавление) функций обработчиков стандартных действий:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_cc7ebe2b.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Во всех случаях в нижней части панели показывается поясняющее сообщение
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>1.3. Работа с ресурсами (Resource View).</h2>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Панель <strong>Resource View</strong> показывает файлы – ресурсы включенные в проект. Вариант панели для одного из тестовых проектов можно увидеть слева от этого текста. Если у вас эта панель не отображается, то ее можно включить, выбрав меню <strong>View → Other Windows → Resource View</strong>.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_4af0ab8e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все ресурсы, которые вы будете создавать в Visual Studio, заключаются в представление ресурсов. В нем отображаются созданные акселераторы (обработчики нажатий клавиш), диалоговые окна, иконки приложения, панели меню, таблицы строк, панели инструментов, версия приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При нажатии правой кнопки мыши в любом месте данного окна вызывается контекстное меню (рисунок ниже)
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_85d89dd2.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Resource Includes – вызовет окно, хранящее имя файла с основными макросами связывания ресурсов с данными.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Resource Symbols – вызовет окно редактирования макросов связи.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Add Resource – вызовет окно добавления ресурса:
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_67b79fe9.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В нем можно выбрать вид ресурса, например диалоговое окно, и вызвав контекстное меню, добавить копию выбранного ресурса или добавить ресурс соответствующий данному.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>1.4. Окно редактирования текстов программ.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_7375a7bd.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В рамках интегрированной среды созданы удобные средства для редактирования программ в процессе их разработки. Здесь реализованы основные средства редактирования – те же, что и в известных системах, например Microsoft Office.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вставить / Скопировать / Вырезать текст: Ctrl + V / C / X.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Отмена / Повторить: Ctrl + Z / Y.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Синтаксическая раскраска. VS выделяет элементы программы с помощью синтаксической раскраски. По умолчанию текст – черный, комментарии – зеленые, ключевые и служебные слова – голубого. Для строковых значений – красный. Можно сформировать специальные расцветки для строковых переменных, чисел, используя вкладку <strong>Format</strong> в диалоговом окне <strong>Options</strong>. Для этого необходимо выбрать команду <strong>Tools → Options</strong>. Синтаксическая раскраска помогает замечать ошибки (комментарии, ключевые слова).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Контекстное меню. Появляется, если щелкнуть правой кнопкой мыши на поле редактируемого файла.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_a208e532.png" style="float: bottom;" alt="">
</p>
<ul>
	<li>
	Cut. Удаляет выбранный текст в системный буфер Clipboard.
	</li>
	<li>
	Copy. Копирует …
	</li>
	<li>
	Paste. Заменяет или вставляет.
	</li>
	<li>
	Go To Definition. Открывает файл, в котором определен элемент, на который указывает курсор (файл заголовка – для переменной, файл текста программы – для функции).
	</li>
	<li>
	Go To Declaration. Открывает файл, в котором объявлен элемент, на который указывает курсор (файл заголовка).
	</li>
	<li>
	Find All References. Находит все строки в файлах проекта, где встречается выбранное слово.
	</li>
	<li>
	Call Browser. Браузер вызовов из/к выбранной функции.
	</li>
	<li>
	Show Callers Graph. Выведет граф вызова выбранной функции. 
	</li>
	<li>
	Show Callers Graph In New Window (тоже, но
	в
	новом
	окне).
	</li>
	<li>
	Show Call Graph . Выведет граф вызовов выбранной функции.
	</li>
	<li>
	Show Call Graph In New Window (тоже, но
	в
	новом
	окне).
	</li>
	<li>
	Breakpoint. Добавление контрольных точек
	</li>
	<li>
	Insert Breakpoint. 
	</li>
	<li>
	Insert Tracepoint. 
	</li>
	<li>
	Run To Cursor. Запускает проект пока не вызовется выбранная строка кода.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>1.5. Система меню</h2>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Вызов команд меню
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Прежде чем перейти к описанию отдельных команд и опций, остановимся на некоторых моментах, общих для всех меню. Вспомним, например, о том, что существует два способа выбора команд из меню.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_6e317f52.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Более распространенный из них состоит в том, что вы устанавливаете указатель мыши и щелкаете на нужных командах меню левой кнопкой мыши. Второй способ заключается в использовании клавиш быстрого вызова, которые выделяются подчеркиванием в названиях команд. Так, меню File можно раскрыть, нажав одновременно [Alt+F].
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Существует еще один способ вызова отдельных команд в любой момент времени, а именно с помощью предварительно заданных "горячих" клавиш. Если для команды определено сочетание клавиш, то это сочетание будет указано в меню справа от соответствующего пункта. Например, в меню File есть команда New..., которую можно вызвать, просто нажав [Ctrl+N].
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда меню, показанная серым цветом, является в данный момент недоступной — вероятно, отсутствуют некоторые условия, необходимые для ее выполнения. Например, команда Save из меню File будет недоступной, если в редактор ничего не загружено. Программа "понимает", что в данный момент сохранять просто нечего, и напоминает вам об этом, отключив команду сохранения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если за названием команды меню следует троеточие, значит, после выбора данной команды будет открыто диалоговое окно. Например, после выбора команды Open... в меню File открывается диалоговое окно Open.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наконец, многие команды меню представлены также кнопками на панелях инструментов и могут быть вызваны простым щелчком мыши. Панели инструментов обычно размещаются в окне программы непосредственно под строкой меню.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	VS имеет много меню. Некоторые команды находятся на третьем или четвертом уровне иерархии. В большинстве случаев ту же задачу можно решить значительно быстрее. В строке VS есть 12 меню.
</p>
<ul>
	<li>
	File. Создание/Открытие/Сохранение/Закрытие проекта/файла.
	</li>
	<li>
	Edit. Редактирование
	</li>
	<li>
	View. Меню управления видами и средствамиVS.
	</li>
	<li>
	Project. Меню команд управления разрабатываемы проектом в целом.
	</li>
	<li>
	Build. Компиляции, компоновки.
	</li>
	<li>
	Debug. Отладка.
	</li>
	<li>
	Data. Данные
	</li>
	<li>
	Tools. Настройки VS и доступа к автономным утилитам.
	</li>
	<li>
	Test. Задача параметров тестирования.
	</li>
	<li>
	Analyze. Анализ и сбор информации (отчеты).
	</li>
	<li>
	Window. Выбор/Изменение расположения/Закрытие окон редактирования.
	</li>
	<li>
	Help. Обращения к системе Справок.
	</li>
</ul>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Меню File
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункты меню File полностью включают традиционные операции над файлами (например, принятые в системе Word), и дополнительные операции, учитывающие специфику VS.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Некоторые пункты меню снабжены значками панели инструментов и горячими клавишами (акселераторы).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	File → New... Выбор этого пункта приводит к появлению таких пунктов как создания новых проектов, вебсайта, файла или нового проекта на основе уже существующего кода программы.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_f280b302.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт File → Open – открытие проектов / сайтов / файлов или их конвертация.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_22347e73.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт File → Add – добавление новых/существующих проектов, вебсайтов и дистрибутированных системных диаграмм к используемому решению (solution).
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_940c9445.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Close предназначена для закрытия ранее открытого файла. Если у вас в настоящий момент открыто несколько файлов, данная команда закроет активное, т.е. текущее окно. Если вы по ошибке попытаетесь закрыть несохраненный файл, программа предупредит о том, что вы рискуете потерять информацию, и предложит сохранить ее прямо сейчас.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_9877116c.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Close Solution – закроет открытый в настоящий момент рещение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Save. Команда Save сохраняет содержимое текущего окна в соответствующем файле. Для сохранения файла можно также использовать расположенную на панели инструментов кнопку Save (третья слева). Если файл был открыт в режиме только для чтения, то команда Save будет недоступной.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	SaveAs... Команда SaveAs... позволяет сохранить содержимое окна в файле под новым именем. Предположим, вы только что закончили работу над проектом и, имея вполне работоспособную программу, хотите попытаться внести некоторые изменения. В целях безопасности текущую версию программы нужно сохранить. Для этого вы выбираете команду SaveAs и сохраняете проект под новым именем, после чего можете спокойно экспериментировать с дубликатом. Если эксперименты приведут к повреждению программы, вы всегда сможете вернуться к исходной версии.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Save All. Все файлы сохраняются непосредственно перед компиляцией и когда закрывается приложение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Advanced Save Options – другие варианты сохранения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Page Setup. Определяются верхний (Header) и нижний колонтитулы (Footer), размеры пустых полей слева, справа сверху, снизу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команды форматирования используемые в диалоговом окне Page Setup:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&с Центрирование текста
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&d Добавление текущей системной даты
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&f Добавление имени файла
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&1 Выравнивание текста по левому краю
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&р Нумерация страниц
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&г Выравнивание текста по правому краю
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	&t Добавление текущего системного времени
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Print – печать согласно установкам.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Recent Files и Recent Projects содержат имена файлов и рабочей среды, которые были открыты последними.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Exit. Выход из приложения.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Меню Edit
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Undo и Redo позволяют отменить (или восстановить) последнюю выполненную операцию редактирования.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Cut копирует выделенный блок текста из активного окна в буфер обмена, после чего удаляет этот блок из окна. Команду Cut обычно используют в сочетании с командой Paste для перемещения блока текста из одного места в другое. На стандартной панели инструментов ей соответствует пятая кнопка слева.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_b445b83.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как и команда Cut, команда Сору копирует и помещает выделенный блок текста в буфер обмена, но этот блок сохраняется в активном окне. Команду Сору обычно используют в сочетании с командой Paste при необходимости скопировать блок текста из одного места в другое. Ей соответствует шестая слева кнопка стандартной панели инструментов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Paste предназначена для вставки информации из буфера обмена в текущий документ (в месторасположение текстового курсора). На стандартной панели инструментов ей соответствует седьмая слева кнопка.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы удалить выделенный блок текста, не копируя его в буфер обмена, можно воспользоваться командой Delete. Хотя удаленный текст и не будет скопирован в буфер обмена, вы все равно сможете восстановить его, если сразу после удаления выберете в меню Edit команду Undo.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда SelectAll используется для выделения всего содержимого активного окна с целью последующего вырезания, копирования или удаления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт поиска и замены, запускаемый командой Find and Replace, работает примерно так же, как и аналогичное средство поиска и замены в большинстве текстовых редакторов.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_7806e9b6.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Пункт Quick Find (быстрый поиск).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_97147e05.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Find what – что требуется найти.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Look in – где искать:
</p>
<ul>
	<li>
	Current Document - в текущем документе.
	</li>
	<li>
	All Open Documents – во всех открытых документах.
	</li>
	<li>
	Current Project – в текущем проекте.
	</li>
	<li>
	Entire Solution – среди других элементов решения.
	</li>
	<li>
	Find options – условия поиска:
	</li>
	<li>
	Match case – без учета регистра.
	</li>
	<li>
	Match whole word – сопоставлять с целым словом.
	</li>
	<li>
	Search up – искать снизу вверх.
	</li>
	<li>
	Use.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При выборе команды Replace... открывается диалоговое окно, с помощью которого можно менять строки текста. Для этого нужно ввести в соответствующие поля текст для поиска и текст для замены, после чего установить критерии поиска. Вы можете проводить поиск с учетом или без учета регистра символов, искать слова целиком и использовать регулярные выражения, которые мы рассмотрели выше, при знакомстве с командой Find....
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Хорошенько подумайте, прежде чем щелкнуть на кнопке ReplaceAll, поскольку результат выполнения этой команды может оказаться разрушительным для вашей программы. Помните, что вы можете отменить результаты операции замены, если сразу выберете команду Undo.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С помощью команды GoTo... можно быстро переместить курсор к разным частям проекта. (Адрес, закладка, определение, ошибки, строка, смещение (offset), ссылка (references) к объявлению функции или идентификатору). После выбора этой команды откроется диалоговое окно, в котором можно задать номер строки программы, куда следует перейти. Если вы введете значение, превышающее число строк программы, то курсор будет перемещен в конец файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Advanced предназначена для быстрого изменения текста:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_a97b754.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Bookmarks... позволяет помещать закладки в тех местах программы, к которым вы часто обращаетесь. После того как закладка будет установлена, вы сможете быстро перейти к ней с помощью команды меню или определенного сочетания клавиш. Закладку, которая больше не понадобится, можно в любой момент удалить. Вы можете создавать как именованные (они будут сохраняться между сеансами редактирования), так и безымянные закладки. К именованной закладке можно перейти в любое время, даже если файл, к которому она относится, в данный момент не открыт. Именованная закладка хранит как номер строки, так и позицию курсора на строке, которую он занимал во время ее создания. Причем позиция будет автоматически обновляться по мере редактирования файла. Даже удалив все символы вокруг закладки, вы все равно сможете перейти к указанному месту в файле.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_56f8c521.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Outlining – позволяет группировать строки кода:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_acab0842.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда IntelliSense позволяет получить список членов класса/пространства имен и др., информацию о параметрах функций, быструю информацию об элементе, без поиска места их определения в файле, докончить начатое слово.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_723f5eb4.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда List Members отображает список доступных переменных-членов или функций выбранного класса либо структуры. Активизирует функцию Autocomplete.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда TypeInfo отображает окно подсказки с типом переменной, на которой стоит курсор.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда ParameterInfo отображает полное описание (включая список параметров) функции, имя которой расположено слева от курсора. Параметр, выделенный полужирным шрифтом, соответствует тому параметру, который вы должны ввести в данный момент.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При выборе команды CompleteWord программа автоматически допишет вместо вас название функции или имя переменной, которое вы только начали вводить. Эта опция способна заметно сохранить ваше время, избавив от необходимости каждый раз вводить с клавиатуры длинные, часто повторяющиеся имена.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.1. Меню View</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Меню View содержит команды, позволяющие настроить внешний вид рабочего пространства.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_e92cd40d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Code – показывает код выбранного элемента.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Open – открывает выбранный файл
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Open With… - вызывает диалоговое окно, с помощью которого можно выбрать программу для открытия выбранного файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Server Explorer – открывает окно для соединения с сервером.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Solution Explorer – открывает окно решений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Bookmark Window – открывает окно, содержащий список закладок.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Class View – открывает окно представления классов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Code Definition Window – открывает окно, содержащий код определения макроса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Object Browser – браузер объектов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Error List – окно списка ошибок.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Output – окно выходного потока.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Properties Window – окно
свойств.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Task List – окно задач.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Toolbox – окно инструментов для приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Find Results – поиск результатов работы приложения.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_1744a694.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Other Windows – другие вспомогательные окна, среди которых окно вызовов, командная строка, менеджер свойств, окно ресурсов и тд.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_61199eb2.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Toolbars – содержит список панелей инструментов для рабочего пространства, которые вы можете сами выбрать.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Full Screen – работа со средой в режиме во весь экран.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Navigate Backward – навигация обратно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Navigate Forward – навигация вперед.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Next Task – следующая задача.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Previous Task – предыдущая задача.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Property Pages – страницы свойств.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.2. Меню Project</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Содержит пункты, связанные с сопровождением проекта. Рассмотрим некоторые.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_1555029f.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Add Class… - вызовет диалоговое окно добавления к проекту класса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Add New Item… - окно добавления к проекту нового элемента (файла/документа)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Add Existing Item… - окно добавления к проекту уже существующий элемент (файл/документ).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Add New Distributed System Diagram… - добавление распространяемых системных диаграмм.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Exclude From Project – удаление из проекта открытый файл/документ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Show All Files – показать все файлы проекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Set as StartUp Project – установить как проект начала.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Refresh Project Toolbox Items – обновить элементы проекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Properties… - вызовет окно свойств проекта.При выборе этой команды открывается довольно сложное диалоговое окно, позволяющее устанавливать практически все параметры конфигурации проекта, включая опции компилятора и компоновщика.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.3. Меню Build</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Меню Build включает команды, связанные с компиляцией, выполнением и отладкой приложений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_9cc19d9e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Compile. Выбор этой команды приводит к компиляции содержимого текущего окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Biuld Solution/Project. Обычно проекты, написанные на C/C++, включают в себя много файлов. Поскольку поочередная компиляция всех файлов займет много времени, полезной окажется команда Build, которая автоматически проанализирует файлы проекта, компилируя только те из них, которые были созданы позже, чем исполняемый файл проекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Rebuild Solution/Project. Различие между командами Build и Rebuild состоит в том, что последняя не обращает внимания на дату и время создания файлов и компилирует все файлы проекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если при выполнении команды Rebuild будут обнаружены синтаксические ошибки, как фатальные, так и потенциально опасные, то предупреждения и сообщения о них появятся в окне Output.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт BatchBuild... Эта команда аналогична команде Build, но с ее помощью можно обработать сразу несколько конфигураций одного проекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Clean Solution/Project. С помощью команды Clean из всех конфигураций текущего проекта удаляются промежуточные файлы. Построить файлы заново можно путем выбора команды Build.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Project Only – только для данного проекта:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_d47f3b3d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Profile Guided Optimization для
оптимизации
проекта:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2ff7646d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Configuration Manager – вызовет окно конфигураций компиляции:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_d03ade22.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.4. Меню Debug</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данное подменю содержит команды, предназначенные для выполнения программы в режиме отладки: до курсора или до заданной точки останова.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2f53c60e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Windows – выбор необходимых окон при отладке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Star Debugging – начать отладку.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Start With Application Verifier – начать с верификатором приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Start Without Debugging – начать
без
отладки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Attach to Process… – подключить к процессу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Exceptions… – окно установки прерывания при возникновении исключения.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_50e7670b.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Step Into – переход в метод(функцию) при отладке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Step Over – переход к следующему действию при отладке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Toggle Breakpoint – переключает точку прерывания.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт New Breakpoint – создает новую точку прерывания.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Delete All Breakpoints – удаляет все точки прерывания.
</p>
<h3>1.5.5. Меню Data</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данный пункт меню предназначен для работы с базами данных.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_cc953071.png" style="float: bottom;" alt="">
</p>
<h3>1.5.6. Меню Tools</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Позволяет организовать расширение инструментальных средств. Дополнительные средства можно добавить с помощью меню Customize. Позволяет добавить новые пиктограммы в панель инструментов, управлять отображением панели инструментов, добавлять программы в меню Tools и т. д.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_bf82a37.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт ErrorLookup используют при необходимости получить текст сообщений, связанных с кодами системных ошибок. Введите код ошибки в поле Value, и в поле ErrorMessage автоматически отобразится связанное с ним сообщение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Spy++ выводит информацию о выполняющихся системных процессах и потоках, существующих окнах и поступающих оконных сообщениях. Указанная утилита также предоставляет набор инструментов, облегчающих поиск нужных процессов, потоков и окон.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт ATL / MFC Trace даёт дополнительные возможности для отладки оконных приложений, построенных на основе MFC. Эта утилита отображает в окне отладки сообщения о выполнении операций, связанных с использованием библиотеки MFC, а также предупреждения об ошибках, если при выполнении приложения происходят какие-либо сбои.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Customize... – при выборе данной команды открывается диалоговое окно Customize, которое позволяет настраивать меню и панели инструментов, а также назначать различным командам сочетания клавиш.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пункт Options... – данная команда открывает окно Options, в котором задаются различные параметры среды VisualC++.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.7. Меню Test</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Раздел главного меню Test содержит команды для создания и управления разнообразными тестами: модульными и нагрузочными, БД и веб-приложений, выполняемыми вручную. Имеется возможность преобразования существующих тестов в соответствующие проекты Visual Studio. Отдельный тип – упорядоченные (Ordered) тесты – позволяет составить список из других тестов, которые будут выполняться в заданной последовательности. При этом вызывается мастер, позволяющий сгенерировать шаблон, учитывающий специфику решения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_5dc24751.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При этом тесты могут выполняться как на локальном, так и на удаленном компьютере, допускается объединять их в разные наборы, исполняемые независимо друг от друга, запрашивать данные для тестирования и сохранять результаты в БД. Во время модульных тестов автоматически определяется степень охвата исходного кода (Code Coverage), что позволяет выявить непроверенные участки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.8. Меню Analyze</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Другой новый пункт меню – Analyze – предоставляет доступ к профайлеру, посредством которого можно исследовать производительность и обнаруживать узкие места в программе, а также к статическому анализатору, исследующему код на соответствие определенным правилам и вычисляющему его метрики (Code Metrics).
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_b64622dc.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Оба инструмента не относятся к нововведениям VS 2008, но если первый мигрировал из предыдущей версии без существенных изменений (ранее он был прописан в меню Tools), то второй все же расширен более чем двумя десятками правил. А вот расчет метрик исходного кода появился именно в VS 2008. Справедливости ради отметим, что Microsoft не первая обеспечила расчет метрик в инструментальном пакете – аналогичные возможности присутствовали в Borland Developer Studio 2006 более двух лет назад. К тому же инструментарий Borland (ныне CodeGear) гораздо богаче, поскольку подсчитывает значительно большее число показателей. Тем не менее в VS 2008 рассчитываются все самые критичные оценки проекта – индекс сопровождаемости (Maintainability Index), цикломатическая сложность (Cyclomatic Complexity), глубина наследования (Depth of Inheritance), степень сцепления классов (Class Coupling) и число строк кода (Lines Of Code). Кроме того, на их основе можно реализовать политику загрузки исходного кода в систему контроля версий, например запретить загрузку, когда метрики выходят за определенные границы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.9. Меню Window</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все команды меню Window, в принципе соответствуют стандартному набору команд данного меню во всех приложениях Windows.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_8c13aab9.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	NewWindow
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данная команда создает новое окно редактирования для текущего файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Split
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Команда Split позволяет разбить окно редактирования на 4 части.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Close All Documents
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эта команда закрывает все открытые окна. Если содержимое хотя бы одного из окон не было предварительно сохранено в файле, будет выдано предупреждающее сообщение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Cascade
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данная команда отображает на экране все открытые окна каскадом, что дает возможность пользователям видеть имена файлов в заголовках всех окон.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	New Horizontal Tab Group
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эта команда располагает открытое окно виде отдельной горизонтальной табгруппы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	New Vetical Tab Group
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эта команда располагает открытое окно виде отдельной горизонтальной табгруппы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Список открытых окон
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В нижней части меню показан динамически обновляемый список всех открытых на данный момент окон. Вы можете сделать активным любое окно, щелкнув на его имени в списке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>1.5.10. Меню Help</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В VS справочная система является отдельным программным продуктом. В большинстве диалоговых окон нажатие клавиши F1 вызывает стандартную справочную систему, так же как и меню Help.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	How Do I – открывает страницу ознакомления со средой.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_83e07b04.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Search – поисковик в справочнике.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Contents – (содержание, которое в окне проекта), позволяет запустить программный продукт MSDN, если последний не был запущен ранее и вывести на экран вкладку Table of Contents.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Index - позволяет открыть вкладку Index продукта MSDN.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Technical Support - Данная команда отображает раздел справочной системы, посвященный вопросам технической поддержки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	About Mircosoft Visual Studio - идентификатор продукта, отображает информацию о версии программы, авторских правах, зарегистрированном пользователе и установленных дополнительных компонентах.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Доступ к контекстной справке. Доступ к справочной системе VisualC++ облегчен благодаря тому, что вся информация предоставляется в интерактивном режиме. Чтобы получить справку, достаточно навести указатель на интересующий вас инструмент, и нажать клавишу [F1]. Если вы наведете указатель на элемент программного кода C/C++ и нажмете [F1], то получите справку о синтаксисе выбранной вами конструкции.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Перемещаемые панели инструментов
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Любые панели инструментов VisualC++ можно сделать закрепленными или плавающими. Закрепленные панели инструментов фиксируются вдоль одного из четырех краев окна программы. Изменить размер такой панели вы не можете.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Плавающая панель инструментов имеет собственную строку заголовка и может находиться в любом месте. Плавающие панели всегда располагаются поверх других компонентов окна программы. Вы можете свободно изменять как размер, так и местоположение плавающих панелей инструментов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы превратить закрепленную панель инструментов в плавающую, вам необходимо выполнить такие действия:
</p>
<ul>
	<li>
	щелкнуть левой кнопкой мыши на свободном пространстве панели инструментов;
	</li>
	<li>
	удерживая кнопку мыши нажатой, перетащить панель инструментов в требуемое место.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	А чтобы закрепить плавающую панель - такие:
</p>
<ul>
	<li>
	щелкнуть левой кнопкой мыши на строке заголовка или свободном пространстве панели инструментов;
	</li>
	<li>
	удерживая кнопку мыши нажатой, перетащить панель инструментов к одному из четырех краев окна программы.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При необходимости разместить плавающую панель инструментов поверх закрепленной вы должны:
</p>
<ul>
	<li>
	щелкнуть левой кнопкой мыши на строке заголовка или свободном пространстве панели инструментов;
	</li>
	<li>
	удерживая кнопку мыши, нажать клавишу [Ctrl] и перетащить панель инструментов в нужное место.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc2"></a> 
<h1>2. Принципы функционирования программ под Windows. Управление графическим выводом.</h1>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<h2>2.1. Концепции и средства программирования в Windows</h2>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<h3>2.1.1. Среда Windows</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Windows, как известно, представляет собой графическую многозадачную операционную систему. Все программы, разработанные для этой среды, должны соответствовать определенным стандартам и требованиям. Это касается, прежде всего, внешнего вида окна программы и принципов взаимодействия с пользователями. Благодаря стандартам, общим для всех приложений Windows, пользователю не составляет труда разобраться в принципах работы любого приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы помочь программистам в разработке приложений для Windows, были созданы многочисленные системные функции, позволяющие легко добавлять в создаваемые программы контекстные меню, полосы прокрутки, диалоговые окна, значки и многие другие элементы пользовательского интерфейса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Windows позволяет работать с различными периферийными устройствами, такими как монитор, клавиатура, мышь, принтер и т.д., вне зависимости от типа самих устройств. Это дает возможность запускать одни и те же приложения на компьютерах с разной аппаратной конфигурацией.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.2. Графический интерфейс пользователя</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Первое, что бросается в глаза при знакомстве с приложениями Windows, — это стандартизированный графический интерфейс. Для представления дисков, файлов, папок и других системных объектов используются специальные растровые изображения, называемые значками. Окно типичного приложения Windows содержит, как правило, строку заголовка окна, меню, панель инструментов, строку состояния, и рабочую область окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Название приложения появляется в строке заголовка его окна. Все функции, выполняемые программой, перечислены в меню. Чтобы выполнить команду, достаточно выбрать в меню соответствующий пункт и щелкнуть на нем мышью. В большинстве приложений вызовы команд меню дублируются также комбинациями клавиш.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как правило, программы имеют сходный внешний вид окон и похожие наборы команд меню. Пользователю достаточно на примере одного приложения изучить основные операции по открытию и манипулированию файлами и данными, чтобы чувствовать себя вполне уверенно с любым другим приложением Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стандартный интерфейс облегчает работу не только пользователям, но и программистам. Для добавления в приложение меню или диалогового окна достаточно воспользоваться одной из стандартных функций Windows. Поскольку за реализацию меню и диалоговых окон отвечает сама система, а не программист, это гарантирует правильность работы интерфейса приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.3. Многозадачная среда</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Многозадачность Windows состоит в том, что одновременно можно запустить несколько приложений или открыть сразу несколько сеансов работы с одним приложением. Каждая программа размещает свое окно поверх рабочего стола Windows. В любой момент времени пользователь может переместить одно из окон в иное место экрана, перейти от одного окна к другому, изменить их размер или произвести обмен данными между приложениями. Можно параллельно запустить счет, редактировать, и т.д.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Хотя считается, что приложения выполняются одновременно, в действительности это не так. В текущий момент времени только одно приложение может использовать ресурсы процессора. Многозадачность реализуется за счет того, что процессор переключается между выполняющимися заданиями в течение очень коротких промежутков времени. Приоритеты выполнения одновременно запущенных программ также не одинаковы. В текущий момент времени активным, т.е. принимающим данные от пользователя, может быть только одно приложение, хотя инструкции для процессора могут поступать сразу от всех открытых приложений, независимо от их состояния. Задачу определения приоритетов приложений и распределения времени работы процессора берет на себя Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.4. Ввод данных посредством очередей</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В среде Windows память компьютера представляет собой совместно используемый ресурс. Таковыми являются и большинство устройств ввода, в частности клавиатура и мышь. В среде Windows приложение не может обращаться напрямую к клавиатуре или мыши и получать данные непосредственно от них. Подобная задача выполняется самой Windows, которая заносит данные в системную очередь. Из очереди введенные данные распределяются между запущенными программами. Это осуществляется путем копирования сообщений из системной очереди в очереди соответствующих приложений. Затем, как только приложение оказывается готовым принять данные, оно считывает сообщения из своей очереди и распределяет их между открытыми окнами.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В Windows данные от устройств ввода поступают в виде сообщений. В каждом сообщении указывается системное время, состояние клавиатуры, код нажатой клавиши, позиция указателя мыши и состояние кнопок мыши, а также идентификатор устройства, пославшего сообщение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все сообщения от клавиатуры, мыши и системного таймера имеют одинаковый формат и обрабатываются схожим образом. В случае сообщений клавиатуры передается виртуальный код нажатой клавиши, который идентифицирует клавишу независимо от имеющейся в наличии клавиатуры и генерируется Windows, а также аппаратно-зависимый скан-код, генерируемый самой клавиатурой. Передается также информация о состоянии ряда других клавиш, таких как [NumLock], [Alt], [Shift] и [Ctrl].
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Клавиатура и мышь, являются совместно используемыми ресурсами. Они посылают сообщения всем приложениям, открытым в данный момент в среде Windows. Система переадресовывает все сообщения клавиатуры текущему активному окну. Сообщения мыши обрабатываются иначе. Они направляются тому приложению, над чьим окном в данный момент находится указатель мыши. О таком окне говорят, что оно получает фокус.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Другую группу составляют сообщения системного таймера. Формат их такой же, как у сообщений клавиатуры и мыши. Windows позволяет приложениям инициализировать таймер таким образом, чтобы одно из окон приложения регулярно принимало сообщения от таймера. Такие сообщения поступают непосредственно в очередь данного приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.5. Сообщения</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В основе Windows лежит механизм генерации и обработки сообщений. С точки зрения приложений, сообщения являются формой уведомления о произошедших событиях, на которые приложение должно (или не должно) каким-то образом реагировать. Пользователь может инициировать событие щелчком или перемещением указателя мыши, изменением размера окна или выбором команды из меню. Другие события могут быть инициализированы самим приложением. Например, в электронной таблице завершение вычислений в ячейках может сопровождаться автоматическим обновлением диаграммы, основанной на данном блоке ячеек. В таком случае при завершении вычислений генерируется сообщение для этого же приложения о необходимости обновления диаграммы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сообщения могут генерироваться автоматически самой Windows, например, в случае завершения работы системы, когда каждому открытому приложению посылается уведомление о необходимости проверить сохранность данных и закрыть свои окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассматривая роль сообщений в Windows, необходимо отметить, что именно благодаря подсистеме сообщений становится возможной многозадачность Windows. Подсистема сообщений позволяет ей распределять время работы процессора между всеми открытыми приложениями. Каждый раз, когда Windows посылает сообщение приложению, она на некоторое время открывает этому приложению доступ к процессору. Единственная возможность для приложения получить доступ к процессору — это получить сообщение от Windows. Кроме того, сообщения позволяют приложению прореагировать определенным образом на событие, произошедшее в системе. Это событие могло быть вызвано самим приложением, другим приложением, выполняющимся в это же время в Windows, пользователем или операционной системой. Каждый раз, когда происходит то или иное событие, Windows оповещает о нем все заинтересованные приложения, открытые в настоящий момент.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.6. Управление памятью</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Одним из наиболее Важных ресурсов системы является память компьютера. Если в системе одновременно запущено несколько приложений, то они должны иметь возможность координировать свою работу таким образом, чтобы не вызывать конфликтов при распределении системных ресурсов. Так, в результате многократного открытия и закрытия программ память компьютера может оказаться фрагментированной. Windows обладает встроенной подсистемой дефрагментации памяти, организующей перемещение и объединение блоков памяти.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если же размер кода запускаемого приложения превышает объем свободной памяти, появляется опасность исчерпания памяти компьютера. Windows способна автоматически выгружать из памяти неиспользуемые в данный момент фрагменты приложений и загружать их опять с диска при обращении к ним.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приложения Windows могут совместно использовать функции, хранящиеся в отдельных исполняемых файлах общего доступа. Такие файлы называются библиотеками динамической компоновки (DLL — dynamic link libraries). Windows содержит встроенный механизм компоновки таких библиотек с программами на этапе выполнения. Для работы самой Windows необходим достаточно большой набор DLL-файлов. С целью упрощения работы с динамическими библиотеками в Windows применяется новый формат исполняемых файлов. Такие файлы содержат информацию, позволяющую системе управлять блоками кода и данных, а также выполнять динамическую компоновку.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.7. Аппаратная независимость</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Windows обеспечивает также независимость пользовательской среды от типа используемых аппаратных устройств. Благодаря этому программисты избавляются от необходимости заранее учитывать, какие именно монитор, принтер или устройство ввода будут подключены к конкретному компьютеру.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В среде Windows драйверы для определенного устройства создаются и инсталлируются только один раз. Причем они могут устанавливаться сразу при инсталляции Windows, поступать вместе с программными продуктами или добавляться самим пользователем.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Аппаратная независимость приложений в Windows реализуется за счет того, что приложения не обмениваются данными с устройствами напрямую, а используют в качестве посредника Windows. Для приложения нет необходимости знать, какой именно принтер подключен к данному компьютеру. Программа передает команду Windows напечатать прямоугольную область с заливкой, после чего уже операционная система разбирается, как реализовать эту задачу на имеющемся оборудовании. Аппаратная независимость облегчает жизнь не только программистам, но и пользователям, поскольку избавляет их от необходимости выяснять, с какими типами внешних устройств может работать то или иное приложениe.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Аппаратная независимость достигается также за счет определения минимального набора базовых операций, которые должны выполняться любыми устройствами. Этот минимальный набор включает элементарные операции, необходимые для правильного решения любых задач, которые могут быть поставлены перед данным устройством. Какой бы сложности ни была задача, она может быть сведена к последовательности элементарных операций, входящих в набор минимальных требований к устройству. Например, далеко не все графопостроители обладают функцией рисования окружностей. Тем не менее, даже если выведение окружностей не входит в набор функций графопостроителя, вы все равно можете создавать программы, которые могут ставить перед графопостроителем подобную задачу. И поскольку, в соответствии с минимальными требованиями, все графопостроители, инсталлируемые в Windows, должны уметь рисовать линии, Windows автоматически преобразует окружность в набор линий и передаст массив векторов графопостроителю.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы избежать конфликтов при вводе данных, в Windows также определен минимальный набор кодов клавиш, которые должны распознаваться любым приложением. Стандартный набор кодов в целом соответствует раскладке ПК-совместимой клавиатуры. Если какая-нибудь фирма выпустит клавиатуру с дополнительными клавишами, не входящими в стандартный набор, то она должна позаботиться о специальном программном обеспечении, преобразующем коды этих клавиш в последовательности стандартных кодов, распознаваемых Windows. Минимальному набору кодов должны соответствовать команды, поступающие не только от клавиатуры, но и от всех других устройств ввода, в том числе от мыши. Таким образом, если какая-нибудь фирма выпустит четырехкнопочную мышь, то это не должно вас беспокоить, поскольку производитель сам позаботится о том, чтобы команды от дополнительных кнопок соответствовали стандартным кодам Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.8. Библиотеки динамической компоновки</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функциональные возможности Windows в большой мере обеспечиваются за счет использования библиотек динамической компоновки (DLL). В частности, благодаря этим библиотекам к ядру операционной системы добавляется графический пользовательский интерфейс. DLL-файлы содержат функции, которые подключаются к программе во время ее выполнения (динамически), а не во время компиляции (статически).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Динамическая компоновка программ с внешними файлами, содержащими часто используемые процедуры, не является чем-то уникальным для Windows. Этот принцип широко применяется в языках C/C++, где все стандартные функции предоставляются внешними библиотеками. Благодаря использованию подобного подхода программист избавляется от необходимости переписывать каждый раз базовые функции, чем достигается стандартность выполнения таких операций, как считывание символов, вводимых с клавиатуры, и форматирование данных, выводимых на печать. Программист легко может создать собственную библиотеку часто задействуемых функций, например функций изменения шрифта и выравнивания текста. Предоставление доступа к функциям и методам как к глобальным инструментам среды программирования обеспечивает возможность повторного использования кода — ключевая концепция объектно-ориентированного программирования.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все библиотеки Windows компонуются динамически. То есть функции из этих библиотек не копируются в исполняемые файлы, а вызываются во время выполнения программы, что позволяет экономить ресурсы памяти. Не важно, сколько приложений одновременно запущено, — в ОЗУ хранится только одна копия библиотеки, используемая всеми приложениями.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если в программе вызывается стандартная функция Windows, то компилятор должен сгенерировать по месту вызова машинный код, содержащий обращение по адресу, находящемуся в другом сегменте кода. Такое положение представляет собой определенную проблему, поскольку до тех пор, пока программа не будет запущена, невозможно угадать, каким будет адрес библиотечной функции. Решение этой проблемы в Windows называется отложенным связыванием, или динамической компоновкой. Компоновщик позволяет обращаться к функциям, адреса которых не известны в момент компоновки. Окончательная компоновка функции происходит лишь после того, как программа запускается и загружается в память.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В компиляторах C++ используются специальные импортируемые библиотеки, назначение которых состоит в подготовке приложений к динамической компоновке в среде Windows. Например, в библиотеке USER32.LIB перечислены все стандартные функции Windows, к которым можно обращаться в программах. В записях этой библиотеки определяются модули Windows, где хранятся соответствующие функции, а также, в большинстве случаев, порядковый номер функции в этом модуле.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, многие приложения Windows вызывают функцию PostMessage(). Во время компиляции программы компоновщик получает из файла USER32.LIB информацию о модуле и номере функции PostMessage() и встраивает эти данные в код программы. При запуске программы Windows считывает имеющуюся информацию и связывает программу с реальным кодом функции PostMessage ().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.1.9. Формат исполняемых файлов</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для Windows был разработан новый формат исполняемых файлов. В частности, изменения коснулись заголовка файла, который теперь может содержать информацию об импортируемых функциях библиотек динамической компоновки. Чаще всего используются функции модулей KERNEL, USER и GDI, содержащих множество подпрограмм, связанных с различными рутинными операциями, в том числе с обработкой сообщений. Функции, хранящиеся в DLL-модулях, еще называют экспортируемыми. В соответствии с новым форматом исполняемых файлов, экспортируемые функции определяются по имени модуля и порядковому номеру функции в нем. Все DLL-файлы содержат таблицу точек входа, в которой перечислены адреса всех экспортируемых функций,
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С точки зрения приложений, эти же функции называются импортируемыми. Импорт функций осуществляется посредством рассмотренного выше механизма отложенного связывания и всевозможных таблиц компоновки. Обычно приложения Windows включают не менее одной экспортируемой функции, называемой оконной процедурой и отвечающей за прием сообщений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Другая особенность нового формата исполняемых файлов состоит в том, что с каждым сегментом кода и данных любого приложения и библиотеки связывается дополнительная информация. Обычно сегменты кода помечаются специальными флагами как перемещаемые и выгружаемые, а сегменты данных — как перемещаемые. В соответствии с установленными флагами, Windows может автоматически перемещать загруженные сегменты в памяти и даже временно выгружать их на диск, если для выполнения других программ в многозадачной среде требуется дополнительная память. Впоследствии, когда выгруженные сегменты вновь понадобятся для выполнения программы, Windows автоматически загрузит их обратно. Другой интересной особенностью является загрузка по вызову. При использовании данного механизма сегмент кода загружается в память только при условии, что в программе встречается вызов функции, находящейся в этом сегменте. Благодаря такого рода средствам в Windows можно работать с несколькими приложениями одновременно, даже если свободной памяти хватает лишь для одного приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>2.2. Управление графическим выводом</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Особенность создания приложений в среде Windows заключается в том, что здесь применяются специальные методики программирования и используется своя терминология. Последнюю можно разделить на две большие категории: терминология, связанная с пользовательским интерфейсом (меню, диалоговые окна, значки и т.д.), и терминология, относящаяся непосредственно к программированию (сообщения, вызовы функций и т.д.). Рассмотрим ниже эти термины и понятия.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<h3>2.2.1. Что представляет собой окно</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Окно — это специальная прямоугольная область экрана. Все элементы окна, его размер и внешний вид контролируются открывающей его программой. Каждый щелчок пользователя на каком-нибудь элементе окна вызывает ответные действия приложения. Многозадачность в Windows заключается, в частности, в возможности одновременно открывать окна сразу нескольких приложений или нескольких окон одного приложения. Активизируя с помощью мыши или клавиатуры то или иное окно, пользователь дает системе понять, что последующие команды и данные следует направлять именно этому окну.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<h3>2.2.2. Компоненты окна</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стандартный внешний вид окон всех приложений Windows и предсказуемость работы различных их компонентов позволяют пользователям чувствовать себя уверенно с новыми приложениями и легко разбираться в принципах их работы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Рамка.</em><strong>
	</strong>Обычно каждое окно заключается в небольшую рамку. Функции рамки сводятся к отделению окна от остальных частей экрана. Как правило, рамка является и средством масштабирования. Размер окна приложения можно изменить, если поместить указатель мыши на рамку и перетащить его, удерживая нажатой левую кнопку мыши.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Строка заголовка.</em><strong> </strong>Имя приложения, которому принадлежит открытое окно, отображается в строке заголовка в верхней части окна. Строка заголовка является обязательным элементом всех окон приложений и позволяет пользователю легко определить, какому приложению принадлежит какое окно, если в системе запущено сразу несколько приложений. Строка заголовка активного окна выделяется альтернативным цветом, чтобы его легко можно было отличить от неактивных окон.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Значок приложения.</em><strong> </strong>Другим обязательным элементом любого окна является расположенный в его верхнем левом углу значок приложения. Этот значок обычно представляет собой маленький логотип приложения. Щелчок на значке приводит к открытию системного меню.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Системное меню.</em><strong> </strong>Системное меню открывается при щелчке мышью на значке приложения. В нем представлены стандартные команды управления окном: <em>Restore</em>(Восстановить), <em>Move</em>(Переместить), <em>Size</em>(Размер), <em>Minimize</em>(Свернуть), <em>Maximize</em>(Развернуть) и <em>Close</em>(Закрыть).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Кнопка свертывания.</em><strong> </strong>В правом верхнем углу большинства окон приложений имеется три кнопки. Крайняя левая кнопка предназначена для свертывания окна в кнопку на панели задач.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Кнопка развертывания/восстановления.</em><strong>
	</strong>Средняя кнопка в правом верхнем углу либо разворачивает окно на весь экран, либо восстанавливает прежние его размеры, если окно уже развернуто.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Кнопка закрытия.</em><strong> </strong>Крайняя правая кнопка в углу предназначена для закрытия приложения. После закрытия окна активным автоматически становится окно следующего приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Вертикальная полоса прокрутки.</em><strong> </strong>В некоторых случаях окно приложения может содержать вертикальную полосу прокрутки, которая располагается по правому краю окна. В верхней и нижней частях полосы находятся кнопки со стрелками, направленными соответственно вверх и вниз. Вдоль самой полосы располагается бегунок. Положение бегунка показывает, какая часть окна или документа отображается в данный момент на экране. Перемещая бегунок, можно выбрать нужную часть многостраничного документа. Щелчок мышью на кнопке со стрелкой приведет к смещению содержимого окна на одну строку вверх или вниз, а щелчок на свободном пространстве выше или ниже бегунка — на одну экранную страницу вверх или вниз.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Горизонтальная полоса прокрутки.</em><strong> </strong>Окно может также быть оснащено горизонтальной полосой прокрутки, которая размещается по нижнему краю окна и работает аналогично вертикальной полосе прокрутки. Горизонтальная полоса предназначена для выведения на экран частей документов, состоящих из большого числа столбцов. Щелчок мышью на кнопках со стрелками приводит к смещению содержимого окна на один столбец влево или вправо. Щелчок на областях между стрелками и бегунком смещает изображение на одну экранную страницу влево или вправо.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Строка меню.</em><strong> </strong>В окнах большинства приложений сразу под строкой заголовка находится строка меню, содержащая наборы команд и опций программы. Обычно для выбора команд меню используется мышь, хотя эти действия можно выполнить и с помощью клавиатуры. Каждому элементу меню, как правило, соответствует клавиша быстрого вызова, выделенная подчеркиванием в названии элемента. Чтобы выбрать данный элемент, нужно нажать соответствующую клавишу в сочетании с клавишей [Alt]. Так, комбинация клавиш [Alt+F] открывает меню <strong>File.</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Рабочая область.</em><strong> </strong>Рабочая область обычно занимает большую часть окна. Именно в эту область программа выводит результаты своей работы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.2.3. Класс окна. Функция окна. Цикл обработки сообщений.</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы два окна одной и той же программы выглядели и работали совершенно одинаково, они оба должны базироваться на общем классе окна. В приложениях, написанных на С++, класс окна регистрируется программой в процессе инициализации. При создании окна класс указывается в качестве параметра функции CreateWindow (). Зарегистрированный новый класс становится доступным для всех программ, запущенных в данный момент в системе. В случае использования библиотеки MFC вся работа по регистрации классов окон выполняется автоматически, что существенно облегчает работу программиста.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Благодаря тому, что окна приложения создаются на основе общего базового класса, значительно сокращается объем информации, которую при этом следует указывать. Поскольку класс окна содержит в себе описания элементов, общих для всех окон данного класса, нет необходимости повторять эти описания при создании каждого нового окна. К тому же все окна одного класса используют одну оконную процедуру, что также позволяет избежать дублирования кода.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Поскольку архитектура Windows-программ основана на принципе сообщений, все эти программы содержат некоторые общие компоненты. Обычно их приходится в явном виде включать в исходный код. Но, к счастью, при использовании библиотеки MFC это происходит автоматически; нет необходимости тратить время и усилия на их написание.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Тем не менее, чтобы до конца разобраться, как работает Windows-программа, написанная с использованием MFC, и почему она работает именно так, необходимо в общих чертах понять назначение этих компонентов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Функция WinMain().</em> Все Windows-программы начинают выполнение с вызова функции WinMain(). При традиционном методе программирования это нужно делать явно. С использованием библиотеки MFC такая необходимость отпадает, но функция все-таки существует.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Функция окна.</em> Все Windows-программы должны содержать специальную функцию, которая не используется в самой программе, но вызывается самой операционной системой. Эту функцию обычно называют функцией окна, или процедурой окна. Она вызывается Windows, когда системе необходимо передать сообщение в программу. Именно через нее осуществляется взаимодействие между программой и системой. Функция окна передает сообщение в своих аргументах.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Помимо принятия сообщения от Windows, функция окна должна вызывать выполнение действия, указанного в сообщении. Конечно, программа не обязана отвечать на все сообщения, посылаемые Windows. Поскольку их могут быть сотни, то большинство сообщений обычно обрабатывается самой системой, а программе достаточно поручить Windows выполнить действия, предусмотренные по умолчанию.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При использовании библиотеки MFC такая функция создается автоматически. В этом заключается одно из преимуществ библиотеки. Но в любом случае, если сообщение получено, то программа должна выполнить некоторое действие.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Именно способ взаимодействия с операционной системой через сообщения диктует общий принцип построения всех программ для Windows, написанных как с использованием MFC, так и без нее.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Цикл сообщений.</em> Итак, Windows взаимодействует с программой, посылая ей сообщения. Все приложения Windows должны организовать так называемый цикл сообщений (обычно внутри функции WinMain()). В этом цикле каждое необработанное сообщение должно быть извлечено из очереди сообщений данного приложения и передано назад в Windows, которая затем вызывает функцию окна программы с данным сообщением в качестве аргумента.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В традиционных Windows-программах необходимо самостоятельно создавать и активизировать такой цикл. При использовании MFC это также выполняется автоматически. Однако важно помнить, что цикл сообщений все же существует. Он является неотъемлемой частью любого приложения Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Процесс получения и обработки сообщений является сложным, но, тем не менее, ему должны следовать все Windows-программы. К счастью, при использовании библиотеки MFC большинство частных деталей скрыты от программиста, хотя и продолжают неявно присутствовать в программе.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Класс окна.</em> Каждое окно в Windows-приложении характеризуется определенными атрибутами, называемыми классом окна. (Здесь понятие “класс” не идентично используемому в С++. Оно, скорее, означает стиль или тип.)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В традиционной программе класс окна должен быть определен и зарегистрирован прежде, чем будет создано окно. При регистрации необходимо сообщить Windows, какой вид должно иметь окно и какую функцию оно выполняет. В то же время регистрация класса окна еще не означает создание самого окна. Для этого требуется выполнить дополнительные действия. При использовании библиотеки MFC создавать собственный класс окна нет необходимости. Вместо этого можно работать с одним из заранее определенных классов, описанных в библиотеке. В этом еще одно ее преимущество.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>2.2.4. Графические объекты, используемые в окнах</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Примерами графических объектов, с которыми можно обращаться как с единым целым и которые выступают элементами пользовательского интерфейса, являются строка меню, полосы прокрутки, кнопки и т.д. Рассмотрим наиболее широко используемые графические объекты Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Значки.</em><strong>
	</strong>Значками называются маленькие графические изображения, выполняющие опознавательную функцию. Так, значки приложений на панели задач позволяют легко определить, какие программы в настоящий момент запущены, даже если названия программ не отображаются целиком. Значки могут быть очень полезны в самих приложениях, поскольку с их помощью можно привлекать внимание пользователей к сообщениям об ошибках и различным предупреждениям. В Windows входит набор стандартных значков, в частности стилизованные знак вопроса и восклицательный знак, а также ряд других. С помощью встроенного в компилятор Visual C++ редактора ресурсов вы можете создавать собственные значки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Указатели мыши.</em><strong> </strong>Указатели мыши также являются графическими объектами, используемыми для отслеживания перемещения мыши. Вид указателя может меняться в зависимости от выполняемого задания и состояния системы. Например, стандартный указатель-стрелка меняет свой вид на изображение песочных часов в том случае, если система занята. С помощью встроенного в компилятор Visual C++ редактора ресурсов вы можете создавать собственные указатели мыши.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Текстовые курсоры.</em><strong> </strong>Курсоры предназначены для указания места, куда следует осуществлять ввод текстовых данных. Отличительной особенностью курсоров является их мерцание. В большинстве текстовых редакторов и в полях диалоговых окон в качестве курсора применяется I-образный указатель мыши. Причем в Windows нет (в отличие от значков и указателей) коллекции готовых курсоров.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Окна сообщений.</em><strong> </strong>Окна сообщений представляют собой разновидность диалоговых окон, содержащих строку заголовка, значок и текст сообщения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В приложении при вызове специальной функции указывается текст заголовка окна, текст сообщения, какой из стандартных значков Windows использовать (если это необходимо) и какой набор кнопок выводить. В частности, можно вызывать окна с такими комбинациями кнопок: Abort/Retry/Ignore, ОК, Yes/No, Yes/No/Cancel, ОК/Cancel и Retry/Cancel. Обычно в окнах сообщений отображаются такие стандартные значки, как IconHand, IconQuestion, IconExclamation, IconAsterisk и некоторые другие.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Диалоговые окна.</em><strong> </strong>Диалоговые окна содержат наборы различных элементов управления и предназначены для предоставления пользователю возможности устанавливать опции и параметры программы, которой принадлежит данное окно. Внешний вид диалогового окна разрабатывается с помощью редактора ресурсов компилятора Visual C++.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Шрифты.</em><strong>
	</strong>Шрифт в Windows — это графический ресурс, содержащий набор символов определенного типа. Существует набор функций, с помощью которых можно манипулировать начертанием символов для получения форматированного текста. В приложениях можно использовать различные стандартные шрифты, такие как Courier, TimesNewRoman и другие, а также пользовательские шрифты. Встроенные функции позволяют на базе основного шрифта получать полужирное начертание, курсив, подчеркнутый текст, изменять размер шрифта. Причем внешний вид шрифта не зависит от типа устройства, на которое выводится текст. Благодаря внедрению технологии TrueType было достигнуто соответствие между внешним видом шрифта на экране и шрифта, выводимого при печати.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Точечные рисунки.</em><strong> </strong>Точечные рисунки (bitmap) представляют собой точную копию части экрана, снятую попиксельно. Тот факт, что изображение является точным образом экрана, устраняет необходимость в каких бы то ни было дополнительных преобразованиях, что существенно сокращает время вывода изображения на экран. В Windows точечные рисунки наиболее широко применяются для двух целей. Во-первых, они служат изображениями всевозможных кнопок и значков, например стрелок полос прокрутки и кнопок панелей инструментов. Другой областью применения точечных рисунков являются кисти, с помощью которых рисуются и заполняются цветом различные геометрические фигуры на экране.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Точечные рисунки можно создавать и модифицировать с помощью встроенного редактора ресурсов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Перья.</em><strong>
	</strong>Перья предназначены для рисования геометрических фигур и различных контуров и характеризуются тремя основными параметрами: ширина линии, стиль (точечный, штрихпунктирный, непрерывный) и цвет. Существует два готовых пера: одно для рисования черных линий, другое — для рисования белых. С помощью специальных функций вы можете создавать собственные перья.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Кисти.</em><strong>
	</strong>Кисти предназначены для заливки объектов цветом, выбранным из заданной палитры. Минимальный размер кисти — 8x8 пикселей. Кисть также характеризуется тремя <em>параметрами:</em> размером, шаблоном заливки и цветом. Заливка может быть сплошной, штриховой, диагональной или представлять собой узор, заданный пользователем.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc3"></a> 
<h1>3. Средство автоматизированной разработки приложений AppWizard. Основные этапы разработки Windows-приложений</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>3.1. Мастер приложений AppWizard и библиотека MFC</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В связи с тем, что сегодня уровень сложности программного обеспечения очень высок, разработка приложений Windows с использованием только какого-либо языка программирования (например, языков C или С++) значительно затрудняется.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы облегчить работу программиста практически все современные компиляторы с языка C++ содержат специальные библиотеки классов. Такие библиотеки включают в себя практически весь программный интерфейс Windows и позволяют пользоваться при программировании средствами более высокого уровня, чем обычные вызовы функций.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Современные интегрированные средства разработки приложений Windows позволяют автоматизировать процесс создания приложения. Для этого используются генераторы приложений. Программист отвечает на вопросы генератора приложений и определяет свойства приложения - поддерживает ли оно многооконный режим, технологию OLE, трехмерные органы управления, справочную систему. Генератор приложений, создаст приложение, отвечающее требованиям, и предоставит исходные тексты. Пользуясь им как шаблоном, программист сможет быстро разрабатывать свои приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Подобные средства автоматизированного создания приложений включены и в компилятор Microsoft Visual C++. Они предполагают создание приложений различных типов. Для создания Windows-приложения, использующего библиотеку классов MFC, мы используем средство MFC AppWizard (exe). Заполнив несколько диалоговых панелей, можно указать характеристики приложения и получить его тексты, снабженные обширными комментариями.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	MFC – это базовый набор (библиотека) классов, написанных на языке С++ и предназначенных для упрощения и ускорения процесса программирования для Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Конечно, мастер MFC AppWizard не всесилен. Прикладную часть приложения программисту придется разрабатывать самостоятельно. Исходный текст приложения, созданный MFC AppWizard, станет только основой, к которой нужно подключить остальное. Но работающий шаблон приложения - это уже половина всей работы. Исходные тексты приложений, автоматически полученных от MFC AppWizard, могут составлять сотни строк текста. Набор его вручную был бы очень утомителен.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Нужно отметить, что MFC AppWizard создает тексты приложений только с использованием библиотеки классов MFC (Microsoft Foundation Class library). Поэтому, только изучив язык C++ и библиотеку MFC, можно пользоваться средствами автоматизированной разработки и создавать свои приложения в кратчайшие сроки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.1.1. Интерфейс вызовов функций в Windows</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Доступ приложений к системным ресурсам осуществляется через целый ряд системных функций, называемых прикладным программным интерфейсом, или API (Application Programming Interfaсe).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для взаимодействия с Windows приложение запрашивает функции API, с помощью которых реализуются все необходимые системные действия, такие как выделение памяти, вывод на экран, создание окон и т.п.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Библиотека MFC инкапсулирует многие функции API. Хотя программам и разрешено обращаться к ним напрямую, все же чаще это будет выполняться через соответствующие функции-члены.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как правило, функции-члены либо аналогичны функциям API, либо непосредственно обращаются к нужной части интерфейса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функции API содержатся в библиотеках динамической загрузки (Dynamic Link Libraries, или DLL), которые загружаются в память только в тот момент, когда к ним происходит обращение, т.е. при выполнении программы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Динамическая загрузка обеспечивает ряд существенных преимуществ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Во-первых, поскольку практически все программы используют API-функции, то благодаря DLL-библиотекам существенно экономится дисковое пространство, которое в противном случае занималось бы большим количеством повторяющегося кода, содержащегося в каждом из исполняемых файлов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Во-вторых, изменения и улучшения в Windows-приложениях сводятся к обновлению только содержимого DLL-библиотек. Уже существующие тексты программ не требуют перекомпиляции.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.1.2. Взаимодействие программ и Windows</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В Windows система вызывает программу. Это осуществляется следующим образом: программа ожидает получения сообщения от Windows. Когда это происходит, то выполняется некоторое действие. После его завершения программа ожидает следующего сообщения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Windows может посылать программе сообщения множества различных типов. Например, каждый раз при щелчке мышью в окне активной программы посылается соответствующее сообщение. Другой тип сообщений посылается, когда необходимо обновить содержимое активного окна, сообщения посылаются также при нажатии клавиши, если программа ожидает ввода с клавиатуры.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Необходимо запомнить одно: по отношению к программе сообщения появляются случайным образом. Вот почему Windows-программы похожи на программы обработки прерываний: невозможно предсказать, какое сообщение появится в следующий момент.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Структура Windows-программ отличается от структуры программ других типов. Это вызвано двумя обстоятельствами:
</p>
<ul>
	<li>
	во-первых, способом взаимодействия между программой и Windows
	</li>
	<li>
	во-вторых, правилами, которым следует подчиняться для создания стандартного интерфейса Windows-приложения (т.е. чтобы сделать программу “похожей “ на Windows-приложение).
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Цель Windows – дать человеку, который хотя бы немного знаком с системой, возможность сесть за компьютер и запустить любое приложение без предварительной подготовки. Для этого Windows предоставляет дружественный интерфейс пользователя.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теоретически, если пользователь сумел запустить одно Windows-приложение, то он сумеет запустить и любое другое. Конечно, на практике придется немного потренироваться, чтобы научиться использовать большинство программ с максимальной эффективностью. Однако это связано исключительно с тем, что программа делает, а не с тем, как ею пользоваться. Ведь, фактически, значительная часть кода Windows-приложения предназначена именно для организации интерфейса с пользователем.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Хотя создание удобного интерфейса “под Windows” является основной задачей при написании любой Windows-программы, такой интерфейс не создается автоматически. То есть вполне можно написать программу, в которой элементы интерфейса используются неэффективно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы отойти от философии создания традиционного Windows-интерфейса, должны быть достаточно веские основания. Иначе пользователи этой программы будут разочарованы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В общем, если программист собирается писать приложения для Windows, то он должен дать пользователям возможность работать с обычным интерфейсом и руководствоваться стандартной методикой разработки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>3.2. Концепция «Документ – представление». Основные этапы построения каркаса приложения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Мастер создания приложений AppWizard позволяет создавать различные типы приложений, но обычно большинством программистов используются исполняемые программы (файл приложения с расширением .ехе). Кроме того, желательно получить от AppWizard готовые фрагменты программного кода – классы, объекты, функции, которые присутствуют едва ли не в каждой стандартной программе. Для создания программы подобного типа, необходимо выбрать File\New, а затем – вкладку Projects в окне New, как это показано на рис. 3.1.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_139af158.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.1. Выбор типа приложения, которое вы хотите создать
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В левой части окна находится список возможных типов проектов. Для создания типового приложения необходимо выбрать MFC Application. Также необходимо указать имя проекта в поле Name, а в поле Location – каталог, в котором будет находиться проект.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данный тип проекта использует библиотеку классов Microsoft Foundation Classes (MFC). На каждом этапе программист может изменить некоторые параметры создаваемого приложения. Рассмотрим более подробно этапы создания приложения AppWizard. На следующем этапе следует настраивать опции приложения, представленные в списке Overview (рис. 3.2).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_f3d9bb2a.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.2. Выбор варианта интерфейса пользователя
</p>
<p><br>
</p>
<h3>3.2.1. Выбор типа приложения</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Application</em><em>
	</em><em>type</em><em>.</em> Первое, что должен определить программист, приступая к работе в AppWizard, – сколько документов будет поддерживать будущее приложение, т.е. будет ли оно многодокументным приложением (Multiply
documents), однодокументным приложением (Single
document), или простым диалоговым приложением (Dialog
based). Для каждого из этих типов приложений AppWizard создает различные классы.
</p>
<ul>
	<li>
	SDI-приложение
	<em>(</em><em>SDI</em><em>–</em><em>
	</em><em>Single</em><em> </em><em>Document</em><em>
	</em><em>Interface</em><em>,</em> интерфейс с единственным документом) позволяет в каждый момент времени иметь открытым только один документ, однако количество открытых окон не ограничено. Примером может служить известный каждому редактор Notepad. Если вы выберете в таком приложении File\0pen, то открытый в текущий момент файл будет закрыт прежде, чем откроется новый. 
	</li>
	<li>
	MDI-приложение (<em>MDI</em><em> </em><em>–</em><em>
	</em><em>Multiple</em><em> </em><em>Document</em><em>
	</em><em>Interface</em><em>,</em> дословно – ”многодокументный интерфейс”) может одновременно держать открытыми несколько документов, каждый из которых представлен отдельным файлом, примеры – Excel, Word и другие хорошо знакомые многим аналогичные приложения. Такие приложения обязательно имеют в главном меню пункт Window, а в меню File – пункт Close. 
	</li>
	<li>
	Простое диалоговое приложение, как правило, вообще не открывает документов. Такие приложения не имеют меню. 
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ниже этой группы переключателей в диалоговом окне находится флажок Document/View architecture support (Поддержка архитектуры документ/представление). Пользователи, которые имеют большой опыт разработки приложений в среде Visual C++, могут отключить поддержку этой архитектуры мастером, но для большинства разработчиков она будет отнюдь не лишней. Поэтому в дальнейшем, если не будет оговорено особо, будем считать, что флажок Document/View architecture support установлен.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Еще ниже в диалоговом окне находится раскрывающийся список для выбора языка, который вы собираетесь использовать при написании текста программы. Если системный язык операционной среды, не заданный по умолчанию English (United States) – американский вариант английского, не забудьте сделать такой же выбор и в списке. Иначе можете в дальнейшем столкнуться с совершенно неожиданными эффектами в работе с ClassWizard.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Опция </em><em>Compound</em><em>
	</em><em>Document</em><em>
	</em><em>Support</em><em>. </em>Окно MFC AppWizard при этом будет выглядеть так, как показано на рис. 3.3.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На выбор предлагается пять вариантов поддержки:
</p>
<ul>
	<li>
	если не планируется создание OLE-приложения, выберите переключатель None (Никакой);
	</li>
	<li>
	если вы хотите, чтобы в приложении использовались связанные или внедренные объекты OLE (например, такие, как документы Word или рабочие листы Excel), выберите переключатель Container (Контейнер); 
	</li>
	<li>
	если планируется создание приложения, документы которого могли бы быть внедрены в другое приложение, но при этом само приложение не будет использоваться автономно, выберите переключатель Mini-server (Мини-сервер);
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_13407b94.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.3. Выбор варианта поддержки составных документов
</p>
<ul>
	<li>
	если ваше будущее приложение будет не только служить сервером для других приложений, но и сможет работать автономно, выберите переключатель Full-server (Полный сервер); 
	</li>
	<li>
	если создаваемое приложение должно обладать способностью включать документы других приложений и само обслуживать их своими объектами, выбирайте переключатель Both container
	and server (и контейнер, и сервер).
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если вы выбрали какой-либо из вариантов поддержки составных документов, то придется поддерживать и составные файлы (compound files). Составные файлы содержат один или более объектов ActiveX и сохраняются на диске в особом формате, так что один из объектов может быть заменен без переписи всего файла. Таким образом, удается сберечь довольно много времени.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.2.2. Выбор поддержки баз данных</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Опиция </em><em>Database</em><em>
	</em><em>Support</em><em>.</em> Окно MFC AppWizard при этом будет выглядеть так, как показано на рис. 3.4.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Здесь вам на выбор предлагаются четыре варианта уровня поддержки:
</p>
<ul>
	<li>
	если работа с базами данных в приложении не планируется, выберите переключатель None (Никакой);
	</li>
	<li>
	если предполагается иметь доступ к базам данных, но для этого не будут использованы классы просмотра, производные от CFormView, или нет необходимости в меню Record (Запись), выбирайте переключатель Header files
	only (Только файлы заголовков);
	</li>
	<li>
	если вы планируете разрабатывать классы просмотра базы данных в приложении как производные от CFormView и иметь меню Record, но не нуждаетесь в средствах сохранения-восстановления (сериализации) документов, выбирайте переключатель Database view
	without file
	support (Просмотр базы данных без поддержки операций с файлами). Записи в базе данных можно будет обновлять с помощью CRecordset – класса MFC доступа к базам данных;
	</li>
	<li>
	если помимо всего что задано в предыдущем случае, вы планируете и сохранение-восстановление документов на диске (возможно, это будет одна из опций пользователя), выберите Database view
	with file
	support (Просмотр базы данных и поддержка операций с файлами).
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_376fe4fc.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.4. Выбор варианта поддержки операции с базами данных
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если вы выбрали один из вариантов с использованием базы данных, в этом же окне задайте базу, которая будет источником данных. Для этого нужно щелкнуть на кнопке Data Source (Источник данных).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.2.3. Установка опций пользовательского интерфейса</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Опция </em><em>User</em><em>
	</em><em>Interface</em><em>
	</em><em>Features</em><em>.</em> Окно MFC AppWizard при этом будет выглядеть так, как показано на рис. 3.5.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Это диалоговое окно содержит много переключателей-флажков, соответствующих предлагаемым опциям оформления:
</p>
<ul>
	<li>
	<em>Toolbars</em> (Вид панели инструментов). В приложение будет добавлена панель инструментов, которая может быть стиля “Standart
	docking” или “Browser
	style”;
	</li>
	<li>
	<em>Initial Status bar</em> (Панель
	состояния). В приложение будет добавлена панель состояния, в которой можно будет выводить подсказки соответственно выбранным пунктам меню и другие сообщения;
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<img src="i_8133601b9eac8a59_html_c8ee2571.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.5.Установка опций пользовательского интерфейса
</p>
<ul>
	<li>
	<em>Split Window</em> (Использование разделения окна). При его установке в приложение включается весь программный код, необходимый для организации разделения окна приложения таким же образом, как это сделано, например, в редакторе программного кода из комплекта средств Visual Studio. Остальные элементы диалогового окна устанавливают параметры, определяющие оформление фрейма (рамки) главного окна приложения, а для MDI-приложений – фреймов дочерних окон (child frames). Фрейм является весьма важным элементом окна. Системное меню, строка заголовка, кнопки минимизации и максимизации, собственно границы – все это свойства фрейма как объекта. Фрейм главного окна содержит всё SDI-приложение. MDl-приложение имеет несколько дочерних окон (по одному на каждый документ), которые размещаются в пределах главного, родительского, окна.
	</li>
	<li>
	<em>Thick</em><em>
	</em><em>frame</em> (утолщенная рамка) – кромки окна утолщены, и можно будет изменять размеры окна стандартным для Windows способом;
	</li>
	<li>
	<em>Minimize</em><em>
	</em><em>box</em> (кнопка минимизации) – окно имеет кнопку минимизации в правой части строки заголовка.
	</li>
	<li>
	<em>Maximize</em><em>
	</em><em>box</em> (кнопка максимизации) – окно имеет кнопку максимизации в правой части строки заголовка.
	</li>
	<li>
	<em>System</em><em>
	</em><em>menu</em> (системное меню) – в левом верхнем углу окна будет установлена пиктограмма вызова системного меню;
	</li>
	<li>
	<em>Minimized</em><em> – </em>при запуске приложения окно сворачивается в пиктограмму. Для SDI-приложений выбор этой опции не будет иметь никаких последствий;
	</li>
	<li>
	<em>Maximized</em><em>
	</em>– при запуске приложения окно разворачивается на весь экран. Для SDI-приложений выбор этой опции не будет иметь никаких последствий.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Опция </em><em>Advanced</em><em>
	</em><em>Features</em><em>.</em> Окно MFC AppWizard при этом будет выглядеть так, как показано на рис. 3.6.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_9dae8e13.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.6. Установка некоторых дополнительных опций ApplicationWizard
</p>
<ul>
	<li>
	<em>Printing</em><em>
	</em><em>and</em><em> </em><em>print</em><em>
	</em><em>preview</em> (Печать и предварительный просмотр печати). Приложение при выборе этой опции будет иметь пункты Print и Print
	preview в меню File, и AppWizard включит в приложение большую часть программного кода, связанного с выполнением этих операций; 
	</li>
	<li>
	<em>Context sensitive Help</em> (Контекстная
	справка). Меню Help в приложении будет иметь опции Index и Using Help, а значительная часть программного кода, необходимого для организации контекстной справки в приложении, будет включена в него мастером AppWizard;
	</li>
	<li>
	MAPI (Messaging API – почтовый интерфейс). При установке этой опции приложение сможет обмениваться сообщениями по электронной почте;
	</li>
	<li>
	<em>Windows</em><em>
	</em><em>Sockets</em><em>.</em> Если эта опция будет установлена, приложение сможет иметь непосредственный доступ к Internet через такие протоколы, как FTP и HTTP (протокол World Wide
	Web). Можно создать Internet-программу и без поддержки Windows Sockets, если использовать классы WinInet
	<em>.</em>
	</li>
	<li>
	<em>Number of files on recent file list. </em>Можно установить длину списка последних открываемых файлов в поле меню File создаваемого приложения. По умолчанию этот параметр имеет значение 4 и менять его не рекомендуется без очень весомых причин.
	</li>
	<li>
	<em>Подтверждение имен классов и файлов.</em> Окно MFC AppWizard при этом будет выглядеть так, как показано на рис. 3.7. AppWizard использует имя проекта (в данном случае – lab1) для формирования имен классов и имен файлов. Нет никакой нужды их изменять. Если в приложении используются классы представления, можно изменить имя класса, наследниками которого являются вновь создаваемые классы. По умолчанию базовым является CView, но многие разработчики предпочитают CScrollView или CEditView. После завершения работы в диалоговом окне необходимо нажать на кнопку Finish.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_aa4082ec.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.3.7. Подтверждение имен классов и файлов на последнем этапе создания типового приложения
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как вы щелкнете на Finish, AppWizard покажет вам в окне New Project Information информацию о новом проекте. Если что-либо не устраивает, можно вернуться, нажав на кнопку Cancel, и затем последовательно двигаться в обратном порядке по окнам этапов настройки, пока не будет найдено то окно, в котором возможно изменение данной настройки. После уточнения настройки можно повторить путь по шагам AppWizard’а либо сразу принять оставшиеся установки. После чего можно опять взглянуть на окно New project information и дать согласие на генерацию классов. AppWizard создаст необходимые классы и ресурсы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>3.3. Краткий обзор классов MFC</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Существует более 200 классов MFC. Рассмотрим несколько наиболее важных базовых классов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.3.1.Класс CObject</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На рис. 3.8 приведена схема верхнего уровня дерева наследования для классов в библиотеке MFC. Редкие классы из библиотеки MFC не являются наследниками класса CObject. Он наделен основными функциональными возможностями, необходимыми для всех классов MFC, — поддержкой сохранения-восстановления и выводом с диагностикой. Кроме того, классы, порожденные CObject, могут быть объединены в классы-контейнеры (массивы).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_1453f666.gif" style="float: left;" alt=""><br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.8. Почти все классы в библиотеке MFC являются наследниками CObject
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.3.2. Класс CCmdTarget</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для некоторых производных от CObject классов, таких как CFile и CExeption, и порожденных ими классов нет необходимости организовывать непосредственный диалоговый обмен с пользователем и операционной системой через сообщения и команды. На рис. 3.9 приведены классы, порожденные CCmdTarget и обычно называемые объектами воздействия команд (command targets).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_b37fa3d8.gif" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.9. Любой класс, получающий команды, должен быть наследником класса CCmdTarget
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>3.3.3. Класс CWnd</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как уже отмечалось, CWnd является исключительно важным классом. Только классы, порожденные CWnd, могут получить сообщение; документы и потоки (threads) могут получать команды, но не сообщения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс CWnd обеспечивает специфические для Windows процессы, в частности вызов функций CreateWindow()и DestroyWindow(). Методы этого класса поддерживают собственно формирование изображения окна на экране, обработку сообщений, диалог с буфером Clipboard и выполняют множество других операций. Общее количество методов класса CWnd— почти 250. Только несколько из этих функций потребуется перегрузить в порожденных классах. На рис. 3.10 показаны классы — наследники CWnd; так как классов элементов управления слишком много для того, чтобы приводить их список, на рисунке они объединены.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_b7624adf.gif" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 3.10. Любой класс, который будет принимать сообщения, должен быть наследником класса CWnd
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc4"></a> 
<h1>4. Архитектура Document-View. SDI- и MDI-приложения.</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>4.1. Архитектура Document-View. Классы документа и представления.</h2>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<h3>4.1.1. Что такое класс документа</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Формируя текст программы приложения с помощью AppWizard, вы имеете возможность оснастить свое детище всеми модными аксессуарами коммерческого продукта для Windows — панелью инструментов, строкой состояния, контекстным окном указателя, разнообразными меню и даже окном сообщения об авторских правах. Для того чтобы создать приложение, которое не только хорошо выглядит на экране, но и делает что-то полезное, придется вмешаться в текст программы, которую подготовил AppWizard.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наиболее существенным изменениям подвергнется часть подготовленной AppWizard программы, связанная с документом— информацией, которую пользователь может сохранять в процессе работы с приложением и затем считывать, — и с представлением — средствами представления этой информации пользователю в процессе выполнения приложения. Положенная в основу MFC концепция документ/представление позволяет отделить данные от средств, с помощью которых пользователь имеет возможность просмотреть эти данные и манипулировать ими. Объекты-документы ответственны за хранение, загрузку и выгрузку данных, а объекты-представления, которые подчас представляют собой те же окна, позволяют пользователю просматривать данные на экране и редактировать их соответственно логике работы приложения. Рассмотрим основы работы MFC в части реализации концепции документ/представление.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создавая SDI- и MDI-приложения, AppWizard изначально закладывает в них средства, ориентированные на реализацию концепции документ/представление. Это означает, что AppWizard формирует класс, производный от CDocument, и передает ему определенные задачи. Он также формирует класс представления, производный от CView, которому передает другие задачи. Давайте закажем AppWizard простейшее приложение и посмотрим, что он нам выдаст.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выберите File--New, затем вкладку Projects. Установите имя проекта Арр1 и соответствующие каталоги для файлов проекта. Выберите опцию Multiple
documents, остальные настройки – по умолчанию.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После щелчка на кнопке OK ClassWizard сформирует проект. В окне ClassView просмотрите список классов приложения. Создано шесть классов: CAboutDlg, CApp1App, CApp1Doc, CApp1View, CChiIdFrame и СМаinFrame.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс САрp1Doc представляет документ и содержит структуру данных, которыми может оперировать приложение. Организовать хранение данных в классе можно включением в него соответствующих членов-переменных. Текст файла заголовка, который AppWizard сформировал для класса CApp1Doc, представлен ниже:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">// App1Doc.h : интерфейс класса СApplDoc
</p>
<p style="margin-right: 0in;">///////////////////////////////////////////////////////////////
</p>
<p style="margin-right: 0in;">#if !defined(AFX_APP1DOC_H__528CF70C_0F96_11D7_BBD4_00C0F6B2220A__INCLUDED_)
</p>
<p style="margin-right: 0in;">#define AFX_APP1DOC_H__528CF70C_0F96_11D7_BBD4_00C0F6B2220A__INCLUDED_
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">#if _MSC_VER &gt;= 1000
</p>
<p style="margin-right: 0in;">#pragma once
</p>
<p style="margin-right: 0in;">#endif // _MSC_VER &gt;= 1000
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">class
CApp1Doc : public
CDocument
</p>
<p style="margin-right: 0in;">{
</p>
<p style="margin-right: 0in;">protected:
</p>
<p style="margin-right: 0in;"> CApp1Doc();
</p>
<p style="margin-right: 0in;"> DECLARE_DYNCREATE(CApp1Doc)
</p>
<p>// Attributes
</p>
<p>public:
</p>
<p>// Операции.
</p>
<p>public:
</p>
<p> //{{AFX_VIRTUAL(CApp1Doc)
</p>
<p> public:
</p>
<p> virtual BOOL OnNewDocument();
</p>
<p> virtual void Serialize(CArchive& ar);
</p>
<p> //}}AFX_VIRTUAL
</p>
<p><br>
</p>
<p>// Реализация
</p>
<p>public:
</p>
<p> virtual ~CApp1Doc();
</p>
<p>#ifdef _DEBUG
</p>
<p> virtual void AssertValid() const;
</p>
<p> virtual void Dump(CDumpContext& dc) const;
</p>
<p>#endif
</p>
<p><br>
</p>
<p>protected:
</p>
<p><br>
</p>
<p>// Карта
сообщений
</p>
<p>protected:
</p>
<p>	//{{AFX_MSG(CApp1Doc)
</p>
<p>// ВНИМАНИЕ! ! Здесь ClassWizard будет добавлять и
</p>
<p>// удалять функции-члены. НЕ РЕДАКТИРУЙТЕ текст в этих блоках!
</p>
<p>	//}}AFX_MSG
</p>
<p style="margin-right: 0in;"> DECLARE_MESSAGE_MAP()
</p>
<p>};
</p>
<p>///////////////////////////////////////////////////////////////
</p>
<p>//{{AFX_INSERT_LOCATION}}
</p>
<p>// Microsoft Visual C++ будет
вставлять дополнительные
</p>
<p>// объявления непосредственно
</p>
<p>// перед предыдущей строкой.
</p>
<p><br>
</p>
<p>#endif !defined(AFX_APP1DOC_H__528CF70C_0F96_11D7_BBD4_00C0F6B2220A__INCLUDED_)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Почти в самом начале есть секция Атрибуты, за которой следует ключевое слово public. Именно здесь вам и нужно будет вставить объявления членов-переменных, в которых планируется хранить данные приложения. В приложении, которое будет рассмотрено дальше нужно будет сохранять массив объектов класса СРоint. Этот массив объявляется как член класса документа:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">// Attributes
</p>
<p style="margin-right: 0in;">public:
</p>
<p style="margin-right: 0in;">CPoint
m_points [100];
</p>
<p style="text-align: justify; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	CPoint— это класс MFC, который инкапсулирует информацию, имеющую отношение к точке на экране, в частности — координаты этой точки х и у.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В тексте файла заголовка обратите внимание также на то, что класс САрр1Doc имеет две виртуальные функции-члены— OnNewDocument() и Serialize(). MFC вызывает функцию OnNewDocument(), как только пользователь выберет команду File=&gt;New (или соответствующую пиктограмму на панели инструментов, если таковая присутствует в приложении). Эту функцию можно использовать для выполнения всех инициализаций, необходимых новой порции данных. В SDI-приложении в таком случае закрывается открытый документ, и новый пустой документ загружается в тот же самый объект класса. В MDI-приложении открывается новый пустой документ (создается новый экземпляр класса документа) в дополнение к уже существующему. Функция Serialize() используется для загрузки в файл и выгрузки из него данных, хранящихся в членах-переменных объекта класса документа.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим
файл App1Doc.cpp.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">// App1Doc.cpp : implementation of the CApp1Doc class
</p>
<p style="margin-right: 0in;">//
</p>
<p style="margin-right: 0in;">#include "stdafx.h"
</p>
<p style="margin-right: 0in;">#include "App1.h"
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">#include "App1Doc.h"
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">#ifdef _DEBUG
</p>
<p style="margin-right: 0in;">#define new DEBUG_NEW
</p>
<p style="margin-right: 0in;">#undef THIS_FILE
</p>
<p style="margin-right: 0in;">static char THIS_FILE[] = __FILE__;
</p>
<p style="margin-right: 0in;">#endif
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">////////////////////////////////////////////////////////////////
</p>
<p style="margin-right: 0in;">// CApp1Doc
</p>
<p style="margin-right: 0in;">IMPLEMENT_DYNCREATE(CApp1Doc, CDocument)
</p>
<p style="margin-right: 0in;">BEGIN_MESSAGE_MAP(CApp1Doc, CDocument)
</p>
<p>//{{AFX_MSG_MAP(CApp1Doc)
</p>
<p>// NOTE - the ClassWizard will add and remove mapping macros here.
</p>
<p>// DO NOT EDIT what you see in these blocks of generated code!
</p>
<p>//}}AFX_MSG_MAP
</p>
<p style="margin-right: 0in;">END_MESSAGE_MAP()
</p>
<p>///////////////////////////////////////////////////////////////
</p>
<p>// CApp1Doc construction/destruction
</p>
<p style="margin-right: 0in;">CApp1Doc::CApp1Doc()
</p>
<p>{
</p>
<p>// TODO: add one-time construction code here
</p>
<p><br>
</p>
<p>}
</p>
<p><br>
</p>
<p style="margin-right: 0in;">CApp1Doc::~CApp1Doc()
</p>
<p>{
</p>
<p>}
</p>
<p><br>
</p>
<p style="margin-right: 0in;">BOOL CApp1Doc::OnNewDocument()
</p>
<p>{
</p>
<p> if (!CDocument::OnNewDocument())
</p>
<p> return FALSE;
</p>
<p> // TODO: add reinitialization code here
</p>
<p> // (SDI documents will reuse this document)
</p>
<p> return TRUE;
</p>
<p>}
</p>
<p>///////////////////////////////////////////////////////////////
</p>
<p>// CApp1Doc serialization
</p>
<p>void CApp1Doc::Serialize(CArchive& ar)
</p>
<p>{
</p>
<p> if (ar.IsStoring())
</p>
<p> {
</p>
<p> // TODO: add storing code here
</p>
<p> }
</p>
<p> else
</p>
<p> {
</p>
<p> // TODO: add loading code here
</p>
<p> }
</p>
<p>}
</p>
<p><br>
</p>
<p>/////////////////////////////////////////////////////////////
</p>
<p>// CApp1Doc diagnostics
</p>
<p><br>
</p>
<p>#ifdef _DEBUG
</p>
<p>void CApp1Doc::AssertValid() const
</p>
<p>{
</p>
<p style="margin-right: 0in;"> CDocument::AssertValid();
</p>
<p>}
</p>
<p><br>
</p>
<p>void CApp1Doc::Dump(CDumpContext& dc) const
</p>
<p>{
</p>
<p style="margin-right: 0in;"> CDocument::Dump(dc);
</p>
<p style="margin-right: 0in;">}
</p>
<p>#endif //_DEBUG
</p>
<p><br>
</p>
<p>///////////////////////////////////////////////////////////////
</p>
<p>// CApp1Doc
commands
</p>
<p><br>
</p>
<p><br>
</p>
<h3>4.1.2. Что такое класс представления</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как уже упоминалось, класс представления отвечает за вывод на экран данных, хранящихся в объекте класса документа, и позволяет пользователю модифицировать эти данные. Объект класса представления содержит указатель на объект класса документа, который используется для доступа к членам-переменным этого класса, где собственно и хранятся данные.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство программистов, имеющих дело с MFC, включают в класс документа открытые (public) члены с тем, чтобы не затруднять доступ к ним из объекта класса представления. Классический объектно-ориентированный подход, однако, требует включать в класс закрытые (private) или защищенные (protected) члены-переменные и открытые члены-функции считывания и модификации этих переменных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим текст файла заголовка, который AppWizard сформировал для класса CApplView.
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">// App1View.h : interface of the CApp1View class
</p>
<p style="margin-right: 0in;">//
</p>
<p style="margin-right: 0in;">////////////////////////////////////////////////////////////////
</p>
<p style="margin-right: 0in;">#if !defined(AFX_APP1VIEW_H__528CF70E_0F96_11D7_BBD4_00C0F6B2220A
</p>
<p style="margin-right: 0in;">__INCLUDED_)
</p>
<p style="margin-right: 0in;">#define AFX_APP1VIEW_H__528CF70E_0F96_11D7_BBD4_00C0F6B2220A__INCLUDED_
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">#if _MSC_VER &gt;= 1000
</p>
<p style="margin-right: 0in;">#pragma once
</p>
<p style="margin-right: 0in;">#endif // _MSC_VER &gt;= 1000
</p>
<p style="margin-right: 0in;"><br>
</p>
<p style="margin-right: 0in;">class CApp1View : public CView
</p>
<p style="margin-right: 0in;">{
</p>
<p style="margin-right: 0in;">protected: // create from serialization only
</p>
<p style="margin-right: 0in;"> CApp1View();
</p>
<p style="margin-right: 0in;"> DECLARE_DYNCREATE(CApp1View)
</p>
<p><br>
</p>
<p>// Attributes
</p>
<p>public:
</p>
<p style="margin-right: 0in;"> CApp1Doc* GetDocument();
</p>
<p style="margin-right: 0in;"><br>
</p>
<p>// Operations
</p>
<p>public:
</p>
<p><br>
</p>
<p> //{{AFX_VIRTUAL(CApp1View)
</p>
<p> public:
</p>
<p> virtual void OnDraw(CDC* pDC);
</p>
<p> virtual BOOL PreCreateWindow(CREATESTRUCT& cs);
</p>
<p> protected:
</p>
<p> virtual BOOL OnPreparePrinting(CPrintInfo* pInfo);
</p>
<p> virtual void OnBeginPrinting(CDC* pDC, CPrintInfo* pInfo);
</p>
<p> virtual void OnEndPrinting(CDC* pDC, CPrintInfo* pInfo);
</p>
<p> //}}AFX_VIRTUAL
</p>
<p><br>
</p>
<p>// Implementation
</p>
<p>public:
</p>
<p> virtual ~CApp1View();
</p>
<p>#ifdef _DEBUG
</p>
<p> virtual void AssertValid() const;
</p>
<p> virtual void Dump(CDumpContext& dc) const;
</p>
<p>#endif
</p>
<p>protected:
</p>
<p>// Сформированные функции карты сообщений
</p>
<p>protected:
</p>
<p> //{{AFX_MSG(CApp1View)
</p>
<p><br>
</p>
<p> //}}AFX_MSG
</p>
<p style="margin-right: 0in;"> DECLARE_MESSAGE_MAP()
</p>
<p>};
</p>
<p><br>
</p>
<p>#ifndef _DEBUG // debug version in App1View.cpp
</p>
<p>inline CApp1Doc* CApp1View::GetDocument()
</p>
<p> { return (CApp1Doc*)m_pDocument; }
</p>
<p>#endif
</p>
<p>///////////////////////////////////////////////////////////////
</p>
<p>//{{AFX_INSERT_LOCATION}}
</p>
<p>#endif // !defined(AFX_APP1VIEW_H__528CF70E_0F96_11D7_BBD4_
</p>
<p style="margin-right: 0in;">00C0F6B2220A__INCLUDED_)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Почти в самом начале текста имеется секция открытых атрибутов, в которой объявлена функция GetDocument(), возвращающая указатель на объект класса CApplDoc. Если, работая с классом представления, вы пожелаете получить указатель на объект класса документа, нужно будет вызвать эту функцию и она вернет вам требуемый указатель.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В распространяемой (release) версии приложения функция GetDocument() объявлена как встроенная (inline). В смысле производительности программы нет никакой разницы в обеих формах обращения к членам объекта документа. Но в смысле читабельности текста программы второй вариант, несомненно, имеет преимущество. Встроенные функции расширяются в скомпилированной программе так же, как и макросы, но, в отличие от макросов, компилятор при работе со встроенными функциями выполняет проверку типов аргументов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обратите внимание на то, что как класс представления, так и класс документа перегружают часть функций-членов своих базовых классов. Функция OnDraw() является одной из важнейших среди всех виртуальных функций, она является именно тем инструментом, с помощью которого производится рисование в окне приложения. Что касается других функций, то MFC вызывает PreCreateWindow() перед тем, как создается и присоединяется к объекту класса окон MFC окно Windows. Эта функция дает возможность модифицировать такие атрибуты окна, как положение и размер. Функция OnPreparePrinting() используется для модификации диалогового окна Print перед его выводом на экран. Функция OnBeginPrinting() дает шанс создать GDI-объект, такой как кисть или перо, который необходим для выполнения некоторых задач в процессе печати. И, наконец, в функции OnEndPrinting() можно уничтожить любой объект, созданный функцией OnBeginPrinting().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Существует разница между экземпляром класса окна MFC и элементом Windows, который он представляет. Например, когда вы создаете объект класса фрейма MFC, в действительности создаются два объекта — MFC-объект класса окна, который имеет члены-функции и переменные, и окно Windows, которым можно манипулировать, используя функции MFC-объекта. Элемент Windows ассоциируется с соответствующим классом, но сам по себе также представляет некую сущность.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В классе документа (Doc.cpp) за перерисовку окна отвечает функция
</p>
<p style="margin-right: 0in;">	UpdateAllViews()
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В классе представления (View.cpp) за перерисовку окна отвечает функция
</p>
<p style="margin-right: 0in;">	Invalidate()
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вызов функции Invalidate() приводит к тому, что МFС обращается к функции OnDraw(), которая, в свою очередь, перерисовывает изображение на экране. Invalidate() принимает единственный аргумент (его значение по умолчанию— TRUE), который указывает, нужно ли стирать прежнее изображение перед прорисовкой нового функцией OnDraw(). Хотя и редко, но бывают случаи, когда удобнее вызывать Invalidate() с аргументом FALSE, и тогда OnDraw() будет рисовать поверх прежнего изображения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>4.2. AppWizard и однооконное приложение. Создание SDI приложения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При разработке программ в VC++ и MFC обычно предполагается использование архитектуры «документ/представление». Названная архитектура позволяет связать данные с их представлением пользователю на экране. Логическое разделение данных программы и методов их визуального представления позволяет отображать документы разными способами, связав документ с несколькими представлениями (например, в Microsoft Word доступны три вида одного и того же документа: обычный, разметка страниц и структура документа). Кроме того, в этом случае изменения, вносимые в документ в одном представлении, отображаются во всех других. В разработке приложений можно использовать как готовые представления (основанные на элементах управления, таких, как, деревья просмотра, списки, предоставляемых MFC), так и создавать собственные, перегружая функцию отображения, обработчики сообщений от клавиатуры, мыши и пунктов меню.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Архитектура «документ/представление» предоставляет множество возможностей для работы с документом. Так, AppWizard способен генерировать каркас приложения, реализующий документы и представления средствами классов, производных от классов CDocument и CView (классы документа и представления).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс документа в MFC отвечает за хранение данных, а также за их загрузку из файлов на диске; содержит функции, позволяющие другим классам (в частности, классу представления) получать или изменять данные таким образом, чтобы они были доступны для просмотра и редактирования. Этот класс должен обрабатывать команды меню, непосредственно воздействующие на данные документа.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Представление – это часть программы, использующая библиотеку MFC для управления окном просмотра, обработки информации, вводимой пользователем, и отображения документа в окне.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пример создания однодокументного приложения рисования в окне прямых линий представлен в лабораторном практикуме «Визуальные средства разработки приложений», представленном в настоящем комплексе.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc5"></a> 
<h1>5. Сообщения и команды. Обработка сообщений с помощью СlassWizard. </h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.1. Обработка сообщений</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если и существует некоторая особенность, отличающая программирование в Windows от других областей программирования, то это сообщения. Сообщения являются тем средством, с помощью которого операционная система может дать знать приложению, что что-то произошло, например пользователь нажал клавишу на клавиатуре или щелкнул кнопкой мыши, или передвинул мышь, или подготовил принтер к выводу информации. Окно, а каждый информационный элемент на экране есть своего рода окно, также может посылать сообщения другому окну и, как правило, большинство окон реагирует на полученное сообщение тем, что пересылает его дальше, третьему окну, слегка видоизменив. Значительную помощь в организации работы с сообщениями оказывает MFC, скрывая от программиста многие подробности процесса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Хотя операционная система и использует целые числа для идентификации событий, в тексте программы мы будем иметь дело с символьными идентификаторами. Огромное количество директив #define связывает символьные идентификаторы с соответствующими числами. Префикс WM означает Window Message (сообщение Windows).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_SETFOCUS
         0x0007
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_KILLFOCUS 0x0008
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_ENABLE 0x000A
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_SETREDRAW 0x000B
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_SETTEXT 0x000C
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_GETTEXT 0x000D
</p>
<p style="margin-right: 0in; font-weight: normal;">
	#define WM_GETTEXTLENGTH 0x000E
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_PAINT 0x000F
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_CLOSE 0x0010
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_QUERYENDSESSION 0x0011
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_QUIT 0x0012
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_QUERYOPEN 0x0013
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_ERASEBKGND 0x0014
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_SYSCOLORCHANGE 0x0015
</p>
<p style="margin-right: 0in; font-weight: normal;"> #define WM_ENDSESSION 0x0016
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сообщению известно, для какого окна оно предназначено. Оно может иметь до двух параметров. Часто в эти два параметра упаковывается несколько совершенно различных величин.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обработка разных сообщений выполняется разными компонентами операционной системы и приложения. Например, когда пользователь передвигает мышь по полю окна, формируется сообщение WM_MOUSEMOVE, которое передается окну, а окно, в свою очередь, передает это сообщение операционной системе. И уже последняя перерисовывает указатель мыши в новом месте. Когда пользователь щелкает левой кнопкой мыши на экранной кнопке, кнопка, которая также есть особый вид окна, получает сообщение WM_LBUTTONDOWN. В процессе обработки этого сообщения кнопка часто формирует новое сообщение для окна, в котором она находится, причем это сообщение гласит: "Ой, на мне щелкнули!".
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Библиотека MFC позволяет программистам в подавляющем большинстве случаев полностью отстраниться от сообщений нижнего уровня, таких как WM_MOUSEMOVE и WM_LBUTTONOOWN. Программист может полностью сосредоточиться на сообщениях более высокого уровня, которые гласят что-нибудь вроде "Выбран третий элемент такого-то списка" или "Произошел щелчок на кнопке Move". Поступают такого рода сообщения в те программы, которые пишет программист, и в компоненты операционной системы точно так же, как и сообщения нижнего уровня. Единственная разница в том, что MFC берет на себя значительную часть работы по обработке сообщений низкого уровня и позволяет заметно облегчить распределение сообщений между разными классами объектов, на уровне которых и будет производиться их обработка.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.2. Циклы обработки сообщений</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сердцем любой Windows-программы является цикл обработки сообщений (Message Loop), который практически всегда находится в функции WinMain(). Эта функция в Windows-приложениях играет ту же роль, что и функция Main () в DOS-приложениях,— ее вызывает операционная система сразу же после загрузки приложения в память. Текст типичной
функции WinMain():
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	int АРIENTRY WinMain(HINSTANCE hInstance,
</p>
<p style="margin-right: 0in; font-weight: normal;"> HINSTANCE hPrevInstance,
</p>
<p style="margin-right: 0in; font-weight: normal;">
	LPSTR IpCmdLine,
</p>
<p style="margin-right: 0in; font-weight: normal;"> int nCmdShow) {
</p>
<p style="margin-right: 0in; font-weight: normal;"> MSG msg;
</p>
<p style="margin-right: 0in; font-weight: normal;"> if(!InitApplication(hInstance))
</p>
<p style="margin-right: 0in; font-weight: normal;"> return (FALSE);
</p>
<p style="margin-right: 0in; font-weight: normal;"> if(!InitInstance( hInstance,nCmdShow))
</p>
<p style="margin-right: 0in; font-weight: normal;"> return (FALSE);
</p>
<p style="margin-right: 0in; font-weight: normal;"> while(GetMessage(&msg, NULL, 0, 0)) {
</p>
<p style="margin-right: 0in; font-weight: normal;"> TranslateMessage( &msg);
</p>
<p style="margin-right: 0in; font-weight: normal;"> DispatchMessage( &msg):
</p>
<p style="margin-right: 0in; font-weight: normal;"> }
</p>
<p style="margin-right: 0in; font-weight: normal;"> return (msg.wParam);
</p>
<p style="margin-right: 0in; font-weight: normal;"> }
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В
С-программах
для Windows, похожих
на эту, функция InitApplication() вызывает RegisterWindow(), a InitInstance() — CreateWindow(). Затем наступает очередь цикла обработки сообщений. Он представляет собой типичную циклическую конструкцию С на базе оператора whilе, внутри которой вызывается функция GetMessage(). Эта функция API заполняет msg кодом сообщения, которое операционная система распределила для этого приложения, и почти всегда возвращает TRUE. Таким образом, цикл повторяется снова и снова до тех пор, пока работает приложение. Единственный вариант, при котором GetMessage() возвращает FALSE, — получение сообщения WM_QUIT.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При работе с сообщениями, поступающими с клавиатуры, некоторую часть предварительной обработки берет на себя функция API TranslateMessage(). Ее назначение состоит в следующем. Прикладной части программы нет дела до сообщений наподобие "Нажата клавиша &lt;А&gt;" и «Отпущена клавиша &lt;А&gt;". Прикладную часть интересует только то, какую литеру (символ) ввел пользователь, т.е. ее вполне удовлетворит сообщение "Введен символ А". Вот это преобразование — нескольких сообщений о деталях процесса в одно сообщение о его сути — и выполняет функция TranslateMessage(). Она перехватывает сообщения WM_KEYDOWN и WM_KEYUP и вместо них посылает сообщение WM_CHAR. Если пользоваться библиотекой MFC, то такие мелочи, как ввод символа А, проходят, как правило, мимо вас. Пользователь вводит текст в текстовое поле или в другой элемент управления, и забота программиста— извлечь введенный текст из этого объекта после того, как пользователь щелкнет на ОК.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функция API DispatchMessage() вызывает, в свою очередь, функцию WndProc() того окна, для которого предназначено сообщение. Типичная функция WndProc() в С-программе для Windows представляет собой огромный оператор switch с отдельными case для каждого сообщения, которое приложение намеревается самостоятельно обрабатывать. Текст ее приведен ниже.
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	//Типичная функция WndProc()
</p>
<p style="text-align: justify; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>LONG APIENTRY MainWndProc(HWND hwnd, // Дескриптоо окна. </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>UINT</strong><strong>
	</strong><strong>msg</strong><strong>, //Тип сообщения. </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>UINT</strong><strong>
	</strong><strong>wParam</strong><strong>, //' Дополнительная информация. </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>LONG</strong><strong>
	</strong><strong>IParam</strong><strong>) //Дополнительная информация.</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>switch</strong><strong>(</strong><strong>msg</strong><strong>) {</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>case</strong><strong>
	</strong><strong>WM</strong><strong>_</strong><strong>MOUSEMOVE</strong><strong>:</strong>
</p>
<p>// Обработка перемещения мыши.
</p>
<p>break;
</p>
<p><br>
</p>
<p>case
WM_LBUTTONDOWN:
</p>
<p>// Обработка щелчка левой кнопки мыши.
</p>
<p>break;
</p>
<p>case WM_ RBUTTONDOWN:
</p>
<p>// Обработка щелчка правой кнопки мыши.
</p>
<p>break;
</p>
<p>case WM_PAINT :
</p>
<p>// Перерисовать
окно.
</p>
<p>break;
</p>
<p>case WM_DESTROY : // Сообщение: окно будет уничтожено.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>PostQuitMessage( 0);</strong>
</p>
<p>return 0;
</p>
<p>break;
</p>
<p>default:
</p>
<p>return (DefWindowProc(hwnd, msg, wParam, IParam));
</p>
<p>}
</p>
<p>return (0);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Можно представить, какой длины достигает подобная функция в более или менее порядочном приложении. MFC решает проблему следующим образом—информация о сообщениях, которые должны обрабатываться, расположена поближе к функциям, которые и должны выполнять обработку. Таким образом, отпадает необходимость в огромных операторах switch, в которых сосредоточено распределение сообщений.
</p>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<h2>5.3. Карты сообщений</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Использование карты сообщений (Message maps) лежит в основе подхода, который реализуется в MFC для программирования Windows-приложений. Суть его состоит в том, что от разработчика требуется только написать функции обработки сообщений и включить в свой класс карту сообщений, которая фактически скажет: "Я буду обрабатывать такое-то сообщение". После этого главная программа будет отвечать за то, чтобы сообщение было передано именно той функции, которая будет его обрабатывать.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Карта сообщений состоит из двух частей: одна— в файле заголовка для класса .h, а другая — в соответствующем файле реализации .срр. Они, как правило, формируются мастерами, хотя в некоторых случаях вы можете сделать это (или частично отредактировать их) и самостоятельно. Ниже представлена часть текста файла заголовка одного из классов простого приложения работы с базами данных <span style="color: #000000;"><strong>Employee</strong></span><span style="color: #000000;"><strong>.</strong></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>//{{AFX_MSG(CEmployeeView)
</p>
<p> afx_msg void OnRecordAdd();
</p>
<p> afx_msg void OnRecordDelete();
</p>
<p> afx_msg void OnSortId();
</p>
<p> afx_msg void OnSortName();
</p>
<p> afx_msg void OnSortRate();
</p>
<p> afx_msg void OnSortDepartment();
</p>
<p> afx_msg void OnFilterDepartment();
</p>
<p> afx_msg void OnFilterId();
</p>
<p> afx_msg void OnFilterName();
</p>
<p> afx_msg void OnFilterRate();
</p>
<p> afx_msg void OnFileSaveAs();
</p>
<p> afx_msg void OnRecordFind();
</p>
<p> //}}AFX_MSG
</p>
<p> DECLARE_MESSAGE_MAP()
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Специальным образом оформленный комментарий позволяет ClassWizard определить, какие именно сообщения перехватываются этим классом. DECLARE_MESSAGE_MAP — это макрос, расширяемый препроцессором компилятора Visual C++, в котором объявляются переменные и функции, принимающие участие в этом фокусе с перехватом сообщений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Карта сообщений в файле EmployeeView.срр, также достаточно проста.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>BEGIN_MESSAGE_MAP(CEmployeeView, CRecordView)
</p>
<p>//{{AFX_MSG_MAP(CEmployeeView)
</p>
<p> ON_COMMAND(ID_RECORD_ADD, OnRecordAdd)
</p>
<p> ON_COMMAND(ID_RECORD_DELETE, OnRecordDelete)
</p>
<p> ON_COMMAND(ID_SORT_ID, OnSortId)
</p>
<p> ON_COMMAND(ID_SORT_NAME, OnSortName)
</p>
<p> ON_COMMAND(ID_SORT_RATE, OnSortRate)
</p>
<p> ON_COMMAND(ID_SORT_DEPARTMENT, OnSortDepartment)
</p>
<p> ON_COMMAND(ID_FILTER_DEPARTMENT, OnFilterDepartment)
</p>
<p> ON_COMMAND(ID_FILTER_ID, OnFilterId)
</p>
<p> ON_COMMAND(ID_FILTER_NAME, OnFilterName)
</p>
<p> ON_COMMAND(ID_FILTER_RATE, OnFilterRate)
</p>
<p> ON_COMMAND(ID_FILE_SAVE_AS, OnFileSaveAs)
</p>
<p> ON_COMMAND(ID_RECORD_FIND, OnRecordFind)
</p>
<p> //}}AFX_MSG_MAP
</p>
<p>END_MESSAGE_MAP()
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.4. Некоторые макросы карты сообщений</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Макросы BEGIN_MESSAGE_MAP и END_MESSAGE_MAP, так же как DECLARE_MESSAGE_MAP в файле заголовка, объявляют члены (переменные и функции), которые программа должна использовать для того, чтобы разобраться в картах всех объектов системы. Существует довольно большой набор макросов, используемых для работы с картой сообщений. Некоторые из них перечислены ниже.
</p>
<ul>
	<li>
	DECLARE_MESSAGE_MAP. Используется в файле заголовка для того, чтобы объявить, что в файл собственно текста программы будет включена карта сообщений.
	</li>
	<li>
	BEGIN_MESSAGE_MAP. Отмечает начало карты сообщений в тексте программы.
	</li>
	<li>
	END_MESSAGE_MAP. Отмечает конец карты сообщений в тексте программы.
	</li>
	<li>
	ON_COMMAND. Используется для того, чтобы перенаправить обработку некоторой команды функции-члену класса.
	</li>
	<li>
	ON_CONTROL. Используется, для того, чтобы перенаправить обработку кода извещения от элемента управления, введенного программистом, функции-члену класса.
	</li>
	<li>
	ON_MESSAGE. Используется для того, чтобы перенаправить обработку некоторого сообщения, введенного программистом, функции-члену класса.
	</li>
	<li>
	ON_UPDATE_COMMAND_UI. Используется для того, чтобы перенаправить обновление, связанное с заданной командой, функции-члену класса.
	</li>
	<li>
	ON_NOTIFY. Используется для того, чтобы перенаправить функции-члену класса обработку заданного кода извещения, который сопровождается дополнительными данными от элемента управления.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Таким образом, если вы включаете в программу некоторый компонент карты сообщений и, когда такое сообщение возникает, происходит следующее. Функции, вызванные скрытым от вас циклом обработки сообщений, решают на основании этой таблицы, какой из объектов и какая из функций-членов этого объекта будет обрабатывать сообщение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.5. Сообщения, которые перехватываются функциями MFC</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Другое громадное преимущество MFC состоит в том, что в этой библиотеке уже имеются готовые классы, которые перехватывают и обрабатывают большинство распространенных сообщений, причем делают это безо всяких усилий со стороны разработчика программы. Например, вам не нужно заботиться об обработке таких сообщений, как вызов команды File--Save As. Классы MFC самостоятельно "отловят" это сообщение, выведут на экран диалоговое окно для ввода нового имени файла, обработают все манипуляции пользователя в этом окне, короче говоря, сделают для вас всю черновую работу и в конце вызовут разработанную уже вами функцию Serialize(), которая и запишет данные в файл. AppWizard, как правило, формирует пустую функцию Serialize(), в которую разработчик должен вставить необходимый текст. Таким образом, программисту необходимо вставлять в карту сообщений компоненты только для тех случаев, когда обработка некоторого сообщения в данном приложении отличается от общепринятой методики.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.6. Как мастер СlassWizard помогает перехватывать сообщения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Читать карту сообщений в листинге программы совсем непросто, но зато ее очень просто формировать с помощью ClassWizard.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рассмотрим пример</span><span style="color: #000000;"> обработки сообщения нажатия левой кнопки мыши. Выбираем нужный класс, вызываем всплывающее меню, в котором выбираем команду “</span><span style="color: #000000;">Properties</span><span style="color: #000000;">”, как показано на рисунке:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_21cb75b4.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Окно выбора команды “</em></span><span style="color: #000000;"><em>Properties</em></span><span style="color: #000000;"><em>” в всплывающем меню</em></span>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В правой части окна появится окно “Properties”, как показано на рисунке:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_22487cb0.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Окно после выбора команды “</em></span><span style="color: #000000;"><em>Properties</em></span><span style="color: #000000;"><em>” в всплывающем меню</em></span>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В окне “</span><span style="color: #000000;">Properties</span><span style="color: #000000;">” нажимаем на закладку “</span><span style="color: #000000;">Messages</span><span style="color: #000000;">”, после чего появится окно, представленное на рисунке:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_c8a119bc.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Окно выбора списка “</em></span><span style="color: #000000;"><em>Messages</em></span><span style="color: #000000;"><em>”</em></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Находим необходимый обработчик (в нашем случае </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONDOWN</span><span style="color: #000000;">) и в выплывающем списке выбираем команду “</span><span style="color: #000000;">Add</span><span style="color: #000000;">
	</span><span style="color: #000000;">OnLButtonDown</span><span style="color: #000000;">”, как показано на рисунке :</span>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_59ff49dc.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Окно добавления обработчика для сообщения </em></span><span style="color: #000000;"><em>WM</em></span><span style="color: #000000;"><em>_</em></span><span style="color: #000000;"><em>LBUTTONDOWN</em></span><span style="color: #000000;"><em>
	</em></span>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В результате шаблон обработчика сообщения с именем OnLButtonDown добавлен в определение класса CMiniDrawView в файле MiniDrawView.h, реализация функции добавлена в файл MiniDrawView.cpp. Добавлена функция OnLButtonDown в схему сообщений класса. Далее следует редактировать код этой функции.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.7. Команды</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Что такое команда? Это сообщение специального типа, которое формируется в тех случаях, когда пользователь выбирает пункт меню, щелкает на кнопке или каким-либо другим способом дает системе понять, что ему что-то от нее нужно. Выбор из меню порождает сообщение WM_COMMAND, а щелчок на кнопке или выбор в списке порождает сообщение WM_NOTIFY с кодом извещения от элемента управления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все сообщения команд содержат в качестве первого параметра идентификатор ресурса — выбранный пункт меню или кнопку, на которой щелкнули. Этот идентификатор ресурса присваивается в соответствии со стандартом на форматы подобного рода идентификаторов, например для пункта Save As меню File идентификатор будет иметь вид ID_FILE_SAVE.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Получать сообщения могут только объекты классов-наследников CWnd, а все объекты классов, порожденных от CCmdTarget, включая CWnd и CDocument, могут получать команды и извещения. Это означает, что класс, который наследует CDocument, может иметь карту сообщений, причем в ней не должно быть ни одного компонента, соответствующего сообщению, а только компоненты для команд и извещений. Тем не менее, этот фрагмент программы по-прежнему называется картой сообщений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вам придется позаботиться о правильном выборе классов, которые будут обрабатывать все события, которые могут произойти в разрабатываемом приложении. Если пользователь изменяет размеры окна, посылается сообщение WM_SIZE, и вам, возможно, понадобится изменить масштаб изображения или выполнить еще что-нибудь с представлением в приложении. Если пользователь выбирает некоторый пункт меню, формируется команда, а это означает, что класс документа должен что-то сделать в ответ на нее.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>5.7.1. Обновление команд</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим, как программа выполняет блокировку определенных пунктов меню или кнопок в соответствии с контекстом задачи. Этот процесс назван обновлением команд (command updating).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Представьте себе, что вы разрабатываете приложение, и у вас возникла идея блокировать некоторые команды меню, чтобы показать, что они в данный момент недоступны. Реализовать эту идею можно двумя способами.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Один состоит в том, чтобы организовать огромную таблицу, элементами которой будут все имеющиеся в приложении пункты меню, каждому из которых сопоставлен флаг. Состояние флага — TRUE или FALSE — указывает, доступен ли этот пункт меню. Как только возникает необходимость вывести меню на экран, можно быстренько просмотреть таблицу и все сразу станет ясно. При любой операции, которая может повлечь за собой изменения в статусе какого-либо пункта меню, таблица обновляется. Все это в совокупности называется подходом непрерывного обновления (continuous-updating approach).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Другой подход состоит в том, чтобы, не имея такой таблицы, перед каждым выводом меню на экран анализировать все условия, которые влияют на возможную блокировку. Он называется подходом обновления по требованию (update-on-demand
approach). Именно такой подход и реализован в Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда наступает время выводить на экран меню, конкретные объекты "знают", нужно ли блокировать связанный с ними пункт меню. Например, объект класса документа знает, был ли он модифицирован после последнего сохранения, и решает, стоит ли блокировать пункт Save меню File. Объект класса представления знает, есть ли выделенный фрагмент текста, и может решить, как поступить с пунктами Cut и Copy меню Edit. Все это означает, что комплексная задача блокировки пунктов меню в соответствии с контекстом приложения распределяется между различными объектами приложения, а не возлагается на главную вызывающую подпрограмму WndProc().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Подход, реализованный в MFC, состоит в том, чтобы использовать небольшой объект класса CCmdUI (класс интерфейса с командами пользователя — command user interface) и предоставить ему возможность перехватывать любые сообщения ON_UPDATE_COMMAND_UI. Организовать такой перехват можно, добавив (или предоставив возможность ClassWizard добавить) макрос ON_UPDATE_COMMAND_UI в карту сообщений. Объект класса CCmdUI также используется для блокировки или разблокировки командных кнопок и других элементов управления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс CCmdUI имеет следующие функции-члены.
</p>
<ol>
	<li>
	Enable(). Принимает аргумент TRUE или FALSE. Блокирует элемент интерфейса пользователя, если передан аргумент FALSE, в противном случае делает элемент доступным.
	</li>
	<li>
	SetCheck(). Включает или выключает элемент управления.
	</li>
	<li>
	SetRadio(). Включает или выключает элемент управления как принадлежащий к группе зависимых переключателей, из которых только один может быть включен.
	</li>
	<li>
	SetText(). Устанавливает текст надписи пункта меню или кнопки, если элемент управления — кнопка.
	</li>
	<li>
	DoUpdate(). Формирует сообщение.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>5.7.2. Как ClassWizard помогает перехватывать команды и их обновления</h3>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рассмотрим добавление в проект обработчика командного сообщения для пункта меню «</span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;">» .</span>
</p>
<ol>
	<li>
	Выбираете закладку “Class View”.
	</li>
	<li>
	Находите класс CMiniDrawDoc и вызываете всплывающее меню, в котором выбираете команду “Properties”.
	</li>
	<li>
	<span style="color: #000000;">В окне “</span><span style="color: #000000;">Properties</span><span style="color: #000000;">” выбираете закладку “</span><span style="color: #000000;">Events</span><span style="color: #000000;">”.</span>
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_ced481bd.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Открытие закладки “</em></span><span style="color: #000000;"><em>Events</em></span><span style="color: #000000;"><em>” окна свойств “</em></span><span style="color: #000000;"><em>Properties</em></span><span style="color: #000000;"><em>”</em></span>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	<span style="color: #000000;"> </span>В списке Object
	IDs выберите идентификатор ID_EDIT_CLEAR_ALL. 
	</li>
	<li>
	В списке Events отобразятся идентификаторы двух типов сообщений, которые эта команда может передавать объекту класса документа: COMMAND и UPDATE_COMMAND_UI. Идентификатор COMMAND
	указывает на сообщение, передаваемое при выборе пользователем пункта меню. Идентификатор UPDATE_COMMAND_UI
	указывает на сообщение, передаваемое при первом открытии меню, содержащего команду. 
	</li>
	<li>
	Справа от идентификатора COMMAND обработчика в сплывающем списке выбираете команду “&lt;Add&gt; OnEditClearAll”<span style="color: #000000;">, после чего добавляется объявление </span>функции внутри определения класса CMiniDrawDoc в файле MiniDrawDoc.h, и минимальное определение функции в файл MiniDrawDoc.cpp и генерируется код для добавления функции в схему обработки сообщений класса документа.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_b2797a2.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Окно выбора обработчиков для меню “</em></span><span style="color: #000000;"><em>Delete</em></span><span style="color: #000000;"><em>
	</em></span><span style="color: #000000;"><em>ALLs</em></span><span style="color: #000000;"><em>”</em></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	Справа от идентификатора обработчика в сплывающем списке выбираете команду “&lt;Edit
	Code&gt;”, после чего откроется файл MiniDrawDoc.cpp и отобразит только что созданную функцию OnEditClearAll, чтобы можно было добавить ее код.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сообщение UPDATE_COMMAND_UI посылается при первом открытии меню, содержащего команду Delete All.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сообщение посылается до того, как меню станет видимым, обработчик может использоваться для инициализации команды в соответствии с текущим состоянием программы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>5.8. Обработка сообщений от панели инструментов и строки состояния</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создание хорошего пользовательского интерфейса — это едва ли не половина успеха в разработке приложения для Windows. К счастью, Visual C++ и его мастера предоставляют разработчику уникальные возможности для создания приложений, поддерживающих все привычные элементы пользовательского интерфейса, включая меню, диалоговые окна, панели инструментов и строку состояния. Тема меню и диалоговых окон уже рассматривалась. Рассмотрим вопросы создания и настройки панелей инструментов и строк состояния приложений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пиктограммы на панелях инструментов, так же, как и элементы меню, соответствуют определенным командам. Хотя создать панель инструментов в приложении можно с помощью AppWizard, вам все же потребуется написать программный код для окончательной отделки. Дело в том, что причина этого кроется в различиях, существующих между приложениями, поскольку с помощью AppWizard можно создать только стандартную панель инструментов, в которую будут включены пиктограммы, встречающиеся в большинстве приложений. При разработке собственной панели инструментов для отражения специфики набора команд конкретного приложения вам, вероятно, потребуется вставить новые или удалить существующие пиктограммы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если с помощью AppWizard создать стандартное приложение, имеющее панель инструментов, то последняя будет содержать пиктограммы для наиболее распространенных команд меню File и Edit, а также пиктограмму для отображения окна About. Но как быть, если ваше приложение не поддерживает эти команды? В данном случае потребуется так модифицировать создаваемую по умолчанию панель инструментов, чтобы она соответствовала командам именно вашего приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пример работы с пиктограммами панели инструментов представлен в лабораторной работе № 4 лабораторного практикума «Визуальные средства разработки приложений».
</p>
<a name="unc6"></a> 
<h1>6. Вывод на экран графической информации. Рисование графических примитивов.</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство приложений нуждается в выводе определенной информации на экран. На первый взгляд, кажется, что, поскольку Windows является системой, не зависящей от аппаратных средств, сформировать изображение на экране для нее не сложно. Однако на деле именно эта "независимость" и перекладывает большую часть нагрузки на плечи программиста. Вы не знаете, с устройством какого типа придется иметь дело вашему приложению, но должны задать все необходимые параметры для его настройки. Средства вывода работают с аппаратурой через промежуточное звено, которое называется <em>контекстом устройства</em> (device context — DC).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Независимость Windows от аппаратных средств, с одной стороны, причиняет программисту головную боль в связи с усложнением методики программирования операций отображения информации, и, с другой стороны, избавляет от необходимости настраивать программу на каждый новый вариант аппаратуры отображения. В большинстве случаев Windows управляет устройствами посредством специальных программ — драйверов. Драйверы принимают информацию от приложения и передают соответственно этой информации данные конкретному устройству — монитору, принтеру или какому-нибудь другому устройству.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Связывается драйвер с приложением посредством специальной структуры данных, названной контекстом устройства.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Контекст устройства — это структура C++, которая содержит атрибуты рабочего поля окна. Эти атрибуты включают выбранное для текущей операции перо, кисть и шрифт. Контекст устройства в каждый момент времени располагает только одним пером, кистью или шрифтом. Если вам понадобится некоторую часть изображения нарисовать другим пером, например, более толстым, придется, во-первых, создать такое новое перо, а во-вторых, внести его в контекст устройства вместо старого. Точно так, если вы хотите заливать контуры красной кистью, придется ее создать и "выбрать ее в контекст" — так программисты называют операцию замены инструмента в контексте устройства.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Рабочая область окна</em> (window's
client area) — это часть поверхности экрана, в которой можно отображать все, что посчитает нужным приложение: текст, таблицы данных, картинку и т.д. Определенную помощь в этом вам окажет библиотека MFC, которая инкапсулирует 
	<em>функции графического интерфейса </em><em>Windows</em> (Graphic Device
Interface— gdi) в свои классы контекста устройств.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Контекст устройства также можно представить как лист бумаги, на котором будет производиться рисование.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Драйвер устройства - это специальная программа, которая умеет этот самый контекст перевести на конкретное устройство
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В MFC есть несколько контекстов устройств и все наследники от CDC.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">CObject -
</p>
<p style="margin-right: 0in; font-weight: normal;"> | |-&gt; CClientDC
</p>
<p style="margin-right: 0in; font-weight: normal;"> | |-&gt; CWindowDC
</p>
<p style="margin-right: 0in; font-weight: normal;"> CDC----&gt;|-&gt; CMetaFileDC
</p>
<p style="margin-right: 0in; font-weight: normal;"> |-&gt; CPaintDC
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каждый из контекстов рисует в определенном месте, то есть каждый контекст предназначен для рисования в определенной области. При этом CPaintDC и CClientDC очень похожи. Оба эти класса предназначены для рисования внутри клиентской области окна. То есть они не могут добраться до меню или рамки окна. Чем они отличаются? CPaintDC используется только тогда когда отвечает на сообщение WM_PAINT. Вместе с этим сообщением будет передана та область, которая требует перерисовки. Ведь окно может быть на экране не полностью. Для извещения о перерисовке вызываются функции BeginPaint и EndPaint, без их вызова Windows будет считать, что перерисовка не произошла. Вот в этом и существенные отличия CPaint, в его конструкторе автоматически вызывается BeginPaint, а в деструкторе EndPaint. CClientDC не выполняет эти функции автоматически. CClientDC вызывает функцию GetDC, а деструктор ReleaseDC .
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если вы хотите получить доступ ко всему окну, то должны использовать класс CWindowDC этот класс позволит вам рисовать и поверх меню и везде в пределах рамки окна определенной при создании окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Контекст CMetaFileDC используется для работы с метафайлами, рисование из которых может выполняться многократно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функции, находящиеся в классе контекста устройства обеспечивают:
</p>
<ul>
	<li>
	связь с физическим устройством 
	</li>
	<li>
	набор изобразительных средств 
	</li>
	<li>
	регулирование вывода 
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Смысл физической связи в том, что вы можете рисовать на устройстве, не заботясь о том, как это устройство физически работает. Например, монитор. Вас не интересует его производитель, марка и другие особенности. За это отвечает драйвер, связанный с контекстом устройства.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Набор изобразительных средств - это то, чем вы можете рисовать. Контекст устройства дает вам перья, кисти, умеет делать некоторые операции по рисованию примитивов. То есть он дает инструментарий по рисованию.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Регулировка вывода связана с необходимостью следить за тем, что часть экрана может перекрываться другими областями и поэтому в них рисовать нельзя.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>6.1. Классы изобразительных средств</h2>
<p style="margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В контексте устройства есть ряд классов изобразительных средств, которые являются наследниками CGdiObject. В MFC их шесть.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>CObject - |-CBitmap
</p>
<p> | |-CBrush
</p>
<p>		CGdiObject--|-CFont
</p>
<p> |-CPalette
</p>
<p> |-CPen
</p>
<p> |-CRgn
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь кратко о каждом классе. CBitmap - это класс, который умеет работать с растровыми изображениями. CBrush - это кисть для рисования. CFont - класс шрифта текста. CPalette - класс умеющий работать с цветовыми палитрами. CPen - класс пера и CRgn - класс региона, то есть области вывода.
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<h2>6.2. Рисование простейших фигур</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим примеры рисования простейших фигур.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вывести строку:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void
CMainWnd::OnPaint()
</p>
<p>{
</p>
<p> CPaintDC dc(this);
</p>
<p> dc.TextOut( X1, Y1,"TextOut Samples");
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вывести точку, чем выше разрешение экрана, тем меньше точка.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void CMainWnd::OnPaint()
</p>
<p>{
</p>
<p> CPaintDC dc(this);
</p>
<p> dc.SetPixel(500,200,RGB(255,0,0));
</p>
<p>}
</p>
<p><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Дуга
окружности:
</p>
<p><br>
</p>
<p>void CMainWnd::OnPaint()
</p>
<p>{
</p>
<p> CPaintDC dc(this);
</p>
<p> dc.Arc(200,200,100,100,400,400,10,10);
</p>
<p>}
</p>
<p><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Замкнутая
дуга:
</p>
<p><br>
</p>
<p>void CMainWnd::OnPaint()
</p>
<p>{
</p>
<p> CPaintDC dc(this);
</p>
<p> dc.Chord(250,250,100,100,400,400,10,10);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эллипс:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;"><strong>void CMainWnd::OnPaint()</strong>
</p>
<p style="margin-right: 0in;"><strong>{</strong>
</p>
<p style="margin-right: 0in;"><strong> CPaintDC dc(this);</strong>
</p>
<p style="margin-right: 0in;"><strong> dc.Ellipse(450,450,50,150);</strong>
</p>
<p style="margin-right: 0in;"><strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Линия:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void CMainWnd::OnPaint()
</p>
<p>{
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>CPaintDC dc(this);</strong>
</p>
<p> dc.MoveTo(200,200);
</p>
<p> dc.LineTo(100,100);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>6.3. Изменение размеров и положения окна</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В программе, использующей MFC, можно изменить размеры и положение окна с помощью функции PreCreateWindow()— члена класса главного окна приложения. Она вызывается автоматически перед началом формирования главного окна приложения. В главном окне содержатся все видимые объекты приложения, и определяется размер представления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функция PreCreateWindow() имеет один аргумент— ссылку на экземпляр структуры CREATESTRUCT. Эта структура содержит всю информацию об окне, которое должно появиться на экране. Если при создании приложения Windows вы не будете пользоваться библиотекой MFC, то со структурой CREATESTRUCT столкнетесь при обращении к функции API CreateWindow(), которая формирует окно приложения. Особое внимание тех, кто программирует с помощью MFC, привлекают члены сх, су, х и у. Изменяя сх и су, можно регулировать ширину и высоту окна, а изменяя х и у, — положение окна на экране. Перегрузив функцию PreCreateWindow(), вы получаете шанс пообщаться со структурой CREATESTRUCT еще до того, как Windows использует ее для формирования окна
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	AppWizard уже создал CMainFrame:: PreCreateWindow(). Так что можете развернуть класс СМаin Frame в окне ClassView, дважды щелкнуть на названии PreCreateWindow() и отредактировать текст функции— включить в нее фрагмент:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>BOOL CMainFrame:: PreCreateWindow(CREATESTRUCT& cs) </strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>cs.cx = 440;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>cs.cy = 480;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>if(!CFrameWnd::PreCreateWindow(cs)) return FALSE;</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>return</strong><strong>
	</strong><strong>TRUE</strong><strong>;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эти операторы устанавливают новые высоту и ширину окна приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc7"></a> 
<h1>7. Сохранение и восстановление состояния объектов</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Одна из основных задач программы — сохранять данные пользователя после их изменения по той или иной причине. Без этого все усилия, которые пользователь затратил на редактирование данных, пропадут, как только приложение завершит работу. В большинстве случаев, когда приложение создается с использованием AppWizard, Visual C++ без Вашего участия включает в него программы, которые необходимы для сохранения и восстановления данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Одна из задач, решаемых программистом при разработке приложений, которые могут создавать и редактировать документы различных типов (например, различные редакторы), заключается в том, чтобы предоставить пользователю возможность записать внутреннее представление документа в файл и восстановить его.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Процесс сохранения и восстановления внутреннего представления объекта называется <em>сериализацией</em> данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При создании приложения вам приходится иметь дело с достаточно большим разнообразием типов объектов. Одни типы объектов, хранящих данные, довольно просты, например, тип int или chaг. Другие являются экземплярами классов — строками (экземплярами класса CString) или даже объектами классов, созданными специально для данного приложения. При использовании таких объектов в приложении, которое должно формировать, сохранять и восстанавливать документы, разработчику волей-неволей необходимо изобретать средства сохранения и восстановления этих объектов с тем, чтобы можно было их восстановить. Свойство объекта сохраняться и восстанавливаться называется <em>живучестью</em> (persistence). Практически все классы MFC наделены этим свойством, поскольку они прямо или косвенно происходят от базового класса CObject. Последний уже обладает базовыми функциями сохранения-восстановления объекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приложения, подготовленные при помощи средства AppWizard, используют этот механизм с помощью методов класса CDocument.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Программисту предлагается только переопределить метод Serialize этого класса для работы с конкретными данными приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Программист может определить свой класс (на основе базового класса CObject) для работы с данными и определить в нем механизм записи и восстановления объектов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>7.1. Создание класса, обеспечивающего сериализацию данных</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Библиотека классов MFC определяет механизм записи и восстановления объектов (serialization), причем поддержка этого механизма осуществляется средствами класса CObject.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Классы, наследованные от CObject, также могут обеспечивать работу механизма записи и восстановления объектов. Для этого при объявлении класса надо указать макрокоманду DECLARE_SERIAL, а при определении - макрокоманду IMPLEMENT_SERIAL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Макрокоманду DECLARE_SERIAL необходимо поместить в описании класса в заголовочном файле. В качестве параметра макрокоманды надо указать имя класса:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	DECLARE_SERIAL (имя_класса)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Макрокоманду IMPLEMENT_SERIAL следует указать перед упоминанием класса в файле исходного текста приложения. Прототип макрокоманды IMPLEMENT_SERIAL представлен ниже:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	IMPLEMENT_SERIAL (имя_класса, имя_базового_класса, номер_версии)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Параметр <em>имя_класса</em> определяет имя класса, <em>имя_базового_класса</em> - имя базового класса, из которого непосредственно наследуется класс. Последний параметр <em>номер_версии</em> - это число типа UINT, определяющее версию программы. Если разрабатывается новая версия приложения и изменяется набор данных, которые необходимо записать в файл, нужно изменить значение параметра <em>номер_версии</em>.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В классе должны быть определены специальные методы для записи и восстановления состояния объектов этого класса. Обычно эти методы сохраняют и восстанавливают элементы данных из класса. Таким образом, объекты класса сами отвечают за то, как они сохраняют и восстанавливают свое состояние.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Методы, сохраняющие и восстанавливающие объекты, взаимодействуют с объектом класса CArchive, который осуществляет непосредственную запись и чтение информации из файла на диске.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс CObject содержит виртуальный метод Serialize, отвечающий за запись и чтение объектов классов, наследованных от класса CObject:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>virtual void Serialize(CArchive& ar);
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В качестве параметра <span style="color: #000000;"><strong>ar</strong></span><span style="color: #000000;"><strong>
	</strong></span>методу передается указатель на объект класса <span style="color: #000000;"><strong>CArchive</strong></span>, используемый для записи и восстановления состояния объекта класса CObject (или наследуемого от него класса). Чтобы узнать, какую операцию должен выполнить метод Serialize, необходимо воспользоваться методами IsLoading или IsStoring класса CArchive.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Итак, при создании нового класса, в котором метод Serialize применяется для сериализации данных, необходимо:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ul>
	<li>
	Чтобы класс был производным от класса CObject или его потомков. 
	</li>
	<li>
	При объявлении класса необходимо вставить макрокоманду DECLARE_SERIAL. 
	</li>
	<li>
	Определить в классе функцию Serialize, отвечающую за хранение переменных класса. 
	</li>
	<li>
	Определить в классе конструктор без параметров. Это может быть защищенный конструктор, если он вызывается только для процесса сериализации данных. В конструкторе возможно динамическое создание объектов и инициализация переменных, если это необходимо. 
	</li>
	<li>
	Объявить в классе деструктор, если требуется выполнить специальные действия при разрушении объектов класса, например, освободить память динамически созданных объектов. 
	</li>
	<li>
	При реализации класса в начало файла реализации вставить макрос IMPLEMENT_SERIAL. У этой макрокоманды три параметра: имя класса, имя базового класса и номер версии формата файла, хранящего документ. Можно иметь несколько модификаций документа и с каждой из них связать свою версию.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>7.2. Сериализация в классе документа</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим SDI—приложение My, построенное AppWizard и поддерживающее архитектуру документ/представление.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Определим данные, с которыми работает представление. Добавим в секцию атрибутов класса CMyDoc (в файле MyDoc.h) определение переменной m_message, типа CString, чтобы этот фрагмент определения класса выглядел следующим образом:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>public:
</p>
<p>CString m_message;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В данном случае документ содержит единственный объект класса CString— строку текста. В реальных приложениях данные будут значительно сложнее. Однако этой единственной строки текста хватит, чтобы продемонстрировать особенности технологии обеспечения сохранности документа. Очень часто программисты используют в классе документа открытые члены-переменные вместо закрытых членов, для каждого из которых организуется открытая функция доступа. Это несколько облегчает разработку класса представления, методы которого должны обращаться к членам класса документа. Но в дальнейшем при сопровождении программы и, в частности, ее модификации такой подход несколько усложнит жизнь.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс документа также должен обеспечить инициализацию данных при открытии нового документа, что возлагается на метод OnNewDocument( ) этого класса. Вызовите при помощи окна ClassView текст этой функции в окно редактора кода и отредактируйте его. Добавьте оператор инициализации строковой переменной.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>BOOL CMyDoc::OnNewDocument()
</p>
<p>{
</p>
<p>if(!CDocument::OnNewDocument())
</p>
<p> return FALSE;
</p>
<p>m_message = "Default Message";
</p>
<p> return TRUE;
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как переменная m_message—член класса документа— инициализирована, приложение должно вывести содержимое документа в свое окно. Здесь за дело берется метод OnDraw() класса представления. Вывести текст этой функции в окно редактора кода можно уже известным вам способом при помощи окна Class View. После редактирования функция должна иметь вид:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void CMyView: :OnDraw(CDC* рDС)
</p>
<p>{
</p>
<p>CMyDoc* pDoc = GetDocument();
</p>
<p>ASSERT_VALID(pDoc);
</p>
<p>pDC-&gt;TextOut(20,20, pDoc-&gt;m_message);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если оттранслировать приложение My и запустить его на выполнение, вы увидите, что на экране появится сообщение Default Message.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь необходимо обеспечить возможность редактирования. Для того чтобы обеспечить такую возможность, нужно включить в меню Edit приложения пункт Change
Message. По этой команде должны запускаться средства, позволяющие пользователю изменить текст документа — выводимого сообщения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создайте обработчик события выбора пункта меню Change Message:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>Void CMyView::OnEditChangemessage()
</p>
<p>{
</p>
<p>CTime now = CTime::GetCurrentTime();
</p>
<p>CString changetime = now.Format("Changed at %B %d %H:%M:%S");
</p>
<p>GetDocument()-&gt;m_message = changetime;
</p>
<p>GetDocument()-&gt;SetModifiedFlag();
</p>
<p>Invalidate();
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эта функция, формирует строку соответственно текущей дате и времени и присваивает ее переменной-члену текущего объекта класса документа. Вызов метода SetModifiedFlag() класса документа сообщит приложению, что содержимое документа изменено. Если такое изменение зафиксировано, приложение будет предупреждать пользователя о наличии несохраненных изменений в текущем документе при попытке его закрыть. И последняя операция — запуск механизма обновления представления документа на экране, который производится функцией Invalidate().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если m_message является закрытой переменной-членом класса документа, понадобится разработать открытый метод SetMessage(), который будет самостоятельно вызывать SetModifiedFlag(). Таким образом, вы будете навсегда избавлены от необходимости напоминать программистам об обязательном обращении к этой функции при модификации объекта класса документа. В этом и состоит преимущество скрупулезного следования принципам объектно-ориентированного программирования.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод Serialize() класса документа должен позаботиться о сохранении-восстановлении данных документа. Текст заготовки функции Serialize(), сформиpoвaнный AppWizard, выглядит следующим образом
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void
CMyDoc::Serialize(CArchive& ar)
</p>
<p>{
</p>
<p>if (ar.IsStoring())
</p>
<p>  {
</p>
<p>// TODO: сюда вставьте операторы сохранения данных.
</p>
<p> }
</p>
<p>else
</p>
<p> {
</p>
<p>//TODO: сюда вставьте операторы загрузки данных.
</p>
<p> }
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Поскольку в классе CString (объектом которого является переменная m_message) определены терминальные операторы &gt;&gt; и &lt;&lt; для передачи данных <em>в</em> архив и <em>из</em> него, это значительно упрощает сохранение и восстановление данных в объекте класса документа. Добавьте следующий оператор в том месте, где в заготовке стоит инструктирующий комментарий:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>ar&lt;&lt; m_message;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Аналогично в том месте текста программы, где должны стоять операторы загрузки, вставьте:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>ar&gt;&gt; m_message;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Терминальный оператор &lt;&lt; пересылает CString
m_message в архив, а терминальный оператор &gt;&gt; заносит данные в m_message из архива. До тех пор, пока данные документа сохраняются в члене— простой переменной (наподобие int или char) или в объекте такого класса, как CString, для которых определены соответствующие терминальные операторы, сохранение и восстановление документа выполняются очень просто. Указанные терминальные операторы определены для следующих простых типов данных.
</p>
<ul>
	<li>
	BYTE 
	</li>
	<li>
	WORD 
	</li>
	<li>
	int 
	</li>
	<li>
	LONG
	</li>
	<li>
	DWORD
	</li>
	<li>
	float
	</li>
	<li>
	double
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Оттранслируйте приложение My и запустите его. Выберите в меню приложения Edit=&gt;Change
Message и убедитесь, что на экране появилась новая строка сообщения, Changed
at …. Теперь выберите File-&gt;Save и введите имя файла. Опять измените текст сообщения с помощью команды Edit-&gt;Change
Message. Выберите File-&gt;New— на экране появится предупреждающее сообщение о наличии в документе несохраненных изменений. Вам будет предложено сохранить их на диске прежде, чем открывать новый документ. Теперь выберите File=&gt;0pen и введите имя ранее созданного файла документа (его можно найти и в списке в самом низу меню File). После этого на экране появится ранее сохраненный текст сообщения. Таким образом, вы можете убедиться, что приложение My сохранило документ по вашей команде, а затем восстановило его в прежнем виде.
</p>
<a name="unc8"></a> 
<h1>8. Работа с файловой системой</h1>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Хотя использование встроенной в MFC технологии сохранения-восстановления данных и обеспечивает основные требования приложения при работе с файлами, иногда необходимо реализовать нестандартные процедуры управления файловой системой, не укладывающиеся в рамки этой технологии. Например, может возникнуть необходимость вывести информацию в файл, из которого не нужно снова считывать данные в объекты программы, или тот способ записи-считывания, который реализуется в функции Serialize(), вас не устраивает, поскольку там возможен только последовательный доступ к файлу (ввод-вывод в поток).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В этих случаях можно использовать методы программирования файловых операций — непосредственное создание файла, чтение и запись информации в файл. Но даже если вы и решитесь снизойти до такого уровня программирования задач управления файлами, средства MFC все равно облегчат вам жизнь. Для непосредственного управления процессами ввода-вывода в файл в распоряжение программиста MFC предоставляет класс CFile и производные от него.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>8.1. Класс CFile</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Включенный в состав MFC класс CFile инкапсулирует все функции, связанные с обработкой файлов любого типа. Собираетесь ли вы использовать обычный последовательный способ записи-чтения данных или организовать файл с произвольным доступом к данным, в любом случае можно использовать методы класса CFile. Основные методы класса CFile представлены в таблице 8.1.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: right; margin-right: 0in; font-weight: normal;">
	Таблица 8.1
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col></colgroup>
<tbody>
<tr>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Функция
		</p>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Назначение
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Конструктор
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Создает экземпляр класса CFilе. Если передать аргумент, имя файла открывает заданный файл
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Деструктор
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Уничтожает экземпляр класса CFile. Если соответствующий файл открыт, закрывает, его перед удалением экземпляра класса
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Abort ()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Немедленно закрывает файл, не обращая внимания на ошибки
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Close()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Закрывает файл
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Duplicate()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Создает экземпляр класса для дубликата файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Flush()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Сбрасывает данные из потока
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			GetFileName()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает имя файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			GetFilePath()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает полный путь файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			GetFileTitle()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает имя файла без расширения (file
			title)
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			GetLength()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает длину файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			GetPosition()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает текущую позицию в файле
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			GetStatus()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает статус файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			LockRange()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Блокирует фрагмент файла для доступа со стороны других процессов
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Open()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Открывает файл
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Read()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Считывает данные из файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Remove()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Стирает файл
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Rename()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Переименовывает файл
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Seek()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Переставляет указатель текущей позиции в файле
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			SeekToBegin()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает указатель текущей позиции, на начало файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			SeekToEnd()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает указатель текущей позиции на конец файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			SetFilePath( )
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает путь к файлу
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			SetLength()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает длину файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			SetStatus()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает статус файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			UnlockRange()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Снимает блокировку фрагмента файла
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Write()
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Записывает данные в файл
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как видно из приведенной таблицы, набор методов класса CFile предоставляет широкие возможности для работы с файлами.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы получить доступ к файлу, сначала надо создать объект класса CFile. Конструктор класса позволяет сразу после создания такого объекта открыть файл. Но можно открыть файл и позднее, воспользовавшись методом Open.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>8.2. Открытие, создание и закрытие файлов</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После создания объекта класса CFile можно открыть файл, вызвав метод Open. Методу надо указать путь к открываемому файлу и режим его использования. Прототип метода Open имеет следующий вид:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>virtual BOOL
Open(LPCTSTR
lpszFileName, UINT
nOpenFlags,
</p>
<p>	CFileException* pError=NULL);
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод Open возвращает не нулевое значение, если файл открыт и нуль в случае ошибки. Ошибка при открытии файла может случиться, например, если методу Open указан для чтения несуществующий файл.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В качестве параметра lpszFileName надо указать имя открываемого файла. Можно указать только имя файла или полное имя файла, включающее полный путь к нему.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Второй параметр nOpenFlags определяет действие, выполняемое методом Open с файлом, а также атрибуты файла. Ниже представлены некоторые возможные значения параметра nOpenFlags:
</p>
<ul>
	<li>
	CFile::modeCreate - Создается новый файл. Если указанный файл существует, то его содержимое стирается, и длина файла устанавливается равной нулю. 
	</li>
	<li>
	CFile::modeNoTruncate - Этот файл предназначен для использования совместно с файлом CFile::modeCreate. Если создается уже существующий файл, то его содержимое не будет удалено. 
	</li>
	<li>
	CFile::modeRead - Файл открывается только для чтения. 
	</li>
</ul>
<ul>
	<li>
	<span style="color: #000000;">C</span><span style="color: #000000;">File::modeReadWrite - Файл открывается для записи и для чтения.</span>
	</li>
	<li>
	CFile::modeWrite - Файл открывается только для записи. 
	</li>
</ul>
<ul>
	<li>
	CFile::typeText - Используется классами, порожденными от класса CFile, например CStdioFile, для работы с файлами в текстовом режиме. Текстовый режим обеспечивает преобразование комбинации символа возврата каретки и символа перевода строки. 
	</li>
	<li>
	CFile::Binary - Используется классами, порожденными от класса CFile, например CStdioFile, для работы с файлами в двоичном режиме.
	</li>
	<li>
	Необязательный параметр pError, который является указателем на объект класса CFileException, используется только в том случае, если выполнение операции с файлом вызовет ошибку. При этом в объект, указываемый pError, будет записана дополнительная информация.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После завершения работы с файлом, его надо закрыть. Класс CFile имеет для этого специальный метод Close.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Нужно заметить, что если был создан объект класса CFile и открыт файл, а затем объект удаляется, то связанный с ним файл закрывается автоматически с помощью деструктора.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>8.3. Чтение и запись файлов</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для доступа к файлам предназначено несколько методов класса CFile: Read, Write, Flush.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод Read предназначен для чтения данных из предварительно открытого файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	virtual UINT Read(void* lpBuf, UINT nCount );
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данные, прочитанные из файла, записываются в буфер lpBuf. nCount определяет количество байт, которое надо считать из файла. Фактически из файла может быть считано меньше байт, чем запрошено этим параметром. Это происходит, если во время чтения достигнут конец файла. Метод возвращают количество байт, прочитанных из файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для записи в файл предназначен метод Write.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	virtual void Write(const void* lpBuf, UINT nCount);
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	lpBuf – указатель на буфер, который содержит данные;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	nCount – число байт, которые должны быть записаны.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В случае возникновения ошибки записи, например, переполнения диска, методы вызывают обработку исключения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда используется метод Write для записи данных на диск, они некоторое время могут находиться во временном буфере. Чтобы убедиться, что необходимые изменения внесены в файл на диске, нужно воспользоваться методом Flush.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc9"></a> 
<h1>9. Диалоги. Классы окон. Элементы управления.</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>9.1. ClassWizard и диалоговые окна</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В операционной среде Windows получить данные от пользователя приложение может через диалоговые окна. Приложение может иметь любое количество диалоговых окон, в которых происходит ввод данных пользователем.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Библиотека классов MFC содержит класс CDialog (наследованный от базового класса CWnd), специально предназначенный для управления диалоговыми панелями.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Диалоговые панели бывают двух типов - <em>модальные и немодальные</em>.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство диалоговых окон, которые приходится включать в состав приложения, относятся к так называемым модальным окнам. Модальное окно выведено <em>всегда</em> поверх всех остальных окон на экране. Пользователь должен поработать в этом окне и обязательно закрыть его, прежде чем приступить к работе в любом другом окне этого же приложения. Примером может служить окно, которое открывается при выборе команды File\Open любого приложения Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Немодальное диалоговое окно позволяет пользователю, не закончив работы с ним, работать в других окнах приложения, выполнить там необходимые действия, затем снова вернуться в немодальное окно и продолжить работу. Типичными немодальными окнами являются окна, которые открываются при отработке команд Edit\Find (Правка\Поиск) и Edit\Replace (Правка\Замена) во многих приложениях Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как правило, для каждого диалогового окна в приложении необходимо разработать две вещи: ресурсы окна и класс окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ресурсы окна используются программой для того, чтобы вывести на экран его изображение и изображения элементов управления, которые входят в него.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В класс окна включены переменные и функции-члены, ответственные за работу диалога. Каждая диалоговая панель обычно содержит несколько органов управления. Работая с диалоговой панелью, пользователь взаимодействует с этими органами управления - нажимает кнопки, вводит текст, выбирает элементы списков. В результате генерируются соответствующие сообщения, которые должны быть обработаны классом диалоговой панели.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Так как класс диалоговой панели обрабатывает сообщения, то содержит <em>таблицу сообщений</em> и соответствующие <em>методы-обработчики</em> сообщений.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ресурсы диалога создаются посредством редактора ресурсов, с помощью которого возможно включать в его состав необходимые элементы управления и размещать их в необходимом порядке. Класс окна создается при помощи ClassWizard. Как правило, класс диалогового окна в проекте является производным от класса CDialog, входящего в MFC. ClassWizard также поможет связать ресурсы окна с классом окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обычно каждый элемент управления, включенный в состав ресурсов диалога, имеет в классе окна соответствующий член-переменную. Для того чтобы вывести диалоговое окно на экран, нужно вызвать функцию - член его класса. Для того чтобы установить значения по умолчанию для элементов управления перед выводом окна на экран или считать состояние элементов управления после завершения работы пользователя, необходимо обращаться к членам-переменным класса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы создать модальную диалоговую панель, сначала необходимо создать объект определенного в приложении класса диалоговой панели, а затем вызвать метод DoModal, определенный в классе CDialog.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>9.2. Формирование нового ресурса диалогового окна.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Первый шаг процесса организации диалогового окна в приложении – формирование ресурса окна. Когда Windows видит ресурс окна в программе, она использует команды из этого ресурса для конструирования работающего окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы приступить к формированию ресурсов, необходимо выбрать пункт Add Resource из меню Visual Studio (щелкнуть правой клавишей мыши по папке lab1.rc)– появится диалоговое окно Add Resource, показанное на рисунке 9.1.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_60991774.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 9.1. Добавление ресурса диалогового окна
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Дважды щелкните на элементе Dialog – этим вы вызываете редактор диалогового окна, который выводит на экран заготовку окна, как это показано на рис.9.2.
</p>
<p style="margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_bd24d209.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.9.2. Заготовка диалогового окна
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вызовите на экран диалоговое окно Dialog Properties для вновь создаваемого диалогового окна, щёлкнув правой кнопкой мыши по диалоговому окну и выбрав Properties. В поле Caption (Надпись) введите заголовок (например, LAB1) диалога, как это показано на рис.9.3.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2e029123.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.9.3. Окно свойств (Dialog Properties) иалогового окна
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>9.3. Создание класса диалогового окна. </h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда формирование ресурсов диалогового окна будет завершено, сделайте по нему двойной клик и вызовите на экран диалоговое окно мастера ClassWizard. Мастер ClassWizard обнаружит новый диалог и предложит создать новый класс. Появится диалоговое окно, которое показано на рис.9.4. В поле Class name (название класса) введите имя нового класса (например, CLab1Dlg) и щелкните на Finish. После этого ClassWizard создаст новый класс, подготовит файл текста программы Lab1Dlg.cpp и файл заголовка Lab1Dlg.h и включит их в состав проекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_ebd4b8e8.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.9.4.Создание класса для диалогового окна
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выбор элементов управления для диалогового окна достаточно велик. Для установки элементов диалогового окна используется технология, получившая наименование WYSIWYG (What You See Is What You Get): что видишь, то и получишь. Чтобы установить в своем окне кнопку, нужно выбрать ее образец на поле инструментария, перетянуть в желаемое место на поле заготовки окна приложения, сбросить ее там и заменить надпись.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Краткая характеристика основных Windows-элементов управления, используемых для построения диалога:
</p>
<ul>
	<li>
	<em>на</em><em>дпись</em> (static text) – по существу, это "неполноценный" элемент управления, поскольку он используется только как поле для вывода надписи, относящейся к "настоящему" элементу управления, расположенному рядом;
	</li>
	<li>
	<em>текстовое поле</em> (edit box) – может быть однострочным или многострочным; сюда пользователь может ввести текст;
	</li>
	<li>
	<em>кнопка</em> (button) – данный элемент предназначен для начала каких-либо действий после нажатия на неё;
	</li>
	<li>
	<em>флажок</em> (check box) – используется для установки опций, каждая из которых может быть выбрана независимо от других;
	</li>
	<li>
	<em>переключатель-радиокнопка</em> (radio button) – используется для выбора одной из групп связанных опций; если выбрана одна из них, то другие полагаются невыбранными;
	</li>
	<li>
	<em>список</em> (list box) – используется для выбора одного элемента из заранее подготовленного набора; набор может быть как жестко установленным на этапе разработки программы, так и меняться программно в процессе выполнения приложения; главное – пользователь по своей воле не может непосредственно менять элементы в наборе, он может только их выбирать;
	</li>
	<li>
	<em>поле со списком </em>(Combo box)<strong> </strong>– это комбинация текстового поля и списка; такой элемент управления позволяет пользователю не только выбирать элементы из ранее подготовленного набора, но и самостоятельно пополнять его, непосредственно внося необходимый текст в текстовое поле.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для примера установим элементы управления на поверхности диалога, как показано на рис. 9.5.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_c51c02c0.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 9.5. Диалоговое окно с элементами управления
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>9.4. Задание идентификаторов диалогового окна и элементов управления.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Поскольку каждое диалоговое окно в приложении является уникальным объектом, разработчику практически всегда нужно присваивать окнам и элементам управления, входящим в их состав, идентификаторы по собственному выбору. Конечно, можно согласиться и с теми идентификаторами, которые предлагает редактор диалоговых окон по умолчанию. Они не несут смысловой нагрузки (как правило, нечто вроде IDD_DIALOG1, IDC_EDIT1, IDC_RADI01) и их можно заменить другими, связанными с назначением и функциями окна или элемента. Но в любом случае рекомендуется соблюдать соглашение о префиксах: идентификаторы диалоговых окон имеют префикс IDD_, а идентификаторы элементов управления – IDC_. Заменить идентификатор можно с помощью диалогового окна Dialog Properties. Для этого выберите элемент управления или диалог и Edit Properties, если ранее окно Dialog Properties не было выведено и закреплено на экране. Затем измените идентификатор ресурса в поле ID, но при этом не забывайте о префиксах: IDD_– для диалоговых окон и IDC_ – для элементов управления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>9.5. Создание ассоциированных переменных.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ассоциированная переменная позволяет установить связь между текстом программы и ресурсами окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ассоциированная переменная класса диалогового окна задается следующим образом: выбираем элемент управления, нажимаем правой кнопкой мыши и вызываем окно Add Member Variables (рис.9.6). Пример, представленный на рис. 9.7, демонстрирует один из вариантов ассоциативной связи. Элементу IDC_CHECK1 следует присвоить идентификатор переменной m_check. Нужно проверить, чтобы в раскрывающемся списке Category (Категория) было выбрано Value (Значение). Если вы раскроете список Variable type (Тип переменной), то увидите, что вам предоставлен единственный "свободный" выбор – BOOL. Флажок может быть либо установлен, либо сброшен, а значит, ассоциирован только с переменной типа BOOL, которая принимает только два значения – TRUE и FALSE. Нажмите на ОК для завершения процедуры.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_cf6cd55f.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 9.6. Окно Member Variables и элементы управления
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_245ed20e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 9.7. Диалог установки идентификатора члена-переменной класса, ассоциированного с некоторым значением
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Свяжите таким же образом значение, которое содержится в элементе IDC_EDIT1, с членом-переменной m_edit типа CString. Элемент IDC_LIST1 должен быть связан с членом-переменной m_list, который должен быть объектом класса CListBox (в списке Category должно быть избрано Control). Первый переключатель в группе IDC_RADIO1 должен быть связан с членом-переменной m_radio типа int, причем связь должна быть установлена по значению. В результате для нашего тдиалога мы получим следующие ассоциированные переменные (см. рис. 9.8.).
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_57b30aa6.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.9.8.Ассоциированные переменные для диалога
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>9.6. Использование класса диалогового окна. Организация вывода диалогового окна на экран</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь, когда сформирован ресурс и подготовлен класс окна, можно создавать объект этого класса в программе (методе InitInstance) и выводить на экран связанное с ним диалоговое окно. Выведем диалоговое окно сразу после запуска приложения. Для этого используется функция DoModal().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Организация вывода диалогового окна на экран</em>. Предположим, мы создали проект типа «Single document» под названием SDI и хотим вызвать наши диалог в главном классе приложения CSDIApp. Выполним это в функции InitInstance(). Эта функция вызывается при любом запуске приложения. Наш диалог называется CLab1Dialog и расположен в файлах Lab1Dialog.h и Lab1Dialog.cpp.Перейдем в самое начало файла и после уже имеющихся директив # inсlude вставим еще одну:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>#include "Lab1dialog.h"
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь при трансляции компилятор будет знать, где взять информацию о классе CLab1Dialog. Перейдите в конец текста функции CSDIApp::Initlnstance() в файле SDI.cpp и добавьте перед окончанием текста функции следующие строки:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>CLab1Dialog dlg;
</p>
<p>dlg.m_check = TRUE;
</p>
<p>dlg.m_edit = "hi there";
</p>
<p>CString msg;
</p>
<p>if (dlg.DoModal() == IDOK) {
</p>
<p>msg = "You сlicked OK. ";}
</p>
<p>else
</p>
<p>{
</p>
<p>msg = "You clicked Cancel. ";
</p>
<p>}
</p>
<p>msg += "Edit Box is: ";
</p>
<p>msg += dlg.m_edit;
</p>
<p>AfxMessageBox(msg);
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приведенный выше фрагмент программы создает экземпляр класса диалогового окна. Он устанавливает параметры по умолчанию для двух элементов управления – флажка и текстового поля. Сам по себе вывод диалогового окна производится функцией DoModal(), которая возвращает числовое значение – IDOK, если пользователь вышел из окна, нажав на ОК, и IDCANCEL, если выход произошел после нажатия на Cancel. Затем в приведенном фрагменте формируется сообщение, которое выводится на экран функцией AfxMessageBox().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда вы щелкнули на OK, MFC организовал вызов функции OnOK(). Функция OnOK() унаследована от базового класса CDialog, классом-наследником которого является наш диалог. Помимо прочего в нем находится функция DoDataExchange(), подготовленная средствами СlassWizard. Вот как она выглядит:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void
CLab1Dialog::DoDataExchange(CDataExchange* pDX)
</p>
<p>{
</p>
<p>CDialog::DoDataExchange(pDX);
</p>
<p>//{{AFX_DATA_MAP(CSdiDiaIog)
</p>
<p>DDX_Control(pDX, IDC_LIST1, m_list);
</p>
<p>DDX_Check(pDX, IDC_CHECK1, m_check);
</p>
<p>DDX_Text(pDX, IDC_EDIT1, m_edit);
</p>
<p>DDV_MaxChars(pDX, m_edit, 10);
</p>
<p>DDX_Radio(pDX, IDC_RADI01, m_radio);
</p>
<p>//}}AFX_DATA_MAP
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все функции, имена которых начинаются с DDX, выполняют обмен данными. Первым аргументом является указатель на объект класса CDataExchange, этот объект определяет параметры обмена, в том числе направление, в котором надо выполнить обмен данными. Вторым аргументом каждой функции является идентификатор элемента управления, а третьим – переменная класса. Именно таким образом СlassWizard устанавливает соответствие между элементами управления и членами класса диалогового окна – это СlassWizard подготовил такой текст программы вместо вас. СlassWizard также включил имена членов-переменных в файл заголовка, в котором объявляется структура класса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Имеются 34 функции, их имена начинаются с DDX – одна на каждый тип данных, которыми могут обмениваться диалоговое окно и соответствующий класс. Каждая функция включает в свое имя также имя элемента управления. Например, функция DDX_Check() используется для связи между элементом типа флажок (check box) и членом-переменной типа BOOL. Аналогично DDX_Text() используется для связи члена-переменной типа CString с текстовым полем. СlassWizard выбирает соответствующую функцию в процессе выполнения описанной выше операции связывания членов класса с элементами управления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Существует несколько DDX-функций, за которые ClassWizard не несет ответственности. Например, если вы связываете список по значению с переменной, то единственным выбором для вас является тип CString. В этом случае ClassWizard формирует функцию DDX_LBString(), которая связывает выбранный в списке элемент с членом-переменной типа CString. Однако иногда эффективнее использовать индекс выбранного элемента, а не сам элемент. Для этого случая имеется функция DDX_LBIndex(), которая выполняет соответствующий обмен. Вызов этой функции можно добавить в текст функции-члена DoDataExchange. Соответствующая строка может быть вставлена в том месте программы, где имеется специальный комментарий, созданный ClassWizard. При этом не забудьте добавить соответствующую переменную-член в объявление класса в файле заголовка. Полный список DDX-функций можно найти в электронной документации.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функции, имена которых начинаются с DDV, ответственны за проверку соблюдения заданных ограничений на вводимые данные. ClassWizard вставляет вызов DDV_MaxChars() сразу за вызовом DDX_Text, которая передает содержимое текстового поля IDC_EDIT1 в переменную m_edit. Второй аргумент вызова функции – идентификатор переменной-члена, а третий – значение параметра, ограничивающего длину вводимой строки. Если пользователь когда-нибудь при работе с программой попытается ввести символов больше, чем дозволено, то DDV_MaxChars() организует вывод на экран предупреждающего сообщения. Так что вы можете только указать величину ограничения и рассчитывать, что все дальнейшее будет организовано СlassWizard и MFC.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приложение не должно напрямую вызывать метод DoDataExhange. Он вызывается через метод UpdateData, определенный в классе CWnd. Необязательный параметр этой функции определяет, как будет происходить обмен данными.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если метод UpdateData вызывается с параметром FALSE, то выполняется инициализация диалоговой панели. Информация из данных класса отображается в органах управления диалоговой панели.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В случае если метод UpdateData вызван с параметром TRUE, данные перемещаются в обратном направлении. Из органов управления диалоговой панели они копируются в соответствующие элементы данных класса диалоговой панели.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод UpdateData возвращает ненулевое значение, если обмен данными прошел успешно, и нуль в противном случае. Ошибка при обмене данными может произойти, если данные копируются из диалоговой панели в элементы класса диалоговой панели, и пользователь ввел неправильные данные, отвергнутые процедурой автоматической проверки данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При создании модальной диалоговой панели перед тем, как панель появится на экране, вызывается виртуальный метод OnInitDialog класса CDialog. По умолчанию OnInitDialog вызывает метод UpdateData и выполняет инициализацию органов управления. Если метод OnInitDialog переопределяется в классе диалоговой панели, в первую очередь необходимо вызвать метод OnInitDialog класса CDialog.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод UpdateData также вызывается некоторыми другими методами класса CDialog. Так, метод UpdateData вызывается, когда пользователь закрывает модальную диалоговую панель, нажимает кнопку "Ok". Заметим, что кнопка "Ok" должна иметь идентификатор IDOK. Если пользователь нажмет на кнопку "Cancel", имеющую идентификатор IDCANCEL, то диалоговая панель также закрывается, но метод UpdateData не вызывается и обмен данными не происходит.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Методу DoDataExchange, который служит для реализации механизмов автоматического обмена данными, передается указатель pDX на объект класса CDataExchange. Этот объект создается, когда инициируется процесс обмена данными вызовом функции UpdateData.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Элементы данных класса CDataExchange определяют процедуру обмена данными, в том числе определяют, в каком направлении будет происходить этот обмен. Следует обратить внимание на то, что указатель pDX передается функциям DDX_ и DDV_.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc10"></a> 
<h1>10. Обзор классов окон библиотеки MFC. Стандартные диалоговые панели</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Любое стандартное приложение Windows использует различные элементы управления, такие, как кнопки, полосы просмотра, редакторы текстов и т.д, реализованные в виде дочерних окон.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>10.1. <span style="color: #000000;">Дочерние окна управления</span></h2>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Так как дочерние окна располагаются на поверхности окна родителя, “прилипая” к ним, приложение может создать в любом своем окне несколько элементов управления, которые будут перемещаться вместе с окном-родителем.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для этого достаточно создать нужные дочерние окна, указав их размеры, расположение и некоторые другие атрибуты. После этого приложение может взаимодействовать с элементами управления, передавая или получая от них различные сообщения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каждое дочернее окно создается с помощью вызова функции CreateWindow. Оконная процедура родительского окна посылает сообщения дочерним окнам управления, а дочерние окна управления посылают сообщения обратно оконной процедуре.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Дочернее окно управления обрабатывает сообщения мыши и клавиатуры и извещает родительское окно о том, что состояние дочернего окна изменилось
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Можно создавать свои собственные дочерние элементы управления, но есть также возможность использовать преимущества нескольких уже определенных классов окна (и оконных процедур), с помощью которых приложение может создавать стандартные дочерние окна управления, присутствующие обычно во всех Windows-приложениях.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стандартные дочерние окна управления имеют вид кнопок, флажков, окон редактирования, списков, комбинированных списков, строк текста и полос прокрутки. Приложение нет необходимости беспокоиться о логике обработки мыши этими окнами, или о логике их отрисовки. Все это делается в Windows. Все, что остается приложению – это обрабатывать сообщение WM_COMMAND, которыми дочерние окна информируют оконную процедуру о различных событиях.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стандартные окна управления создаются с помощью редактора ресурсов, с помощью ClassWizard они увязываются с ассоциированными переменными класса родительского окна, в нашем случае класса диалога. Каждому стандартному элементу диалога соответствует соответствующий класс в MFC. Это классы : “CButton”, ”CEdit”, “CStatic”, “CListbox”, “CCombobox” и “CScrollbar”.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Константы, идентифицирующие стили стандартных элементов управления, определены в заголовочных файлах Windows и имеют соответственно следующие префиксы: BS_ - “button”, ES_ - ”edit”, SS_ - “static”, LBS_ - “listbox”, CBS_ - “combobox” и SBS_ - “scrollbar”.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.1.1 Сообщения дочерних окон родительскому окну</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если элемент управления изменяет свое состояние, то функция родительского окна получает сообщение WM_COMMAND.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Код уведомления – это дополнительный код, который дочернее окно использует для того, чтобы сообщить родительскому окну более точные сведения о сообщении.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Константы, идентифицирующие различные коды уведомления (notification), определены в заголовочных файлах Windows и имеют соответственно следующие префиксы: BN_ - “button”, EN_ - “edit”, LBN_ - “listbox”, CBN_ - “combobox” и SB_ - “scrollbar”.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.1.2. Сообщения родительского окна дочерним окнам</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Родительское окно также может передавать сообщения дочерним окнам, в ответ на которые это дочернее окно будет выполнять различные действия. Константы, идентифицирующие различные сообщения для дочерних окон управления, определены в заголовочных файлах Windows и имеют соответственно следующие префиксы: BM_ - “button”, EM_ - “edit”, LB_ - “listbox”, CB_ - “combobox”. Для работы с окнами класса “scrollbar” применяются специальные Set/Get-функции WinAPI.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>10.2. Кнопки различных стилей (класс button)</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Родительское окно будет получать от кнопки сообщение WM_COMMAND с кодом уведомления BN_CLICKED. Этим сообщением кнопка информирует родительское окно о том, что с ней что-то сделали.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Родительские окна могут посылать следующие сообщения кнопкам:
</p>
<ul>
	<li>
	BM_GETCHECK и BM_SETCHECK - для установки и снятия меток типа “включено/выключено” флажков-переключателей и радио-переключателей; 
	</li>
	<li>
	BM_GETSTATE и BM_SETSTATE - для установки состояния “нажата/отпущена” всех типов кнопок; 
	</li>
	<li>
	BM_SETSTYLE - для изменения стиля любой кнопки после ее создания.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.2.1. Нажимаемые кнопки</h3>
<p style="text-align: justify; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Нажимаемые кнопки (push buttons) представляют собой прямоугольник, внутри которого находится текст.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Нажимаемые кнопки управления используются в основном для запуска немедленного действия без сохранения какой-либо индикации кнопки типа “включено/выключено”. Эти два типа нажимаемых кнопок управления имеют стили, которые называются BS_PUSHBUTTON и BS_DEFPUSHBUTTON (символы “DEF” означают “по умолчанию – default”).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Функционирование кнопок этих двух стилей при использовании их в диалоговых окнах отличается друг от друга. Когда курсор мыши находится на нажимаемой кнопке и левая клавиша мыши нажата, то кнопка перерисовывается так, чтобы выглядеть нажатой. Отпускание клавиши мыши, когда курсор мыши находится на нажимаемой кнопке, приводит к восстановлению облика кнопки и посылке родительскому окну сообщения WM_COMMAND с кодом нотификации BN_CLICKED.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Приложение может имитировать нажатие кнопки, посылая окну сообщение BM_SETSTATE. Также можно послать нажимаемой кнопке сообщение BM_GETSTATE. Дочерняя кнопка управления возвращает текущее состояние – TRUE, если кнопка нажата и FALSE (или 0), если она в обычном состоянии:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.2.2 Флажки-переключатели</h3>
<p style="text-align: justify; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Флажки (check boxes) представляют собой маленькие квадратные окна с размещенным обычно справа от окна текстом (если при создании кнопки используется стиль BS_LEFTTEXT, то текст окажется слева).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Флажки, как правило, действуют как двухпозиционные переключатели: один щелчок вызывает появление контрольной метки (состояние “включено”); другой щелчок приводит к исчезновению этой метки (состояние “выключено”).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В приложениях флажки обычно объединяются, что дает пользователю возможность установить опции. Двумя наиболее используемыми стилями для флажков являются BS_CHECKBOX и BS_AUTOCHECKBOX.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">При использовании стиля BS_CHECKBOX приложение само должно устанавливать контрольную метку, посылая сообщение</span>
	<span style="color: #000000;">BM_SETCHECK.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При стиле BS_AUTOCHECKBOX пользователь самостоятельно включает и выключает контрольную метку, когда выбирает окно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Двумя другими стилями флажков являются BS_3STATE и BS_AUTO3STATE. Как показывают их имена, эти стили могут отображать третье состояние – серый цвет внутри окна флажка.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Серый цвет показывает пользователю, что его выбор не определен, или не имеет отношения к делу. В этом случае флажок не может быть включен – т.е. он запрещает какой-либо выбор в данный момент. Однако флажок продолжает посылать сообщения родительскому окну, если щелкать на нем мышью.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.2.3. Радио-переключатели</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Радио-переключатели (radio buttons, радио-кнопки) похожи на</span> флажки, но их форма не квадратная, а круглая. Жирная точка внутри флажка показывает, что переключатель отмечен.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Радио-кнопка может иметь стиль окна BS_RADIOBUTTON или BS_AUTORADIOBUTTON, но последний используется только в окнах диалога</span>. <span style="color: #000000;">В окнах диалога группы радио-переключателей, как правило, используются для индикации нескольких взаимоисключающих опций. В отличие от флажков, если повторно щелкнуть на радио-кнопке, то ее состояние не изменится.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>10.3. Списки</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С помощью класса “CListbox” можно создавать одноколоночные и многоколоночные списки, имеющие вертикальную (для одноколоночных списков) и горизонтальную (для многоколоночных списков) полосу просмотра.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Список может быть как с одиночным выбором, так и с множественным. Последний позволяет пользователю выбирать более одного пункта списка
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Окно списка посылает сообщение WM_COMMAND своему родительскому окну, когда в списке выбирается какой-либо пункт. Родительское окно может определить, какой пункт списка выбран.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рассмотрим стили окон списков. В окна списка почти всегда включают идентификатор стиля LBS_NOTIFY, что позволяет родительскому окну получать от окна списка сообщение WM_COMMAND. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если приложение желает иметь возможность сортировать элементы списка, ему необходимо использовать в окне списка и другой часто используемый идентификатор стиля – LBS_SORT.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	По умолчанию, в списке допускается выбор только одного пункта (Single). Если необходимо создать список с возможностью выборки сразу нескольких пунктов (Multiple), то следует использовать стиль LBS_MULTIPLESEL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	По умолчанию, оконная процедура окна списка выводит только список элементов без какой-либо рамки вокруг. Рамку можно добавить с помощью стиля WS_BORDER.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для прокрутки содержимого с помощью мыши и вертикальной полосы прокрутки следует использовать стиль WS_VSCROLL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В заголовочных файлах Windows определяется стиль списка, который называется LBS_STANDARD. Стиль LBS_STANDARD включает в себя наиболее часто используемые стили списка. Он определяется как комбинация
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>(LBS_NOTIFY|LBS_SORT|WS_VSCROLL|WS_BORDER)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Можно пользоваться стилями WS_SIZEBOX и WS_CAPTION, которые дают возможность менять размер окна и перемещать его по рабочей области родительского окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда пользователь щелкает мышью над окном списка, окно списка получает фокус ввода. Если окно списка имеет фокус ввода, то для выбора пунктов можно пользоваться как мышью, так и клавиатурой.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Когда вы работаете со списком, вырабатываются уведомляющие сообщения (notification) от списка. Вы можете посмотреть все сообщения, которые можете обрабатывать для списка, если откроете вкладку Message Map мастера </span><span style="color: #000000;">Class</span><span style="color: #000000;">
	</span><span style="color: #000000;">Wizard</span><span style="color: #000000;">. В окне </span><span style="color: #000000;">Objects</span><span style="color: #000000;">
	</span><span style="color: #000000;">IDs</span><span style="color: #000000;"> следует выбрать идентификатор ресурса списка, в окне Message</span><span style="color: #000000;">s</span><span style="color: #000000;"> отобразятся все обрабатываемые сообщения. Для списка </span><span style="color: #000000;">List</span><span style="color: #000000;">
	</span><span style="color: #000000;">box</span><span style="color: #000000;"> могут обрабатываться следующие сообщения.</span>
</p>
<ul>
	<li>
	LBN_ERRSPACE - превышен размер памяти, отведенный для списка. 
	</li>
	<li>
	LBN_SELCHANGE - изменен текущий выбор (подсветка перемещается по списку).
	</li>
	<li>
	<span style="color: #000000;">LBN_DBLCLK - на пункте списка имел место двойной щелчок мышью. Окно списка посылает коды уведомления LBN_SELCHANGE и LBN_DBLCLK только в том случае, если в стиль дочернего окна включен идентификатор LBS_NOTIFY. </span>
	</li>
	<li>
	LBN_KILLFOCUS - Потеря фокуса.
	</li>
	<li>
	LBN_SELCANCEL - Выбор с элемента снимается.
	</li>
	<li>
	LBN_SETFOCUS - Получение фокуса.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>10.4. Комбинированные списки (класс CCombobox)</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Этот класс является комбинацией списка и однострочного редактора, поэтому для комбинированного списка используются стили, коды извещения и сообщения, аналогичные списку ”</span><span style="color: #000000;">CL</span><span style="color: #000000;">istbox”, а также некоторые сообщения, специфические для редактора текста класса “</span><span style="color: #000000;">CE</span><span style="color: #000000;">dit”.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При создании списка “CCombobox” указываются <span style="color: #000000;">специальные стили комбинированного списка, символические имена которых имеют префикс CBS_.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим базовые стили комбинированного списка. Среди всех стилей комбинированного списка можно выделить три базовых:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col><col></colgroup>
<tbody>
<tr>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Стиль комбинированного списка
		</p>
	</td>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Когда list
			box видимый?
		</p>
	</td>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Стиль окна редактирования Combo box
		</p>
	</td>
</tr>
<tr>
	<td colspan="3">
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Simple
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Всегда
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Edit
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Drop-down
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Когда выбрана стрелка
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Edit
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Drop-down list
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Когда выбрана стрелка
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Static
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эти стили Combo
box задаются при его создании в меню PROPERTIES.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	По умолчанию предлагается Simple. В этом случае список постоянно отображен на экране. В поле ввода, располагающемся сверху, можно вводить любые данные. С помощью мыши можно выделять элемент в прикрепленном окне списка и он будет попадать в поле редактирования. Кроме того, если в поле редактирования набрать символы, совпадающие с начальными символами некоторых элементов списка, эти элементы станут первыми в списке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стиль Dropdown (раскрывающийся). В поле ввода (edit control), можно вводить любые данные, а щелкнув на стрелку – раскрыть окно списка и выбрать в нем любой элемент. Отмеченный элемент отображается в поле редактирования. Если в поле редактирования набрать символы, совпадающие с начальными символами некоторых элементов списка, эти элементы станут первыми в списке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стиль Droplist (раскрывающийся). В этом комбинированном списке пользователь сможет выбирать элементы только из раскрывающегося списка. Для этого он, щелкнув стрелку, укажет нужную строку или введет первую букву из выделенной строки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Combo box можно инициализировать в окне Properties. На вкладке Data есть
окно Enter Listbox Items. Каждую строку в нем следует заканчивать Ctrl+Enter.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	List box можно инициализировать только когда начинается диалог, в функции OnInitDialog, которая увязана с сообщением WM_INITDIALOG, класса CDialog.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сообщения от комбинированного списка, посылаемые родительскому окну имеют символические имена с префиксом CBN_.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим сообщения, посылаемые родительским окном комбинированным спискам. Для управления списком “combobox” используется набор сообщений, аналогичный набору сообщений для списка “CListbox” и редактора текста “CEdit”. В файле windows.h определены сообщения, специально предназначенные для работы со списком “combobox”. Символические имена этих сообщений имеют префикс CB_.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Многие методы Combo
box и List
box совпадают. В Combo
box нет методов, связанных с множественным выбором.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>10.5. Стандартные диалоговые панели</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В состав библиотеки MFC входит ряд классов, представляющих стандартные диалоговые панели. Эти классы позволяют легко реализовать такие часто используемые операции, как открытие и сохранение файла, выбор цвета, выбор шрифта и т.д. Все эти классы наследуются от класса CCommonDialog, который в свою очередь является производным по отношению к базовому классу CDialog.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приведем классы стандартных диалоговых панелей и их назначение:
</p>
<ul>
	<li>
	CColorDialog - Панель для выбора цвета 
	</li>
	<li>
	CFileDialog - Панель выбора файлов для открытия и сохранения на диске 
	</li>
	<li>
	CFindReplaceDialog - Панель для выполнения операции поиска и замены 
	</li>
	<li>
	CFontDialog - Панель для выбора шрифта 
	</li>
	<li>
	CPrintDialog - Панель для вывода документа на печать 
	</li>
	<li>
	CPageSetupDialog - Панель выбора формата документа 
	</li>
	<li>
	COleDialog - Панель для управления технологией OLE
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Классы, управляющие стандартными диалоговыми панелями, определены в файле afxdlgs.h. Поэтому при использовании этих классов в приложении необходимо включить этот файл в исходный текст при помощи директивы #include.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.5.1. Панель выбора цвета (класс CColorDialog)</h3>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы отобразить на экране стандартную диалоговую панель выбора цвета, надо создать объект класса CColorDialog, а затем вызвать метод DoModal. Для создания объекта класса СColorDialog используется следующий конструктор (все параметры конструктора необязательны, однако в некоторых случаях использование этих параметров может помочь):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>CColorDialog(COLORREF clrInit=0,DWORD dwFlags=0,CWnd* pParentWnd=NULL);
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ul>
	<li>
	Первый параметр clrInit позволяет указать цвет, выбранный по умолчанию сразу после открытия диалоговой панели. Если параметр не будет указан, в качестве цвета, выбранного по умолчанию, будет использоваться черный цвет.
	</li>
	<li>
	Параметр dwFlags содержит набор флагов, управляющих диалоговой панелью выбора цвета. При помощи него можно блокировать или разрешать работу некоторых элементов управления диалоговой панели выбора цвета. Если при создании объекта класса CColorDialog не указать параметр dwFlags, тем не менее, можно выполнить настройку диалоговой панели, обратившись непосредственно к элементу m_cc данного класса. Параметр dwFlags, указанный в конструкторе, используется для инициализации m_cc. Изменения в элемент m_cc должны быть внесены до того, как панель будет отображаться на экране.
	</li>
	<li>
	Последний параметр pParentWnd можно использовать, чтобы указать родительское окно диалоговой панели.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для вывода диалоговой панели выбора цвета на экран, необходимо использовать метод DoModal. После отображения панели на экране пользователь может выбрать из нее цвет и нажать кнопки OK или Cancel для подтверждения выбора цвета или отказа от него.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p> CColorDialog dlgColor;
</p>
<p> int iResult=dlgColor.DoModal();
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда диалоговая панель закрывается, метод DoModal возвращает значения IDOK и IDCANCEL, в зависимости от того, какую кнопку нажал пользователь:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На экране появится стандартная диалоговая панель выбора цвета Color. В верхней половине диалоговой панели расположены 48 прямоугольников, имеющих различные цвета. Они представляют так называемые основные цвета (Basic colors).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Можно выбрать один из этих цветов и нажать кнопку OK. После того, как диалоговая панель закрыта (метод DoModal завершил свою работу), можно воспользоваться методами класса CColorDialog, чтобы узнать цвета, выбранные пользователем.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для определения цвета, выбранного пользователем, можно обратиться к методу GetColor класса CColorDialog. Данный метод возвращает значение COLORREF, соответствующее выбранному цвету.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При помощи метода GetSavedCustomColors класса CColorDialog можно определить дополнительные цвета, выбранные пользователем в диалоговой панели Color. Этот метод возвращает указатель на массив из 16 элементов типа COLORREF. Каждый элемент массива описывает один дополнительный цвет.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если пользователю недостаточно основных цветов, представленных в диалоговой панели Color, он может выбрать до 16 дополнительных цветов. Для этого он должен нажать кнопку DefineCustom Colors. Диалоговая панель изменит свой внешний вид - появятся дополнительные органы управления, позволяющие выбрать любой из 16 777 216 цветов. Когда цвет выбран, нужно нажать кнопку Add Custom Colors. Выбранный цвет будет добавлен к дополнительным цветам (Custom colors) - один из свободных прямоугольников окрасится соответствующим цветом.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда диалоговая панель Color отображается приложением первый раз, все прямоугольники, отображающие дополнительные цвета, имеют белый цвет. Дополнительные цвета, выбранные пользователем, сохраняются во время работы приложения. После перезапуска приложения дополнительные цвета сбрасываются.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>10.5.2. Панель выбора файлов (класс CFileDialog)</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Среди стандартных диалоговых панелей, для которых в библиотеке MFC создан специальный класс, есть панели для работы с файловой системой - Open и Save As.
</p>
<ul>
	<li>
	Диалоговая панель Open позволяет выбрать один или несколько файлов и открыть их для дальнейшего использования. 
	</li>
	<li>
	Диалоговая панель Save As позволяет выбрать имя файла для записи в него документа.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для управления диалоговыми панелями Open и Save As предназначен один класс CFileDialog. Рассмотрим конструктор класса CFileDialog более подробно:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CFileDialog(BOOL bOpenFileDialog,</strong>
</p>
<p style="margin-right: 0in;">
	<strong> LPCTSTR lpszDefExt=NULL,LPCTSTR lpszFileName=NULL,</strong>
</p>
<p style="margin-right: 0in;">
	<strong> DWORD dwFlags=OFN_HIDEREADONLY|OFN_OVERWRITEPROMPT,</strong>
</p>
<p style="margin-right: 0in;">
	<strong> LPCTSTR lpszFilter=NULL,CWnd* pParentWnd=NULL);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Объекты класса CFileDialog представляют диалоговые панели Open или Save As в зависимости от параметра bOpenFileDialog. Если параметр bOpenFileDialog содержит значение TRUE, то создается объект, управляющий диалоговой панелью Open, а если FALSE - диалоговой панелью Save As. Чтобы создать объект класса CFileDialog, представляющий диалоговую панель для открытия файлов (mFileOpen), и объект, представляющий диалоговую панель для сохранения файлов (mFileSaveAs), можно воспользоваться следующими вызовами конструктора класса:
</p>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>CFileDialog
mFileOpen(TRUE); //для панели открытия файлов
</p>
<p>CFileDialog
mFileSaveAs(FALSE); //для панели сохранения файла
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Параметр bOpenFileDialog является единственным обязательным параметром, который необходимо указать. Остальные параметры конструктора класса CFileDialog задают различные режимы работы панели и могут не указываться.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Во многих случаях имена файлов, которые нужно открыть или закрыть, имеют определенное расширение. Параметр lpszDefExt позволяет задать расширение файлов, используемое по умолчанию. То есть, если пользователь при определении имени файла не укажет расширение, имени файла автоматически присваивается расширение, принятое по умолчанию. Если при определении свойств диалоговой панели программист присвоит параметру lpszDefExt значение NULL, то расширение файлов должно задаваться пользователем явно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В некоторых случаях требуется, чтобы диалоговые панели отображались с уже выбранным именем файла. Чтобы указать имя файла, используемое по умолчанию, применяется параметр lpszFileName. Если параметр lpszFileName имеет значение NULL, данная возможность не реализуется.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С помощью флага dwFlags можно изменить внешний вид и некоторые другие характеристики стандартных диалоговых панелей класса CFileDialog. В него можно записать комбинацию флагов, управляющих различными характеристиками этих панелей. Например, флаг OFN_HIDEREADONLY означает, что из диалоговой панели удаляется переключатель "Read Only", а флаг OFN_OVERWRITEPROMPT (используемый для панели Save As) - что необходимо выводить диалоговую панель с предупреждением, если пользователь выбирает для сохранения имя уже существующего файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Диалоговые панели выбора файлов обычно имеют список так называемых фильтров, включающих названия типов файлов и расширения имен файлов данного типа. Выбрав фильтр, пользователь указывает, что он желает работать только с файлами определенного типа, имеющими соответствующее расширение. Файлы с другими расширениями в диалоговых панелях не отображаются. Список фильтров можно указать через параметр lpszFilter. Одновременно можно указать несколько фильтров. Каждый фильтр задается двумя строками - строкой, содержащей имя фильтра, и строкой, в которой перечислены соответствующие ему расширения имен файлов. Если одному типу соответствует несколько расширений, они разделяются символом ;. Строка, содержащая имя фильтра, отделяется от строки с расширениями файлов символом |. Если используется несколько фильтров, то они также отделяются друг от друга символом |. Например, в качестве строки, задающей фильтры, можно использовать строку вида:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>char szFilters[] =</strong>
</p>
<p style="margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<strong>" Data (*.dat) |*.dat| Packed Data (*.pac;*.wav) | *.pac; *.wav| All Files (*.*)| </strong><strong>*.* ||";</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Диалоговые панели, представленные объектами класса CFileDialog, могут иметь или не иметь родительского окна. Чтобы указать родительское окно, нужно передать конструктору CFileDialog указатель на него через параметр pParentWnd.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создание объекта класса CFileDialog еще не вызывает отображения соответствующей диалоговой панели. Для этого необходимо воспользоваться методом DoModal класса CFileDialog. При вызове метода DoModal для ранее созданного объекта класса CFileDialog на экране открывается соответствующая диалоговая панель.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CFileDialog dlgOpen(TRUE);</strong>
</p>
<p>int iResult=dlgOpen.DoModal();
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как пользователь завершает работу с диалоговой панелью, метод DoModal вернет значение IDOK или IDCANCEL в случае успешного завершения и нуль - в случае возникновения ошибок.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как пользователь закроет диалоговую панель, и метод DoModal вернет управление, можно воспользоваться другими методами класса CFileDialog, чтобы определить имена выбранных файлов:
</p>
<ul>
	<li>
	GetPathName - Определяет полный путь файла.
	</li>
	<li>
	GetFileName - Определяет имя выбранного файла.
	</li>
	<li>
	GetFileExt - Определяет расширение имени выбранного файла.
	</li>
	<li>
	GetFileTitle - Позволяет определить заголовок выбранного файла.
	</li>
	<li>
	GetNextPathName - Если диалоговая панель позволяет выбрать сразу несколько файлов, то этот метод можно использовать для определения полного пути следующего из выбранных файлов.
	</li>
	<li>
	GetReadOnlyPref - Позволяет узнать состояние атрибута "только для чтения" (read-only) выбранного файла.
	</li>
	<li>
	GetStartPosition - Возвращает положение первого элемента из списка имен файлов.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наиболее важный метод - GetPathName. Он получает полный путь файла, выбранного из диалоговых панелей Open или Save As.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если диалоговая панель позволяет выбрать сразу несколько файлов, тогда метод GetPathName возвращает массив строк, состоящий из нескольких строк, заканчивающихся двоичным нулем. Первая из данных строк содержит путь к каталогу, в котором расположены выбранные файлы, остальные строки содержат имена выбранных файлов. Выделение строки, содержащей путь к каталогу, проблем не вызывает, а чтобы получить имена выбранных файлов, необходимо воспользоваться методами GetStartPosition и GetNextPathName.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод GetStartPosition возвращает значение типа POSITION. Оно предназначено для передачи методу GetNextPathName и получения очередного имени выбранного файла. Если пользователь не выбрал ни одного файла, метод GetStartPosition возвращает значение NULL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Значение, полученное этим методом, следует записать во временную переменную типа POSITION и передать ссылку на нее методу GetNextPathName.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод GetNextPathName вернет полный путь первого из выбранных в диалоговой панели файлов и изменит значение переменной pos, переданной методу по ссылке. Новое значение pos можно использовать для последующих вызовов метода GetNextPathName и получения путей всех остальных выбранных файлов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда метод GetNextPathName вернет имена всех выбранных файлов, в переменную pos записывается значение NULL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В панелях Open и Save As имеется переключатель "ReadOnly". По умолчанию этот переключатель не отображается. Если есть необходимость воспользоваться этим переключателем, то нужно отказаться от использования флага OFN_HIDEREADONLY.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод GetReadOnlyPref позволяет определить положение переключателя "ReadOnly". Если переключатель включен, то метод GetReadOnlyPref возвращает ненулевое значение. В противном случае GetReadOnlyPref возвращает нуль.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc11"></a> 
<h1>11. Доступ к базам данных на основе технологии ODBC. </h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>11.1. Создание программы, работающей с БД на основе классов ODBC</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Без сомнения, базы данных являются наиболее популярными компьютерными приложениями. Они находят применение фактически в любом виде коммерческой деятельности, начиная от создания списков покупателей и заканчивая платежными ведомостями компании. Не так давно существование множества различных систем управления базами данных (СУБД), каждая из которых определяет свои собственные структуры файлов и механизмы работы с ними, создавало огромные сложности для программистов, разрабатывающих приложения, работающие с базой данных (БД-приложения), поскольку необходимо было учитывать все тонкости механизма доступа к данным, хранящимся в файлах различных типов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Современные версии Visual C++ включают классы, базирующиеся на механизмах ODBC (Open Database Connectivity — открытая связь с базами данных), DAO (Data Access Objects— объекты доступа к данным), OLEDB и других. С помощью мастера AppWizard можно создать простое БД-приложение, не написав ни единой строчки текста на языке C++. Более сложные задачи все же потребуют чистого программирования, но в значительно меньшем объеме.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим программирование с использованием ODBC-классов Visual C++. В качестве примера создадим БД-приложение, способное не только отображать записи, хранящиеся в базе данных, но и обновлять, добавлять, удалять, сортировать записи, а также выполнять выборку с использованием фильтров.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>11.2. Классы ODBC
Visual C++
</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создавая с помощью мастера Visual C++ AppWizard программу, работающую с базами данных, вы получаете в итоге приложение, широко использующее различные классы ODBC из состава библиотеки MFC. Наиболее важными из этих классов являются CDatabase, CRecordset и CRecordView.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Мастер AppWizard автоматически генерирует текст программы, необходимый для coздания объекта класса CDatabase. Этот объект обеспечивает связь между создаваемым приложением и источником данных, с которым оно работает. В большинстве случаев использование класса CDatabase в программах, сгенерированных AppWizard, незаметно для программиста. Вся необходимая обработка обеспечивается самой системой управления.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Кроме того, AppWizard генерирует текст программы создания объекта класса CRecordSet, используемого в приложении. Объект класса CRecordSet представляет собой реальные данные, выбранные в настоящий момент из источника данных, а его методы обеспечивают выполнение операций с этими данными. В дальнейшем данные, выбранные программой в текущий момент, будем называть <em>выборкой данных</em>.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	И, наконец, объект класса CRecordView в БД-программе занимает место объекта класса представления, с которым постоянно приходится иметь дело в приложениях, созданных с помощью мастера AppWizard. Окно, создаваемое объектом класса CRecordView, подобно диалоговому окну, выполняющему роль средства общения пользователя с приложением. Это диалоговое окно обеспечивает в приложении связь с объектом класса CRecordSet, осуществляя обмен информацией между программой, элементами управления окна и выборкой данных. Когда с помощью мастера AppWizard создается новое БД-приложение, на программиста возлагается обязанность поместить в окно объекта CRecordView элементы управления, способные выполнять ввод и редактирование данных. Как правило, это текстовые поля. Такие элементы управления следует связать с полями записей базы данных, которые они представляют, для того, чтобы приложение направляло данные, выбранные для просмотра, куда следует.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создать с помощью Visual C++ простую БД-программу, использующую классы ODBC, совсем несложно — для этого нужно выполнить всего несколько операций.
</p>
<ol>
	<li>
	Зарегистрировать базу данных в <em>операционной системе</em>.
	</li>
	<li>
	Используя мастер AppWizard, создать заготовку БД-приложения.'
	</li>
	<li>
	Добавить в заготовку приложения программный код, реализующий функции, которые AppWizard автоматически не формирует.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим, как это делается практически на примере создания приложения Employee, предназначенного для просмотра, добавления, удаления, обновления и сортировки записей таблицы Employees, входящей в состав нашей экспериментальной базы данных для универмага.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>11.3. Регистрация базы данных</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создайте на жестком диске папку и расположите в ней файл Users.mdb (источник данных Access). Откройте диалоговое окно ODBC Data Source Administrator (Пуск --- Настройка --- Панель управления --- Администрирование):
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_c11cf6d8.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выберите «Источники данных ODBC»:
</p>
<p style="margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_58f0549d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Щелкните на кнопке Добавить. Появится диалоговое окно «Создать новый источник данных». Из списка драйверов выберите Microsoft Access Driver, как показано на рисунке, а затем щелкните на кнопке Готово:
</p>
<p style="margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2a309761.png" style="float: bottom;" alt="">
</p>
<p style="margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выберите необходимый источник данных:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_7b6d24cf.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для завершения работы по выбору базы данных щелкните на кнопке ОК. Затем в диалоговом окне «Установка драйвера ODBC для Microsoft Access» задайте имя источника данных. Теперь в системе установлен доступ к файлу базы данных Users.mdb с помощью драйвера ODBC Microsoft Access Driver.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>11.4. Создание заготовки для приложения MyDB</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь, когда источник данных создан и зарегистрирован, пришло время создания заготовки приложения MyDB. Эта процедура состоит из нескольких этапов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выберем тип приложения «MFCApplication», зададим имя проекта (и решения) MyDB, определим папку для проекта (Location).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in;">
	<img src="i_8133601b9eac8a59_html_eeb57620.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Определим настройки проекта, как показано на рисунках ниже:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_111b6f1e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_4ac3a569.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Определим уровень поддержки баз данных (Database
view
with
file
support) и тип связи с источником данных (ODBC):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_21cb3e8d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Выберем зарегистрированный источник данных (DB):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_1b7d5d2d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Далее выберем таблицу, с которой будет связан класс выборки (Users):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_bff6e370.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Настройки проекта заверешены. На данный момент уже можно откомпилировать создаваемое приложение. После завершения компиляции можно запустить программу на выполнение. Когда программа будет запущена, раскроется ее окно. Обратите внимание на то, что на панели инструментов заготовки приложения уже имеются органы управления навигацией по записям таблицы, однако в окне приложения никаких данных нет, поскольку не созданы соответствующие элементы управления и не выполнено их связывание с полями таблицы Users, которые требуется просматривать.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>11.5. Создание экранной формы для отображения содержимого базы данных</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Следующим шагом в разработке БД-приложения Employee будет модификация его экранной формы, предназначенной для отображения данных в окне приложения. Поскольку эта форма является просто специализированным типом диалогового окна, модификацию можно легко осуществить с помощью редактора ресурсов Visual Studio.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для отображения ресурсов приложения щелкните на корешке вкладки ResourceView, который можно открыть View-&gt;Other
Windows-&gt;ResourceView (либо View-&gt; ResourceView):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_890a9960.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Разверните дерево ресурсов, щелкнув на знаке "+'" перед папкой MyDb.rc. Далее, откройте папку ресурсов Dialog и сделайте двойной щелчок на идентификаторе диалогового окна IDD_MYDB_FORM и тем самым откройте диалог в редакторе ресурсов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_6dfe6c75.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Пользуясь инструментами редактора диалогового окна, добавьте в него текстовые поля редактирования и статические надписи по образцу. Присвойте полям редактирования идентификаторы в соответствии с шаблоном: IDC_название таблицы_название поля (например для поля ID таблицы User
IDC_UserID, а для поля FirstName – идентификатор IDC_UserFirstName). Для текстового поля, содержащего идентификатор IDC_UserID, установите свойство Read
Only в True (определяется в окне Properties).
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_9eec66.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Часто перед названием поля на этапе проектирования ставится название таблицы. Особенно это удобно, если поле с таким названием существует в нескольких таблицах.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каждое из этих текстовых полей будет представлять собой поле записи базы данных. Атрибут Read
Only (только для чтения) установлен для первого (текстового) поля по той причине, что оно будет содержать первичный ключ базы данных, который не подлежит изменению.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для создания ассоциированных переменных выберите команду контекстного меню Add
Variable каждого Edit
Control:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_cd1fe651.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В раскрывшемся окне Add Member Variable Wizard выберите соответствующий ресурс, например, IDC_UserID. Выберите тип переменной (Variable type), категорию (Category), при необходимости права доступа (Access).
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_a0ee1da.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создание ассоциированной переменной
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После создания ассоциированных переменных, в классе MyDbView.cpp генерируется код, который связывает элементы управления с ассоциированными переменными.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Мы завершили создание экранной формы для отображения данных в приложении MyDB. Оттранслируйте и запустите программу, и вы увидите окно:
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_fb7277f7.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь наше приложение отображает содержимое записей таблицы Users. Используя элементы управления навигацией, расположенные на панели инструментов приложения, можно перемещаться от одной записи к другой. Можно обновить любую из записей. Для этого достаточно просто изменить содержимое любого из полей записи (за исключением поля ID, которое является первичным ключом и не может быть изменено). При переходе к другой записи приложение автоматически перенесет отредактированные данные в таблицу. Команды меню Record (Запись) приложения позволяют перемещаться по записям в базе данных точно так, как пиктограммы панели инструментов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Однако возможности приложения MyDB достаточно ограничены. Оно, например, не позволяет добавлять или удалять записи, выполнять сортировку и фильтрацию записей.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>11.6. Добавление и удаление записей</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Добавление и удаление записей в таблице базы данных реализуется достаточно просто благодаря существованию в Visual C++ классов CRecordView и CRecordset, предоставляющих все необходимые методы для выполнения этих стандартных операций.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Необходимо добавить в приложение команды меню «Add Record» и «Delete Record». Далее добавим в проект обработчики событий выбора пунктов меню OnRecordAdd() и OnRecordDelete(). Создадим код для этих обработчиков событий. В объявление класса CMyDBView добавьте следующие строки в раздел Attributes:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-left: 0in;">protected:
</p>
<p style="margin-left: 0in;">BOOL
m_bAdding;
</p>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В конструктор класса CMyDBView добавьте следующую строку в конец этой функции:
</p>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-left: 0in;">m_bAdding = FALSE;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Отредактируйте функцию OnRecordAdd() так:
</p>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-left: 0in;">void CMyDBView::OnRecordAdd()
</p>
<p style="margin-left: 0in;">{
</p>
<p style="margin-left: 0in;">m_pSet-&gt;AddNew();
</p>
<p style="margin-left: 0in;">m_bAdding = TRUE;
</p>
<p style="margin-left: 0in;">CEdit* pCtrl = (CEdit*)GetDlgItem(IDC_EMPLOYEE_ID);
</p>
<p style="margin-left: 0in;">int result = pCtrl -&gt; SetReadOnly(FALSE);
</p>
<p style="margin-left: 0in;">UpdateData(FALSE);
</p>
<p style="margin-left: 0in;"> }
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Далее необходимо переопределить виртуальную функцию OnMove в классе CMyDBView. Для этого необходимо вызвать диалог «Add
Member
Function»:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_ad07622b.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	И определить виртуальную функцию OnMove():
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_6d98147e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Отредактируйте функцию OnMove() так, чтобы она содержала текст программы, приведенный ниже.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>BOOL CEmployeeView::OnMove(UINT nIDMoveCommand)
</p>
<p>{
</p>
<p>if (m_bAdding)
</p>
<p> {
</p>
<p> m_bAdding = FALSE;
</p>
<p> UpdateData(TRUE);
</p>
<p> if (m_pSet-&gt;CanUpdate())
</p>
<p> m_pSet-&gt;Update();
</p>
<p> m_pSet-&gt;Requery();
</p>
<p> UpdateData(FALSE);
</p>
<p> CEdit* pCtrl = (CEdit*)GetDlgItem(IDC_EMPLOYEE_ID);
</p>
<p> pCtrl -&gt; SetReadOnly(TRUE);
</p>
<p> return TRUE;
</p>
<p> }
</p>
<p>else
</p>
<p> return CRecordView::OnMove(nIDMoveCommand);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Отредактируйте функцию OnRecordDelete() так, чтобы ее текст соответствовал следующему:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void CEmployeeView::OnRecordDelete()
</p>
<p>{
</p>
<p> m_pSet-&gt;Delete();
</p>
<p> m_pSet-&gt;MoveNext();
</p>
<p> if (m_pSet-&gt;IsEOF())
</p>
<p> m_pSet-&gt;MoveLast();
</p>
<p> if (m_pSet-&gt;IsBOF())
</p>
<p> m_pSet-&gt;SetFieldNull(NULL);
</p>
<p> UpdateData(FALSE);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Откомпилируйте приложение и запустите его на выполнение. Когда приложение начнет работу, на экране раскроется его главное окно, внешний вид которого не претерпел никаких изменений в сравнении с предыдущей версией приложения. Однако теперь у вас появилась возможность добавить в базу данных новую запись, выбрав команду Record=&gt;Add Record, либо удалить текущую запись из базы выбрав команду Records--Delete Record.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При добавлении записи приложение отображает в экранной форме пустую запись. Заполните поля новой записи. При переходе к другой записи приложение автоматически внесет новую запись в базу данных. Для того чтобы запись удалить, просто щелкните на пункте меню удаления. Текущая запись (та, которая отображена на экране) исчезнет, и на экран будет выведена следующая запись базы данных.
</p>
<a name="unc12"></a> 
<h1>12. Программирование операций с таблицами базы данных. </h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>12.1 Сортировка и фильтрация записей</h2>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Часто при работе с базой данных требуется изменить порядок, в котором записи отображаются на экране, или же осуществить поиск записей, удовлетворяющих определенному критерию. Существующие в MFC классы работы с базами данных ODBC располагают методами, позволяющими сортировать выбранные записи по любому из их полей. Кроме того, вызов определенных методов этих классов предоставит возможность ограничить набор отображаемых записей только такими, поля которых содержат указанную информацию, например конкретное имя или идентификатор. Данная операция называется <em>фильтрацией.</em> В этом разделе мы добавим функции сортировки и фильтрации в приложение MyDB.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Добавьте пункты меню для сортировки и фильтрации по каждому из полей таблицы, как представлено на рисунке:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2211eee4.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для ввода значения параметра фильтрации добавим в проект диалогогвое окно IDD_DIALOG1:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_8aca3d29.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Расположим на нем элеменет управления Edit
box с идентификатором IDC_FILTERVALUE:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_abe6ff4f.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Cвяжем элемент управления IDC_FILTERVALUE с переменной-членом m_fiIterValue.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь, когда меню и диалоговые окна уже созданы и связаны с заготовками функций, необходимо добавить в эти заготовки определенный программный код. Отредактируйте текст функции OnSortID():
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void
CMyDBView::OnSortID()
</p>
<p>{
</p>
<p>m_pSet-&gt;Close();
</p>
<p>m_pSet-&gt;m_strSort="UserID";
</p>
<p>m_pSet-&gt;Open();
</p>
<p>UpdateData(FALSE);
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Повторите
подобную
операцию
для
функций OnSortUserFirstName(), OnSortUserMiddleName(), и
т.д.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В начало файла MyDBView.cpp, после уже имеющихся директив #include, добавьте следующую строку:
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>#include "FilterDlg.h"
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Отредактируйте текст функций OnFilterID(), OnFilterUserFirstName(), OnFilterUserMiddleName(), и т.д.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void CMyDBView::OnFilterID()
</p>
<p>{
</p>
<p> DoFilter("UserID");
</p>
<p>}
</p>
<p><br>
</p>
<p>void CMyDBView::OnFilterUserFirstName ()
</p>
<p>{
</p>
<p> DoFilter("UserFirstName");
</p>
<p>}
</p>
<p><br>
</p>
<p>void CMyDBView::OnFilterUserMiddleName()
</p>
<p>{
</p>
<p> DoFilter("UserMiddleName");
</p>
<p>}
</p>
<p><br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все эти функции вызывают функцию DoFilter(). Далее необходимо будет написать эту функцию, выполняющую фильтрацию записей базы данных, представленных в классе выборки данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Текст
функции DoFilter():
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>void CMyDBView::DoFilter(CString col)
</p>
<p>{
</p>
<p>CFilterDlg dlg;
</p>
<p>int result=dlg.DoModal();
</p>
<p>if (result==IDOK)
</p>
<p>{
</p>
<p> CString str=col + "=" + dlg.m_filterValue;
</p>
<p> m_pSet-&gt;Close();
</p>
<p> m_pSet-&gt;m_strFilter=str;
</p>
<p> m_pSet-&gt;Open();
</p>
<p> int recCount= m_pSet-&gt;GetRecordCount();
</p>
<p><br>
</p>
<p> if (recCount==0)
</p>
<p> {
</p>
<p> MessageBox("No matching records.");
</p>
<p> m_pSet-&gt;Close();
</p>
<p> m_pSet-&gt;m_strFilter="";
</p>
<p> m_pSet-&gt;Open();
</p>
<p> }
</p>
<p> UpdateData(FALSE);
</p>
<p>}
</p>
<p>}
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Мы добавили к создаваемому приложению функции сортировки и фильтрации записей базы данных. Оттранслируйте приложение и запустите его на выполнение. На экране появится главное окно приложения, которое выглядит так же, как и раньше. Однако теперь можно сортировать записи по любому полю, для чего достаточно просто выбрать имя поля в меню Sort. Кроме того, появилась возможность задать фильтрацию отображаемых записей, выбрав имя требуемого поля в меню Filter, а затем введя значение фильтра в раскрывшемся диалоговом окне Filter. Если значением фильтра является строка, она должна быть взята в одинарные кавычки. Если значением фильтра является число, кавычек не требуется. Определить, как записи отсортированы, или какой для них задан фильтр, вы сможете, перемещаясь от одной записи к другой.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>12.2. Анализ функции OnSortDept()</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все функции сортировки имеют одинаковую структуру. Они закрывают выборку данных, устанавливают свои переменные-члены m_strSort и снова открывают выборку данных, а затем вызывают функцию UpdateData() для обновления окна представления данными из вновь полученной отсортированной выборки данных. Однако в тексте функций сортировки вы не найдете ни одного вызова функции, в названии которой было бы слово Sort. Когда же в таком случае выполняется сортировка? Она выполняется, когда выборка данных открывается заново.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Объект класса CRecordSet (как и объект любого другого класса, производного от CRecordSet, например объект класса CMyDBSet в этой программе) использует специальную строковую переменную m_strSort для определения способа упорядочения записей. Объект анализирует эту строковую переменную при формировании выборки данных и соответственно упорядочивает выбранные из базы записи.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>12.3. Анализ функции DoFilter()</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Всякий раз, когда пользователь выбирает команду из меню Filter, управляющая программа вызывает соответствующий этой команде метод: OnFilterID(), OnFilterUserFirstName(), OnFilterUserMiddleName(), и т.д. Каждая из этих функций ничего не делает, кроме вызова локального метода DoFilter(), передавая ему в качестве параметра строковую переменную, определяющую поле, по которому требуется выполнить фильтрацию.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функция DoFilter() независимо от того, какая именно команда была выбрана в меню, всегда отображает одно и то же диалоговое окно, создавая экземпляр объекта класса диалогового окна и вызывая его метод DoModal().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если значение result не равно IDOK, значит, пользователь выполнил щелчок на кнопке Cancel и весь оператор if пропускается, а функции DoFilter() остается только закончить свою работу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Внутри конструкции if прежде всего создается строковая переменная, которая будет использоваться для фильтрации записей базы данных. Строковая переменная применяется для выполнения фильтрации записей так же, как это происходит при сортировке. В данном случае строковая переменная называется m_strFilter. Строка, которая используется для фильтрации записей базы данных, должна иметь следующий формат:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>ИдентификаторПоля = Значение</em>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Здесь <em>ИдентификаторПоля</em> является аргументом типа CString функции DoFilter(), а <em>Значение</em> вводится пользователем в диалоговом окне. Например, если пользователь выберет команду фильтрации по полю UserFirstName и введет в диалоговом окне значение фильтра ‘Скворцов’, функция DoFilter() должна будет создать строку
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>UserFirstName =‘Скворцов’
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сформировав указанную строку, программа будет готова к выполнению фильтрации записей. Для этого, как и в случае сортировки, выборка данных должна быть закрыта, а затем, при ее повторном открытии, функция DoFilter() выполнит формирование выборки данных с учетом требуемой фильтрации.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Что произойдет, если в результате работы установленного фильтра не будет выбрано ни одной записи? Функция DoFilter() обнаруживает подобную ситуацию, подсчитывая количество записей в создаваемой выборке и сравнивая затем это число с нулем. Если набор записей пуст, программа выводит окно сообщения, информирующее пользователя о сложившейся ситуации. Затем программа закрывает выборку, присваивает строковой переменной фильтра пустое значение и снова открывает выборку записей. Таким образом, восстанавливается выборка, включающая все записи таблицы Users.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	И, наконец, независимо от того, удалось ли обнаружить записи, отвечающие заданному фильтру, или же выборка данных включает всю базу данных, программа должна заново отобразить данные на экране. Для этого вызывается функция UpdateData().
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc13"></a> 
<h1>13. Управление базой данных ODBC. Классы для работы с базами данных.</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рассмотрим классы библиотеки MFC, предназначенные для работы с базами данных с использованием механизма ODBC.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Эти классы, взаимодействуя с другими классами приложения, обеспечивают простой доступ к различным базам данных, использующим драйверы ODBC. Приложениям, которые работают с такими базами данных, следует иметь в своем составе, по крайней мере, два класса — CDatabase и CRecordSet. С них мы и начнем.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>13.1. Класс CDatabase</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Объекты этого класса используются для соединения с базами данных, посредством которого можно манипулировать источником данных. Чтобы у вас сразу же сложилось представление о заложенных в этот класс возможностях, приведем список категорий, на которые можно условно разделить все его компоненты и методы:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Данные. </em>Эти компоненты класса <em>CDatabase</em><em>
	</em>хранят информацию, используемую в том случае, <span style="color: #000000;">когда</span> вы хотите работать непосредственно с базой данных, к которой присоединен объект <em>CDatabase</em><em>.</em>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Создание соединения. </em>В эту категорию входят конструктор и методы для открытия/закрытия базы данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Атрибуты данных. </em>Сюда относятся десять функций, используемых для получения информации о базе данных, к которой присоединен объект <em>CDatabase</em><em>.</em>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Операции — </em>пять функций, позволяющих обрабатывать транзакции и непосредственно выполнять команды SQL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>Переопределяемые методы. </em>Один метод, позволяющий программисту более конкретно настроить функционирование объекта
	<em>CDatabase</em><em>.</em>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Конструктор, служит для создания объекта CDatabase:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><strong>CDatabase::CDatabase{}</strong></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Пример.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>Class СPublDoc: public CDocument</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>public:</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// Объявляем объект CDatabase в документе</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>CDatabase m_dbPubl;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>...</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>};</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">После того как объект создан, необходимо установить соединение с определенным источником данных, для чего следует вызвать одну из приведенных ниже функций.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>virtual BOOL CDatabase::Оpen(LPCTSTR lpszDSN,</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>BOOL bExclusive = FALSE, BOOL bReadOnly = FALSE, LPCTSTR lpszConnect = "ODBC;", </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>BOOL bUseCursorLib = TRUE)</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр lpszDSN определяет имя источника данных, которое должно быть зарегистрировано с помощью программы ODBC Administrator. Это значение не должно быть равно NULL, если DSN (Data Source Name, Имя источника данных) определено в строке lpszConnect, или может быть равно NULL, если необходимо предоставить пользователю блок диалога для выбора источника данных. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр bExclusive равен FALSE, если источник данных открывается для совместного использования, иначе он равен TRUE.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр bReadOnly позволяет установить соединение с источником данных в режиме "только для чтения" (TRUE), что приводит к запрещению его обновления. После установления такого соединения все зависимые результирующие множества наследуют этот атрибут. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр lpszConnect определяет строку, описывающую соединение, которая содержит информацию об источнике данных, идентификаторе пользователя, имеющего к нему доступ, пароль, если он требуется источнику данных, и другую информацию. Для совместимости с будущими версиями требуется, чтобы эта строка начиналась с подстроки "ODBC", указывающей на то, что соединение устанавливается с источником данных ODBC.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр bUseCursorLib указывает на необходимость (TRUE) или необязательность (FALSE) загрузки динамической библиотеки ODBC Cursor Library, позволяющей работать с курсорами базы данных.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Упрощенная версия рассмотренной функции имеет вид:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>virtual BOOL CDatabase::OpenEx (LPCTSTR lpszConnectString,</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>DWORD dwOptions = 0)</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр lpszConnectString определяет строку соединения с источником данных ODBC, которая включает его имя, а также дополнительную необязательную информацию, такую как идентификатор и пароль пользователя, например, "DSN=Publisher;UID=sa;PWD=irishka". Если в качестве параметра передается NULL, то выводится блок диалога Data Source, в котором пользователь может выбрать источник данных. Параметр dwOptions — битовая маска, которая определяет комбинацию следующих значений:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<dl><dd>
	<table class="table table-responsive table-bordered table-hover"><colgroup><col><col></colgroup>
	<tbody>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				CDatabase::openExclusive
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				источник данных открывается для совместного использования
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				CDatabase::openReadOnly
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Источник данных открывается в режиме “только для чтения”
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				СDatabase::openUseCursorLib
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Указывает на необходимость загрузки динамической библиотеки ODBC Cursor Library, позволяющей работать с курсорами
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				CDatabase::noOdbcDialog
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Не выводить блок диалога
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				CDatabase::forceOdbcDialog
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Всегда выводить блок диалога соединения
			</p>
		</td>
	</tr>
	</tbody>
	</table></dd>
</dl>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Значение, заданное по умолчанию (0), означает, что база данных открывается для совместного использования, с доступом для записи, динамическая библиотека поддержки курсора не загружается и блок диалога для выбора источника данных отображается только в том случае, если не указана дополнительная информация о соединении.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Обе функции выполняют одну и туже задачу – установить соединение с источником данных. Разница заключается только в способе задания параметров.</span>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>CDatabase</strong><strong>
	</strong><strong>m</strong><strong>_</strong><strong>dbSamp</strong><strong>; // Создаем объект класса </strong><strong>CDatabase</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//Открываем соединение с источником данных, указав имя </strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>// источника и идентификатор пользователя (без пароля)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>m_dbsamp.Open(_T(«Samples»), FALSE, FALSE, _T(«ODBC;UID=sa»));</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//или запрашиваем всю информацию у пользователя</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>m</strong><strong>_</strong><strong>dbsamp</strong><strong>.</strong><strong>Open</strong><strong>(</strong><strong>NULL</strong><strong>);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>//Закрываем текущее соединение</strong>
</p>
<p style="margin-right: 0in;"> …
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>m_dbsamp.Close();</strong>
</p>
<p style="margin-right: 0in;"> …
</p>
<p style="margin-right: 0in;">
	<strong>//и открываем новое</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>m</strong><strong>_</strong><strong>dbPubl</strong><strong>.</strong><strong>OpenEx</strong><strong> (_</strong><strong>T</strong><strong>(“</strong><strong>DSN</strong><strong>=</strong><strong>Authors</strong><strong>; </strong><strong>UID</strong><strong>=</strong><strong>sa</strong><strong>”), </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>13.2. Класс CRecordset</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Все компоненты и методы этого класса можно разбить на семь категорий:</span>
</p>
<ul>
	<li>
	<em>Компоненты данных.</em> Служат для хранения информации, используемой для непосредственной работы с базой данных, к которой объект этого класса был присоединен.
	</li>
	<li>
	<em>Конструирование.</em> В эту категорию входят конструктор и методы для открытия/закрытия форм базы данных.
	</li>
	<li>
	<em>Атрибуты результирующего набора.</em> Функции, используемые для получения информации о результирующем наборе, к которому присоединен объект класса CRecordset.
	</li>
	<li>
	<em>Операции обновления результирующего набора.</em> Четыре операции, предназначенные для обработки транзакций.
	</li>
	<li>
	<em>Операции перемещения по результирующему набору.</em> Функции, позволяющие перемещаться по записям результирующего набора.
	</li>
	<li>
	<em>Другие операции над результирующим набором.</em> Восемь функций, предоставляющие дополнительные функциональные возможности.
	</li>
	<li>
	<em>Переопределяемые методы.</em> Пять переопределяемых функций, позволяющие программисту настроить функционирование объекта класса CRecorset.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В классе CRecordset определены следующие основные компоненты данных:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT CRecordset::m_nFields</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Содержит число полей данных в результирующем наборе — число столбцов, получаемых из источника данных. Это поле должно быть корректно инициализировано в конструкторе класса CRecordset.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT CRecordset::m_nParams</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Содержит число параметров в результирующем наборе — число параметров, посылаемых в параметризированном запросе результирующего набора. Если эта переменная используется, то она должна быть корректно инициализирована в конструкторе. По умолчанию инициализируется нулем.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CDatabase CRecordset::m_pDatabase</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Содержит указатель на объект класса CDatabase, посредством которого результирующий набор соединяется с источником данных. Эта переменная устанавливается двумя способами: если вы уже установили соединение с источником данных, то при создании объекта класса CRecordset передайте туда указатель на объект класса CDatabase или же можно передать туда NULL — при этом CRecordset caм создаст объект CDatabase и соединится с ним. В обоих случаях указатель на базу данных хранится в этой переменной m_pDatabase. И хотя обычно нет необходимости отслеживать ее состояние, все же есть случаи, когда делать это необходимо, например, при запуске транзакции или непосредственного выполнения оператора SQL. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>CString CRecordset::m_strFilter </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Используется в качестве фильтра, что позволяет выбирать только записи, удовлетворяющие заданному критерию. Для осуществления "фильтрации" эту переменную следует определять после создания объекта класса CRеcordset, но до вызова функции Open, или же "перечитать" запрос с помощью функции Requery. Эта строка служит для определения предложения WHERE оператора SQL. Ключевое слово WHERE не нужно включать в строку фильтра, поскольку библиотека подставляет его сама. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CString CRecordset::m_strSort</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Используется в качестве фильтра, позволяющего сортировать записи, удовлетворяющие заданному критерию. Для того чтобы осуществить "сортировку", эту переменную следует определять после создания объекта класса CRecordset, но до вызова функции Open, или же "перечитать" запрос с помощью функции Requery. Эта строка служит для определения предложения ORDER BY оператора SQL. Не нужно включать в строку фильтра ключевое слово ORDER BY, поскольку библиотека подставляет его сама.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Помимо перечисления полей, по которым производится сортировка, можно указать так же одно из ключевых слов (отдельно для каждого поля), определяющего направление сортировки: ASC — по возрастанию и DESC — по убыванию.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В категорию «Конструирование» входят всего три функции: конструктор, Open и Close, отвечающие за создание объекта, открытие и закрытие соединения с источником данных.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CRecordset::CRecordset(CDatabase* pDatabase = NULL) </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Служит для создания и инициализации объекта класса CRecord</span><span style="color: #000000;">S</span><span style="color: #000000;">et. В качестве параметра в конструктор можно передать либо указатель на открытую базу данных (параметр pDatabase), либо NULL, что говорит о необходимости открытия базы данных по умолчанию. При создании производного от CRecordset класса у него должен быть только один конструктор, по параметрам совпадающий с базовым.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>virtual BOOL CRecordset::Open (UINT nOpenType = </strong>
</p>
<p style="margin-right: 0in;">
	<strong>AFX_DB_USE_DEFAULT_TYPE, LPCTSTR lpszSQL = NULL, </strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>DWORD dwOptions = none)</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">При успешном выполнении функции возвращается ненулевое значение и 0 — в противном случае. Если полученный результирующий набор не пустой, то текущей является первая запись. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр lpszSQL — указатель на строку, содержащую одно из значений: NULL, имя таблицы, оператор SQL, не обязательно с предложениями WHERE или ORDER BY, или оператор CALL, определяющий имя предопределенного запроса или сохраненной процедуры. Порядок столбцов в результирующем наборе должен совпадать с порядком вызова в переопределенной функции DoFieldExchange. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Параметр dwOptions- битовая маска, которая определяет комбинацию перечисленных ниже значений:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Функцию CRecordset::Open следует вызывать для выполнения запроса, определяющего результирующий набор. Очевидно, что перед ее вызовом объект класса СRесоrdsеt должен быть создан. Более того, соединение с источником данных зависит от того, как именно он создан:</span>
</p>
<ul>
	<li>
	Если в качестве параметра был использован указатель на объект CDatabase, который еще не соединен с источником данных, то функция Open использует метод GetDefaultConnect для открытия объекта базы данных.
	</li>
	<li>
	Если в качестве параметра использовался NULL, то автоматически создается объект класса CDatabase и осуществляется попытка соединения с базой данных. 
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Примечание</em></span><span style="color: #000000;">. Доступ к источнику данных посредством объекта CRecordset никогда не может быть эксклюзивным.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">При вызове функции Open выполняется запрос, обычно оператор SELECT, в результате чего выбираются записи на основе критериев, перечисленных ниже.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col><col></colgroup>
<tbody>
<tr>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Значение параметра lpszSQL
		</p>
	</td>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Выбираемые записи определяются
		</p>
	</td>
	<td>
		<h2>Пример</h2>
	</td>
</tr>
<tr>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			NULL
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			Строкой, возвращаемой фyнкциeй GetDefaultSQL
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			Имя таблицы
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			Столбцами, указанными в функции DoFieldExchange
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			"Products"
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			Имя предопределенного запроса (сохраненной процедуры)
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			Столбцами, определенными в запросе
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;"> “(callProductList)”
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			SЕLЕСТ список-столбцов
		</p>
		<p style="margin-right: 0in; font-weight: normal;">
			FROM список-таблиц
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			Заданными столбцами из определенных таблиц
		</p>
	</td>
	<td>
		<p style="margin-right: 0in; font-weight: normal;">
			SELECT ProductName, UnitPrice FROM Products
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">При написании строки SQL необходимо тщательно следить за тем, чтобы в нее не попали дополнительные пробелы. Например, если между круглой скобкой и ключевым словом CALL (а также SELECT) будет хоть один пробел, то библиотека MFC неправильно поймет имя таблицы, что приведет к обработке исключения (исключительной ситуации). Аналогичная ситуация возникает, если пробел появится между круглой скобкой и символом '?' в параметризованном запросе. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Перед вызовом функции Open можно определить дополнительные условия, соответствующие параметрам предложений WHERE и ORDER BY операторa SQL, используя для этого описанные выше переменные класса m_strFilter и m_strSort. Если же их определить после того, как результирующий набор открыт, то они не окажут никакого влияния на результат выполнения запроса. В этом случае необходимо будет воспользоваться функцией Requery для обновления записей.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>virtual void CRecordset::Close()</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Используется для закрытия результирующего набора. Если он не был открыт, то функция просто завершается. После ее выполнения вся память, выделенная для результирующего набора, и дескриптор HSTMT ODBC, ассоциированный с ним, возвращается системе. В том случае, когда объект класса CRecordset создавался с помощью оператора new, вызов функции Close осуществляется автоматически при удалении объекта.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>13.3. Класс CRecordView</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Объекты этого класса предоставляют для изображения записей базы данных в элементах управления форму, которая непосредственно соединена с объектом CRecordset. Объекты CRecordView используют механизм DDX (Dialog Data Exchange, Обмен данными с блоком диалога) и RFX (Record Field Exchange, Обмен полями записей) для автоматического перемещения данных между элементами управления формы и полями результирующего набора. Кроме того, можно воспользоваться реализованными возможностями перемещения по записям и обновления текущей записи.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вce компоненты и методы этого класса можно условно разбить на три категории.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ul>
	<li>
	<em>Создание объекта</em>. Имеется только конструктор для создания объекта.
	</li>
	<li>
	<em>Атрибуты данных</em>. Три функции, используемые для получения информации о результирующем наборе, к которому присоединена форма.
	</li>
	<li>
	<em>Операции</em>. Единственная функция, позволяющая программисту изменить указатель на текущую запись.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В категорию «Создание объекта» входит только конструктор, имеющий две реализации.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CRecordView::CRecordView(LPCSTR lpszTemplateName) </strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CRecordView::CRecordView{UINT nIDTemplate)</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создает объект класса. В качестве параметра конструктор принимает идентификатор шаблона блока диалога, задаваемый либо строкой (lpszTemplateName), либо номером (nIDTemplate). При создании класса, производного от CRecordView, в нем можно определить только один конструктор, в котором необходимо вызвать конструктор базового класса CRecordView::CRecordView с идентификатором ресурса в качестве параметра, как это показано в приведенном ниже фрагменте:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CDBView::CDBView():CRecordView(CDBView::IDD)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//{{AFX_DATA_INIT (CDBView)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>m_pSet = NULL;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>m_strPrice =_T("");</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//}}AFX_DATA_INIT </strong>
</p>
<p style="margin-right: 0in;">
	<strong>m_bAdd = FALSE;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>m_nSort = ID_SORT_TITLE;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функции категории «Атрибуты данных» позволяют получить информацию о представлении записи.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>virtual CRecordset* CRecordView::OnGetRecordset( )</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Возвращает указатель на объект CRecordset, ассоциированный с формой, позволяет тем самым работать с некоторым результирующим набором. Чисто виртуальная функция, которая требует обязательного переопределения. Причина этого понятна — библиотека не может знать, с каким результирующим набором, т. e. объектом класса CRecordset, вы работаете.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ниже показан фрагмент кода, который выдает мастер AppWizard при создании приложения для работы с базой данных:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CRecordset* CDBView::OnGetRecordset()</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>return m_pSet;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>BOOL CRecordView::IsOnFirstRecord( )</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Позволяет определить, является ли текущая запись первой в результирующем наборе, ассоциированном с данной формой. Когда пользователь перемещается за первую запись, библиотека блокирует доступ к элементам пользовательского интерфейса для перемещения на первую и предыдущую запись.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>BOOL CRecordView::IsOnLastRecord( )</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Позволяет определить, является ли текущая запись последней в результирующем наборе, ассоциированном с данной формой. Когда пользователь перемещается за последнюю запись, библиотека блокирует доступ к элементам пользовательского интерфейса для перемещения на последнюю и следующую запись.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В категории «Операции» имеется единственная функция, позволяющая программисту перемещаться по записям результирующего набора.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>virtual BOOL CRecordView::OnMove(UINT nIDMoveCommand)</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Позволяет изменять указатель на текущую запись, или, другими словами, перемещаться no записям результирующего набора и отображать его поля в элементах управления формы. Параметр nIDMoveCommand задает направление перемещения и может принимать следующие значения:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Реализация этой функции по умолчанию обновляет текущую запись источника данных, если пользователь изменил ее в форме. Если результирующий набор не имеет записей, то вызов функции OnMove приводит к исключению. Поэтому перед ее использованием необходимо определить, имеются ли записи в результирующем наборе.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как видите, функций совсем немного, но не следует забывать, что класс CRecordView базируется на многих других классах, откуда и наследует все их возможности.
</p>
<a name="unc14"></a> 
<h1>14. Доступ к данным в Visual C++</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>14.1. Интерфейсы доступа к данным</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Количество доступных Windows-приложениям интерфейсов доступа к данным может показаться чрезмерным. Какую же из технологий с загадочными именами — DAO, ODBC, RDO, UDA, OLE DB или ADO — выбрать для построения конкретного приложения?
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Возможно, мы облегчим Вашу задачу, проделав небольшой экскурс в историю. Раньше в Microsoft ключевыми технологиями доступа к данным считались Data Access Objects (DAO) для настольных систем и Remote Data Objects (RDO), основанная на Open Database Connectivity (ODBC), — для клиент-серверных баз Данных. Но на смену им пришла единая модель Universal Data Access (UDA), поддерживающая данные любых типов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Цель UDA — обеспечить высокопроизводительный доступ как к нереляционным, так и к реляционным источникам данных; предоставив удобный, независимый от инструментальных средств и языка интерфейс программирования. UDA базируется на объектах ADO, которые предоставляют высокоуровневый интерфейс для работы с OLE DB — новейшей технологией Microsoft для доступа к базам данных на основе СОМ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Хотя нет никаких ограничений в применении старых технологий для доступа к данным, при создании новых приложений лучше пользоваться UDA. Эта технология проста в обращении, характеризуется широким спектром возможностей и достаточной производительностью. Опытные разработчики программ на базе СОМ могут напрямую обращаться к интерфейсам OLE DB, получая выигрыш в скорости и эффективности.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Планируя перенос существующих DAO/ODBC-приложений на ADO, Вам обязательно надо оценить, покроют ли преимущества от использования этой технологии издержки на ее внедрение, ведь код, написанный для DAO или RDO, напрямую не переносим на ADO. Тем не менее в подавляющем большинстве случаев решения, основанные на других моделях, можно с равным успехом реализовать на основе </span><span style="color: #000000;">ADO</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>14.2. Data
Access Objects
</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Data</span><span style="color: #000000;">
	</span><span style="color: #000000;">Access</span><span style="color: #000000;">
	</span><span style="color: #000000;">Objects</span><span style="color: #000000;"> (</span><span style="color: #000000;">DAO</span><span style="color: #000000;">) — «родной» интерфейс программирования процессора базы данных </span><span style="color: #000000;">Microsoft</span><span style="color: #000000;">
	</span><span style="color: #000000;">Jet</span><span style="color: #000000;">, первоначально создавался для инструментальных сред разработки приложений </span><span style="color: #000000;">Visual</span><span style="color: #000000;">
	</span><span style="color: #000000;">Basic</span><span style="color: #000000;"> и </span><span style="color: #000000;">Visual</span><span style="color: #000000;">
	</span><span style="color: #000000;">Basic</span><span style="color: #000000;">
	</span><span style="color: #000000;">for</span><span style="color: #000000;">
	</span><span style="color: #000000;">Applications</span><span style="color: #000000;">. DAO применяется </span><span style="color: #000000;">M</span><span style="color: #000000;">icrosoft Jet для предоставления набора объектов доступа к данным, скрывающих стандартные объекты базы данных: таблицы, запросы и наборы записей (recordsets). Набор записей — это совокупность строк, возвращенных в ответ на запрос к базе данных.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Обычно DAO применяли для доступа к локальным источникам данных типа </span><span style="color: #000000;">M</span><span style="color: #000000;">icrosoft Access, Microsoft FoxPro и Paradox, хотя сама технология вполне пригодна для доступа к удаленным источникам. На самом низком уровне объекты DAO доступны через СОМ-интерфейсы, но чаще всего для доступа к ним применяются соответствующие MFC-классы DAO или же классы dbDAO. В C++ классы dbDAО предоставляют функциональность и синтаксис, сходные с Visual Basic.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>14.3. Open Database Connectivity</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Open Database Connectivity (ODBC) представляет собой API для доступа к клиент-серверным источникам данных, таким, как SQL Server или Oracle. Стандартный ODВС-интерфейс обеспечивает высокую степень универсальности приложения — один и тот же код применяется для взаимодействия с различными типами СУРБД. Это позволяет разработчикам создавать и продавать клиент-серверные приложения, не ориентируясь на какую-то определенную СУРБД, а значит, не тратя силы и время на учет особенностей конкретных платформ серверов баз данных, с которыми работает приложение. ODBC-драйверы — все, что нужно такому приложению для взаимодействия с внешним источником данных. Эти драйверы в соответствии с открытым стандартом ODBC создают либо сами поставщики СУРБД, либо сторонние разработчики.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Возможности различных СУРБД иногда существенно отличаются. Кроме того, в ODВС-драйвере допускается реализация только некоторых из всех допустимых функций. По этой причине в ODBC определены три уровня соответствия (conformance) драйвера, позволяющие приложению узнавать о наборе функций, доступных в конкретном драйвере:</span>
</p>
<ul>
	<li>
	базовое соответствие (core conformance) — минимум функций, обязательных для всех ODBC-драйверов;
	</li>
	<li>
	уровень соответствия 1 (level I conformance) — включает базовое соответствие и дополнительные функции, которые обычно применяются в СУРБД (например, поддержка транзакций); 
	</li>
	<li>
	уровень соответствия 2 (level 2 conformance) — включает уровень 1 плюс сложные функциональные возможности типа асинхронной работы ODBC.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Более подробную информацию об уровнях соответствия ODBC Вы найдете, выполнив в справочной системе Visual C++ поиск по словосочетанию «</span><span style="color: #000000;">Interface</span><span style="color: #000000;"> со</span><span style="color: #000000;">nformance</span><span style="color: #000000;">
	</span><span style="color: #000000;">levels</span><span style="color: #000000;">».</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">На рис. 14.1 представлена архитекрура </span><span style="color: #000000;">ODBC</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_e92d98ca.gif" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рис. 14.1. Архитекрура </span><span style="color: #000000;">ODBC</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для установки и настройки ODBC-драйверов служит утилита ODBC Data Sources Control Panel. Она же предназначена и для регистрации нового имени источника (Data Source Name, -DSN).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В качестве стандарта доступа к данным в ODBC применяется SQL. Когда приложению требуются данные из определенного источника, оно посылает SQL-запрос диспетчеру ODBC-драйверов, который в ответ загружает соответствующий OD</span><span style="color: #000000;">BC</span><span style="color: #000000;"> драйвер. Тот в свою очередь преобразует поступивший из приложения SQL-зanpос понятную СУБД форму SQL и отсылает его серверу базы данных. Далее СУБД проводит выборку данных и через драйвер, и диспетчер возвращает их приложению,</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">ODBC предоставляет </span><span style="color: #000000;"><em>библиотеку курсоров</em></span><span style="color: #000000;"> (cursor library) с курсорами прокрутки для драйверов, поддерживающих базовое соответствие ODBC. Они применяются для просмотра набора записей из базы данных.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	ODBC API можно также использовать в C++ для подключения к базе данных, отправки SQL-запросов, получения результатов или ошибок, отключения и т.д. ODBC API — хорошо документированная технология создания клиент-серверных приложений, но она довольно сложна и требует достаточно объемного кода. Вот почему объектные модели ADO, RDO или MFC-классы ODBC применяются значительно чаще.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>14.4. Remote Data Objects</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Remote Data Objects (RDO) является лишь объектно-ориентированной оболочкой ODBC API, а непосредственный доступ к данным выполняет </span><span style="color: #000000;">O</span><span style="color: #000000;">DBC-драйвер. Объектная модель RDO похожа на технологию DАО, но не требует дополнительной пaмяти для поддержки локальной базы данных. RDO предоставляет такие дополнительные функции, как </span><span style="color: #000000;"><em>серверные курсоры</em></span><span style="color: #000000;"> (server-side cursors), </span><span style="color: #000000;"><em>отсоединенные наборы записей</em></span><span style="color: #000000;"> (disconnected recordsets) и асинхронную обработку.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Как и DAO, для доступа к своим объектам RDO применяет СОМ-интерфейсы. Для этого служит Data Source Control — элемент управления на базе ActiveX; инкапсулируюший запросы к базам данных и возвращаемые наборы записей. Он позволяет просматривать наборы записей с данными, которые содержатся в одном из </span><span style="color: #000000;">Active</span><span style="color: #000000;">-</span><span style="color: #000000;">X</span><span style="color: #000000;">-элементов для работы с данными – </span><span style="color: #000000;">DBGrid</span><span style="color: #000000;"> или </span><span style="color: #000000;">DBList</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>14.5. OLE DB</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">OLE DB — набор COM-интерфейсов, предоставляющих приложению единообразный доступ к данным самых различных источников независимо от их местонахождения или типа. Открытая спецификация OLE DB основана на технологии ODBC, она предоставляет открытый стандарт доступа к данным любого типа. ODBC создавалась для взаимодействия с реляционными БД, a OLE DB разрабатывалась как для реляционных, так и для нереляционных источников, включая (но не ограничиваясь) БД на мейнфреймах, серверах и персональных компьютерах, а также хранилища файлов и сообщения электронной почты, электронные таблицы, инструментальные средства управления проектами и пользовательские объекты.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В соответствии с принципами построения OLE DB предусмотрено три типа компонентов: </span><span style="color: #000000;"><em><strong>потребители данных</strong></em></span><span style="color: #000000;"> (data consumers), </span><span style="color: #000000;"><em><strong>служебные компоненты</strong></em></span><span style="color: #000000;"> (service components) и </span><span style="color: #000000;"><em><strong>поставщики данных</strong></em></span><span style="color: #000000;"> (data providers) </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Потребители данных – это приложения или компоненты, которым нужны предоставляемые источником данные. Любое приложение, применяющее ADO, считается потребителем данных OLE DB.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Служебные компоненты занимаются обработкой или транспортировкой данных, расширяя функциональнее возможности поставщиков данных. В качестве примера можно привести процессоры запросов (query processors), генерирующие или оптимизирующие запросы, и механизмы курсоров (cursor engines), принимающие данные из источников с последовательным доступом и отображающие их в удобной для просмотра форме.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Поставщики данных, как ясно из их названия, представляют свои данные другим программам. Это могут быть как приложения, например SQL Server или Microsoft Exchange, так и системные компоненты — файловые системы или хранилища документов. Для доступа к данным поставщики предоставляют потребителям и служебным компонентам интерфейсы OLE DB. Предусмотрен и поставщик данных ODBC — он обеспечивает OLE DB-потребителям доступ ко всем существующим ODBC-источникам данных.
</p>
<a name="unc15"></a> 
<h1>15. Потоки в Visual
C++
</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В современных версиях Windows поддерживается два типа многозадачности. Первый тип основан на процессах. Процесс - это программа, или задача, которая выполняется. В многозадачных системах такого типа две и более программы могут выполняться одновременно. Второй тип многозадачности основан на потоках. Поток - это часть выполняющегося процесса. В Win32 каждый процесс имеет, по крайней мере, один поток, но потоков процесса может быть и два, и больше.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В потоковой многозадачности несколько частей одной и той же программы могут выполняться одновременно. Это дает возможность писать чрезвычайно эффективные программы путем разделения их на отдельные исполняемые блоки и управления ходом выполнения всей программы в целом. Для многозадачности такого типа в MFC предусмотрены специальные средства поддержки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С введением потоковой многозадачности возникла необходимость в специальном механизме, называемом синхронизацией. Синхронизация позволяет контролировать выполнение потоков (и процессов) строго определенным образом. Библиотека классов MFC полностью поддерживает средства многозадачности.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>15.1. Интерфейсные и рабочие потоки MFC</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все процессы имеют, по крайней мере, один поток выполнения. Он называется главным, первичным потоком. Но в пределах одного и того же процесса можно создавать несколько потоков. Когда они создаются, родительский процесс начинает выполняться не последовательно, а параллельно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В MFC определены два типа потоков: интерфейсные и рабочие. Интерфейсный поток способен принимать и обрабатывать сообщения. Говоря языком MFC, интерфейсные потоки содержат канал сообщений. Главный поток MFC-программы (начинающийся при объявлении объекта класса CWinApp) является интерфейсным потоком. Рабочие потоки не принимают и не обрабатывают сообщения. Они обеспечивают дополнительные пути выполнения задачи внутри интерфейсного потока.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В MFC потоковая многозадачность реализуется с помощью класса CWinThread. Заметим, что производным от него является класс CWinApp, формирующий поток приложения. При использовании классов, отвечающих за работу в многозадачном режиме, в программу следует включать стандартный библиотечный файл afxmt.h.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При создании многопоточных программ наиболее часто используются именно рабочие потоки - необходимость в нескольких каналах сообщений возникает достаточно редко, однако во многих приложениях используются вспомогательные потоки, позволяющие вести фоновую обработку данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>15.1.1. Создание рабочего потока.</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для создания рабочего потока предназначена функция AfxBeginThread библиотеки MFC:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CWinThread* AfxBeginThread( AFX_THREADPROC pfnThreadProc, </strong>
</p>
<p style="margin-right: 0in;">
	<strong> LPVOID pParam, int nPriority = THREAD_PRIORITY_NORMAL, </strong>
</p>
<p style="margin-right: 0in;">
	<strong> UINT nStackSize = 0, DWORD dwCreateFlags = 0, </strong>
</p>
<p style="margin-right: 0in;">
	<strong> LPSECURITY_ATTRIBUTES lpSecurityAttrs = NULL );</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каждый поток внутри родительского процесса начинает свое выполнение с вызова специальной функции, называемой потоковой функцией. Выполнение потока продолжается до тех пор, пока не завершится его потоковая функция. Адрес данной функции (т.е. входная точка в поток) передается в параметре pfnThreadProc. Все потоковые функции должны иметь следующий прототип:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT pfnThreadProc (LPVOID pParam);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Значение параметра pParam функции AfxBeginThread есть 32-разрядное число, которое может использоваться для любых целей.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Начальный приоритет потока указывается в параметре nPriority. Если этот параметр равен 0, то используются установки приоритета текущего (родительского) потока. Каждый поток имеет свой собственный стек. Размер стека указывается в параметре nStackSize. Если этот параметр равен нулю (общепринятый подход), то создаваемому потоку будет выделен стек такого же размера, что и у родительского потока, а при необходимости, размер стека может быть увеличен.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Параметр dwCreateFlags определяет состояние выполнения потока. Если данный параметр равен нулю, поток начинает выполняться немедленно. Если значение этого параметра равно CREATE_SUSPEND, то поток создается временно приостановленным, т.е. ожидающим запуска. Чтобы запустить такой поток, нужно вызвать функцию CWinThread::ResumeThread.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Параметр lpSecurityAttrs является указателем на набор атрибутов прав доступа, относящийся к данному потоку. Если этот параметр равен NULL, то набор атрибутов будет унаследован от родительского окна.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При успешном завершении функция AfxBeginThread возвращает указатель на объект потока, в противном случае возвращает ноль.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Данный указатель необходимо сохранять, если впоследствии предполагается обращение из родительского потока к созданному потоку (например, для изменения приоритета или для временного приостановления потока).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В программе может быть столько потоков, сколько необходимо. При работе с несколькими потоками для каждого из них должна быть определена своя потоковая функция, и каждый из них должен начинаться отдельно. Все потоки процесса затем функционируют одновременно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рассмотрим пример создания двух потоков для однодокументного приложения Example при обработке сообщения о выборе пользователем пункта меню “</span><span style="color: #000000;">Start</span><span style="color: #000000;">
	</span><span style="color: #000000;">Thread</span><span style="color: #000000;">” меню “</span><span style="color: #000000;">Thread</span><span style="color: #000000;">”. В качестве родительского потока выступает главный поток приложения. Поток 1 после запуска осуществляет 100-кратный вывод некоторой строки в окно приложения с задержкой 650 миллисекунд, поток 2 каждые две секунды 50 раз выдает звуковой сигнал и сообщение.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для создания приложения Example выполните следующие действия.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	1. Запустите AppWizard и укажите ему на необходимость создания нового проекта класса MFC AppWizard(exe) с именем Example.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	2. Задайте для нового проекта параметры настройки AppWizard: шаг 1-SDI, остальные по умолчанию.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	3. Используя редактор ресурсов, добавьте в меню приложения IDR_MAINFRAME новое меню Thread. Поместите в него команду с названием Start Thread и идентификатором ID_STARTTHREAD.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	4. С помощью ClassWizard свяжите команду ID_STARTTHREAD с функцией обработки сообщения OnStartthread(). Перед добавлением этой функции убедитесь, что в поле Class Name выбрано значение CExampleView.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">5. Щелкните на кнопке Edit Code и введите приведенные ниже операторы в новую функцию </span><span style="color: #000000;">OnStartthread</span><span style="color: #000000;">().</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>AfxBeginThread(MyThread1,this);</strong>
</p>
<p style="margin-right: 0in;">
	<strong>AfxBeginThread(MyThread2,this);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В этом фрагменте текста программы последовательно вызываются функции MyThread1() и MyThread2(), каждая из них будет работать в своем собственном потоке. Далее в файл ExampleView.cpp добавьте функции MyThread1() и MyThread2(), текст которых представлен ниже. Поместите перед функцией OnStartthread() объявления функций MyThread1() и MyThread2(). Обратите внимание, что эти функции являются глобальными функциями, а не методами класса CExampleView, несмотря на то, что они находятся в файле, в котором реализован этот класс.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Окончательный фрагмент кода в файле ExampleView.cpp представлен ниже.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT MyThread1(LPVOID pParam); // объявление функции потока 1</strong>
</p>
<p style="margin-right: 0in;">
	<strong>UINT MyThread2(LPVOID pParam); // объявление функции потока 2</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>void CExampleView::OnStartthread() //</strong><strong>обраб</strong><strong>. </strong><strong>сообщения</strong><strong>
	</strong><strong>от</strong><strong>
	</strong><strong>меню</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//Создать два новых потока. Функция потока 1 имеет имя </strong>
</p>
<p style="margin-right: 0in;">
	<strong>//MyThread1, Функция потока 2 имеет имя MyThread2.</strong>
</p>
<p style="margin-right: 0in;">
	<strong>// в качестве параметра функциям потоков передается указатель</strong>
</p>
<p style="margin-right: 0in;">
	<strong>// на текущее окно просмотра для вывода в него изображения</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>	</strong><strong>AfxBeginThread(MyThread1,this);</strong>
</p>
<p style="margin-right: 0in;">
	<strong> AfxBeginThread(MyThread2,this); </strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>// </strong><strong>определение</strong><strong>
	</strong><strong>функции</strong><strong>
	</strong><strong>потока</strong><strong> 1</strong>
</p>
<p style="margin-right: 0in;">
	<strong>UINT MyThread1(LPVOID pParam)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>// через параметр передается указатель на окно просмотра</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>	</strong><strong>CExampleView *ptrView=(CExampleView *)pParam; </strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong> for(int i=0; i&lt;100; i++)</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>	</strong><strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> CDC *dc=ptrView-&gt;GetDC();// получить контекст отображения</strong>
</p>
<p style="margin-right: 0in;">
	<strong> Sleep(650); // Задержка на 650 миллисекунд</strong>
</p>
<p style="margin-right: 0in;">
	<strong> CRect r; </strong>
</p>
<p style="margin-right: 0in;">
	<strong> ptrView-&gt;GetClientRect(&r); //получить клиентскую область</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong></strong><strong>//</strong><strong>окна</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>dc-&gt;TextOut(rand()%r.Width(),rand()%r.Height(),"*",1); // </strong><strong>вывод</strong>
</p>
<p style="margin-right: 0in;">
	<strong> }</strong>
</p>
<p style="margin-right: 0in;">
	<strong> return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>// </strong><strong>определение</strong><strong>
	</strong><strong>функции</strong><strong>
	</strong><strong>потока</strong><strong> 2</strong>
</p>
<p style="margin-right: 0in;">
	<strong>UINT MyThread2(LPVOID pParam)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>for(int i=0; i&lt;50; i++)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong> Sleep(2000); // </strong><strong>Задержка</strong><strong>
	</strong><strong>на</strong><strong> 2000 </strong><strong>миллисекунд</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong> AfxMessageBox("MyThread2"); // </strong><strong>Вывод</strong><strong>
	</strong><strong>сообщения</strong>
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong> MessageBeep(0); // </strong><strong>Подача</strong><strong>
	</strong><strong>звукового</strong><strong>
	</strong><strong>сигнала</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<strong>return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Откомпилируйте и запустите приложение. Не забудьте при компиляции установить в Project/Settings опцию многопоточного приложения, как это показано на рисунке 15.1.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_14010eab.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 15.1. Настройка проекта на многопоточность
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Иногда бывает необходимо приостановить поток на заданное количество миллисекунд. Это можно сделать, вызвав API-функцию Sleep.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вообще говоря, поток выполняется до завершения своей потоковой функции. Поток может также “завершить сам себя” с помощью функции AfxEndThread библиотеки MFC. Параметр этого метода содержит статус завершения потока. Как правило, лучше давать потоку возможность нормально завершиться одновременно с потоковой функцией.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>15.1.2. Остановка и возобновление выполнения потоков.</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Остановить выполнение потока можно с помощью метода SuspendThread класса CWinThread. В остановленном состоянии поток не выполняется. Продолжить выполнение потока можно с помощью метода ResumeThread класса CWinThread.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каждый поток имеет связанный с ним счетчик остановок. Если этот счетчик равен нулю, значит, поток выполняется нормально. При ненулевом значении счетчика поток находится в остановленном состоянии. С каждым вызовом метода SuspendThread значение счетчика остановок увеличивается на единицу. И, наоборот, с каждым вызовом функции ResumeThread значение счетчика остановок уменьшается на единицу. Остановленный поток может продолжить выполнение только после того, как значение счетчика достигнет нуля.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>15.2. Управление приоритетами потоков.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С каждым потоком связана определенная установка приоритета. Эта установка представляет собой комбинацию двух значений: значения общего класса приоритета процесса и значения приоритета самого потока относительно данного класса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приоритет потока показывает, сколько времени работы процессора требуется потоку. Для потоков с низким приоритетом требуется мало времени, а для потоков с высоким приоритетом - много времени.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Получить класс приоритета процесса можно с помощью функции GetPriorityClass, а установить класс приоритета можно с помощью функции SetPriorityClass. Обе эти функции являются API-функциями и не входят в класс CWinThread.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ниже показаны константы, соответствующие классам приоритетов в порядке убывания (по умолчанию программе присваивается приоритет NORMAL_PRIORITY_CLASS; причин менять его, как правило, нет):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<dl><dd>
	<table class="table table-responsive table-bordered table-hover"><colgroup><col><col></colgroup>
	<tbody>
	<tr>
		<td>
			<p style="text-align: center; margin-right: 0in; font-weight: normal;">
				Приоритет процесса
			</p>
		</td>
		<td>
			<p style="text-align: center; margin-right: 0in; font-weight: normal;">
				Значение
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				REALTIME_PRIORITY_CLASS
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Наиболее высокий приоритет
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				HIGH_PRIORITY_CLASS
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Выполнение критических по времени задач
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				NORMAL_PRIORITY_CLASS
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Без специальных требований
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				IDLE_PRIORITY_CLASS
			</p>
		</td>
		<td>
			<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
				Запускается только, когда система не занята
			</p>
		</td>
	</tr>
	</tbody>
	</table></dd>
</dl>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Изменение приоритета процесса может негативно сказаться на производительности всей системы. Так, например, увеличение класса приоритета программы до REALTIME_PRIORITY_CLASS приведет к захвату программой всех ресурсов процессора.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приоритет потока процесса (независимо от класса приоритета) говорит о том, сколько времени процессора занимает отдельный поток в пределах своего процесса. При создании потока ему присваивается нормальный приоритет THREAD_PRIORITY_NORMAL. Но это значение можно изменить, причем даже во время выполнения потока.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приоритеты потоков контролируются методами класса CWinThread. Определить значение приоритета можно с помощью метода GetThreadPriority, а изменить его - с помощью метода SetThreadPriority. Ниже приведены константы, соответствующие установкам приоритетов потоков в порядке убывания:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col></colgroup>
<tbody>
<tr>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Константа
		</p>
	</td>
	<td>
		<p style="text-align: center; margin-right: 0in; font-weight: normal;">
			Назначение
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_TIME_CRITICAL
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает базовый приоритет равным 15. Для процесса realtime_priopity_class устанавливает приоритет равным 30
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_HIGHEST
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает приоритет на два пункта выше нормального
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_ABOVE_NORMAL
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает приоритет на один пункт выше нормального
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_NORMAL
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает нормальный приоритет
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_BELOW_NORMAL
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает приоритет на один пункт ниже нормального
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_LOWEST
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает приоритет на два пункта ниже нормального
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			THREAD_PRIORITY_IDLE
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Устанавливает базовый приоритет равным 1. Для процесса realtime_priority_class
				устанавливает приоритет равным 16
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><em>Замечание</em></span><span style="color: #000000;">. Благодаря различным сочетаниям значений приоритета процесса и приоритета потока в Win32 поддерживается 31 различная установка приоритета.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>15.3. Синхронизация потоков.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Использование в программе нескольких потоков одновременно может привести к возникновению ряда специфических проблем. Например, как предотвратить одновременный доступ двух потоков к одним и тем же данным? Что произойдет, если в тот момент, когда один поток еще не завершил процедуру обновления некоторых данных, другой поток предпринимает попытку эти данные считать? Почти наверняка данные, считанные вторым потоком, окажутся некорректными, поскольку лишь некоторая их часть была на данный момент обновлена.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обеспечение корректной совместной работы потоков называется синхронизацией потоков. Рассмотрим средства синхронизации потоков.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>15.3.1. Объекты синхронизации и классы MFC.</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Интерфейс Win32 поддерживает четыре типа объектов синхронизации - все они, так или иначе, основаны на понятии семафора.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Первым типом объектов является </span><span style="color: #000000;"><em>классический (стандартный) семафор</em></span><span style="color: #000000;">. Он позволяет ограниченному числу процессов и потоков обращаться к одному ресурсу. При этом доступ к ресурсу либо полностью ограничен (один и только один поток или процесс может обратиться к ресурсу в определенный период времени), либо одновременный доступ получает лишь малое количество потоков и процессов. Семафоры реализуются с помощью счетчика, значение которого уменьшается, когда задаче выделяется семафор, и увеличивается, когда задача освобождает семафор.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Вторым типом объектов синхронизации является </span><span style="color: #000000;"><em>исключающий (mutex) семафор</em></span><span style="color: #000000;">. Он позволяет в любой момент времени обратиться к ресурсу только одному процессу или потоку.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Третьим типом объектов синхронизации является </span><span style="color: #000000;"><em>событие</em></span><span style="color: #000000;">, или объект события (event object). Он используется для блокирования доступа к ресурсу до тех пор, пока какой-нибудь другой процесс или поток не заявит о том, что данный ресурс может быть использован.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">При помощи объекта синхронизации четвертого типа можно запрещать выполнения определенных участков кода программы несколькими потоками одновременно. Для этого данные участки должны быть объявлены как </span><span style="color: #000000;"><em>критическая секция (critical section)</em></span><span style="color: #000000;">. Когда в эту секцию входит один поток, другим потокам запрещается входить в нее до тех пор, пока первый поток не выйдет из данной секции. Критические секции, в отличие от других типов объектов синхронизации, применяются только для синхронизации потоков внутри одного процесса. Другие же типы объектов могут быть использованы для синхронизации потоков внутри процесса или для синхронизации процессов.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все классы MFC, реализующие механизм синхронизации, можно разделить на две категории.
</p>
<ul>
	<li>
	классы для синхронизации работы потоков;
	</li>
	<li>
	классы для контроля доступа к объекту синхронизации.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для синхронизации работы потоков используются следующие классы:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>CCriticalSection</em> - реализует критическую секцию;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>CEvent</em> - реализует объект события;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>CMutex</em> - реализует исключающий семафор;
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<em>CSemaphore</em> - реализует классический семафор.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для контроля доступа используются следующие классы: <em>CSingleLock</em> и <em>CMultiLock</em>. Они контролируют доступ к объекту синхронизации и содержат методы, используемые для предоставления и освобождения таких объектов. Класс CSingleLock управляет доступом к одному объекту синхронизации, а класс CMultiLock - к нескольким объектам.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда какой-либо объект синхронизации создан, доступ к нему можно контролировать с помощью класса CSingleLock. Для этого необходимо сначала создать объект типа CSingleLock с помощью конструктора:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CSingleLock(CSyncObject* pObject, BOOL bInitialLock=FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Через первый параметр передается указатель на объект синхронизации, например семафор. Значение второго параметра определяет, должен ли конструктор попытаться получить доступ к данному объекту. Если этот параметр не равен нулю, то доступ будет получен, в противном случае попыток получить доступ не будет. Если доступ получен, то поток, создавший объект класса CSingleLock, будет остановлен до освобождения соответствующего объекта синхронизации методом Unlock класса CSingleLock.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда объект типа CSingleLock создан, доступ к объекту, на который указывал параметр pObject, может контролироваться с помощью двух функций: Lock и Unlock класса CSingleLock.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод Lock() предназначен для получения доступа к объекту синхронизации. Если объект синхронизации в данный момент не захвачен другим потоком, функция Lock() передаст этот объект во владение данному потоку. Теперь поток может получить доступ к защищенным данным. Завершив обработку данных, поток должен вызвать метод Unlock(), который освобождает объект синхронизации, давая возможность другим потокам использовать ресурс.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При работе с классом CSingleLock общая процедура управления доступом к ресурсу такова:
</p>
<ul>
	<li>
	создать объект синхронизации (например, семафор), который будет использоваться для управления доступом к ресурсу; 
	</li>
	<li>
	с помощью созданного объекта синхронизации создать объект типа CSingleLock; 
	</li>
	<li>
	для получения доступа к ресурсу вызвать метод Lock(); 
	</li>
	<li>
	выполнить обращение к ресурсу; 
	</li>
	<li>
	вызвать метод Unlock(), чтобы освободить ресурс.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Важно уметь определять тот класс, который нужен для работы. Если приложение должно ждать некоторого события перед получением доступа, то нам нужен CEvent. Если к объекту будут иметь доступ несколько потоков из одного приложения, и нужны ограничения по количеству потоков, тогда нам нужен CSemaphore. Если к объекту будет иметь доступ только один поток и из одного приложения, то CCriticalSection. Если к объекту будет иметь доступ только один поток, но из разных приложений, то CMutex.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим, как создавать и использовать объекты синхронизации.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>15.3.2. Работа с семафорами</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим, как обеспечить синхронизацию потоков на основе семафоров. Прежде всего, необходимо создать семафор путем объявления объекта типа CSemaphore. Конструктор этого класса имеет следующий вид:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CSemaphore(LONG lInitialCount=1,LONG lMaxCount=1,</strong>
</p>
<p style="margin-right: 0in;">
	<strong> LPCTSTR pstrName=NULL,</strong>
</p>
<p style="margin-right: 0in;">
	<strong> LPSECURITY_ATTRIBUTES lpsaAttributes=NULL);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Семафоры имеют счетчик, указывающий количество задач, которым в настоящее время предоставлен доступ к ресурсу. Если значение счетчика равно нулю, то последующий доступ к ресурсу запрещается до тех пор, пока одна из задач не освободит семафор. Начальное значение счетчика семафора указывается в первом параметре конструктора. Обычно начальное значение задается равным единице, чтобы хотя бы один поток мог получить семафор. Допустимое число потоков, которым будет разрешен одновременный доступ, указывается во втором параметре. Если это значение равно единице, то семафор будет исключающим.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Третий параметр конструктора указывает на строку, содержащую имя объекта семафора. Поименованные семафоры становятся системными объектами и могут использоваться другими процессами. Когда два процесса вызывают семафоры с одинаковыми именами, обоим процессам будет предоставлен один и тот же семафор - это позволяет синхронизировать процессы. Вместо имени строки можно указать NULL - в этом случае семафор будет локализован внутри одного процесса. Последний параметр конструктора является указателем на набор атрибутов прав доступа, связанный с семафором. Если этот параметр равен NULL, то семафор наследует данный набор у вызвавшего его потока.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Модифицируйте приложение Example, добавив в него функции, использующие семафор. Для этого добавьте в меню Thread пункт Semaphore. Функция OnSemaphore(), реализующая этот пункт, создает три потока, которые используют один и тот же ресурс. Одновременно доступ к ресурсу могут получить только два потока. Третий должен ждать, когда ресурс освободится.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создавая семафор, вы передаете ему начальное и максимальное значения счетчика, как показано ниже:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CSemaphore Semaphore(2, 2);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Поскольку в этом примере семафоры будут использоваться для создания потокового класса, логично будет объявить указатель на объект класса CSemaphore в качестве переменной-члена потокового класса, а затем динамически создать объект класса CSemaphore в конструкторе потокового класса, как показано ниже:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>semaphore = new
CSemaphore(2, 2);
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь, когда объект семафора создан, можно начинать отсчет количества обращений к ресурсу. Для реализации процесса подсчета, прежде всего, необходимо создать экземпляр класса CSingleLock, передав ему указатель на семафор, который вы хотите использовать:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CSingleLock singleLock(semaphore);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Затем для уменьшения значения счетчика семафора вызывается метод Lock() класса CSingleLock:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>singleLock.Lock();
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На данный момент объект семафора выполнил уменьшение значения своего внутреннего счетчика. Это новое значение сохраняется до тех пор, пока объект семафора не будет освобожден посредством вызова его метода Unlock():
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>singleLock.Unlock();
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если сразу после освобождения семафора происходит выход объекта класса CSingleLock из области видимости (завершение функции, в которой он объявлен), метод Unlock() для объекта singleLock можно не вызывать. Деструктор объекта singleLock, вызванный при завершении работы функции, выполнит Unlock() автоматически.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Доступ к разделяемому ресурсу осуществим в классе CSomeResource. Класс имеет единственную переменную-член, являющуюся указателем на объект класса CSemaphore. Кроме того, в классе определены конструктор и деструктор, а также метод UseResource(), в котором непосредственно используется семафор.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Файл
заголовка SomeResourcе.h:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>#include "afxmt.h"
</p>
<p><br>
</p>
<p>class CSomeResource
</p>
<p>{
</p>
<p>private:
</p>
<p style="margin-right: 0in;">
	<strong> CSemaphore* semaphore;</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>public:</strong>
</p>
<p style="margin-right: 0in;">
	<strong> CSomeResource(); </strong>
</p>
<p style="margin-right: 0in;">
	<strong> ~CSomeResource();</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>void UseResource();</strong>
</p>
<p style="margin-right: 0in;">
	<strong>};</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Файл реализации класса SomeResourcе.cpp:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>#include "stdafx.h"
</p>
<p>#include "SomeResource.h"
</p>
<p><br>
</p>
<p style="margin-right: 0in;">
	<strong>CSomeResource::CSomeResource()</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> semaphore = new CSemaphore(2,2);</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CSomeResource::~CSomeResource()</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> delete semaphore; </strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>void CSomeResource::UseResource()</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> CSingleLock singleLock(semaphore);</strong>
</p>
<p style="margin-right: 0in;">
	<strong> singleLock.Lock();</strong>
</p>
<p style="margin-right: 0in;">
	<strong> Sleep(5000);</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В тексте файла, реализующего класс CSomeResource, можно видеть, что объект класса CSemaphore динамически создается в конструкторе класса CSomeResource и уничтожается в его деструкторе. Метод UseResource() эмулирует доступ к ресурсу. Он захватывает семафор, затем ожидает пять секунд и вновь его освобождает.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Модифицируйте приложение Example следующим образом.
</p>
<ol>
	<li>
	Добавьте в меню Thread пункт Semaphore и функцию OnSemaphore() в
	класс CExampleView.
	</li>
	<li>
	Добавьте в проект два новых пустых файла SomeResource.h и SomeResourcе.срр, пользуясь меню File-&gt;New. Выберите
	вкладку Files, типы
	файлов C/C++ Header File и C++ Source File.
	</li>
	<li>
	Добавьте в эти пустые файлы тексты программ, приведенные выше.
	</li>
	<li>
	Добавьте в файл ExampleView.cpp после директивы 
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>#include "ExampleView.h"
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	директиву
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p>#include "SomeResource.h"
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	Включите в начало файла, сразу же после директивы #endif, строку
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>CSomeResource someResource;</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	Добавьте в файл ExampleView.cpp перед функцией CExampleView::OnSemaphore() три следующие функции:
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT ThreadProc1(LPVOID pParam)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> someResource.UseResource();</strong>
</p>
<p style="margin-right: 0in;">
	<strong> AfxMessageBox("Thread1 had access.");</strong>
</p>
<p style="margin-right: 0in;">
	<strong> return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT ThreadProc2(LPVOID pParam)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> someResource.UseResource();</strong>
</p>
<p style="margin-right: 0in;">
	<strong> AfxMessageBox("Thread2 had access.");</strong>
</p>
<p style="margin-right: 0in;">
	<strong> return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p><br>
</p>
<p style="margin-right: 0in;">
	<strong>UINT ThreadProc3(LPVOID pParam)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong> someResource.UseResource();</strong>
</p>
<p style="margin-right: 0in;">
	<strong> AfxMessageBox("Thread3 had access.");</strong>
</p>
<p style="margin-right: 0in;">
	<strong> return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	Добавьте в функцию CExampleView::OnSemaphore() следующие строки:
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>AfxBeginThread(ThreadProc1, this); </strong>
</p>
<p style="margin-right: 0in;">
	<strong>AfxBeginThread(ThreadProc2, this); </strong>
</p>
<p style="margin-right: 0in;">
	<strong>AfxBeginThread(ThreadProc3, this);</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь откомпилируйте новую версию приложения Example и запустите ее на выполнение. В раскрывшемся главном окне приложения выберите команду Threads-&gt;Semaphore. Приблизительно через пять секунд появятся два окна сообщений, информирующие о том, что первый и второй потоки получили доступ к защищенному ресурсу. Еще через пять секунд появится третье окно сообщений, в котором говорится о том, что третий поток также получил доступ к ресурсу. Третьему потоку потребовалось на пять секунд больше по той причине, что первые два потока первыми захватили контроль над ресурсом. Семафор в этой программе организован таким образом, что разрешает доступ к ресурсу только двум потокам одновременно. Таким образом, третий поток вынужден был ожидать, пока первый или второй поток освободит защищенный ресурс.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc16"></a> 
<h1>16. Создание и использование динамически связываемых библиотек (DLL).</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	С самого рождения (или чуть позже) операционная система Windows использовала библиотеки динамической компоновки DLL (Dynamic Link Library), в которых содержались реализации наиболее часто применяемых функций. Практически невозможно создать приложение Windows, в котором не использовались бы библиотеки DLL. В DLL содержатся все функции Win32 API и несчетное количество других функций операционных систем Win32
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вообще говоря, DLL — это просто наборы функций, собранные в библиотеки. Однако, в отличие от своих статических родственников (файлов.lib), библиотеки DLL не присоединены непосредственно к выполняемым файлам с помощью редактора связей.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В выполняемый файл занесена только информация об их местонахождении. В момент выполнения программы загружается вся библиотека целиком. Благодаря этому разные процессы могут пользоваться совместно одними и теми же библиотеками, находящимися в памяти. Такой подход позволяет сократить объем памяти, необходимый для нескольких приложений, использующих много общих библиотек, а также контролировать размеры ЕХЕ-файлов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Однако если библиотека используется только одним приложением, лучше сделать ее обычной, статической. Конечно, если входящие в ее состав функции будут использоваться только в одной программе, можно просто вставить в нее соответствующий файл с исходным текстом.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чаще всего проект подключается к DLL статически, или неявно, на этапе компоновки. Загрузкой DLL при выполнении программы управляет операционная система. Однако DLL можно загрузить и явно, или динамически, в ходе работы приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>16.1. Статическое подключение DLL (неявное подключение)</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При статическом подключении DLL имя соответствующего ей .lib-файла определяется среди прочих параметров редактора связей в командной строке или на вкладке “Link” диалогового окна “Project Settings” среды Developer Studio.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Однако .lib-файл, используемый при неявном подключении DLL, — это не обычная статическая библиотека. Такие .lib-файлы называются библиотеками импортирования (import libraries).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В них содержится не сам код библиотеки, а только ссылки на все функции, экспортируемые из файла DLL, в котором все и хранится. В результате библиотеки импортирования, как правило, имеют меньший размер, чем DLL-файлы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При загрузке неявно подключаемой DLL приложение пытается найти все файлы DLL, неявно подключенные к приложению, и поместить их в область оперативной памяти, занимаемую данным процессом. Поиск файлов DLL операционной системой осуществляется в следующей последовательности.
</p>
<ul>
	<li>
	Каталог, в котором находится ЕХЕ-файл. 
	</li>
	<li>
	Текущий каталог процесса. 
	</li>
	<li>
	Системный каталог Windows\System.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если библиотека DLL не обнаружена, приложение выводит диалоговое окно с сообщением о ее отсутствии и путях, по которым осуществлялся поиск. Затем процесс отключается.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если нужная библиотека найдена, она помещается в оперативную память процесса, где и остается до его окончания. Теперь приложение может обращаться к функциям, содержащимся в DLL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>16.2. Динамическая загрузка и выгрузка DLL</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вместо того чтобы Windows выполняла динамическое связывание с DLL при первой загрузке приложения в оперативную память, можно связать программу с модулем библиотеки во время выполнения программы (при таком способе в процессе создания приложения не нужно использовать библиотеку импорта).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В частности, можно определить, какая из библиотек DLL доступна пользователю, или разрешить пользователю выбрать, какая из библиотек будет загружаться. Таким образом, можно использовать разные DLL, в которых реализованы одни и те же функции, выполняющие различные действия.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, приложение, предназначенное для независимой передачи данных, сможет в ходе выполнения принять решение, загружать ли DLL для протокола TCP/IP или для другого протокола.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Первое, что необходимо сделать при динамической загрузке DLL, - это поместить модуль библиотеки в память процесса. Данная операция выполняется с помощью функции ::LoadLibrary, имеющей единственный аргумент – имя загружаемого модуля.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стандартным расширением файла библиотеки Windows считает .dll, если не указать другое расширение. Если в имени файла указан и путь, то только он будет использоваться для поиска файла. В противном случае Windows будет искать файл по той же схеме, что и в случае неявно подключенных DLL, начиная с каталога, из которого загружается exe-файл, и продолжая в соответствии со значением PATH.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда Windows обнаружит файл, его полный путь будет сравнен с путем библиотек DLL, уже загруженных данным процессом. Если обнаружится тождество, вместо загрузки копии приложения возвращается дескриптор уже подключенной библиотеки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если файл обнаружен, и библиотека успешно загрузилась, функция ::LoadLibrary возвращает ее дескриптор, который используется для доступа к функциям библиотеки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После завершения работы с библиотекой динамической компоновки, ее можно выгрузить из памяти процесса с помощью функции ::FreeLibrary:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Файл библиотеки также несколько отличается от обычных файлов на языке C++ для Windows. В нем вместо функции WinMain имеется функция DllMain.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После трансляции и компоновки файлов библиотеки появляются два файла (например, для библиотеки MyDLL) – MyDLL.dll (сама динамически подключаемая библиотека) и MyDLL.lib (ее библиотека импорта).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При неявном подключения DLL следует в исходный текст помимо вызова функции MyFunction из DLL-библиотеки включить и заголовочный файл этой библиотеки MyDLL.h.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Также необходимо на этапе компоновки приложения подключить к нему библиотеку импорта MyDLL.lib (процесс неявного подключения DLL к исполняемому модулю).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чрезвычайно важно понимать, что сам код функции MyFunction не включается в файл приложения MyApp.exe. Вместо этого там просто имеется ссылка на файл MyDLL.dll и ссылка на функцию MyFunction, которая находится в этом файле. Файл MyApp.exe требует запуска файла MyDLL.dll.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>16.3. Создание DLL</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим способы их создания DLL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При разработке приложений функции, к которым обращается несколько процессов, желательно размещать в DLL. Это позволяет более рационально использовать память в Windows.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Проще всего создать новый проект DLL с помощью мастера AppWizard, который автоматически выполняет многие операции. Для простых DLL необходимо выбрать тип проекта Win32 Dynamic-Link Library.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Новому проекту будут присвоены все необходимые параметры для создания библиотеки DLL. Файлы исходных текстов придется добавлять к проекту вручную.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если же планируется в полной мере использовать функциональные возможности MFC, такие как документы и представления, лучше выбрать тип проекта MFC AppWizard (dll).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В этом случае, помимо присвоения проекту параметров для подключения динамических библиотек, мастер проделает некоторую дополнительную работу. В проект будут добавлены необходимые ссылки на библиотеки MFC и файлы исходных текстов, содержащие описание и реализацию в библиотеке DLL объекта класса приложения, производного от CWinApp.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство библиотек DLL — просто коллекции практически независимых друг от друга функций, экспортируемых в приложения и используемых в них.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Кроме функций, предназначенных для экспортирования, в каждой библиотеке DLL есть функция DllMain. Эта функция предназначена для инициализации и очистки DLL
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функция DllMain вызывается в нескольких случаях: при первой загрузке библиотеки DLL процессом, каждый раз при создании процессом нового потока, при уничтожении потока (кроме первого), по окончании работы процесса с DLL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если не написать собственной функции DllMain, компилятор подключит стандартную версию, которая просто возвращает TRUE.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>16.4. Экспортирование функций из DLL</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы приложение могло обращаться к функциям динамической библиотеки, каждая из них должна занимать строку в таблице экспортируемых функций DLL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Есть два способа занести функцию в эту таблицу на этапе компиляции.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Можно экспортировать функцию из DLL, поставив в начале ее описания модификатор __declspec (dllexport)
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Метод __declspec применяется не так часто, как второй метод, работающий с файлами определения модуля (.def), и позволяет лучше управлять процессом экспортирования.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как станет ясно из следующего простого примера, .def-файл содержит имя и описание библиотеки, а также список экспортируемых функций:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	MyDLL.def
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	LIBRARY “MyDLL”
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	DESCRIPTION ‘MyDLL – пример DLL-библиотеки’
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	EXPORTS
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	MyFunction @1
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В строке экспорта функции можно указать ее порядковый номер, поставив перед ним символ @. Этот номер будет затем использоваться при обращении к GetProcAddress.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На самом деле компилятор присваивает порядковые номера всем экспортируемым объектам. Однако способ, которым он это делает, отчасти непредсказуем, если не присвоить эти номера явно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В строке экспорта можно использовать параметр NONAME. Он запрещает компилятору включать имя функции в таблицу экспортирования DLL:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	MyFunction @1 NONAME
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Иногда это позволяет сэкономить много места в файле DLL. Приложения, использующие библиотеку импортирования для неявного подключения DLL, не “заметят” разницы, поскольку при неявном подключении порядковые номера используются автоматически. Приложениям, загружающим библиотеки DLL динамически, потребуется передавать в GetProcAddress порядковый номер, а не имя функции.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>16.5. Создание и использование динамически связываемых библиотек</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим пример создания библиотеки DLL, содержащей системную функцию, возвращающую размер свободного дискового пространства.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для определения экспортируемой функции используется следующий синтаксис:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для переменных:
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>__declspec(dllexport) &lt;тип данных&gt; &lt;идентификатор переменной&gt;;</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для функций:
</p>
<p style="margin-right: 0in; font-weight: normal;">
	<strong>__declspec(dllexport) &lt;возвращаемый тип&gt; &lt;имя функции&gt; ([списокАргументов]); </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Импортирование функций организуется практически так же — просто замените ключевое слово, например <span style="color: #000000;"><strong>__</strong></span><span style="color: #000000;"><strong>declspec</strong></span><span style="color: #000000;"><strong>(</strong></span><span style="color: #000000;"><strong>dllexport</strong></span><span style="color: #000000;"><strong>),</strong></span> словом <span style="color: #000000;"><strong>__</strong></span><span style="color: #000000;"><strong>declspec</strong></span><span style="color: #000000;"><strong>(</strong></span><span style="color: #000000;"><strong>dllimport</strong></span><span style="color: #000000;"><strong>).</strong></span> Используя реальные функцию и переменную для демонстрации синтаксиса, получим следующее:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>_declspec(dllimport) int referenceCount;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>_declspec(dllimport) void DiskFree(lpStr Drivepath );</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Ключевому слову <span style="color: #000000;"><strong>__</strong></span><span style="color: #000000;"><strong>declspec</strong></span> предшествуют два знака подчеркивания.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы упростить описание DLL-модулей, Microsoft использует файл заголовка и макросы препроцессора. Эта методика всего лишь требует, чтобы вы использовали уникальную лексему препроцессора — проще всего для этого использовать имя файла заголовка — и написали макрос, который будет замещать эту лексему корректными операторами импорта и экспорта. Предположим, что имеется файл заголовка с именем DISKFREE.H, тогда макрос препроцессора в нем может выглядеть так.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>//DISKFREE.H содержит простую функцию, возвращающую размер </strong>
</p>
<p style="margin-right: 0in;">
	<strong>// свободного дискового пространства. </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#ifndef __DISKFREE_H </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define __DISKFREE_H</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#ifndef __DISKFREE__</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define DISKFREELIB __declspec(dllimport)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#else</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define DISKFREELIB __declspec(dllexport)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#endif</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//Макрос используется для выбора описания импорта или экспорта.</strong>
</p>
<p style="margin-right: 0in;">
	<strong>DISKFREELIB unsigned long DiskFree( unsigned int drive );</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//Например, 0 = A:, 1=B:, 2 = С:</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#endif</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Подключив файл заголовка, вы даете возможность препроцессору определить, импортируется или экспортируется функция DiskFree. Теперь вы можете предоставить такой файл заголовка как разработчику, так и пользователю модуля DLL, что решает много проблем при сопровождении программ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>16.5.1. Создание модуля DLL DiskFree</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Утилита DiskFree позволяет легко определять размер свободного пространства на указанном диске. Ее работа основана на использовании функции GetDiskFreeSpace(), находящейся в модуле Kernel32.Dll.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для того чтобы создать не использующий MFC модуль DLL, выберите тип проекта Win32Dll. Назовите проект DiskFree и щелкните на кнопке ОК. На экране появится окно мастера AppWizard, как показано на рис. 16.1. Выберите переключатель An empty DLL project, и в результате будет создан проект, пока еще не имеющий собственных файлов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_5816d975.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рис. 16.1. Создание проекта модуля DLL, не использующего MFC.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Добавьте в проект файл заголовка DiskFree.h и поместите в него текст:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>#ifndef __DISKFREE_H </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define __DISKFREE_H</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#ifndef __DISKFREE__</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define __DISKFREELIB__ __declspec(dllimport)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#else</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define __DISKFREELIB__ __declspec(dllexport)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#endif</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//Возвращает размер свободного дискового пространства на диске,</strong>
</p>
<p style="margin-right: 0in;">
	<strong>//заданном его номером (например, 0=A:, 1=B:, 2=C:)</strong>
</p>
<p style="margin-right: 0in;">
	<strong>__DISKFREELIB__ unsigned long DiskFree( unsigned int drive );</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#endif</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Добавьте в проект файл текста программы DiskFree.cpp и поместите в него текст:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>#include &lt;afx.h&gt; </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#include &lt;winbase.h&gt; //Содержит объявление функции GetDiskFreeSpace(),</strong>
</p>
<p style="margin-right: 0in;">
	<strong>// находящейся в модуле kernel32.dll. </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define __DISKFREE__ //Определяет лексему перед подключением //библиотеки. </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#include "diskfree.h"</strong>
</p>
<p style="margin-right: 0in;">
	<strong>// Возвращает размер свободного дискового пространства на диске, </strong>
</p>
<p style="margin-right: 0in;">
	<strong>// заданном его номером (например, 0 = А:, 1= В:, 2 = С:). </strong>
</p>
<p style="margin-right: 0in;">
	<strong>__DISKFREELIB__ unsigned long DiskFree( unsigned int drive )</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>unsigned long bytesPerSector, sectorsPerCluster,</strong>
</p>
<p style="margin-right: 0in;">
	<strong>freeClusters, totalClusters;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>char DrivePath[4] = { char (drive + 65), ‘:’, ‘\\’, ‘\0’ };</strong>
</p>
<p style="margin-right: 0in;">
	<strong>if( GetDiskFreeSpace( DrivePath, §orsPerCluster,</strong>
</p>
<p style="margin-right: 0in;">
	<strong>&bytesPerSector, &freeClusters, &totalClusters )) {</strong>
</p>
<p style="margin-right: 0in;">
	<strong>return sectorsPerCluster * bytesPerSector * freeClusters; )</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<strong>else</strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь можно оттранслировать модуль DLL. При компиляции модуля DiskFree использовались установки по умолчанию. Это означает, что модуль DLLMain будет применяться неявно (его добавляет компилятор) и что используется режим неявной загрузки, причем Windows будет автоматически управлять загрузкой и выгрузкой этой библиотеки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h3>16.5.2. Использование модуля DLL</h3>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство модулей DLL загружается неявно, и их загрузкой и выгрузкой управляет Windows. Процедура поиска библиотек, загружаемых подобным образом, аналогична процедуре поиска выполняемых файлов — сначала поиск происходит в папке, из которой было загружено использующее их приложение, затем выполняется поиск в текущей папке, затем — в папке Windows\System, затем — в папке Windows и, наконец— в каждой из папок, указанных в переменой PATH.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обычно при установке приложения модули DLL принято помещать в папку Windows или Windows\System. Но в процессе разработки приложения в качестве временного хранилища для этой цели можно использовать папку выполняемых файлов проекта. Однако нужно следить за тем, чтобы в итоге в разных папках, включая папки Windows, Windows\System и папку проекта, не оказались разные версии одного и того же модуля DLL.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Неявная загрузка и использование модуля DLL осуществляются так же просто, как и работа с обычными функциями. При компиляции модуля DLL транслятор Microsoft Visual C++ создает файл с расширением .LIВ. (Таким образом, помимо файла DISKFREE.DLL, существует еще и файл DISKFREE.LIB, созданный компилятором.) Файл библиотеки (.LIB) используется для разрешения адресов загрузки в модуле DLL и содержит полное имя динамически подключаемой библиотеки, тогда как файл заголовка содержит его описание.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Все, что вам необходимо сделать, — это подключить файл заголовка к исходному файлу, использующему функции из модуля DLL, и указать имя файла библиотеки (.LIB) в поле Object/library modules на вкладке Link диалогового окна Project Settings, доступ к которому можно получить, выбрав команду Project\Settings.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для проверки работы модуля DLL DiskFree создайте консольное приложение с именем TestDiskFree и добавьте в него файл TestDiskFree.cpp исходного текста на C++. Внесите в файл текст программы, представленный ниже:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="margin-right: 0in;">
	<strong>#include &lt;afx.h&gt;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#include &lt;iostream.h&gt;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>#include "diskfree. h" </strong>
</p>
<p style="margin-right: 0in;">
	<strong>#define CodeTrace(arg) \</strong>
</p>
<p style="margin-right: 0in;">
	<strong>cout &lt;&lt; #arg &lt;&lt; endl;\</strong>
</p>
<p style="margin-right: 0in;">
	<strong>arg </strong>
</p>
<p style="margin-right: 0in;">
	<strong>int main() </strong>
</p>
<p style="margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="margin-right: 0in;">
	<strong>CodeTrace( cout &lt;&lt; DiskFree(2) &lt;&lt; endl );</strong>
</p>
<p style="margin-right: 0in;">
	<strong>return 0;</strong>
</p>
<p style="margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Скопируйте
в
папку
этого
проекта
файл DiskFree.h и
добавьте
его
к
проекту, выбрав
команду Project\Add To Project\Files, a затем
выбрав
файл DiskFree.h. Скопируйте
в
папку TestDiskFree файлы DiskFree.Dll и DiskFree.Lib. (Они
находятся
в
папке DiskFree\Debug.) Выполните все указанные выше изменения в установках проекта и скомпилируйте его.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эта программа неявно загружает модуль DLL посредством подключения файла diskfree.h, а затем использует его в работе. При выполнении программы макрос CodeTrace просто печатает оператор программы перед его выполнением. Фактически вся работа приложения состоит в вызове функции DiskFree() с целью определения имеющегося свободного дискового пространства на диске 2. Диск 0— это А:, диск 1 — В: и диск 2— С:. Результаты работы скомпилированной и запущенной программы должны быть подобны тому, что представлено ниже.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br><br>
</p>
<p style="margin-right: 0in;">
	<strong>Cout &lt;&lt; DiskFree(2) &lt;&lt; endl</strong>
</p>
<p style="margin-right: 0in;">
	<strong>36258777</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Согласно программе TestDiskFree на диске С: компьютера, использованного для запуска этой программы, находится почти 37 Мбайт свободного дискового пространства.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc17"></a> 
<h1>17. Введение в технологии OLE и Active X. Основные понятия COM</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>17.1. Понятие составных документов</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Рассмотрим теорию и концепции технологии ActiveX, которая построена на основе <em>модели СОМ</em> (Component
Object
Model — модель многокомпонентных объектов). До недавнего времени технология, построенная на основе СОМ, носила название OLE (Object
Linking
and
Embedding— связывание и внедрение объектов), но теперь она обозначается термином ActiveX.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наличие Developer Studio и MFC делает использование технологии ActiveX намного проще, поскольку они выполняют большую часть черновой работы, оставляя ее невидимой для вас.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Windows всегда обеспечивала пользователям возможность одновременного запуска нескольких приложений. И с самого начала существования этой системы программисты хотели иметь на вооружении методы, с помощью которых запущенные приложения могли бы обмениваться информацией в процессе выполнения. Прекрасной новацией стал буфер обмена Clipboard, но пользователь все еще должен был выполнять вручную многие операции. Механизм DDE (Dynamic Data Exchange— динамический обмен данными) предоставил приложениям возможность обмена данными, но при этом сохранял некоторые серьезные ограничения. Затем появилась технология OLE1. Позднее ее сменила OLE2, с течением времени переименованная Microsoft просто в OLE, и, наконец, теперь она получила название ActiveX.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Технология ActiveX дает возможность пользователю и приложениям ориентироваться на работу с документами, и это, пожалуй, самое главное. Если пользователь решает подготовить годовой отчет с помощью приложений, поддерживающих ActiveX, он может сосредоточиться именно на отчете как таковом. Вероятно, часть этой работы будет выполнена в Word, a еще некоторая ее часть — в Excel, но для пользователя суть дела заключена не в приложениях. Подобная переориентация сейчас происходит во многих направлениях и вызвано это объектно-ориентированным образом мышления большинства программистов. Ныне кажется более естественным разделить работу между несколькими различными приложениями, способными взаимодействовать между собой, чем написать одно гигантское приложение на все случаи жизни.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если вы придерживаетесь документо-ориентированного подхода, вы почувствуете притягательную силу составных документов — файлов, созданных несколькими приложениями. Если ваш отчет нуждается в иллюстрациях, вы создаете их с помощью какой-либо графической программы, а затем, когда они будут готовы, помещаете их в текст. Если в годовой отчет необходимо включить таблицу, данные для которой уже введены в электронную таблицу, не следует заново вводить и упорядочивать их, используя средства табличной обработки текстового редактора, или даже импортировать их. Поместите их в текст отчета непосредственно как фрагмент электронной таблицы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создание составных документов возможно путем внедрения и связывания. При связывании в основном документе сохраняется лишь информация о расположении связанного файла. Связывание в документах целесообразно в том случае, если планируется использовать связываемый файл во многих документах. При этом изменения, вносимые в файл, будут автоматически отражаться во всех документах, с которыми он был связан. При внедрении создается копия объекта, которая и помещается в составной документ. Если в дальнейшем откорректировать исходный файл, изменения не будут отражены в составном документе.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Внедрение объектов в документ следует проводить в том случае, если вы планируете создать составной документ и в дальнейшем работать над ним, как над единым целым, не обращаясь более к файлам отдельных составляющих его частей. Любые выполненные в документе изменения не повлияют на остальные файлы на диске, в том числе и на те, копии которых были помещены в составной документ. Внедрение значительно увеличивает размеры файлов документов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы выполнить внедрение или связывание двух объектов, необходимо иметь контейнер и сервер. Контейнером является приложение, в документ которого объект внедряется или с документом которого объект связывается (в приведенных выше примерах это Word). Сервером является приложение, в котором объект был создан и которое может быть запущено, когда на объекте будет сделан двойной щелчок (в нашем случае это Excel).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сервер и контейнер дают пользователю возможность создавать именно такие документы, в которых он нуждается. Данная концепция является значительным шагом в направлении создания блочного программного обеспечения и утверждения документо-ориентированного подхода в работе. Но технология ActiveX включает в себя, помимо связывания и внедрения, еще и многое другое.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>17.2. Возможности AppWizard по созданию приложений ActiveX.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Настройка будущего проекта на работу с соствными документами осуществляется на этапе создания приложения с помощью ApplicationWizard – выбор уровня поддержки операции с составными документами «Compound Document Support». Окно MFC ApplicationWizard при этом будет выглядеть так, как показано на рисунке:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_13407b94.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На выбор предлагается пять вариантов поддержки:
</p>
<ul>
	<li>
	если не планируется создание OLE-приложения, выберите переключатель None (Никакой);
	</li>
	<li>
	если вы хотите, чтобы в приложении использовались связанные или внедренные объекты OLE (например, такие, как документы Word или рабочие листы Excel), выберите переключатель Container (Контейнер); 
	</li>
	<li>
	если планируется создание приложения, документы которого могли бы быть внедрены в другое приложение, но при этом само приложение не будет использоваться автономно, выберите переключатель Mini server (Мини-сервер);
	</li>
	<li>
	если ваше будущее приложение будет не только служить сервером для других приложений, но и сможет работать автономно, выберите переключатель Full server (Полный сервер); 
	</li>
	<li>
	если создаваемое приложение должно обладать способностью включать документы других приложений и само обслуживать их своими объектами, выбирайте переключатель Container/Full server(и контейнер, и сервер).
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если вы выбрали какой-либо из вариантов поддержки составных документов, то придется поддерживать и составные файлы (compound files). Составные файлы содержат один или более объектов ActiveX и сохраняются на диске в особом формате, так что один из объектов может быть заменен без переписи всего файла. Таким образом, удается сберечь довольно много времени. В диалоговом окне имеется группа переключателей: “Support for compound files” (если необходима поддержка составных файлов), “Active document server” и “Active document container”.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>17.3. Основные понятия COM</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Cоставные документы — лишь частный случай более общей проблемы: как разные программные компоненты должны предоставлять друг другу сервисы?
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для решения этой проблемы архитекторы OLE создали группу технологий, область применения которых гораздо шире составных документов. Основу OLE 2 составляет важнейшая из этих технологий — Модель многокомпонентных объектов (Component Object Model — СОМ).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Новые возможности многим обязаны СОМ, предоставившей общую парадигму взаимодействия программ любых типов: библиотек, приложений, системного программного обеспечения и др.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вот почему подход, предложенный СОМ, можно использовать при реализации практически любой программной технологии, и его применение дает немало существенных преимуществ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каким образом одна часть программного обеспечения должна получать доступ к сервисам, предоставляемым другой частью? Ответ зависит от того, что представляют собой эти части.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приложения, скомпонованные с библиотекой, могут пользоваться ее сервисами, вызывая функции из этой библиотеки. Приложение также может использовать сервисы другого приложения, являющегося совершенно отдельным процессом. В этом случае два таких локальных процесса взаимодействуют посредством некоего механизма связи, который обычно требует определения протокола между этими приложениями (набор сообщений, позволяющий одному приложению выдавать запросы, а другому соответствующим образом отвечать на них).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Еще пример – приложение, использующее сервисы операционной системы. Здесь приложение обычно выполняет системные вызовы, обрабатываемые операционной системой.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наконец, приложению могут понадобиться сервисы, предоставляемые программным обеспечением, выполняемым на другой машине, доступ к которой осуществляется по сети. Получить доступ к таким сервисам можно множеством способов, таких как обмен сообщениями с удаленным приложением или вызовы удаленных процедур.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В принципе проблема одна: одна часть программного обеспечения должна получить доступ к сервисам, предоставляемым другой частью. Но в каждом отдельном случае механизм доступа разный: вызовы локальных функций, передача сообщения средствами связи между процессами, системные вызовы (которые с точки зрения программиста выглядят практически так же, как и вызовы функций) или какая-то разновидность сетевых коммуникаций.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	СОМ определяет стандартный механизм, с помощью которого одна часть программного обеспечения предоставляет свои сервисы другой и который работает во всех описанных выше случаях.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Каждый такой объект поддерживает один или несколько интерфейсов, состоящих из методов. Метод — это функция или процедура, которая выполняет некоторое действие и может быть вызвана программным обеспечением, использующим данный объект (клиентом объекта). Методы, составляющие каждый из интерфейсов, обычно определенным образом взаимосвязаны.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Клиенты могут получить доступ к сервисам объекта СОМ только через вызовы методов интерфейсов объекта – у них нет непосредственного доступа к данным объекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Представим себе, например, корректор орфографии, реализованный в виде объекта СОМ. Такой объект может поддерживать интерфейс, включающий методы типа “НайтиСлово” (LookUpWord), “ДобавитьКСловарю” (AddToDictionary) и “УдалитьИзСловаря” (RemoveFromDictionary).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если позднее разработчик объекта СОМ захочет добавить к этому объекту поддержку словаря синонимов, то объекту потребуется еще один интерфейс, возможно, с единственным методом, вроде “НайтиСиноним” (ReturnSynonym). Методы каждого из интерфейсов сообща предоставляют связанные друг с другом сервисы: либо корректировку правописания, либо доступ к словарю синонимов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сам объект всегда реализуется внутри некоторого сервеpa. Сервер может быть либо динамически подключаемой библиотекой (DLL), подгружаемой во время работы приложения, либо отдельным самостоятельным процессом.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы вызывать методы интерфейса объекта СОМ, клиент должен получить указатель на этот интерфейс.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обычно СОМ-объект предоставляет свои сервисы посредством нескольких интерфейсов, и клиенту требуется отдельный указатель для каждого интерфейса, методы которого он намерен вызывать.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, клиенту нашего простого объекта СОМ понадобился бы один указатель интерфейса для вызова методов интерфейса корректора орфографии и другой — для вызова методов интерфейса словаря синонимов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Любой СОМ-объект — это экземпляр определенного класса. Объекты одного класса могут, например, реализовывать сервисы корректировки орфографии и словаря синонимов, тогда как объекты другого класса — представлять банковские счета.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обычно знать класс объекта необходимо для запуска экземпляра этого объекта, выполняемого с помощью библиотеки СОМ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эта библиотека COM присутствует на любой системе, поддерживающей СОМ, и имеет доступ к справочнику всех доступных на данной машине классов СОМ-объектов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Клиент может, например, вызвать функцию библиотеки СОМ, передав ей класс нужного ему СОМ-объекта и задав один из поддерживаемых объектом интерфейсов, указатель которого нужен клиенту в первую очередь. Эти сервисы реализованы библиотекой СОМ в виде обычных вызовов функций, а не через методы интерфейса СОМ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Затем библиотека СОМ запускает сервер, реализующий объекты данного класса. Кроме того, библиотека возвращает клиенту указатель требуемого интерфейса вновь созданного экземпляра объекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Далее клиент может запросить указатели на другие необходимые ему интерфейсы непосредственно у самого объекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Получив указатель на нужный ему интерфейс выполняющегося объекта, клиент может использовать сервисы объекта, просто вызывая методы этого интерфейса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В большинстве объектных технологий объект поддерживает только один интерфейс с одним набором методов. А вот СОМ-объекты могут — и почти всегда это делают — поддерживать более одного интерфейса.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, у С++-объекта лишь один интерфейс, включающий в себя все методы объекта. СОМ-объект с его несколькими интерфейсами может быть отлично реализован с несколькими объектами C++ – по одному на каждый интерфейс СОМ-объекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Компонентный подход СОМ находит различные применения в технологиях Microsoft для Интернета и WWW. Например, средство просмотра WWW фирмы Microsoft — Проводник по Интернету (Internet Explorer) — активно использует расширение технологии составных документов OLE — Документы ActiveX (ActiveX Documents). Благодаря этому расширению, пользователь может просматривать информацию разного типа в дополнение к обычным страницам HTML (Hypertext Markup Language — Язык разметки гипертекста).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc18"></a> 
<h1>18. Обзор технологий ActiveX и OLE.</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Широкий набор технологий OLE и ActiveX, разработаны с использованием СОМ. Ниже кратко представлены наиболее важные технологии СОМ.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>18.1. Автоматизация</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Электронные таблицы, текстовые процессоры и другие программы предоставляют все виды полезных возможностей. Чтобы реализовать эти возможности, приложения должны предоставлять свои сервисы не только человеку, но и программам — они должны быть программируемыми. Обеспечение программируемости и является целью автоматизации (Automation, первоначально называвшейся OLE-автоматизацией).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приложение можно сделать программируемым, обеспечив доступ к его сервисам через обычный СОМ-интерфейс. Однако так поступают редко. Вместо этого доступ к сервисам приложений осуществляется через диспинтерфейсы (IDispatch). Они очень похожи на интерфейсы (у них есть методы, клиенты осуществляют к ним доступ через указатель интерфейса и т. д.).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>18.2. Перманентность</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Объекты состоят из методов и данных, и многим объектам необходимо сохранять свои данные в течение периодов неактивности. Объекту нужно сделать свои данные перманентными (persistent), что обычно означает запись их на диск. СОМ-объекты достигают этого разными путями. Один из наиболее широко применяемых — структурированное хранилище (Structured Storage).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Традиционные файловые системы обеспечивают совместное использование приложениями одного дискового устройства без конфликтов между ними. Каждое приложение работает со своими собственными файлами и, может быть, даже с собственными подкаталогами, независимо от того, чем заняты в тот же момент другие приложения. Приложениям не требуется взаимодействовать друг с другом, чтобы сохранить свои данные, так как у каждого есть отдельная область для хранения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Так как СОМ обеспечивает совместную работу разных типов программ с помощью одной модели, то независимо разработанный СОМ-объект может стать частью чего-то, что пользователь будет считать одним приложением, и в то же время объекту по-прежнему будет необходимо хранить свои данные на диске отдельно, поэтому используется способ совместного использования одного файла несколькими СОМ-объектами. Такую возможность и предоставляет структурированное хранилище. Создавая, по сути дела, файловую систему внутри каждого файла, структурированное хранилище предоставляет каждому компоненту, составляющему некоторое приложение, собственный отдельный кусок пространства хранилища, собственные «файлы». С точки зрения пользователя файл только один. Однако с точки зрения приложения каждый компонент имеет собственную область для хранения данных, и все такие области находятся внутри одного дискового файла.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы реализовать все это, структурированное хранилище определяет два типа СОМ-объектов, каждый из которых поддерживает соответствующие интерфейсы. Эти объекты известны как хранилища (storage) и потоки (streams) и аналогичны соответственно каталогам и файлам обычной файловой системы. Файл структурированного хранилища может содержать данные многих СОМ-объектов, каждый из которых использует для сохранения своих данных собственное хранилище или поток. Точно так же, как обычная файловая система обеспечивает совместное использование диска несколькими приложениями, структурированное хранилище позволяет разным приложениям сообща использовать один файл.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Моникер (moniker, имя, кличка) сам по себе является СОМ-объектом, но весьма специфического назначения: любой моникер знает, как создать и инициализировать экземпляр другого объекта. Например, имея моникер для банковского счета, можно попросить его создать счет, инициализировать его и соединить с ним. Все детали, необходимые для выполнения этих действий, скрыты от клиента. Если он хочет работать посредством моникеров с двумя банковскими счетами, то ему потребуется два отдельных моникера, по одному для каждого объекта — счета. Вообще моникеры в среде СОМ не необходимы; они просто облегчают жизнь клиентов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>18.3. Единообразная передача данных и объекты с подключением</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Стандартный способ обмена информацией в мире СОМ — единообразная передача данных (Uniform Data Transfer). Как и любая технология OLE, использующие его приложения должны поддерживать определенные интерфейсы СОМ. Методы этих интерфейсов определяют стандартные способы для описания передаваемых данных, для указания их местоположения и собственно для их пересылки. Они даже определяют простой механизм, позволяющий одному приложению уведомить другое о том, что нужные последнему данные стали доступны.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Полезная в определенных ситуациях простая схема, определенная как единообразная передача данных для уведомления клиента о наличии интересующих его данных, не вполне достаточна. Именно для ликвидации этих недостатков на основе СОМ была разработана технология объектов с подключением (Connectable Objects). Обеспечивая более общий механизм обратной связи объекта с клиентом, объекты с подключением позволяют клиенту легко получать уведомления об интересующих его событиях.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>18.4. Составные документы</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В текстовые процессоры добавляются графические возможности, в электронные таблицы – средства построения диаграмм, и, кажется, все кончится созданием одного большого приложения для решения всех задач. Но в действительности цель как раз не в этом, а в интеграции разных приложений. Например, добавлять поддержку графики в текстовый процессор не потребуется, если внутри него можно будет использовать некоторое уже существующее графическое приложение. Пользователю должно представляться нечто такое, что выглядит как один документ, хотя на самом деле над разными частями такого документа совместно работают разные приложения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для решения этой проблемы предназначена технология OLE (ранее известная как документы OLE — OLE Documents). Поддерживая нужные СОМ-объекты, каждый с собственным набором интерфейсов, независимые приложения могут совместно работать, чтобы пользователь получил один составной документ. Все эти интерфейсы носят абсолютно общий характер — ни одно приложение не знает, что представляют собой другие. OLE поможет просто задействовать в случае необходимости существующее приложение электронной таблицы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Определенный OLE стандартный интерфейс обеспечивает взаимодействие между приложениями любых типов и любых производителей, а не только между электронными таблицами и текстовыми процессорами Microsoft.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При создании составного документа с помощью OLE одно из приложений всегда является контейнером. Как следует из названия, контейнер определяет самый общий документ, в котором содержится все остальное. Другие приложения - серверы - могут размещать свои документы внутри документа-контейнера.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	При использовании OLE документ сервера может быть либо связан, либо внедрен в документ контейнера. Связанный документ сервера хранится в отдельном файле, а в документе контейнера хранится лишь связь с этим файлом. (На самом деле связью является моникер.) Внедренный документ сервера хранится в том же файле, что и документ контейнера. (Два приложения при этом совместно используют общий файл с помощью структурированного хранилища).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>18.5. Управляющие элементы ActiveX</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Почему для включения в текстовый документ электронной таблицы необходимо использовать весь Excel? Если нужны только основные возможности электронных таблиц, то вероятно, можно обойтись меньшим, более быстрым и дешевым компонентом.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Многим программистам пришлась бы по вкусу возможность построить целое приложение по большей части из готовых компонентов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Именно подобное желание и привело к идее компонентного программного обеспечения — области, где СОМ способен на очень многое.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Повторно применимые компоненты можно создавать на основе исключительно самой СОМ, но для этой цели полезно определить и некоторые стандартные интерфейсы, и соглашения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Используя последние, можно создавать компоненты, единообразно выполняющие такие распространенные задачи, как обеспечение пользовательского интерфейса и посылка сообщений клиенту.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Эти стандарты и определяет спецификация управляющих элементов ActiveX (ActiveX Controls).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Управляющий элемент ActiveX — независимый программный компонент, выполняющий специфические задачи стандартным способом. Разработчики могут задействовать один или несколько таких элементов в приложении, чтобы получить преимущества функциональных возможностей существующего программного обеспечения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Первоначально управляющие элементы ActiveX были известны под названием управляющие элементы OLE или ОСХ. Microsoft изменила название, чтобы отразить некоторые новые возможности, сделавшие эти элементы более подходящими для Интернета и WWW.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, управляющий элемент ActiveX может хранить свои данные на странице где-то в WWW либо может быть выкачан с сервера WWW и затем запущен на машине клиента. И контейнер, в котором работает управляющий элемент, не обязан быть средой программирования — вместо этого он может быть средством просмотра WWW.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Управляющие элементы ActiveX — не отдельные приложения. Напротив, они являются серверами, которые подключаются к контейнеру элементов. Как обычно, взаимодействие между управляющим элементом и его контейнером определяется различными интерфейсами, поддерживаемыми СОМ-объектами.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Фактически управляющие элементы ActiveX используют многие другие технологии OLE и ActiveX. Например, управляющие элементы обычно поддерживают интерфейсы для внедрения и зачастую предоставляют доступ к своим методам через диспинтерфейсы Автоматизации.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc19"></a> 
<h1>19. Использование элементов Active X для разработки интерфейса приложения</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Одна из главных целей СОМ — обеспечить производство компонентных программ, т.е. приложений, которые собираются из готовых элементов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство действительно полезных компонентов достаточно сложны. Для облегчения разработки компонентов необходимо определить стандартный способ отображения компонентами собственного пользовательского интерфейса
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Компонентам может потребоваться и механизм для посылки событий своим клиентам или механизм, позволяющий клиенту читать и изменять свойства компонента. Подобные стандарты значительно облегчат жизнь и программному обеспечению, использующему компоненты.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Определение стандартов для программных компонентов и является задачей спецификации управляющих элементов ActiveX (ActiveX Controls).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Спецификация управляющих элементов ActiveX определяет и правила создания контейнеров управляющих элементов (control containers) — клиентских программ, знающих как работать с этими элементами. Эти правила рассматриваются с трех точек зрения: конечного пользователя, разработчика приложения, создателя управляющего элемента.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>19.1. Точка зрения конечного пользователя</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обычно конечные пользователи не подозревают о том, что они работают с управляющим элементом. Вместо этого они видят графический пользовательский интерфейс: кнопки, которые можно нажимать, ползунки, которые можно двигать, поля, куда можно вводить текст, и т.д.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство современных операционных систем позволяют приложениям представить подобный интерфейс. То, что пользователь видит единым целым, на самом деле является контейнером с управляющими элементами ActiveX.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Контейнер управляющих элементов подобен контейнеру составных документов OLE, но поддерживает несколько дополнительных интерфейсов для работы с управляющими элементами ActiveX. Каждый управляющий элемент подключен к контейнеру и обычно представляет свой собственный пользовательский интерфейс как внедренный объект, поддерживающий активизацию "на месте".
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Например, кнопка на экране может быть пользовательским интерфейсом некоего управляющего элемента ActiveX. Щелкая ее, и взаимодействуя с исполняющимся в результате кодом, пользователь фактически активизирует элемент управления ActiveX.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	To, что пользователь видит как одно приложение, представляющее один интегрированный пользовательский интерфейс, на самом деле — контейнер управляющих элементов, полный различных дискретных управляющих элементов ActiveX, каждый из которых выполняет часть общей работы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>19.2. Точка зрения разработчика приложения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Построение приложения из управляющих элементов заметно отличается от создания приложения с нуля. Чтобы при создании приложения использовать управляющие элементы, разработчик вначале должен принять решение относительно их контейнера.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В числе популярных инструментов создания контейнеров Microsoft Visual Basic и Developer Studio и множество других средств третьих фирм. Кроме того, в качестве контейнера можно использовать средство просмотра WWW, при этом управляющий элемент должен быть встроен в HTML-файл.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Затем следует решить, какие управляющие элементы ActiveX включить для обеспечения предполагаемых функциональных возможностей. В состав Visual Basic и Developer Studio входит множество управляющих элементов, так что программист без труда найдет нужный. Если нет, то проблему решит большой и быстро растущий рынок управляющих элементов ActiveX третьих фирм, где представлена продукция сотен компаний.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если подходящего управляющего элемента нет ни в Visual Basic, ни на рынке третьих фирм, его можно разработать самостоятельно. Для этого необходима совершенно иная квалификация, чем для создания приложения, использующего управляющий элемент.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для создания приложения разработчик, выбрав управляющий элемент, задает его местоположение и размеры на бланке (или шаблоне диалогового окна). Практически каждый управляющий элемент ActiveX определяет некоторый набор свойств (property).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Задавая значения этих свойств, разработчик может изменить цвет управляющего элемента, цвет и толщину рамки вокруг него и т.д.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В дополнение к свойствам управляющий элемент обычно определяет набор событий (events). Посылка и прием этих событий осуществляется с помощью механизма на основе СОМ, но как именно это происходит, для разработчика, собирающего данное приложение, значения не имеет.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Обычно контейнеры управляющих элементов позволяют программисту задать действие (в виде кода функции или метода), которое должно быть выполнено в ответ на сообщение, полученное от управляющего элемента.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Кроме набора свойств и набора событий, у типичного управляющего элемента есть и методы. У клиентов элементов ActiveX — контейнеров управляющих элементов — имеется возможность выдачи запросов. Что именно может запросить контейнер у управляющего элемента, определяется методами, поддерживаемыми последним.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Доступ к методам управляющих элементов ActiveX всегда осуществляется через диспинтерфейсы IDispatch. С точки зрения разработчика приложения, вызов методов управляющего элемента ActiveX осуществляется точно так же, как и вызов методов диспинтерфейса любого СОМ-объекта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Таким образом, для разработчика приложения три элемента — свойства, события и методы — определяют возможности управляющего элемента ActiveX.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>19.3. Точка зрения создателя управляющего элемента</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	То, как выглядит управляющий элемент для своего создателя, зависит от используемого инструментария. Написать новый управляющий элемент "с нуля" не так-то просто.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Простой управляющий элемент, поддерживающий ограниченный набор возможностей, лучше всего, вероятно, разработать целиком вручную — так можно получить более быстрый и компактный код.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Но для реализации сложного управляющего элемента необходим мощный набор инструментов. В состав Microsoft Developer Studio входит Control Development Kit (CDK — набор инструментов для разработки управляющих элементов) и ControlWizard (мастер управляющих элементов), сочетание которых позволяет опытным программистам на C++ разрабатывать управляющие элементы, даже не зная большей части деталей реализации управляющих элементов.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функциональность, определяемая спецификацией управляющих элементов ActiveX, распадается на 4 основных аспекта, для реализации каждого предназначена особая группа интерфейсов:
</p>
<ul>
	<li>
	обеспечение пользовательского интерфейса; 
	</li>
	<li>
	обеспечение вызова методов управляющего элемента контейнером; 
	</li>
	<li>
	посылка событий контейнеру; 
	</li>
	<li>
	получение информации о свойствах среды контейнера 
	</li>
	<li>
	и обеспечение доступа к свойствам управляющего элемента и их модификации.
	</li>
</ul>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc20"></a> 
<h1>20. Использование технологии <span style="color: #000000;">OLE DB для доступа к базе данных</span></h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">OLE DB — набор </span><span style="color: #000000;">C</span><span style="color: #000000;">OM-интерфейсов, предоставляющих приложению единообразный доступ к данным самых различных источников независимо от их местонахождения или типа. Открытая спецификация OLE DB основана на технологии ODBC, она предоставляет открытый стандарт доступа к данным любого типа. ODBC создавалась для взаимодействия с реляционными БД, a OLE DB разрабатывалась как для реляционных, так и для нереляционных источников, включая (но не ограничиваясь) БД на мейнфреймах, серверах и персональных компьютерах, а также хранилища файлов и сообщения электронной почты, электронные таблицы, инструментальные средства управления проектами и пользовательские объекты.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.1. Применение технологии ADO для доступа к базе данных</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	ADO реализует высокопроизводительный и удобный прикладной интерфейс для OLE DB. Технология ADO нетребовательна к системным ресурсам, создает минимальную нагрузку на сеть и отличается минимальным числом уровней между приложением и источником данных. ADO предоставляет СОМ-интерфейс Automation, поэтому она поддерживается любой ведущей инструментальной средой быстрой разработки приложений (Rapid Application Development, RAD), а также другими инструментальными средствами разработки баз данных, приложений и сценариев.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Познакомимся с некоторыми ActiveX-элементами, осуществляющими доступ к базе данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">ADO</span><span style="color: #000000;"> Data Control.— это графический элемент управления на базе ActiveX с кнопками навигации по записям. Он предоставляет приложению удобный интерфейс для работы с базами данных и позволяет избежать дополнительного кодирования. В ADO </span><span style="color: #000000;">Da</span><span style="color: #000000;">ta Control механизм ADO применяется для оперативного создания соединений между поставщиками данных и связанными с данными элементами управления. Элементы управления, связанные с данными, представляют собой ActiveX-элементы пользовательского интерфейса с двумя важными свойствами: </span>
</p>
<ul>
	<li>
	наличием параметра DataSource, в котором можно задать идентификатор элемента ADO Data Control;
	</li>
	<li>
	способностью отображать данные, выбранные связанным с ним элементом ADO Data Control.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда элементы управления связаны с ADO Data Control, при просмотре записей все поля отображаются и обновляются автоматически. Такое поведение реализовано в самих элементах и для этого не требуется ни одной дополнительной строчки кода.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В Visual C++ есть несколько ActiveX-элементов для работы с данными, например Microsoft DataGrid и Microsoft DataList. Кроме того, допустимо создавать собственные элементы управления, а также приобретать их у других поставщиков программного обеспечения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сейчас Вы создадите простое приложение на базе диалога, в котором ADO Data Control и DataGrid применяются для отображения записей из таблицы авторов базы данных pubs. Кроме того, Вы научитесь задавать свойства этих элементов управления из исходного кода Вашей программы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Перед созданием приложения не забудьте зарегистрировать ваш источник данных (в нашем случае pubs) в операционной системе с помощью Администратора источника данных </span><span style="color: #000000;">ODBC</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.2. Создание приложения ViewDB</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	Создайте проект MFC AppWizard (.exe) для приложения ViewDB. 
	</li>
	<li>
	В окне 1 мастера AppWizard выберите Dialog based и щелкните Finish.
	</li>
	<li>
	Подтвердите выбор, щелкнув ОК.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Приложение на базе диалога — это самый простой тип программы, которую можно сгенерировать средствами AppWizard; в нем не поддерживается архитектура «документ/представление». Главным окном приложения является модальное диалоговое окно, и при его закрытии программа прекращает работу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	AppWizard создает шаблон и класс диалога для главного окна. В приложении ViewDB это шаблон IDD_VIEWDB__DIALOG и класс CViewDBDlg. Шаблон IDD_VEWDB_DIALOG автоматически открывается в редакторе диалогов. Элементы управления ADO Data Control и DataGrid Control по умолчанию устанавливаются вместе с Visual C++. Однако, прежде чем вставить их в диалоговое окно приложения, Вы должны добавить их в проект из галереи Components and Соntrols Gallery.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Добавление ActiveX-элемента в проект позволяет:
</p>
<ul>
	<li>
	выбирать на панели инструментов Controls значок, соответствующий элементу управления, чтобы разместить его в шаблоне диалога;
	</li>
	<li>
	создавать классы C++, которые формируют оболочку для интерфейсов Automation, предоставленных элементами управления. Средствами этих классов можно задавать и получать сведения о состоянии элементов управления, а также обращаться к предоставляемым ими методам.
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.3. Добавление ActiveX-элемента в проект</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Самым простым способом будет добавление элементов через контекстное меню. Щелкните правой кнопкой мыши на форме, из меню выберите Insert ActiveX Control.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_851bd114.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Затем в предложенном списке выберем сначала Microsoft ADO Data Control, version 6.0 (OLEDB), затем нажмем кнопку OK. Выбранный элемент должен появиться на форме. Проделаем эти же операции с Microsoft DataGrid Control, Version 6.0 (OLEDB).</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_dfea3ab6.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">После нажатия на кнопку OK они появятся на панели инструментов, и появится возможность добавления их на форму путем простого перетаскивания с панели инструментов в нужное нам место. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_156f8b38.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Подтвердите создание классов для этого элемента:</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_bb4190e8.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.4. Редактирование шаблона IDD_VlEWDB_DIALOG</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Добавьте элемент ADO Data Control, замените его заголовок на «</span><span style="color: #000000;">Control</span><span style="color: #000000;">». Идентификатор IDC_ADODC1 изменять не нужно. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_f544819e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Добавьте элемент DataGrid Control, и озаглавьте его: Authors. Идентификатор IDC_DATAGRID1 изменять не надо. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_9c1b212b.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Добавьте статический текст Order by: и рядом с ним поместите список. Его высоты должно хватать для размещения двух строк текста. Присвойте ему идентификатор IDC_ORDERLIST. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.5. Подключение ADO Data Control к источнику данных</h2>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Прежде всего, займёмся компонентом Адо. Обратимся к закладке Properties на одной из панелей инструментов (если она отсутствует, то щёлкнем правой кнопкой мыши на этом компоненте, в появившемся контекстном меню выберем пункт “Properties”). Для изменения заголовка компонента, в поле “Caption” напишем своё название (напр. “Click”). Теперь переходим к полю “Connection String”. Выбор этого поля вызовет диалоговую панель «Свойства: </span><span style="color: #000000;">ConnectionString </span><span style="color: #000000;">»</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_bbc8fd15.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В появишвшемся диалоге выберем пункт “Use ODBC Data Source Name” после чего в ставшем активном комбобоксе выбираем нашу базу данных Test.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_53347eac.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь нам необходимо сформировать запрос к базе данных. Запрос к базе данных может быть представлен так:
</p>
<ul>
	<li>
	SQL-запрос к базе данных (1-adCmdText);
	</li>
	<li>
	подключение таблицы (2-adCmdTable);
	</li>
	<li>
	вызов хранимой процедуры из базы данных (4-adCmdStoredProc).
	</li>
</ul>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Выберем “SQL-запрос к базе данных”. Данный метод позволит нам осуществить выборку данных сразу из нескольких таблиц. Для этого перейдём в меню “Properties” элемента Адо и выберем закладку “RecordSource”. В элементе с именем “Command Type” выберем “1-adCmdText”.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_d93aefe5.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Теперь в элемент с именем “Command Text (SQL)” введём SQL-запрос к нашей базе данных: </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">SELECT au_fname, au_lname, state FROM authors</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.6. Связывание элементов управления DataGrid Control и ADO Data Control</h2>
<p style="text-align: justify; margin-left: 0in; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Отредактируйте свойства элемента DataGrid Control с идентификатором IDC_DATAGRID1. Установите свойство </span><span style="color: #000000;">DataSource </span><span style="color: #000000;">равным </span><span style="color: #000000;">IDC_ADODC1</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_b0f2096b.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь, после компиляции приложения, мы сможем просматривать таблицу базы данных, на которую настроились. Пользуясь навигационными кнопками элемента ADO Data Control, Вы можете передвигаться по набору записей, или же; щелкнув сам элемент DataGrid Control, применять для этого мышь и клавиши управления курсором.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_82639af2.png" style="float: bottom;" alt="">
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>20.7. Удаление, добавление и редактирование записей БД</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">В текущий момент времени мы можем только лишь просматривать записи из источника данных.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Для того чтобы реализовать возможности удаления, добавления и редактирования, необходимо настроить свойства компонента Грид. Выполним такую последовательность действий. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Вызовем меню “Properties” элемента Грид. Перейдём на закладку “Control”. Поставим пометки напротив следующих свойств: AllowAddNew, AllowDelete, AllowUpdate.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_2221aa5d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь перейдём к настройке свойств элемента Адо.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Для этого вызовем меню “Properties” элемента Адо, в котором выберем закладку “All”.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Теперь установим значения некоторых свойств:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">“Cursor Locations” на “2-Use server cursor”</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">“Cursor Type” <span style="color: #000000;">на</span><span style="color: #000000;"> “1-Keyset Cursor Type”.</span></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_56c1725d.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Теперь, после запуска приложения, переместимся в ячейку, которую хотим редактировать. Отредактируем её. Для подтверждения изменений, сделанных в ячейке, необходимо убрать фокус, например, нажатием клавиши “</span><span style="color: #000000;">Enter</span><span style="color: #000000;">”. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Для добавления новой записи необходимо переместиться в самую нижнюю строку элемента Грид и добавить данные. После завершения заполнения этой строки данными и перемещения фокуса на другую строку к элементу Грид автоматически добавляется ещё одна строка, которая располагается ниже текущей.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Удаление записей производится следующим образом. Для удаления нужной строки необходимо щелкнуть мышью по заголовку строки, таким образом, выделив целую строку. После этого, при нажатии клавиши “</span><span style="color: #000000;">Delete</span><span style="color: #000000;">” на клавиатуре, происходит удаление выбранной строки.</span>
</p>
<a name="unc21"></a> 
<h1>21. Программирование сетевых приложений в Visual
C++
</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Основой архитектуры компьютерных сетей является применение компьютеров в системе “клиент-сервер”. Термин распределенное применение компьютеров (distributed computing) означает распределение вычислительных задач от централизованных, крупных вычислительных машин к меньшим станциям в коллективных локальных сетях.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вследствие того, что стержнем архитектуры компьютерных локальных сетей является связь между сервером и клиентом, возник термин распределенное применение компьютеров в системе “клиент-сервер” (distribute client/server computing).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рассмотрим механизм обмена данными между приложениями, работающими как на одном локальном компьютере, так и на разных узлах компьютерной сети через механизм Сокетов Windows.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Сокеты Windows (Windows Sockets, или WinSock), — это часть открытой системной архитектуры Microsoft Windows (WOSA — Windows Open System Architecture), которая определяет интерфейс для разработки приложений-клиентов, а также интерфейсы, используемые разработчиками программного обеспечения для реализации Windows Sockets в различных сетях.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Спецификация Windows Sockets является спецификацией интерфейса, поддерживаемой целым рядом разработчиков и поставщиков, каждый из которых использует для взаимодействия с протоколами собственные динамические библиотеки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наибольшая отдача от сокетов проявляется при программировании сетевых приложений для двух участников диалога. Например, при разработке приложений для клиента и сервера сокеты используются для обмена структурами данных или пакетами.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если же разрабатывается только приложение-клиент, предпочтительнее использовать один из интерфейсов Internet высокого уровня (так называемый WinInet API).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сокет — это абстрактный объект для обозначения одного из концов сетевого соединения. Он предназначен для создания механизма обмена данными. Сокеты Windows подразделяются на две категории: сокеты дейтаграмм и сокеты потоков.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сокеты дейтаграмм (datagram sockets) — это средства поддержки не очень надежного обмена пакетами без инициализации соединения. Ненадежность в данном контексте означает отсутствие гарантии доставки пакетов по назначению в требуемом порядке.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Фактически один и тот же пакет дейтаграммы может быть доставлен несколько раз. В реализации WinSock для TCP/IP сокеты используют протокол User Datagram Protocol (USD), хотя WinSock поддерживает и другие протоколы.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Во многих случаях, например при обмене данными между двумя процессами на одном и том же компьютере или между двумя компьютерами в локальной сети с небольшой нагрузкой, исключена путаница, дублирование пакетов или доставка их не по адресу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Однако полной гарантии от подобных неприятностей приложение не обеспечивает.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если необходимо гарантировать бесперебойную доставку данных в нужном порядке и без дублирования, следует использовать сокеты потоков, являющиеся надежной, основанной на соединениях системой обмена данными. Как видно из названия, вместо дейтаграмм или пакетов сокеты потоков пересылают и обслуживают потоки данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В TCP/I Р-реализации WinSock сокеты потоков используют протокол TCP (Transmission Control Protocol). Сокеты потоков особенно полезны для пересылки больших объемов данных без потерь, дублирования и нарушения порядка.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>21.1. Классы MFC и WinSock API</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В состав классов MFC (Microsoft Foundation Classes) входит два класса для использования сокетов в приложениях. Первый из них, CAsyncSocket, обеспечивает низкоуровневый интерфейс, возможности которого практически эквивалентны функциям WinSock API языка С.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Класс CSocket, производный от CASyncSocket, представляет более высокий уровень абстракции для обмена данными через сокеты. С помощью класса CSocket можно пересылать объекты C++ из одного приложения с классами MFC в другое с использованием объекта CArchive, ассоциированного с объектом CSocket.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для инициализации сокетов с помощью средств MFC используется функция AfxSocketInit. В результате ее вызова инициализируются внутренние структуры MFC, описывающие сокеты, и выполняется вызов WSAStartup.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>21.2. Использование класса CAsyncSocket</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Как и для многих других объектов MFC, создание сокета состоит из двух этапов: создание объекта класса путем вызова его конструктора и создание системного сокета путем вызова функции Create.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Конструктор класса CAsyncSocket не принимает никаких параметров, поскольку просто создает новый пустой объект. Вся работа по фактической инициализации сокета выполняется функцией Create.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функция Create принимает ряд параметров, как показано в ее прототипе:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>BOOL Create( UNIT nSocketPort = </strong><strong>О</strong><strong>, int nSocketType = SOCK_STREAM, </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>long lEvent = FD_READ | FD_WRITE | FD_OOB | FD_ACCEPT |</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>FD_CONNECT | FD_CLOSE, LPCTSTR IpszSocketAddress = NULL ) ;</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Первый параметр определяет номер порта, ассоциируемого с сокетом. По умолчанию он равен 0, т.е. система сама должна выбирать порт по своему усмотрению. Во многих случаях, особенно в приложениях типа "сервер", бывает необходимо ассоциировать с сокетом номер порта, заранее известный при разработке приложения. Приложения-клиенты используют этот порт для обмена данными с сервером.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Параметр nSocketType указывает тип сокета — сокет потока (SOCKSTREAM) или сокет дейтаграмм (SOCK_DGRAM).
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Параметр lEvent определяет события, в случае которых приложение получает извещение от системы. По умолчанию генерируются сообщения для всех предусмотренных событий.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В последнем параметре указывается сетевой адрес для привязки сокета. По умолчанию он равен 0, что означает привязку сокета к адресу локального компьютера, однако можно указать и другой адрес. Для IP-реализации интерфейса WinSock это будет строка, содержащая нужный IP-адрес — например, 192.9.200.93. Кроме того, класс CAsyncSocket автоматически выполняет распознавание машинных имен, так что можно указывать адреса наподобие ftp.racotek.com.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Большинство методов класса CAsyncSocket возвращает true, если вызов выполнен успешно, и FALSЕ если произошла ошибка.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Сокеты потоков в приложениях-клиентах подсоединяются к серверу путем вызова метода Connect, который может принимать два набора параметров. Первая версия метода Connect принимает в качестве параметров машинный адрес в виде ASCII-строки, например 192. 9.200. 93 или ftp.racotek.com, а также номер порта. Во вторую версию передается структура SOCKADDR, хранящую информацию об адресе. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	По завершении работы Connect независимо от того, был ли вызов успешным или нет, вызывается обработчик сообщений — функция OnConnect. Функция OnConnect может перекрываться в классах, производных от CAsyncSocket. Вот ее прототип:
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	virtual void OnConnect( int nErrorCode };
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если параметр nErrorCode равен 0, соединение открыто успешно и сокет готов к приему и посылке данных. Если при попытке подключения произошла ошибка, параметр nErrorCode будет содержать код этой ошибки.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После создания сокета потока на сервере путем вызова конструктора класса и метода Create сокет может приступить к ожиданию запросов на подключение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Это выполняется вызовом метода Listen класса CAsyncSocket. Он принимает в качестве параметра количество запросов на подключение, которое должно скопиться во входной очереди для удовлетворения запроса или возвращения клиентам кода WSAECONNREFUSED, обозначающего отказ в подсоединении к серверу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для удовлетворения запроса и подключения клиента используется метод Accept. Вот прототип этого метода:
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>virtual. BOOL Accept( CAsyncSocket rConnectedSocket, </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;"><strong> SOCKADDR* IpSockAddr = NULL, int* IpSockAddrLen = NULL );</strong></span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Первый параметр — адрес сокета, управляющего новым соединением. Это должна быть ссылка на сокет, предварительно созданный путем вызова конструктора класса CAsyncSocket, но без вызова метода Create. Кроме того, в метод передается указатель на структуру SOCKADDR и ее длину; эта структура заполняется адресом сокета клиента.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Функция Accept обычно вызывается из метода OnAccept, который может перекрываться в классах, производных от CAsyncSocket. Метод OnAccept вызывается всякий раз, когда во входной очереди сокета CAsyncSocket появляется запрос на подключение к серверу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Таким образом, методу Accept нет нужды ожидать запросы в блокирующем режиме. В функцию OnAccept передается один параметр — код ошибки. Если это 0, все идет нормально и вызов Accept должен пройти успешно.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Посылка данных через сокет потока выполняется методом Send класса CAsyncSocket. Функция Send принимает указатель на буфер и длину буфера данных. </span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если извещающая функция OnSend реализована в производном классе, она вызывается после освобождения буфера, при готовности сокета к следующей операции по пересылке данных.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Однако такое извещение обычно применяется только в приложениях с большим объемом обмена данными, а стандартная реализация этой функции в классе CAsyncSocket не делает ничего.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Напротив, функция OnReceive довольно часто переопределяется в классах, производных от CAsyncSocket. Она вызывается при поступлении данных на сокет; данные будут находиться в его буфере, пока приложение не прочитает их путем вызова метода Receive класса CAsyncSocket.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Функция Receive считывает такой объем данных, какой доступен во входной очереди сокета, но не больше, чем указано в переданном параметре длины буфера. Если соединение закрывается корректно, метод Receive возвращает 0, иначе SOCKET_ERROR.</span>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После завершения работы с сокетом (объектом класса CAsyncSocket) его необходимо закрыть методом Close для освобождения системных ресурсов, ассоциированных с сокетом. Метод Close автоматически вызывается из деструктора класса CAsyncSocket при явном удалении объекта или выходе его за допустимый диапазон.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<a name="unc22"></a> 
<h1>22. Создание сетевого приложения</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В качестве примера сетевого приложения создадим диалоговое приложение, которое сможет работать либо в качестве сервера, либо в качестве клиента. Это позволит проверить созданное приложение, если запустить две копии приложения, по одной на каждом конце соединения. Эти две копии могут быть расположены или на одном компьютере, или же одна из копий может быть установлена на другом компьютере, тогда два приложения будут работать на различных компьютерах, передавая сообщения по сети. После этого можно проверить созданное приложение в работе. После того, как между приложениями будет установлено соединение, можно передавать сообщения от одного приложения другому.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как сообщение послано, оно будет добавлено в список переданных сообщений. В свою очередь каждое полученное сообщение будет помещено в список всех полученных сообщений. Это позволит затем сравнить списки полученных и посланных сообщений и убедиться, что они совпадают.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>22.1. Создание каркаса приложения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Создаем новый MFC проект:
</p>
<ol>
	<li>
	Открываем <em>File</em><em> -&gt; </em><em>New</em><em> -&gt; </em><em>Project</em><em>…</em> либо нажимаем комбинацию клавиш Ctl+Shift+N, в результате чего получим диалог создания нового проекта.
	</li>
	<li>
	Во вкладке Visual
	C++ выбираем MFC и в правом окне MFC
	Application, ниже задаем имя проекта (например, Sock), выбираем путь, где будет храниться наш проект, и нажимаем OK (рис. 22.1)
	</li>
	<li>
	В появившемся окне нажимаем кнопку Next и указываем (рис. 22.2), что наше приложение будет являться диалоговым (Dialod based), после чего переходим на предпоследнюю вкладку и отмечаем, что приложение использует Windows
	Sockets (рис. 22.3)
	</li>
	<li>
	Нажимаем кнопку Finish
	</li>
</ol>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_f274a06e.gif" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<span style="color: #000000;">Рис. 22.1. Создание нового MFC проекта</span>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_c7d74073.gif" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 4.2. Выбор типа приложения
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_21fafeef.gif" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 4.3. Выбор использования Windows sockets
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>22.2. Проектирование внешнего вида приложения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как создан каркас приложения, приступаем к созданию внешнего вида окна. Здесь нужно создать набор радио-кнопок, с помощью, которых можно установить параметры приложения, а именно, является ли данная копия приложения клиентской или серверной. Затем нам понадобится пара окон для редактирования текста, в которых мы будем указывать имя компьютера и номер порта, на котором будет слушать сервер. Нам нужна командная кнопка, которая будет заставлять сервер приступать к прослушиванию на сокете, или же заставлять клиента устанавливать соединение с сервером, а также кнопка, которая позволит закрывать соединение. Кроме того, нам понадобится окно для редактирования текста, в которое мы будем вводить сообщение, предназначенное для передачи другому приложению, и кнопка, которая будет осуществлять такую передачу.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наконец, нужно иметь пару окон для списка, в которые будут помещаться переданные и полученные сообщения.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Итак, по шагам добавляем элементы и изменяем их свойства:
</p>
<ol>
	<li>
	Открываем вкладку с ресурсами нашего приложения (<em>View</em><em>-&gt;</em><em>Resource</em><em>
	</em><em>View</em> или сочетание клавиш Ctrl+Shift+E)
	</li>
	<li>
	Открываем вкладку Sock.rc, далее открываем вкладку Dialog и дважды кликаем на элементе IDD_SOCK_DIALOG, который соответствует диалоговому окну нашего приложения
	</li>
	<li>
	Перед нами появилось наше диалоговое окно. Справа находим вкладку Toolbox (если не можете найти вкладку, откройте ее через меню <em>View</em><em>-&gt;</em><em>Toolbox</em><em>
	</em>или сочетанием клавиш Ctrl+Alt+X). Добавим элементы управления в соответствии с тем, как показано на рис. 22.4
	</li>
	<li>
	В соответствии с таблицей 22.1 зададим свойства элементов управления, после чего в соответствии с таблицей 22.2 создадим переменные для элементов управления; для всех элементов управления оставим область видимости Public (для создания переменных откройте пункт меню <em>Project</em><em>-&gt;</em><em>Add</em><em>
	</em><em>Variable</em>)
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_4d0c7d78.gif" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис 22.4. Расположение элементов управления
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: right; margin-right: 0in; font-weight: normal;">
	Таблица 22.1
</p>
<p style="text-align: right; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col><col></colgroup>
<tbody>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Объект</strong>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Свойства</strong>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Значение</strong>
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			RadioButton
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_RCLIENT
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Caption
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			&Client
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Group
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			True
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			RadioButton
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_RSERVER
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Caption
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			&Server
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Edit Box
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_ESERVNAME
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Edit Box
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_ESERVPORT
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Command Button
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_BCONNECT
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Caption
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			C&onnect
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Command Button
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_BCLOSE
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Caption
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			C&lose
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Disabled
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			True
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Edit Box
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_EMSG
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Disabled
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			True
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Command Button
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_BSEND
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Caption
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			S&end
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Disabled
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			True
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			List Box
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_LSENT
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Tab Stop
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			False
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Sort
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			False
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Selection
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			None
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			List Box
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			ID
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_LRECVD
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Tab Stop
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			False
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Sort
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			False
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			<br>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Selection
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			None
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: right; margin-right: 0in; font-weight: normal;">
	Таблица 22.2.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Переменные элементов управления
</p>
<p style="text-align: justify; margin-right: 0in;">
	<br>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col><col><col></colgroup>
<tbody>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Объект</strong>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Имя</strong>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Категория</strong>
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in;">
			<strong>Тип</strong>
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_BCONNECT
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_ctlConnect
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Control
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			CButton
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_EMSG
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_strMessage
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Value
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			CString
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_ESERVNAME
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_strName
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Value
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			CString
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_ESERVPORT
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_iPort
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Value
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			int
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_LRECVD
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_ctlRecvd
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Control
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			CListBox
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_LSENT
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_ctlSent
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Control
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			CListBox
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			IDC_RCLIENT
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			m_iType
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			Value
		</p>
	</td>
	<td>
		<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
			int
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Для того, чтобы в зависимости от выбранного режима работы программы (в качестве сервера или в качестве клиента) свойство Caption кнопки CONNECT менялось на LISTEN, мы добавим две функции, которые обрабатывают события BN_CLICKED для обеих радио-кнопок (двойной клик на радио-кнопку создаст функцию-обработчик OnBnClickedRclient, в которую необходимо поместить следующий код; аналогично создадим обработчик для второй радио-кнопки):
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>void</strong><strong>
	</strong><strong>CSockDlg</strong><strong>::</strong><strong>OnBnClickedRclient</strong><strong>()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong> //Синхронизируем элементы управления </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>	</strong><strong>UpdateData</strong><strong>(</strong><strong>TRUE</strong><strong>);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong> //В каком мы режиме?</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>	</strong><strong>if</strong><strong> (</strong><strong>m</strong><strong>_</strong><strong>iType</strong><strong> == 0) //Устанавливаем текст на кнопке</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong></strong><strong>m_ctlConnect.SetWindowTextW(_T("Connect"));</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong> else</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong> m_ctlConnect.SetWindowTextW(_T("Listen"));</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Если сейчас скомпилировать и запустить приложение, можно будет выбирать режим работы приложения с помощью двух кнопок, а текст, появляющийся на командной, кнопке будет меняться в зависимости от того, какой установлен режим.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>22.3.Функции класса CAsyncSocket </h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы иметь возможность перехватывать и отвечать на события сокета, нам нужно создать свой собственный класс на основе класса <em>CAsyncSocket.</em> В этом классе будет содержаться его собственная версия функций для обработки событий, а также средства отражения событий на уровне класса диалогового окна, здесь будет использоваться указатель на диалоговое окно родительского класса нашего класса сокета. Этот указатель будет использоваться для осуществления вызова функций каждого события сокета, предварительно осуществим проверку наличия ошибок. Чтобы создать этот класс, откроем пункт меню <em>Project</em><em>-&gt;</em><em>Add</em><em>
	</em><em>Class</em>. В появившемся диалоговом окне необходимо выбрать категорию MFC, шаблон (template) MFC
Class и нажать кнопку Add (рис.22.5). В диалоговом меню мастера создания нового класса зададим имя нового класса CMySocket, а в качестве базового класса выберем CAsyncSocket (рис. 22.6.). Нажимаем Finish. Новый класс вставлен в наш проект.
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_1294d20b.gif" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.22.5. Выбор шаблона классов
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_cabfc28.gif" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис.22.6. Мастер добавления классов
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как новый класс сокета создан, вставим переменную в класс, который будет использоваться в качестве указателя на родительское диалоговое окно. Указываем тип переменной CDialog*, имя переменной m_pWnd, доступ private. В классе необходимо определить метод, а значит, вставим новую функцию в этот класс. Тип функции void, объявим функцию в виде SetParent(CDialog* pWnd), доступ public. Редактируем созданную функцию.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>void</strong><strong>
	</strong><strong>CMySocket</strong><strong>::</strong><strong>SetParent</strong><strong>(</strong><strong>CDialog</strong><strong> *</strong><strong>pWnd</strong><strong>)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//устанавливаем указатель</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<strong>m</strong><strong>_</strong><strong>pWnd</strong><strong> = </strong><strong>pWnd</strong><strong>;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В классе сокета создаем функции обработки событий. Для создания функции, соответствующей событию OnAccept, вставим новую функцию в класс сокета, тип функции void, опишем функцию в виде OnAccept(int
nErrorCode), доступ protected. Редактируем код.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CMySocket::OnAccept(int nErrorCode)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Есть ошибки?</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>if (nErrorCode == 0)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Нет, вызываем функцию OnAccept()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>((CSockDlg*)m_pWnd)-&gt;OnAccept();</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Вставляем подобные функции для событий OnConnect, OnClose, OnReceive и OnSend. после того, как функции вставлены,нужно вставить заголовочный файл в диалоговое окно нашего приложения в класс сокета.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//MySocket.cpp</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//</strong>
</p>
<p style="text-align: justify; margin-right: 0in;"> …
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>#include "MySocket.h"</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как требуемые функции событий созданы в классе сокета, вставим переменную, связанную с нашим классом сокета в класс диалогового окна. Для сервера нам потребуется две переменные, одна будет связана с прослушиванием запросов на соединение, а другая - связана с другим приложением. Поскольку у нас существует два объекта сокета, то в диалоговый класс (CSockDlg) вводим две переменные. Обе переменные имеют тип класс сокета (CMySocket) и доступ private. Имя одной переменной m_sListenSocket, эта переменная связана с прослушиванием запроса на соединение, вторая переменная называется , m_sConnectSocket и используется для пересылки сообщения в том и в другом направлении.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	После того, как переменные сокета созданы, необходимо написать код, инициализирующий эти переменные. По умолчанию зададим тип приложения, как "клиент", номер порта 4000. Помимо этих параметров установим указатель в объектах сокетов, чтобы они указывали на диалоговый класс. Это можно сделать, если вставить код в функцию OnInitDialog.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Замечание: Имя, соответствующее loopback,-это специальное имя, используемое в протоколе TCP/IP, которое обозначает компьютер, на котором мы работаем. Это внутреннее имя компьютера, превращаемое в адрес 127.0.0.1. Это имя и адрес компьютера, широко используемое в тех случаях, когда требуется осуществить соединение с другим приложением, установленным на том же самом компьютере, на котором мы и работаем.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>BOOL CSockDlg::OnInitDialog()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>CDialog::OnInitDialog();</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//…</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>SetIcon(m_hIcon, FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Инициализируем переменные управления</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_iType = 0;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_strName = "loopback";</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_iPort = 4000;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//обновляем элементы управления </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>UpDateData(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Устанавливаем указатель</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sConnectSocket.SetParent(this);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sListenSocket.SetParent(this);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>retutn TRUE; //} </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<br>
</p>
<h2>22.4. Связываемся с приложением.</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда пользователь нажимает кнопку, то все функции основного окна становятся недоступными. В этот момент пользователь не может менять параметры программы. Сейчас обращаемся к функции Create в соответствующей переменной сокета в зависимости от того, используется наше приложение в виде сервера или в виде клиента. Затем мы обращаемся либо к функции Connect, либо к функции Listen, этим мы инициализируем соединение с нашей стороны. Чтобы вставить описанные функции в приложение, вставим функцию для сообщения о событии BN_CLICKED в кнопке Connect(ID
IDC_BCONNECT). Редактируем код функции.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnBconnect()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Синхронизируем переменные, используя значения элементов управления </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>UpdateData(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Включаем прочие элементы управления</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_BCONNECT)-&gt;EnableWindow(FALSE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_ESERVNAME)-&gt;EnableWindow(FALSE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_ESERVPORT)-&gt;EnableWindow(FALSE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_RCLIENT)-&gt;EnableWindow(FALSE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_RSERVER)-&gt;EnableWindow(FALSE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Работаем в качестве клиента или сервера?</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>if (m_iType == 0)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//клиент, создаем сокет по умолчанию </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sConnectSocket.Create();</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//открываем соединение с сервером</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sConnectSocket.Connect(m_strName, m_iPort);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>else</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//сервер, создаем возможность прослушивания на указанном порте</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sListenSocket.Create(m_iPort);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//прослушиваем запросы на соединение</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sListenSocket.Listen();</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Затем, чтобы завершить приложение, вставляем функцию обработки событий сокета в диалоговый класс: OnAccept и OnConnect. Эти функции вызываются в нашем классе сокета. Эти функции не требуют указания каких-либо параметров. Функция OnAccept вызывается в том случае, когда со слушающим сокетом пытается соединиться другое приложение. После того как соединение принято, мы можем включить окно для ввода текста сообщений, которые будет передавать другому приложению.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы вставить такую функцию в приложение, добавляем новую функцию в диалоговый класс CSockDlg. Указываем тип функции void, описываем функцию как OnAccept, доступ public. Редактируем код функции.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnAccept()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//принимаем запрос на соединение</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sListenSocket.Accept(m_sConnectSocket);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//включаем элементы управления вводимого текста</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_EMSG)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_BSEND)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_STATICMSG)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>} </strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	На клиентской стороне ничего делать не надо, за исключением включения элементов управления, ответственных за ввод и посылку сообщений. Мы также включаем кнопку Close, с помощью ее соединение закрывается со стороны клиента (но не сервера). Чтобы добавить в приложение описанные функции, в диалоговый класс CSockDlg вставляем новую функцию. Тип новой функции void, описывам функцию в виде OnConnsct, доступ к функции public.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnConnect()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//включаем элементы управления текстом сообщений</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_EMSG)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_BSEND)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_STATICMSG)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_BCLOSE)-&gt;EnableWindow(TRUE); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	В диалоговый класс CSockDlg вставим три функции, тип всех функций void, а доступ - public. Первая функция - OnSend, вторая - OnReceive, третья - OnClose. Можно скомпилировать приложение.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Запустим две копии приложения. Зададим, чтобы одна из копий работала в режиме сервера, щелкнем кнопку Listen, чтобы перевести его в состояние ожидания запроса на соединение. Все элементы управления при этом будут находиться в отключенном состоянии. Второй экземпляр программы запустим в режиме клиента и нажмем кнопку Connect. Здесь также элементы управления установлены в выключенное состояние. После того, как соединение будет установлено, элементы управления, ответственные за отсылку сообщений перейдут в рабочее состояние.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>22.5. Посылка и прием сообщений</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Необходимо добавить в приложение функции, которые позволили бы осуществлять прием и посылку сообщений. После того, как между приложениями установлено соединение, пользователь может ввести текстовое сообщение в окно для редактирования, расположенное в центре диалогового окна, затем, нажав кнопку SEND, сообщение посылается другому приложению. Чтобы вставить требуемые функции, выполняемые после нажатия кнопки SEND, вначале необходимо позаботиться о том, чтобы была произведена проверка того, содержится ли в окне какое-либо сообщение, затем определить его длину, потом послать сообщение, а затем добавить сообщение в окно списка. Используем обработчик события нажатия кнопки IDC_BSEND. Редактируем функцию.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnBsend()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>int iLen;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>int iSent;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Обновляем элементы управления в соответствии с переменными</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>UpdateData(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Есть сообщение для посылки?</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>if (m_strMessage !="")</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Получаем длину сообщения</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>iLen = m_strMessage.GetLength();</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Посылаем сообщение</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>iSent=</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sConnectSocket.Send(LPCTSTR(m_strMessage), iLen};</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Смогли послать?</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>if (iSent == SOCKET_ERROR)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>else</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// Добавляем сообщение в список</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_ctlSent.AddString(m_strMessage);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// Обновляем переменные согласно элементам управления</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>UpdateData(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}}}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Когда срабатывает функция OnReceive, что происходит в момент, когда приходит сообщение, мы извлекаем это сообщение из сокета, используя функцию Receive. После того, как сообщение извлечено, мы преобразуем его в тип String и добавляем его в список полученных сообщений. Эти функции можно создать, если отредактировать существующую функцию OnReceive в диалоговом классе.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnReceive()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>char *pBuf = new char[1025];</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>int iBufSize = 1024;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>int iRcvd;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>CString strRecvd;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Получаем сообщение</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>iRcvd = m_sConnectSocket.Receive(pBuf, iBufSize);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Получили что-либо?</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>if (iRcvd == SOCKET_ERROR)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>else </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Отрезаем конец сообщения</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>pBuf[iRcvd] = NULL;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//Копируем сообщение в CString</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>strRecvd = pBuf;</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>//добавляем сообщение в список полученных сообщений</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_ctlRecvd.AddString(strRecvd);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// обновляем переменные в соответствии с элементами управления</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>UpdateData(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сейчас можно скомпилировать и запустить две копии приложения, соединив их друг с другом. После того, как соединение будет установлено, можно ввести сообщение в одном приложении и послать его другому приложению.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h2>22.6. Завершение соединения</h2>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Чтобы закрыть соединение, пользователь клиента может щелкнуть кнопку Close, соединение будет прекращено. В серверном приложении будет получено событие сокета OnClose. После этого в обоих приложениях должны произойти одинаковые процессы: соединяющийся сокет должен быть закрыт, элементы управления, ответственные за отсылку сообщений, должны быть выключены. На клиентском приложении, кроме того, необходимо включить элементы управления, ответственные за установку соединения. На серверном приложении процесс прослушивания в ожидании запроса на установление связи восстановится. Чтобы создать необходимые для осуществления описанных действий функции, отредактируем код функции OnClose, изменив код.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnClose()</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// закрываем сокет</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>m_sConnectSocket.Close();</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// выключаем элементы управления, ответственные за посылку сообщений</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_EMSG)-&gt;EnableWindow(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_BSEND)-&gt;EnableWindow(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_STATICMSG)-&gt;EnableWindow(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_BCLOSE)-&gt;EnableWindow(FALSE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// мы работаем как клиент?</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>if (m_iType == 0)</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// да, тогда влючаем элементы управления соединением</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong> GetDlgItem(IDC_BCONNECT)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_ESERVNAME)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_ESERVPORT)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_STATICNAME)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_STATICPORT)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_RCLIENT)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_RSERVER)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>GetDlgItem(IDC_STATICTYPE)-&gt;EnableWindow(TRUE);</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Наконец, для кнопки Close необходимо организовать обращение к функции OnClose. Для этого используем мастер классов и с его помощью вставим функцию, соответствующую событию нажатия кнопки Close (IDC_BCLOSE). Редактируем код
функции.
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>void CSockDlg::OnBclose() </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>{</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong> // TODO: Add your control notification handler code here</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>// вызываем функцию OnClose</strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>OnClose(); </strong>
</p>
<p style="text-align: justify; margin-right: 0in;">
	<strong>}</strong>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Сейчас после компиляции и запуска двух копий приложения мы сможем осуществить соединение между клиентской (см. рис. 22.7) и серверной (см. рис. 22.8) версиями приложения и пересылать между ними сообщения в обоих направлениях, а потом разорвать соединение из клиентского приложения, нажав на кнопку Close. (см рис.22.2)<strong> </strong>
</p>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_1230150e.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 22.7. Клиентская версия приложения
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<img src="i_8133601b9eac8a59_html_472dc16c.png" style="float: bottom;" alt="">
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	Рис. 22.8. Серверная версия приложения
</p>
<p style="text-align: center; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	Мы сможем восстановить соединение клиента с сервером, нажав на кнопку Connect еще раз. Если запустить третью копию приложения, изменим в ней номер порта, установим эту копию как сервер, включим режим ожидания запроса на соединение, можно переключать клиентское приложение, поочередно подключаясь, то к одному, то к другому, изменяя при этом номер порта.
</p>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<h1>Литература</h1>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<ol>
	<li>
	Айвор Хортон. Visual C++ 2010. Полный курс. - Издательский дом «Вильямс», 2011. – 1216 с.
	</li>
	<li>
	Сидорина Т.Л. Самоучитель Microsoft
	Visual Studio
	C++ и MFC. - СПб.: БХВ-Петербург. 2009. - 843 с.
	</li>
	<li>
	Голощапов А.Л. Microsoft Visual Studio 2010. – СПб.: БХВ-Петербург. 2011. – 544 с.
	</li>
	<li>
	Культин Н.Б. Программирование в Visual C++ 2010. Самоучитель – БХВ-Петербург, 2012. – 384 с..
	</li>
	<li>
	Давыдов В.Г. Visual
	C++.Разработка Windows-приложений с помощью MFC и API-функций. – СПб.: БХВ – Петербург, 2008. – 576 с. (+CDR)
	</li>
	<li>
	ПЕРВЫЕ ШАГИ – <a href="http://www.firststeps.ru" target="_blank" class="external">http://www.firststeps.ru</a>
	</li>
</ol>
<p style="text-align: center; margin-right: 0in;">
	<strong>Методические пособия кафедры</strong>
</p>
<p style="text-align: center; margin-right: 0in;">
	<br>
</p>
<ol>
	<li>
	Кириенко Н.А. Разработка Windows-приложений на языке С++ с использованием библиотеки MFC/ Учебно-методическое пособие по курсу «Визуальные средства разработки программных приложений» для студентов специальности 1-40 01 02-02 «Информационные системы и технологии (в экономике)» всех форм обучения – Минск: БГУИР, 2012. – 202 с.
	</li>
	<li>
	В.Н. Комличенко, Е.Н. Живицкая, С.А. Соколов и др. Лабораторный практикум по курсу «Визуальные средства разработки приложений» для студентов специальности 40 01 02-02 “Информационные системы и технологии в экономике” / -Мн.: БГУИР, 2002.-89с.: ил. 
	</li>
	<li>
	Комличенко В.Н., Едемская О.П., Кириенко Н.А. и др. Визуальные средства разработки приложений // Учеб.-метод. пособие по курсу «Объектно-ориентированное проектирование и программирование» для студентов спец. 40 01 02-02 «Информационные системы и технологии в экономике» дневной формы обучения. Мн.: БГУИР, 2004. - 68 с.
	</li>
</ol>
<p style="text-align: justify; margin-right: 0in; font-weight: normal;">
	<br>
</p>
<div>
	<p style="margin-right: 0in; font-weight: normal;">
		207
	</p>
	<br>
</div>
</div>
<footer class="footer_style">
<p>БГУИР 2016</p>
</footer>
</body>

</html>