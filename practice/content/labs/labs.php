<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>Лабораторная работа №1</TITLE>
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
      <li><a href="/theory/theory.php">Теория</a></li>
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
<br><br>
<p style="text-align: center;" rel="text-align: center;"><strong>ЛАБОРАТОРНАЯ РАБОТА №1</strong></p>
<p style="text-align: center;"><strong>«СОЗДАНИЕ SDI ПРИЛОЖЕНИЯ»</strong></p>
<p style="">
	Цели работы:
</p>
<ol>
	<li>ознакомиться с процессом создания Win32-приложения с помощью Microsoft Visual C++;</li>
	<li>узнать возможности классов, используемых при создании Win32-приложения.</li>
</ol>
<p style="">
	Задачи:
</p>
<ol>
	<li>создание простейшего Win32-приложения;</li>
	<li>разработка программы MiniDraw рисования прямых линий с возможностями удаления последней из нарисованных и всех линий рисунка.</li>
</ol>
<p><strong><center>Методические указания</center></strong></p>
<p style="">
	При разработке программ в VC++ и MFC обычно предполагается использование архитектуры «документ/представление». Названная архитектура позволяет связать данные с их представлением пользователю на экране. Логическое разделение данных программы и методов их визуального представления позволяет отображать документы разными способами, связав документ с несколькими представлениями (например, в Microsoft
Word доступны три вида одного и того же документа: обычный, разметка страниц и структура документа). Кроме того, в этом случае изменения, вносимые в документ в одном представлении, отображаются во всех других. В разработке приложений можно использовать как готовые представления (основанные на элементах управления, таких, как, деревья просмотра, списки, предоставляемых MFC), так и создавать собственные, перегружая функцию отображения, обработчики сообщений от клавиатуры, мыши и пунктов меню.
</p>
<p style="">
	Архитектура «документ/представление» предоставляет множество возможностей для работы с документом. Так, AppWizard способен генерировать каркас приложения, реализующий документы и представления средствами классов, производных от классов CDocument и CView (классы документа и представления).
</p>
<p style="">
	Класс документа в MFC отвечает за хранение данных, а также за их загрузку из файлов на диске; содержит функции, позволяющие другим классам (в частности, классу представления) получать или изменять данные таким образом, чтобы они были доступны для просмотра и редактирования. Этот класс должен обрабатывать команды меню, непосредственно воздействующие на данные документа.
</p>
<p style="">
	Представление – это часть программы, использующая библиотеку MFC для управления окном просмотра, обработки информации, вводимой пользователем, и отображения документа в окне.
</p>
<p style="">
	После того как AppWizard создаст основной шаблон программы (приложение 1), в класс представления необходимо добавить код для отслеживания действий мыши и рисования прямых линий в окне представления. Для создания обработчиков сообщений мыши и настройки окна представления используется мастер ClassWizard, для изменения меню программы – редактор ресурсов<span style="color: #ff00ff;">.</span>
</p>
<p style=" margin-left: 0in;">
	В первую очередь <span style="color: #000000;">необходимо определить класс для сохранения данных о каждой созданной линии. В начало файла заголовка </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;"> перед определением класса </span><span style="color: #000000;">CMiniDrawDoc</span><span style="color: #000000;"> добавьте следующее определение класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">:</span>
</p>
<p style=" margin-left: 0in;">
	<strong></strong>
</p>
<pre>
class CLine: public CObject{
    protected:
    int m_Xl, m_Yl, m_X2 , m_Y2;
    public:
    CLine (int XI, int Yl, int X2, int Y2){
        m_Xl = XI; m_Yl = Yl; m_X2 = X2; m_Y2 = Y2;
    }
    void Draw (CDC *PDC);
};
</pre>
<p style=""><strong></strong>
</p>
<p style="">
	<span style="color: #000000;">Переменные </span><span style="color: #000000;">m</span><span style="color: #000000;">_Х1 и </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Yl</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> сохраняют координаты одного конца прямой линии, m_Х2 и </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Y</span><span style="color: #000000;">2 - другого. Класс </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> содержит также функцию </span><span style="color: #000000;">Draw</span><span style="color: #000000;"> для рисования линии. </span>
</p>
<p style="">
	<span style="color: #000000;">В эту функцию передается указатель на объект класса </span><span style="color: #000000;">CDC</span><span style="color: #000000;">. Он необходим для вызова рисующих функций контекста устройства. Класс </span><span style="color: #000000;">CDC</span><span style="color: #000000;"> инкапсулирует функции инициализации контекста устройства, а также функции рисования.</span>
</p>
<p style="">
	<span style="color: #000000;">В дальнейшем мы узнаем, почему класс </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> порождается от </span><span style="color: #000000;">CObject</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">Теперь добавим в класс </span><span style="color: #000000;">CMiniDrawDoc</span><span style="color: #000000;"> (в файле </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;">) требуемые члены, вводя в начало определения класса следующие операторы:</span>
</p>
<pre>
class CMiniDrawDoc: public CDocument{
    protected:
    CTypedPtrArray&lt;CObArray , CLine*&gt; m_LineArray;
    public:
    void AddLine (int XI, int Yl, int X2, int Y2);
    CLine *GetLine (int Index);
    int GetNumLines ();
    // остальные определения класса CminiDrawDoc…
}
</pre>
<p style="">
	<span style="color: #000000;">Примечание. В</span> файле MiniDrawDoc.h надо подключить файл #include "Afxtempl.h"
</p>
<p style="">
	<span style="color: #000000;">Новая переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;"> – это экземпляр шаблона </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;">. Класс </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;"> генерирует семейство классов, каждый из которых является производным от класса, заданного в первом параметре шаблона (им может быть СОbАггау или </span><span style="color: #000000;">CPtrArray</span><span style="color: #000000;">). Каждый из этих классов предназначен для хранения переменных класса, описанных вторым параметром шаблона. Таким образом, переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;"> является объектом класса, порожденного от класса </span><span style="color: #000000;">CObArray</span><span style="color: #000000;"> и сохраняющего указатели на объекты класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">Класс СО</span><span style="color: #000000;">b</span><span style="color: #000000;">Аггау – это один из классов коллекций общего назначения в библиотеке </span><span style="color: #000000;">MFC</span><span style="color: #000000;">, используемый для сохранения групп переменных или объектов. Экземпляр класса СОbАггау хранит множество указателей на объекты класса </span><span style="color: #000000;">CObject</span><span style="color: #000000;"> (или любого класса, порожденного от </span><span style="color: #000000;">CObject</span><span style="color: #000000;">) в структуре данных, подобной массиву. </span><span style="color: #000000;">CObject</span><span style="color: #000000;"> – это </span><span style="color: #000000;">MFC</span><span style="color: #000000;">-класс, от которого прямо или косвенно порождаются практически все остальные классы. Однако вместо использования экземпляра класса общего назначения СОbАггау программа </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> использует шаблон </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;">, спроектированный специально для хранения объектов класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">. Это позволяет компилятору выполнять более интенсивный контроль соответствия типов данных, уменьшать число ошибок и сокращать число операций приведения типов при использовании объектов класса.</span>
</p>
<p style="">
	<span style="color: #000000;">Для использования шаблона класса </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;"> (или любого из шаблонов </span><span style="color: #000000;">MFC</span><span style="color: #000000;">-классов) в программу нужно включить файл заголовков </span><span style="color: #000000;">MFC</span><span style="color: #000000;">
	</span><span style="color: #000000;">Afxtempl</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;">. Чтобы сделать этот файл доступным для любого заголовочного или исходного файла в проекте </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">, его можно включить в стандартный файл заголовков </span><span style="color: #000000;">StdAfx</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;"> следующим образом:</span>
</p>
<div style="float: left;">
	<p style=" margin-left: 0in;">
		<span style="color: #000000;"></span>
	</p>
</div>
<pre>
#include&lt;afxwin.h&gt; // стандартные компоненты MFC
#include&lt;afxext.h&gt; // расширения библиотеки MFC
#include&lt;afxdtctl.h&gt; // поддержка общих элементов управления для Internet Explorer 4
#include &lt;afxtempl.h&gt; // шаблоны библиотеки MFC
#ifndef _AFX_NO_AFXCMN_SUPPORT
#include &lt;afxcmn.h&gt; //поддержка общих элементов управления для Windows 95
#endif // _AFX_NO_AFXCMN_SUPPORT
</pre>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">В </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;"> переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;"> используется для хранения указателя на каждый объект класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, сохраняющий информацию о линии. Функции </span>класса<span style="color: #000000;">
	</span><span style="color: #000000;">AddLine</span><span style="color: #000000;">, </span><span style="color: #000000;">GetLine</span><span style="color: #000000;"> и </span><span style="color: #000000;">GetNumLines</span><span style="color: #000000;"> предоставляют доступ к информации о линии, хранящейся в массиве </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;"> (другие классы не имеют к нему прямого доступа, так как переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;"> является защищенной).</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Теперь в конце файла реализации документа </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> введите определение (код) функции </span><span style="color: #000000;">CLine</span><span style="color: #000000;">::</span><span style="color: #000000;">Draw</span><span style="color: #000000;">:</span>
</p>
<p style=" ">
	<strong></strong>
</p>
<pre>
void CLine::Draw(CDC *PDC){
    PDC-&gt;MoveTo(m_Xl, m_Yl);
    PDC-&gt;LineTo(m_X2, m_Y2);
}
</pre>
<p style=" margin-right: 0in;"><strong></strong>
</p>
<p style="">
	<span style="color: #000000;">Чтобы создать линию по координатам, сохраненным в текущем объекте, функция </span><span style="color: #000000;">Draw</span><span style="color: #000000;"> вызывает две функции класса </span><span style="color: #000000;">CDC</span><span style="color: #000000;"> – </span><span style="color: #000000;">MoveTo</span><span style="color: #000000;"> и </span><span style="color: #000000;">LineTo</span><span style="color: #000000;">. Далее в конце файла </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> добавьте определения функций </span><span style="color: #000000;">AddLine</span><span style="color: #000000;">, </span><span style="color: #000000;">GetLine</span><span style="color: #000000;"> и </span><span style="color: #000000;">GetNumLines</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CminiDrawDoc</span><span style="color: #000000;">:</span>
</p>
<p style=" ">
	<strong></strong>
</p>
<pre>
void CMiniDrawDoc::AddLine(int X1, int Y1, int X2, int Y2){
    CLine *pLine=new CLine(X1, Y1, X2, Y2);
    m_LineArray.Add(pLine);
}
CLine* CMiniDrawDoc::GetLine(int Index){
    if(Index&lt;0||Index&gt;m_LineArray.GetUpperBound ())
        return 0;
    return m_LineArray.GetAt(Index);
}
int CMiniDrawDoc::GetNumLines(){
    return m_LineArray.GetSize();
}
</pre>
<p style=" margin-right: 2in;"><strong></strong>
</p>
<p style=" ">
	<span style="color: #000000;">Чтобы добавить указатель объекта в коллекцию указателей на класс </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, сохраненных в массиве </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;">, функция </span><span style="color: #000000;">AddLine</span><span style="color: #000000;"> создает новый объект класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> и вызывает функцию </span><span style="color: #000000;">Add</span><span style="color: #000000;"> класса СОbАггау.</span>
</p>
<p style="">
	<span style="color: #000000;">Обратите внимание: указатели, сохраненные в массиве </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;">, индексируются. Первый добавленный указатель имеет индекс 0, второй 1 и т.д. Функция </span><span style="color: #000000;">GetLine</span><span style="color: #000000;"> возвращает указатель с индексом, содержащимся в переданном параметре. Вначале она контролирует попадание индекса в допустимый интервал значений. Функция </span><span style="color: #000000;">GetUpperBound</span><span style="color: #000000;"> класса СОbАггау возвращает наибольший допустимый индекс, т.е. индекс последнего добавленного указателя. Далее функция </span><span style="color: #000000;">GetLine</span><span style="color: #000000;"> возвращает соответствующий указатель класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, получаемый в результате вызова функции </span><span style="color: #000000;">GetAt</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">Наконец, функция </span><span style="color: #000000;">GetNumLines</span><span style="color: #000000;"> возвращает количество объектов класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, сохраненных в переменной </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;">. Для этого вызывается функция </span><span style="color: #000000;">GetSize</span><span style="color: #000000;"> класса СОbАггау. Как вы увидите вскоре, функции </span><span style="color: #000000;">AddLine</span><span style="color: #000000;">, </span><span style="color: #000000;">GetLine</span><span style="color: #000000;"> и </span><span style="color: #000000;">GetNumLines</span><span style="color: #000000;"> вызываются функциями-членами класса представления.</span>
</p>
<p style="">
	Добавим в класс представления несколько переменных: m_<span style="color: #000000;">className</span><span style="color: #000000;">, </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Dragging</span><span style="color: #000000;">, </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">HCross</span><span style="color: #000000;">, </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">PointOld</span><span style="color: #000000;"> и </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">PointOrigin</span><span style="color: #000000;">. Для этого откройте файл </span><span style="color: #000000;">MiniDrawView</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;"> и добавьте выражения, выделенные полужирным шрифтом, в начало определения класса </span><span style="color: #000000;">CminiDrawView</span><span style="color: #000000;">:</span>
</p>
<p style="">
	<span style="color: #000000;"></span>
</p>
<pre>
class CMiniDrawView : public CView{
 protected:
CString m_ClassName;
int m_Dragging;
HCURSOR m_HCross;
CPoint m_PointOld;
CPoint m_PointOrigin;
</pre>
<p style=" margin-left: 0in;"><strong></strong>
</p>
<p style=""><br>
</p>
<p style="">
	Назначение этих элементов описано ниже.
</p>
<p style="">
	<span style="color: #000000;">Добавьте в конструктор класса </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;"> в файле </span><span style="color: #000000;">MiniDrawView</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> код инициализации </span><span style="color: #000000;">переменных </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Dragging</span><span style="color: #000000;"> и </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Hcross</span><span style="color: #000000;">:</span>
</p>
<p style="">
	<span style="color: #000000;"></span>
</p>
<pre>
// Конструктор класса CMiniDrawView
CMiniDrawView::CMiniDrawView()
{
// TODO: Здесь добавьте код конструктора
m_Dragging = 0;
m_HCross=AfxGetApp()-&gt;LoadStandardCursor(IDC_CROSS);
}
</pre>
<p style="">
	<span style="color: #000000;">Переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">HCross</span><span style="color: #000000;"> хранит дескриптор указателя мыши, отображаемого про</span><span style="color: #000000;">граммой, когда тот находится внутри окна представления. Функция </span><span style="color: #000000;">AfxGetApp</span><span style="color: #000000;">
	</span><span style="color: #000000;">возращает указатель на объект класса приложения (класс </span><span style="color: #000000;">CMiniDrawApp</span><span style="color: #000000;">, порожде</span><span style="color: #000000;">нный от класса </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;">), где он используется для вызова функции </span><span style="color: #000000;">Loa</span><span style="color: #000000;">dStandardCursor</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;">. Эта функция при получении идентификатора </span><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">CROSS</span><span style="color: #000000;">
	</span><span style="color: #000000;">возвращает дескриптор стандартного крестообразного указателя</span><span style="color: #000000;">. Ниже </span><span style="color: #000000;">приведены значения, которые можно </span><span style="color: #000000;">передать в функцию </span><span style="color: #000000;">LoadStandardCursor</span><span style="color: #000000;"> для получения дескрипторов дру</span><span style="color: #000000;">гих стандартных указателей:</span>
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">ARROW</span><span style="color: #000000;">…………………..……………………....</span><span style="color: #000000;"> стандартный указатель-стрелка</span>
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">CROSS</span><span style="color: #000000;">…………………...…….………………….п</span><span style="color: #000000;">ерекрестье, используемое для&nbsp;</span>выбора
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">IBEAM</span><span style="color: #000000;">…………………………….……………...у</span><span style="color: #000000;">казатель для редактирования&nbsp;</span>текста
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">SIZEALL</span><span style="color: #000000;">………………………………………….у</span><span style="color: #000000;">казатель из четырех стрелок</span><span style="color: #000000;">&nbsp;</span>для изменения размеров окна
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">SIZENESW</span><span style="color: #000000;">…………………….…….</span><span style="color: #000000;">двунаправленная стрелка, ука</span>зывающая на северо-восток&nbsp;и <span style="color: #000000;">юго-запад</span>
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">SIZENS</span><span style="color: #000000;"> ………..…………………………………двунаправленная стрелка, ука</span>зывающая на север и юг
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">SIZENWSE</span><span style="color: #000000;">…………………………….</span><span style="color: #000000;">двунаправленная стрелка, ука</span>зывающая на северо-запад&nbsp;и <span style="color: #000000;">юго-восток</span>
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">SIZEWE</span><span style="color: #000000;">…………………………………….……..</span><span style="color: #000000;">двунаправленная стрелка, ука</span>зывающая на запад и восток
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">UPARROW</span><span style="color: #000000;">..………………………………………в</span><span style="color: #000000;">ертикальная стрелка</span>
</p>
<p style=""><span style="color: #000000;">IDC</span><span style="color: #000000;">_</span><span style="color: #000000;">WAIT</span><span style="color: #000000;">………………………………………</span><span style="color: #000000;">«песочные часы», используе</span>мые при длительном выполнении <span style="color: #000000;">задачи</span>
</p>
<p style="">
	AfxGetApp – это глобальная функция библиотеки MFC, которая не является членом класса и содержит глобальные функции, начинающиеся с префикса Afx.
</p>
<p style="">
	<span style="color: #000000;">Чтобы пользователь мог рисовать линии внутри окна представления с помо</span><span style="color: #000000;">щью мыши, программа должна реагировать на события, происходящие внутри </span><span style="color: #000000;">этого окна. Для обработки сообщения, передаваемого мышью, в класс представления необходимо добавить функцию обработки сообщений.</span>
</p>
<p style="">
	<strong>Обработка сообщений. </strong>С каждым окном в графической программе связана функция, называемая процедурой окна. Когда происходит некоторое событие, операционная система вызывает эту функцию, передавая ей идентификатор происшедшего события и данные для его обработки. Подобный процесс называется передачей сообщения окну.
</p>
<p style="">
	<span style="color: #000000;">Процедура окна с помощью библиотеки </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> создается автоматически. </span><span style="color: #000000;">Если необходима собственная обработка сообщения, то создается функция </span><span style="color: #000000;">обработки сообщения</span><span style="color: #000000;"><em>, </em></span><span style="color: #000000;">являющаяся членом класса управления окном. Для </span><span style="color: #000000;">определения обработчика сообщения можно воспользоваться </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;">, как </span><span style="color: #000000;">описано ниже.</span>
</p>
<p style="">
	<span style="color: #000000;">Например, если указатель находится внутри окна представления, то при нажатии лев</span><span style="color: #000000;">ой кнопки мыши передается идентификатор </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONDOWN</span><span style="color: #000000;">. </span><span style="color: #000000;">Чтобы преду</span><span style="color: #000000;">смотреть собственную обработку этого сообщения, используйте мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> для создания функции класса представления, обрабатывающей данное сообщение.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Командные сообщения. </strong></span><span style="color: #000000;">MFC</span><span style="color: #000000;"> обеспечивает специальную обработку сообщений, </span><span style="color: #000000;">генерируемых объектами пользовательского интерфейса, стандартными элементами, </span><span style="color: #000000;">поддерживаемыми библиотекой </span><span style="color: #000000;">MFC</span><span style="color: #000000;">: меню, комбинации клавиш, кнопки пане</span><span style="color: #000000;">лей инструментов, строки состояния, элементы управления диалоговых окон </span><span style="color: #000000;">(термин “объект” в данном случае относится не к объектам языка C++</span><span style="color: #000000;">). Сообщения, генерируемые объектами пользовательского </span><span style="color: #000000;">интерфейса, называют командными сообщениями</span><span style="color: #000000;"><em>. </em></span><span style="color: #000000;">Каждый раз, когда пользователь </span><span style="color: #000000;">выбирает объект интерфейса или когда один из этих объектов необходимо обновить, </span><span style="color: #000000;">объект передает командное сообщение главному окну. Однако библиотека </span><span style="color: #000000;">MFC</span><span style="color: #000000;">
	</span><span style="color: #000000;">сразу направляет сообщение объекту окна представления. Если он не имеет </span><span style="color: #000000;">нужного обработчика, библиотека </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> направляет сообщение объекту документа. </span><span style="color: #000000;">Если же объект документа не содержит обработчик, библиотека </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> направляет </span><span style="color: #000000;">сообщение объекту главного окна программы. Если главное окно также не распо</span><span style="color: #000000;">лагает обработчиком, сообщение направляется объекту приложения. Наконец, если </span><span style="color: #000000;">объект приложения не обеспечивает обработку, то сообщение обрабатывается </span><span style="color: #000000;">стандартным образом.</span>
</p>
<p style="">
	<span style="color: #000000;">Таким образом, библиотека </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> расширяет основной механизм сообщений, что</span><span style="color: #000000;">бы командные сообщения обрабатывались не только объектами, управляющими </span><span style="color: #000000;">ими, но и любыми другими объектами приложения. Каждый из них принадлежит кл</span><span style="color: #000000;">ассу, прямо или косвенно порожденному от класса </span><span style="color: #000000;">CCmdTarget</span><span style="color: #000000;">, реализующего ме</span><span style="color: #000000;">ханизм передачи сообщений.</span>
</p>
<p style="">
	<span style="color: #000000;">Важной особенностью такого механизма является то, что программа может о</span><span style="color: #000000;">брабатывать нужное сообщение внутри наиболее подходящего для этого класса. Например, в программе, созданной мастером </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;">, команда </span><span style="color: #000000;">Exit</span><span style="color: #000000;"> в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> обр</span><span style="color: #000000;">абатывается классом приложения, так как эта команда воздействует на приложение в ц</span><span style="color: #000000;">елом. С другой стороны, команда </span><span style="color: #000000;">Save</span><span style="color: #000000;"> в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> обрабатывается классом </span><span style="color: #000000;">Документа, так как этот класс отвечает за хранение и запись данных документа.</span>
</p>
<p style="">
	<span style="color: #000000;">Далее вы узнаете, как добавлять команды меню и другие объекты интерфейса, о</span><span style="color: #000000;">пределять, какому именно классу следует обрабатывать конкретное сообщение и </span><span style="color: #000000;">как создавать обработчики сообщений.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Функция</strong></span><span style="color: #000000;">
	</span><span style="color: #000000;"><strong>OnLButtonDown</strong></span><span style="color: #000000;">. </span><span style="color: #000000;">Следующая задача состоит в определении обработчика сообщения WM_LBUTTON</span><span style="color: #000000;">DOWN</span><span style="color: #000000;">, </span><span style="color: #000000;">которое передается при каждом нажатии левой кнопки мыши, </span><span style="color: #000000;">если указатель находится внутри окна представления</span><span style="color: #000000;"><strong>. </strong></span><span style="color: #000000;">Для определения функции выполните следующие действия:</span>
</p>
<ol>
	<li>
	Выберите в меню View команду ClassWizard... или нажмите Ctrl+W. Откроется диалоговое окно мастера ClassWizard.
	</li>
	<li>
	<span style="color: #000000;">В диалоговом окне мастера </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> откройте вкладку </span><span style="color: #000000;">Message</span><span style="color: #000000;">
	</span><span style="color: #000000;">Maps</span><span style="color: #000000;">, позволяющую определить обработчик сообщений.</span>
	</li>
	<li>
	<span style="color: #000000;">В списке </span><span style="color: #000000;">Class</span><span style="color: #000000;">
	</span><span style="color: #000000;">name</span><span style="color: #000000;"> выберите класс </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;">, чтобы добавить функцию обработки сообщений в класс представления.</span>
	</li>
	<li>
	<span style="color: #000000;">В списке </span><span style="color: #000000;">Object</span><span style="color: #000000;">
	</span><span style="color: #000000;">IDs</span><span style="color: #000000;"> выберите пункт </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;">. Выбор класса </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;"> задает функцию-член для обработки любого уведомляющего сообщения, переданного окну представления, что позволяет переопределить одну из виртуальных функций, которую класс </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;"> наследует от </span><span style="color: #000000;">CView</span><span style="color: #000000;"> и других базовых классов библиотеки </span><span style="color: #000000;">MFC</span><span style="color: #000000;">. Другие пункты в списке </span><span style="color: #000000;">Object</span><span style="color: #000000;">
	</span><span style="color: #000000;">IDs</span><span style="color: #000000;"> определяют сообщения, поступающие от объектов интерфейса (команды меню). Выбор одного из этих пунктов задает обработчик сообщений, поступающих от выбранного объекта.</span>
	</li>
	<li>
	<span style="color: #000000;">В списке сообщений </span><span style="color: #000000;">Messages</span><span style="color: #000000;"> выберите идентификатор </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONDOWN</span><span style="color: #000000;">, </span><span style="color: #000000;">обрабатываемый определяемой функцией. </span><span style="color: #000000;">Messages</span><span style="color: #000000;"> содержит идентификаторы всех уведомляющих сообщений, которые передаются окну представления (идентификаторы сообщений - это константы, записанные заглавными буквами и начинающиеся с префикса </span><span style="color: #000000;">WM</span><span style="color: #000000;"><strong>_</strong></span><span style="color: #000000;">). </span><span style="color: #000000;">Список </span><span style="color: #000000;">Messages</span><span style="color: #000000;"> также содержит имена всех виртуальных функций, принадлежащих классу </span><span style="color: #000000;">CView</span><span style="color: #000000;">. Их можно выбирать, чтобы переопределять стандартные функции. Обратите внимание: при выборе конкретного идентификатора сообщения или виртуальной функции внизу диалогового окна </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> появляется соответствующее краткое описание.</span>
	</li>
	<li>
	Щелкните на кнопке AddFunction. Теперь ClassWizard создает шаблон обработчика сообщения с именем OnLButtonDown. В частности, ClassWizard объявляет функцию в определении класса CMiniDrawView в файле MiniDrawView.h, вносит ее определение в файл MiniDrawView.cpp и добавляет функцию в схему сообщений класса. Теперь имя сообщения в списке Messages отображается полужирным шрифтом - для него задан обработчик. Заметьте: имя функции и сообщения добавлено в список функций Member functions. Пункт, отмеченный буквой "W", означает обработчик сообщения Windows; "V" - виртуальную функцию (рис. 1.1).
	</li>
</ol>
<p style="text-align: center;">
	<img src="i_c8a70228255136ad_html_f4b6906c.png" alt="" style="float: bottom;">
</p>
<p style="">
	<br>
</p>
<p style="text-align: center;">
	<span style="color: #000000;">Рис.1.1 </span><span style="color: #000000;"><em>Диалоговое окно для создания обработчиков событий</em></span>
</p>
<p style="text-align: center;">
	<span style="color: #000000;"> <em>и переопределения виртуальных функций</em></span>
</p>
<ol>
	<li>
	Щелкните на Edit
Code – диалоговое окно ClassWizard закроется. Мастер ClassWizard откроет файл MiniDrawView.cpp (если он еще не открыт) и отобразит только что созданную функцию OnLButtonDown, чтобы можно было добавить ее код.
	</li>
	<li>
	Добавьте в функцию OnLButtonDown в файле MiniDrawView.cpp операторы, выделенные полужирным шрифтом:
	</li>
</ol>
<pre>
void CMiniDrawView::OnLButtonDown(UINT nFlags, CPoint point)
 {
    // TODO: Здесь добавьте собственный код обработчика
// и/или вызов стандартного обработчика
    m_PointOld=point;
 m_PointOrigin=point;
 SetCapture();
 m_Dragging=1;
 RECT Rect;
 //CONST RECT *Rect1;
 GetClientRect(&Rect);
 ClientToScreen(&Rect);
 ::ClipCursor(&Rect);
CView::OnLButtonDown(nFlags, point)
}
</pre>
<p><br>
</p>
<p style="">
	<span style="color: #000000;">Если указатель находится в окне представления, то после нажатия левой кнопки мыши управление будет передано функции </span><span style="color: #000000;">OnLButtonDown</span><span style="color: #000000;">, а параметр </span><span style="color: #000000;"><em>point</em></span><span style="color: #000000;"><em>
	</em></span><span style="color: #000000;">будет содержать текущую позицию указателя. Эта позиция сохраняется в переменных </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">PointOrigin</span><span style="color: #000000;"> и </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">PointOld</span><span style="color: #000000;">. Переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">PointOrigin</span><span style="color: #000000;"> хранит координаты начальной точки линии. Переменная </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">PointOld</span><span style="color: #000000;">, как вы скоро увидите, используется другими обработчиками сообщений для получения информации о положении указателя мыши в момент предыдущего сообщения. </span>
</p>
<p style="">
	<span style="color: #000000;">Мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> добавляет строку в функцию </span><span style="color: #000000;">OnLButtonDown</span><span style="color: #000000;">, вызывающую функцию </span><span style="color: #000000;">OnLButtonDown</span><span style="color: #000000;">, определенную в базовом классе. Это делается для того, чтобы базовый класс мог выполнять стандартную обработку сообщений.</span>
</p>
<p style="">
	<span style="color: #000000;">Вызов функции </span><span style="color: #000000;">SetCapture</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CWnd</span><span style="color: #000000;"> приводит к захвату мыши, и все последующие ее сообщения передаются в окно представления, пока захват не будет отменен. Таким образом, окно представления полностью контролирует мышь</span><span style="color: #000000;"><sub>
	</sub></span><span style="color: #000000;">в процессе рисования линии. Значение переменной </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Dragging</span><span style="color: #000000;"> устанавливается равным 1, что информирует других обработчиков сообщений о выполнении операции рисования.</span>
</p>
<p style="">
	<span style="color: #000000;">Оставшийся фрагмент программы предназначен для ограничения перемещения указателя мыши границами окна представления. Функция </span><span style="color: #000000;">CWnd</span><span style="color: #000000;">::</span><span style="color: #000000;">GetClientRect</span><span style="color: #000000;"> возвращает текущие координаты окна представления, </span><span style="color: #000000;">a</span><span style="color: #000000;">
	</span><span style="color: #000000;">CWnd</span><span style="color: #000000;">::</span><span style="color: #000000;">ClientToScreen</span><span style="color: #000000;"> преобразовывает их в экранные (т.е. координаты, заданные по отношению к верхнему левому углу экрана). Наконец, функция ::</span><span style="color: #000000;">ClipCursor</span><span style="color: #000000;"> ограничивает перемещения указателя в пределах заданных координат, удерживая его в окне представления.</span>
</p>
<p style="">
	<span style="color: #000000;">Функция ::</span><span style="color: #000000;">ClipCursor</span><span style="color: #000000;"> содержится в Win32 </span><span style="color: #000000;">API</span><span style="color: #000000;">, а не в </span><span style="color: #000000;">MFC</span><span style="color: #000000;">. Поскольку она описана как глобальная, ее имени предшествует операция расширения области видимости (::). Использование данной операции не является необходимым, если глобальная функция не скрыта функцией-членом с таким же именем.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Схема сообщений.</strong></span><span style="color: #000000;"> Когда мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> создает обработчик сообщения, то помимо объявления и определения функции-члена он также добавляет ее в специальную структуру </span><span style="color: #000000;">MFC</span><span style="color: #000000;">, называемую схемой (картой) сообщений (</span><span style="color: #000000;">message</span><span style="color: #000000;">
	</span><span style="color: #000000;">map</span><span style="color: #000000;">) и связывающую функции с</span><span style="color: #000000;"><sup>
	</sup></span><span style="color: #000000;">обрабатываемыми сообщениями. Схема сообщений позволяет библиотеке </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> вызывать для каждого типа сообщения соответствующий обработчик.</span>
</p>
<p style="">
	<span style="color: #000000;">Мастера </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;"> и </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> создают необходимый код для реализации схемы сообщений, основанной на наборе </span><span style="color: #000000;">MFC</span><span style="color: #000000;">-макросов. После применения мастера </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> для определения обработчиков трех видов сообщений мыши (создание которых рассматривается ниже) в файл </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;"> будут добавлены следующие макросы и объявления функций:</span>
</p>
<pre>
// Сгенерированные функции схемы сообщений
protected:
//{{AFX_MSG(CMiniDrawView)
afx_msg void OnLButtonDown(UINT nFlags, CPoint point);
afx_msg void OnMouseMove(UINT nFlags, CPoint point);
afx_msg void OnLButtonOp(UINT nFlags, CPoint point);
//}}AFX_MSG DECLARE MESSAGE MAP()
В файл реализации представления MiniDrawView.cpp будут добавлены соответственно следующие макросы:
BEGIN_MESSAGE_MAP (CMiniDrawView, CView)
//{(AFX_MSG_MAP(CMiniDrawView)
ON_WM_LBUTTONDOWN ()
ON_WM_MOUSEMOVE ()
ON_WM_LBUTTONUP ()
//}}AFX_MSG_MAP END_MESSAGE_MAP()
</pre>
<p style="">
	<span style="color: #000000;">Когда сообщение передается объекту класса, </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> обращается к схеме сообщений, чтобы определить, есть ли в классе обработчик такого сообщения. Если обработчик найден, ему передается управление. При отсутствии обработчика </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> ищет его в базовом классе. Если это не дает результата, то поиск будет продолжен по иерархии классов до первого встретившегося обработчика. Если в иерархии обработчик отсутствует, то будет выполнена стандартная обработка сообщения. Если же это командное сообщение, то оно перенаправляется следующему объекту в описанной ранее последовательности.</span>
</p>
<p style="">
	<span style="color: #000000;">Обратите внимание: некоторые из классов библиотеки </span><span style="color: #000000;">MFC</span><span style="color: #000000;">, от которых порождены классы программы, содержат обработчики сообщений. Следовательно, даже если производный класс не определяет обработчик сообщения, обработчик базового класса может обеспечить соответствующую обработку. Например, базовый класс Документа </span><span style="color: #000000;">CDocument</span><span style="color: #000000;"> содержит обработчики сообщений, поступающих при выборе команд </span><span style="color: #000000;">Save</span><span style="color: #000000;">, </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">... и </span><span style="color: #000000;">Close</span><span style="color: #000000;"> в меню </span><span style="color: #000000;">File (</span><span style="color: #000000;">соответственно</span><span style="color: #000000;"> OnFileSave, OnFileSaveAs </span><span style="color: #000000;">И</span><span style="color: #000000;"> OnFileClose).</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Функция </strong></span><span style="color: #000000;"><strong>OnMouseMove</strong></span><span style="color: #000000;"><strong>.</strong></span><span style="color: #000000;"> Далее следует определить функцию для обработки сообщения </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MOUSEMOVE</span><span style="color: #000000;">. </span><span style="color: #000000;">Так как пользователь перемещает указатель мыши внутри окна представления, это окно получает последовательность сообщений </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MOUSEMOVE</span><span style="color: #000000;">, каждое из которых содержит информацию о текущей позиции указателя. Для определения обработчика таких сообщений используйте мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;">. Выполните последовательность действий, приведенную в предыдущем параграфе. Однако на шаге 5 в списке </span><span style="color: #000000;">Messages</span><span style="color: #000000;"> выберите сообщение </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MOUSEMOVE</span><span style="color: #000000;">
	</span><span style="color: #000000;">вместо сообщения </span>WM_LBUTTONDOWN<span style="color: #000000;">. Мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> создаст функцию </span><span style="color: #000000;">OnMouseMove</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">После щелчка на </span><span style="color: #000000;">Edit</span><span style="color: #000000;">
	</span><span style="color: #000000;">Code</span><span style="color: #000000;"> введите в функцию </span><span style="color: #000000;">OnMouseMove </span><span style="color: #000000;">строки</span><span style="color: #000000;">:</span>
</p>
<p style="">
	<span style="color: #000000;"></span>
</p>
<pre>
void CMiniDrawView::OnMouseMove(UINT nFlags, CPoint point)
{
// TODO: Здесь добавьте собственный код обработчика
// и/или вызов стандартного обработчика
::SetCursor (m_HCross);
if (m_Dragging)
{
CClientDC ClientDC (this);
ClientDC.SetROP2(R2_NOT);
ClientDC.MoveTo(m_PointOrigin);
ClientDC.LineTo(m_PointOld);
ClientDC.MoveTo (m_PointOrigin);
ClientDC.LineTo(point);
m_PointOld=point;
}
CView::OnMouseMove(nFlags, point);
}
</pre>
<p style="">
	<span style="color: #000000;">При перемещении указателя мыши внутри окна представления функция </span><span style="color: #000000;">OnMouseMove</span><span style="color: #000000;"> вызывается через определенные промежутки времени. Добавленный в нее код обеспечивает решение двух основных задач: первой – вызов </span><span style="color: #000000;">API</span><span style="color: #000000;">-функции ::</span><span style="color: #000000;">SetCursor</span><span style="color: #000000;"> для отображения крестообразного курсора вместо стандартного курсора-стрелки. Вспомните: дескриптор крестообразного курсора получен в конструкторе класса; второй – выполнения операции рисования (значение переменной </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Dragging</span><span style="color: #000000;"> отлично от нуля). При этом выполняются следующие действия:</span>
</p>
<ol>
	<li>стирание линии, нарисованной при получении предыдущего сообщения WM_MOUSEMOVE(если она имеется);
	</li>
	<li>рисование новой линии от начальной точки, в которой была нажата левая кнопка мыши с координатами, сохраняемыми в переменной m_PointOrigin, до текущей позиции указателя, заданной параметром point;
	</li>
	<li>сохранение текущей позиции указателя в переменной m_PointOld.
	</li>
</ol>
<p style="">
	<span style="color: #000000;">Для рисования внутри окна функция </span><span style="color: #000000;">OnMouseMove</span><span style="color: #000000;"> создает объект контекста устройства, связанный с окном представления. Затем </span><span style="color: #000000;">OnMouseMove</span><span style="color: #000000;"> вызывает функцию </span><span style="color: #000000;">CDC</span><span style="color: #000000;">::</span><span style="color: #000000;">SetROP</span><span style="color: #000000;">2, задающую режим рисования, в котором линии строятся методом инвертирования (обращения) текущего цвета экрана. В этом режиме линия, нарисованная в определенной позиции в первый раз, будет видима, а при повторном выводе в той же самой позиции - невидима. Таким образом, обработчики сообщения легко отображают и удаляют группы временных линий. Линии выводятся с помощью </span><span style="color: #000000;">CDC</span><span style="color: #000000;">::</span><span style="color: #000000;">MoveTo</span><span style="color: #000000;">, указывающей положение одного конца линии, и </span><span style="color: #000000;">CDC</span><span style="color: #000000;">:</span><span style="color: #000000;">:</span><span style="color: #000000;">LineTo</span><span style="color: #000000;">, задающей положение другого конца.</span>
</p>
<p style="">
	<span style="color: #000000;">Окончательный результат использования </span><span style="color: #000000;">OnMouseMove</span><span style="color: #000000;"> состоит в том, что при перемещении указателя с нажатой кнопкой мыши внутри окна представления временная линия всегда соединяет свое начало с текущей позицией указателя. Показывает, какой будет постоянная линия, если пользователь отпустит кнопку мыши сейчас.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Функция </strong></span><span style="color: #000000;"><strong>OnLButtonUp</strong></span><span style="color: #000000;"><strong>. </strong></span><span style="color: #000000;">Наконец, необходимо определить функцию для обработки сообщения </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONUP</span><span style="color: #000000;">, </span><span style="color: #000000;">передаваемого при отпускании левой кнопки мыши. Чтобы создать функцию, используйте мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;">, как и для двух предыдущих сообщений. Однако в списке </span><span style="color: #000000;">Messages</span><span style="color: #000000;"> диалогового окна мастера выберите идентификатор </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONUP</span><span style="color: #000000;">. </span><span style="color: #000000;">Когда функция будет сгенерирована – добавьте в ее определение в файле </span><span style="color: #000000;">MiniDrawView</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> следующий текст:</span>
</p>
<pre>
void CMiniDrawView::OnLButtonUp(UINT nFlags, CPoint point)
{
// TODO: Здесь добавьте код собственного обработчика 
// и/или вызов стандартного обработчика 
if (m_Dragging)
{
m_Dragging = 0;
::ReleaseCapture();
::ClipCursor (NULL);
CClientDC ClientDC (this);
ClientDC.SetROP2 (R2_NOT);
ClientDC.MoveTo (m_PointOrigin);
ClientDC.LineTo (m_PointOld);
ClientDC.SetROP2 (R2_COPYPEN);
ClientDC.MoveTo (m_PointOrigin);
ClientDC.LineTo (point);
CMiniDrawDoc* pDoc=GetDocument();
pDoc-&gt;AddLine(m_PointOrigin.x, m_PointOrigin.y, point.x, point.y);
}
CView::OnLButtonUp(nFlags, point);
}
</pre>
<p style="">
	<span style="color: #000000;">Если пользователь перемещает указатель мыши с нажатой кнопкой (значение переменной </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">Dragging</span><span style="color: #000000;"> отлично от нуля), добавленный код завершает операцию рисования и строит постоянную линию. В частности, выполняются следующие действия:</span>
</p>
<ol>
	<li>присваивание значения 0 переменной m_Dragging, что информирует других обработчиков сообщений о завершении операция рисования;
	</li>
	<li>вызов API-функции ::ReleaseCapture для завершения захвата мыши. После этого сообщения мыши будут снова передаваться любому окну, в котором находится указатель;
	</li>
	<li>передача указателя NULL
в API-функцию ::ClipCursor, что позволяет пользователю снова перемещать указатель мыши по всему экрану;
	</li>
	<li>стирание временной линии, выведенной предыдущим обработчиком сообщения WM_MOUSEMOVE;
	</li>
	<li>вывод постоянной линии от начальной точки до текущей позиции указателя;
	</li>
	<li>добавление новой линии в список существующих линий.
	</li>
</ol>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONUP</span><span style="color: #000000;">
	</span><span style="color: #000000;">– это последнее сообщение мыши, которое нужно обработать в программе </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">. Ниже приведен полный список уведомляющих сообщений. Возможно, вы захотите обработать некоторые из них в других программах </span><span style="color: #000000;">Windows</span><span style="color: #000000;">:</span>
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MOUSEMOVE</span><span style="color: #000000;">………..……………………..п</span>еремещен указатель мыши на новое место&nbsp;внутри рабочей области
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONDOWN</span><span style="color: #000000;">……………………………..н</span>ажата левая кнопка
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MBUTTONDOWN</span><span style="color: #000000;">…………………………….н</span>ажата средняя кнопка
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">RBUTTONDOWN</span><span style="color: #000000;">……………………………..н</span>ажата правая кнопка
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONUP</span><span style="color: #000000;">………………………………….</span>отпущена левая кнопка
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MBUTTONUP</span><span style="color: #000000;">…………………………………</span>отпущена средняя кнопка
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">RBUTTONUP</span> ………………………………..отпущена правая кнопка
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">LBUTTONDBCLICK</span><span style="color: #000000;">…….……………………</span>выполнено двойное нажатие левой кнопки
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MBUTTONDBCLICK</span><span style="color: #000000;">…………………………</span>выполнено двойное нажатие средней кнопки
</p>
<p style="">
	<span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">RBUTTONDBCLICK</span><span style="color: #000000;">………………………….</span>выполнено двойное нажатие правой кнопки
</p>
<p style="">
	<span style="color: #000000;"><strong>Параметры сообщений мыши.</strong></span><span style="color: #000000;"> Всем обработчикам сообщений передаются два параметра: </span><span style="color: #000000;">nFlags</span><span style="color: #000000;"> и </span><span style="color: #000000;">point</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">Параметр </span><span style="color: #000000;">nFlags</span><span style="color: #000000;"> показывает состояние кнопок мыши и некоторых клавиш в момент наступления события. Состояние каждой кнопки или клавиши представляется специальным битом. Для обращения к отдельным битам можно использовать битовые маски (табл. 1.3). Например, в следующем фрагменте проверяется, была ли нажата клавиша </span><span style="color: #000000;">Shift</span><span style="color: #000000;"> при перемещении мыши:</span>
</p>
<pre>
void CminiDrawView::OnMouseMove(UINT nFlags, CPoint point)
{
 if(nFlags&MK_SHIFT)
    // клавиша Shift была нажата при перемещении мыши
}
</pre>
<p style="">
	Параметр point – это структура CPoint, задающая координаты курсора мыши в тот момент, когда произошло событие мыши. Поле x (point.x) содержит горизонтальную координату указателя, поле y (point.y) – вертикальную. Координаты определяют местоположение указателя относительно верхнего левого угла окна. Точнее говоря, параметр point задает координаты острия указателя мыши. Острие – это отдельный пиксель внутри указателя, выделяемый при его проектировании. Острием стандартного курсора-стрелки является ее конец, а острием стандартного крестообразного курсора – точка пересечения его линий. Ниже приведены битовые маски для доступа к битам параметра nFlags, передаваемого обработчику сообщения мыши:
</p>
<p>
MK_CONTROL………………………………………….Ctrl
</p>
<p>
MK_LBUTTON………………………………………….левая кнопка мыши
</p>
<p>
MK_MBUTTON…………………………………………средняя кнопка мыши
</p>
<p>
MK_RBUTTON………………………………………….правая кнопка мыши
</p>
<p>
MK_SHIFT……………………………………………….Shift
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;"><strong>Перерисовка окна</strong></span><span style="color: #000000;">. Теперь программа постоянно хранит данные, позволяющие восстановить линию, а класс представления может использовать их при перерисовке окна. Вспомните: для перерисовки окна система удаляет его содержимое, а затем вызывает функцию </span><span style="color: #000000;">OnDraw</span><span style="color: #000000;"> класса представления. В минимальную версию функции </span><span style="color: #000000;">OnDraw</span><span style="color: #000000;">, генерируемую мастером </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;">, необходимо добавить собственный код для перерисовки окна. Для этого в функцию </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;">: :</span><span style="color: #000000;">OnDraw</span><span style="color: #000000;"> в файле </span><span style="color: #000000;">MiniDrawView</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> необходимо добавить строки:</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;"></span>
</p>
<pre>
// Отображение данных класса CMiniDrawView
void CMiniDrawView::OnDraw(CDC* pDC)
{
CMiniDrawDoc* pDoc=GetDocument();
ASSERT_VALID(pDoc);
  int Index=pDoc-&gt;GetNumLines();
  while(Index--)
pDoc-&gt;GetLine (Index)-&gt;Draw (pDC);
}
</pre>
<p style="">
	<span style="color: #000000;">В этом коде вызывается функция </span><span style="color: #000000;">CMiniDrawDoc</span><span style="color: #000000;">::</span><span style="color: #000000;">GetNumLines</span><span style="color: #000000;">, позволяющая определить количество линий, сохраненных объектом документа. В этом фрагменте программы для каждой линии сначала вызывается функция </span><span style="color: #000000;">CMiniDrawDoc</span><span style="color: #000000;">::</span><span style="color: #000000;">GetLine</span><span style="color: #000000;">, которая получает указатель на соответствующий объект класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, а затем этот указатель используется для рисования линии с помощью </span><span style="color: #000000;">CLine</span><span style="color: #000000;">::</span><span style="color: #000000;">Draw</span>
</p>
<p style="">
	<span style="color: #000000;">Так как графические данные хранятся внутри объекта документа, целесообразно добавить в программу некоторые команды меню </span><span style="color: #000000;">Edit</span><span style="color: #000000;">, чтобы можно было эти данные изменять. Далее будут добавлены команды </span><span style="color: #000000;">Undo</span><span style="color: #000000;"> для удаления последней нарисованной линии и </span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;"> для удаления всех линий.</span>
</p>
<p style="">
	<span style="color: #000000;">Рассмотрим, как можно использовать редактор ресурсов для настройки программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> (меню и значка). В окне </span><span style="color: #000000;">Project</span><span style="color: #000000;">
	</span><span style="color: #000000;">Workspace</span><span style="color: #000000;"> откройте вкладку </span><span style="color: #000000;">ResourceView</span><span style="color: #000000;"> и разверните граф ресурсов программы всех категорий: </span><span style="color: #000000;">Accelerator</span><span style="color: #000000;">, </span><span style="color: #000000;">Dialog</span><span style="color: #000000;">, </span><span style="color: #000000;">Icon</span><span style="color: #000000;">, </span><span style="color: #000000;">Menu</span><span style="color: #000000;">, </span><span style="color: #000000;">String</span><span style="color: #000000;">
	</span><span style="color: #000000;">Table</span><span style="color: #000000;"> и </span><span style="color: #000000;">Version</span><span style="color: #000000;">.</span>
</p>
<p style="">
	Чтобы настроить меню программы, сделайте следующее:
</p>
<ol>
	<li>
	Выполните двойной щелчок на идентификаторе IDR_MAIN_FRAME
в разделе Menu. Обратите внимание: идентификатор IDR_MAIN_FRAME используется также для таблицы горячих клавиш и главного значка программы. Developer Studio открывает окно редактора меню, отображающее меню программы MiniDraw, созданное мастером AppWizard.
	</li>
	<li>
	В окне редактора щелкните на меню File, удалите все пункты, кроме команд New, Exit и разделителя между ними. Чтобы удалить пункт меню (команду или разделитель), щелкните на нем и нажмите клавишу Del. (Нельзя удалять пустое окно в нижней части меню. Эта область предназначена для добавления новых пунктов и в завершенном меню программы отсутствует).
	</li>
	<li>
	Щелкните кнопкой мыши на меню Edit и нажмите клавишу Del, чтобы удалить его. После запроса об удалении меню щелкните на ОК.
	</li>
	<li>
	Выполните двойной щелчок в пустой заготовке справа от последнего пункта меню. Редактор меню откроет диалоговое окно Menu Item
Properties.
	</li>
	<li>
	В поле Caption введите &Edit. После этого в строке меню появится меню Edit. Обратите внимание: при создании ниспадающего меню идентификатор не вводится. Идентификаторы присваиваются только командам меню.
	</li>
	<li>
	С помощью мыши перетащите меню Edit влево таким образом, чтобы оно разместилось между меню File и Help.
	</li>
	<li>
	Выполните двойной щелчок на пустом прямоугольнике внутри меню Edit (под заголовком), чтобы снова открыть диалоговое окно Menu Item
Properties для определения новых команд меню.
	</li>
	<li>
	В поле ID введите ID_EDIT_UNDO, а в Caption - &Undo. Теперь в меню Edit появится команда Undo.
	</li>
	<li>
	Выполните двойной щелчок на пустом поле внизу меню Edit (под командой Undo) и в диалоговом окне Menu Item
Properties отметьте опцию Separator. Под командой Undo будет вставлен разделитель.
	</li>
	<li>
	Выполните двойной щелчок на пустом поле внизу меню Edit, затем введите
в поле ID значение ID_EDIT_CLEAR_ALL, а в Caption - Delete ALL. В меню добавится команда Delete
All. Теперь меню Edit завершено.
	</li>
	<li>
	Закройте окно редактора меню и сохраните результаты, выбрав команду Save All в меню File или щелкнув на кнопке Save All панели инструментов Standard.
	</li>
</ol>
<p style="">
	<span style="color: #000000;">Если хотите сконструировать свой значок программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> (для замены стандартного значка, предоставляемого библиотекой </span><span style="color: #000000;">MFC</span><span style="color: #000000;">), выполните следующие действия:</span>
</p>
<ol>
	<li>
	Сделайте двойной щелчок на идентификаторе IDR_MAINFRAME в разделе Icon в окне Project
Workspace. Developer
Studio откроет окно графического редактора, отображающее текущий значок программы. Обратите внимание: файл изображения содержит две версии рисунка: крупный (32 х 32 пикселя) и мелкий (16 х 16 пикселей). Мелкий рисунок используется там, где отображаются «мелкие значки» (например, в области заголовка окна программы или в окне Explorer, если в меню View выбрать опцию Small Icons). Крупные рисунки – там, где «крупные значки» (например, в диалоговом окне About или Explorer, если выбрана опция LargeIcon в меню View).
	</li>
	<li>
	Чтобы отредактировать крупный рисунок, выберите пункт «Standard (32x32)» в списке Device в верхней части окна. Для удаления текущего значка (при разработке нового) нажмите клавишу Del. После чего вы можете создать абсолютно новый рисунок.
	</li>
	<li>
	Для отображения мелкого значка выберите в списке пункт «Small (16x16)». При желании рисунок можно отредактировать или удалить, выбрав команду Delete Device
Image в меню Image. Если мелкий значок отсутствует, Windows сожмет крупный рисунок (с некоторой потерей качества изображения) и заменит им мелкие.
	</li>
	<li>
	После редактирования значка удалите окно графического редактора, выполнив двойной щелчок на системном меню или щелкнув на Close.
	</li>
</ol>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Сохраните внесенные изменения, выбрав в меню </span><span style="color: #000000;">File </span><span style="color: #000000;">команду</span><span style="color: #000000;"> Save All. </span><span style="color: #000000;">Основная информация о ресурсах хранится в файле определения ресурсов </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">.</span><span style="color: #000000;">rc</span><span style="color: #000000;">, </span><span style="color: #000000;">a</span><span style="color: #000000;"> информация о значке – в </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">.</span><span style="color: #000000;">ico</span><span style="color: #000000;"> подкаталога \</span><span style="color: #000000;">res</span><span style="color: #000000;"> каталога проекта. Файл определения ресурсов содержит оператор </span><span style="color: #000000;">ICON</span><span style="color: #000000;">, </span><span style="color: #000000;">идентифицирующий файл значка. Когда программа будет сгенерирована, программа </span><span style="color: #000000;">Rc</span><span style="color: #000000;">.</span><span style="color: #000000;">exe</span><span style="color: #000000;"> (</span><span style="color: #000000;">Resource</span><span style="color: #000000;">
	</span><span style="color: #000000;">Compiler</span><span style="color: #000000;"> – компилятор ресурсов) обработает информацию о ресурсах, содержащуюся в этих файлах, и внесет данные о них в исполняемый файл.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;"><strong>Настройка окна </strong></span><span style="color: #000000;"><strong>MiniDraw</strong></span><span style="color: #000000;"><strong>. </strong></span><span style="color: #000000;">При использовании программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> в настоящем виде возникают две проблемы.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Первая: хотя обработчик сообщения </span><span style="color: #000000;">WM</span><span style="color: #000000;">_</span><span style="color: #000000;">MOUSEMOVE</span><span style="color: #000000;">
	</span><span style="color: #000000;">отображает требуемый указатель крестообразной формы, </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> также пытается отобразить стандартный курсор-стрелку, назначенный окну представления библиотекой </span><span style="color: #000000;">MFC</span><span style="color: #000000;">. В результате из-за переходов между этими двумя формами при перемещении указателя возникает неприятное мерцание.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Вторая проблема: если пользователь выбирает на панели управления темный цвет «</span><span style="color: #000000;">Window</span><span style="color: #000000;">», линии, нарисованные в окне представления, становятся невидимыми или едва заметными. При создании окна </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> присваивает ему установки, задающие цвет фона с использованием текущего цвета «</span><span style="color: #000000;">Window</span><span style="color: #000000;">». Однако программа всегда выводит черные линии.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Обе проблемы можно решить, добавив необходимые строки в функцию </span><span style="color: #000000;">PreCreateWindow </span><span style="color: #000000;">класса</span><span style="color: #000000;"> CMiniDrawView. </span><span style="color: #000000;">При генерации программы мастер </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;"> определяет шаблон функции </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;">::</span><span style="color: #000000;">PreCreateWindow</span><span style="color: #000000;">, переопределяющей виртуальную функцию </span><span style="color: #000000;">PreCreateWindow </span><span style="color: #000000;">класса</span><span style="color: #000000;"> CView, </span><span style="color: #000000;">которую</span><span style="color: #000000;"> MFC</span><span style="color: #000000;"> вызывает непосредственно перед созданием окна представления.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Чтобы настроить окно представления </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">, добавьте операторы в </span><span style="color: #000000;">PreCreateWindow</span><span style="color: #000000;"> в файл </span><span style="color: #000000;">MiniDrawView</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;">:</span>
</p>
<pre>
BOOL CMiniDrawView::PreCreateWindow(CREATESTRUCT &cs)
{
// TODO: Здесь измените класс или стили окна 
// модифицируя поля структуры cs
m_ClassName=AfxRegisterWndClass(
CS_HREDRAW|CS_VREDRAW, // стили
окна
0, //без
указателя;
(HBRUSH)::GetStockObject (WHITE_BRUSH),
// задать чисто белый фон;
0); //без
значка
cs.lpszClass = m_ClassName;
return CView::PreCreateWindow(cs);
}
</pre>
<p style="">
	<span style="color: #000000;">В функцию </span><span style="color: #000000;">PreCreateWindow</span><span style="color: #000000;"> передается ссылка на структуру </span><span style="color: #000000;">CREATESTRUCT</span><span style="color: #000000;">, поля которой хранят свойства окна, задаваемые библиотекой </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> при его создании (координаты окна, его стили и т.д.). При присвоении значений одному или нескольким полям структуры </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> использует заданные значения вместо стандартных.</span>
</p>
<p style="">
	<span style="color: #000000;">Одно поле структуры </span><span style="color: #000000;">CREATESTRUCT</span><span style="color: #000000;"> (</span><span style="color: #000000;">lpszClass</span><span style="color: #000000;">) хранит имя класса окна </span><span style="color: #000000;">windows</span><span style="color: #000000;">, но это не класс языка C++, а структура данных, сохраняющая набор общих свойств окна. В добавленном фрагменте вызывается функция </span><span style="color: #000000;">AfxRegisterWndClass</span><span style="color: #000000;">, создающая новый класс окна, а затем присваивается имя класса полю </span><span style="color: #000000;">lpszClass</span><span style="color: #000000;"> структуры </span><span style="color: #000000;">CREATESTRUCT</span><span style="color: #000000;">. Таким образом, окно представления создается с настраиваемыми свойствами, сохраняемыми внутри данного класса. Обратите внимание: </span><span style="color: #000000;">AfxRegisterWndClass</span><span style="color: #000000;"> – глобальная функция, предоставляемая библиотекой </span><span style="color: #000000;">MFC</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">При вызове функции </span><span style="color: #000000;">AfxRegisterWndClass</span><span style="color: #000000;"> устанавливаются следующие параметры:</span>
</p>
<ul>
	<li>
	<span style="color: #000000;">первый параметр – задает стили </span><span style="color: #000000;">CS</span><span style="color: #000000;">_</span><span style="color: #000000;">HREDRAW</span><span style="color: #000000;">
	</span><span style="color: #000000;">и </span><span style="color: #000000;">CS</span><span style="color: #000000;">_</span><span style="color: #000000;">VREDRAW</span><span style="color: #000000;">, </span><span style="color: #000000;">позволяющие перерисовать окно при изменении его размеров (обычно окна представления создаются с использованием этих двух стилей);</span>
	</li>
	<li>
	<span style="color: #000000;">второй – задает форму указателя, автоматически отображаемого в окне </span><span style="color: #000000;">Windows</span><span style="color: #000000;">. Этому параметру присваивается значение 0, поэтому </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> не пытается его отобразить с помощью функции </span><span style="color: #000000;">OnMouseMove</span><span style="color: #000000;">. Таким образом нежелательное мерцание устраняется;</span>
	</li>
	<li>
	<span style="color: #000000;">третий параметр – определяет стандартную белую кисть, используемую для заливки фона окна представления. В результате цвет фона окна всегда будет белым, а черные линии – видимыми, независимо от цвета “</span><span style="color: #000000;">Window</span><span style="color: #000000;">”, выбранного в панели управления;</span>
	</li>
	<li>
	последний параметр определяет значок окна. Так как окно представления его не отображает, параметру присваивается значение 0 (значок программы задается для главного окна).
	</li>
</ul>
<p style=" margin-right: 0in;">
	<span style="color: #000000;"><strong>Удаление данных документа.</strong></span><span style="color: #000000;"> Каждый раз, когда пользователь выбирает в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> команду </span><span style="color: #000000;">New</span><span style="color: #000000;">, </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> (а именно, функция </span><span style="color: #000000;">OnFileNew</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;">) вызывает виртуальную функцию </span><span style="color: #000000;">CDocument</span><span style="color: #000000;">:: </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;"> для удаления содержимого текущего документа перед инициализацией нового.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;"> В последующих версиях программы <span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> эта функция будет также вызываться перед открытием существующего документа.</span></span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Чтобы удалить данные, сохраняемые этим классом, необходимо написать новую версию этой функции в виде члена класса документа.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Переопределение виртуальной функции является общераспространенным и эффективным способом настройки </span><span style="color: #000000;">MFC</span><span style="color: #000000;">. Чтобы сгенерировать объявление и оболочку функции </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;">, воспользуйтесь мастером </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;">:</span>
</p>
<ol>
	<li>
	Выберите в меню View команду ClassWizard или нажмите Ctrl+W. Появится диалоговое окно мастера ClassWizard.
	</li>
	<li>
	Откройте вкладку Message
Maps, позволяющую определить функции-члены.
	</li>
	<li>
	В списке Class Name выберите CMiniDrawDoc. Это имя класса выбирается потому, что необходимо определить виртуальную функцию, принадлежащую классу документа.
	</li>
	<li>
	В списке Object IDs выберите пункт CMiniDrawDoc, что приведет к отображению в списке Messages имен виртуальных функций, определенных в родительских классах. Каждую из этих функций можно переопределить. Все пункты списка Messages (кроме идентификаторов сообщений, начинающихся с WM_) – это виртуальные функции (пусть имя списка Messages (сообщения) не вводит вас в заблуждение). Обратите внимание: при выборе имени функции в нижней части диалогового окна мастера появляется ее описание.
	</li>
	<li>
	В списке Messages выберите пункт DeleteContents и щелкните на Add Function.
	</li>
	<li>
	Щелкните на кнопке Edit
Code. Мастер AppWizard вызовет перемещение курсора в тело функции DeleteContents, сгенерированной внутри файла MiniDrawDoc.cpp
	</li>
</ol>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Теперь добавьте следующие строки в функцию </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;">, сгенерированную мастером </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;">:</span>
</p>
<pre>void CMiniDrawDoc::DeleteContents()
{
// TODO: Здесь добавьте собственный код обработчика
// и/или вызов базового класса
int Index=m_LineArray.GetSize();
while(Index--)
delete m_LineArray.GetAt (Index);
m_LineArray.RemoveAll ();
CDocument::DeleteContents();
}
</pre>
<p style=" ">
	<span style="color: #000000;">В коде, добавленном в определение функции </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;">, сначала происходит обращение к функции </span><span style="color: #000000;">GetSize</span><span style="color: #000000;"> класса СОbАггау, чтобы получить количество указателей класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, сохраненных в данный момент объектом </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;">. Затем при вызове функции </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;">::</span><span style="color: #000000;">GetAt</span><span style="color: #000000;"> выбирается каждый указатель, а оператор </span><span style="color: #000000;">delete</span><span style="color: #000000;"> используется для удаления каждого соответствующего объекта класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> (вспомните: объекты класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> создавались с использованием оператора </span><span style="color: #000000;">new</span><span style="color: #000000;">). Наконец, для удаления всех указателей, сохраненных в данное время в массиве </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;">, вызывается функция </span><span style="color: #000000;">RemoveAll</span><span style="color: #000000;"> класса СОbАггау.</span>
</p>
<p style=" ">
	<span style="color: #000000;">После вызова функции </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;"> библиотека </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> (косвенным образом) удаляет окно представления и вызывает функцию </span><span style="color: #000000;">OnDraw</span><span style="color: #000000;">. Однако функция </span><span style="color: #000000;">OnDraw</span><span style="color: #000000;"> не отображает линии, потому что они были удалены из класса документа. Окончательный результат – удаление данных документа командой </span><span style="color: #000000;">New</span><span style="color: #000000;">
	</span>(из меню File)<span style="color: #000000;"> и очистка окна представления перед созданием нового рисунка.</span>
</p>
<p style=" ">
	<span style="color: #000000;"><strong>Реализация команд меню.</strong></span><span style="color: #000000;"> Теперь воспользуемся мастером </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> для реализации двух команд, добавленных в меню </span><span style="color: #000000;">Edit: Delete All </span><span style="color: #000000;">и</span><span style="color: #000000;"> Undo.</span>
</p>
<p style=" ">
	<span style="color: #000000;">Выполните следующие действия для определения обработчика сообщения, получающего управление при выборе команды </span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;">:</span>
</p>
<ol>
	<li>
	Откройте диалоговое окно ClassWizard, а затем - вкладку Message Maps.
	</li>
	<li>
	В списке Class name выберите пункт CMiniDrawDoc, чтобы функция обработки сообщения, генерируемого при выборе команды Delete
All, стала членом класса документа. Вспомните, что командное сообщение может обрабатываться любым из четырех основных классов программы (классом представления, документа, главного окна или приложения). Для обработки команды Delete
All выбирается класс документа, потому что эта команда непосредственно воздействует на данные документа (удаляет их) и, следовательно, попадает в "компетенцию" класса документа.
	</li>
	<li>
	В списке Object IDs выберите идентификатор ID_EDIT_CLEAR_ALL. Вспомните, что именно он при создании меню был присвоен команде Delete
All. Сразу после выбора идентификатора в списке Messages отобразятся идентификаторы двух типов сообщении, которые эта команда меню может передавать объекту класса документа: COMMAND и UPDATE_COMMAND_UI. Идентификатор COMMAND
указывает на сообщение, передаваемое при выборе пользователем пункта меню. Идентификатор UPDATE_COMMAND_UI
указывает на сообщение, передаваемое при первом открытии меню, содержащего команду. Обратите внимание: идентификаторы COMMAND
и UPDATE_COMMAND_UI указывают на два типа командных сообщений, которые могут генерироваться объектом пользовательского интерфейса.
	</li>
	<li>
	В списке Messages выберите сообщение COMMAND.
	</li>
	<li>
	Щелкните на кнопке Add
Function для генерации функции обработки сообщения. Когда мастер ClassWizard отобразит диалоговое окно Add Member
Function, щелкните на кнопке ОК, чтобы принять стандартное имя функции OnEditClearAll, и продолжите генерацию функции. Теперь мастер ClassWizard объявляет функцию внутри определения класса CMiniDrawDoc в файле MiniDrawDoc.h, добавляет минимальное определение функции в файл MiniDrawDoc.cpp и генерирует код для добавления функции в схему обработки сообщений класса документа.
	</li>
	<li>
	При выбранной функции OnEditClearAll в списке Member Functions щелкните на кнопке Edit
Code. Мастер ClassWizard откроет файл MiniDrawDoc.cpp (если он еще не открыт) и перейдет на определение функции OnEditClearAll.
	</li>
	<li>
	Добавьте в функцию OnEditClearAll следующий код:
	</li>
</ol>
<pre>void CMiniDrawDoc::OnEditClearAll()
{
// TODO: Здесь добавьте собственный код обработчика
DeleteContents();
UpdateAllViews(0);
}
</pre>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Вызов ранее определенной функции </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;"> приводит к удалению содержимого документа. Далее функция </span><span style="color: #000000;">UpdateAllViews</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CDocument</span><span style="color: #000000;"> удаляет текущее содержимое окна представления.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Следующим этапом будет определение обработчика сообщения </span>UPDATE_COMMAND_UI<span style="color: #000000;">, </span><span style="color: #000000;">посылаемого при первом открытии </span>пункта<span style="color: #00ff00;">
	</span><span style="color: #000000;">меню, содержащего команду </span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;"> (это меню </span><span style="color: #000000;">Edit</span><span style="color: #000000;">). Так как это сообщение посылается до того, как меню станет видимым, обработчик может использоваться для инициализации команды в соответствии с текущим состоянием программы. Обработчик делает команду </span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;"> доступной, если документ содержит одну или более линий, и недоступной, если документ их не содержит. Чтобы сделать это, следуйте описанным действиям, однако в списке </span><span style="color: #000000;">Messages</span><span style="color: #000000;"> выберите идентификатор </span>UPDATE_COMMAND_UI<span style="color: #000000;">. </span><span style="color: #000000;">Мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> сгенерирует функцию с именем </span><span style="color: #000000;">OnUpdateEditClearAll</span><span style="color: #000000;">. После щелчка на кнопке </span><span style="color: #000000;">Edit</span><span style="color: #000000;">
	</span><span style="color: #000000;">Code</span><span style="color: #000000;"> добавьте в эту функцию ниже приведенный код:</span>
</p>
<pre>void CMiniDrawDoc::OnUpdateEditClearAll(CcmdUI *pCmdUI)
{
// TODO: Здесь добавьте собственный код обработчика
pCmdUI-&gt;Enable(m_LineArray.GetSize());
}
</pre>
<p style=" ">
	<span style="color: #000000;">Функции </span><span style="color: #000000;">OnUpdateEditClearAll</span><span style="color: #000000;"> передается указатель на объект класса </span><span style="color: #000000;">CcmdUI</span><span style="color: #000000;"> – это </span><span style="color: #000000;">MFC</span><span style="color: #000000;">-класс, предоставляющий функции для инициализации команд меню и других объектов пользовательского интерфейса. Добавленный код вызывает функцию </span><span style="color: #000000;">Enable</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CCmdUI</span><span style="color: #000000;">. Она делает доступной команду меню </span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;">, если документ содержит хотя бы одну линию. В противном случае блокирует команду, которая отображается затененной серым цветом, и пользователь не может ее выбрать. Таким образом, функцию </span><span style="color: #000000;">OnEditClearAll</span><span style="color: #000000;"> нельзя вызвать, если документ пуст.</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;"><strong>Инициализация команд меню</strong></span><span style="color: #000000;">. В функцию, которая обрабатывает сообщение </span>UPDATE_COMMAND_UI<span style="color: #000000;"> команды меню, передается указатель на объект класса </span><span style="color: #000000;">CCmdUI</span><span style="color: #000000;">, связанный с выбранной командой. Класс </span><span style="color: #000000;">CCmdUI</span><span style="color: #000000;"> предоставляет четыре функции, которые можно использовать для инициализации команд: </span><span style="color: #000000;">Enable</span><span style="color: #000000;">, </span><span style="color: #000000;">SetCheck</span><span style="color: #000000;">, </span><span style="color: #000000;">SetRadio</span><span style="color: #000000;"> и </span><span style="color: #000000;">SetText</span><span style="color: #000000;">.</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Чтобы сделать команду доступной, в функцию </span><span style="color: #000000;">Enable</span><span style="color: #000000;"> передается значение </span><span style="color: #000000;">TRUE</span><span style="color: #000000;">, а для блокирования команды – </span><span style="color: #000000;">FALSE</span><span style="color: #000000;">. </span>Например:
</p>
<pre>virtual void Enable(BOOL bOn=TRUE);
</pre>
<p style=" ">
	<span style="color: #000000;">В функцию </span><span style="color: #000000;">SetCheck</span><span style="color: #000000;"> можно передать значение 1, чтобы сделать пункт меню выбранным, или значение 0, чтобы отменить выбор. </span>Например:
</p>
<pre>virtual void SetCheck (int nCheck=1);
</pre>
<p style=" ">
	Обычно команда меню, представляющая какую-либо функциональную возможность программы, выделяется, если данная возможность активизирована.
</p>
<p style=" ">
	<span style="color: #000000;">Чтобы отметить пункт меню с помощью специального маркера (кружка), можно передать значение </span><span style="color: #000000;">TRUE</span><span style="color: #000000;"> функции </span><span style="color: #000000;">SetRadio</span><span style="color: #000000;">, а чтобы удалить маркер – значение </span><span style="color: #000000;">FALSE</span><span style="color: #000000;">. </span>Например:
</p>
<pre>virtual void SetRadio(BOOL bOn=TRUE);
</pre>
<p style="">
	<span style="color: #000000;">Наконец, чтобы изменить надпись команды меню, можно вызвать функцию </span><span style="color: #000000;">SetText:</span>
</p>
<pre>virtual void SetText(LPCTSTR lpszText);
</pre>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">где l</span><span style="color: #000000;">pszText</span><span style="color: #000000;"> – указатель на новую строку текста. Например, если предыдущее действие состояло в удалении текста, то для замены команды </span><span style="color: #000000;">Undo</span><span style="color: #000000;"> на </span><span style="color: #000000;">Undo</span><span style="color: #000000;">
	</span><span style="color: #000000;">Delete</span><span style="color: #000000;"> можно вызвать функцию </span><span style="color: #000000;">SetText</span><span style="color: #000000;">.</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;"><strong>Обработка команды </strong></span><span style="color: #000000;"><strong>Undo</strong></span><span style="color: #000000;"><strong>.</strong></span><span style="color: #000000;"> Последняя задача состоит в реализации функции обработки команды </span><span style="color: #000000;">Undo</span><span style="color: #000000;"> меню </span><span style="color: #000000;">Edit</span><span style="color: #000000;">.</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Сначала определим функцию, получающую управление, когда пользователь выбирает команду </span><span style="color: #000000;">Undo</span><span style="color: #000000;">. Чтобы сделать это, запустите мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> и выполните действия, описанные в предыдущем параграфе. Однако при выполнении пункта 3 в списке </span><span style="color: #000000;">Object</span><span style="color: #000000;">
	</span><span style="color: #000000;">IDs</span><span style="color: #000000;"> выберите идентификатор </span><span style="color: #000000;">ID</span><span style="color: #000000;">_</span><span style="color: #000000;">EDIT</span><span style="color: #000000;">_</span><span style="color: #000000;">UNDO</span><span style="color: #000000;">. </span><span style="color: #000000;">Мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> создаст функцию с именем </span><span style="color: #000000;">OnEditUndo</span><span style="color: #000000;">. Добавьте в эту функцию следующий код:</span>
</p>
<pre>void CMiniDrawDoc: : OnEditUndo ()
{
// TODO: Здесь добавьте собственный код обработчика 
int Index=m_LineArray.GetUpperBound();
if (Index&gt;-1)
{
delete m_LineArray.GetAt(Index);
m_LineArray.RemoveAt(Index);
}
UpdateAllViews(0);
}
</pre>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Для получения индекса последней линии в добавленном коде сначала вызывается функция </span><span style="color: #000000;">GetUpperBound</span><span style="color: #000000;"> класса СОbАггау. Затем с целью получения указателя на объект класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> для последней линии вызывается функция </span><span style="color: #000000;">CTypedPtrArray</span><span style="color: #000000;">::</span><span style="color: #000000;">GetAt</span><span style="color: #000000;">, а для удаления этого объекта используется оператор </span><span style="color: #000000;">delete</span><span style="color: #000000;">. И, наконец, вызывается функция </span><span style="color: #000000;">UpdateAllViews</span><span style="color: #000000;">, которая удаляет окно представления и вызывает функцию </span><span style="color: #000000;">CMiniDrawView</span><span style="color: #000000;">::</span><span style="color: #000000;">OnDraw</span><span style="color: #000000;">. После этого обработчик </span><span style="color: #000000;">OnDraw</span><span style="color: #000000;"> перерисовывает линии, оставшиеся в документе. Обратите внимание: при многократном выборе команды </span><span style="color: #000000;">Undo</span><span style="color: #000000;"> обработчик </span><span style="color: #000000;">OnEditundo</span><span style="color: #000000;"> продолжает удалять линии до тех пор, пока не останется ни одной.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Теперь определите функцию инициализации команды меню </span><span style="color: #000000;">Undo</span><span style="color: #000000;">. Чтобы сделать это, воспользуйтесь алгоритмом, приведенным в предыдущем параграфе. Однако в пункте 3 из списка </span><span style="color: #000000;">Object</span><span style="color: #000000;">
	</span><span style="color: #000000;">IDs</span><span style="color: #000000;"> выберите идентификатор </span><span style="color: #000000;">ID</span><span style="color: #000000;">_</span><span style="color: #000000;">EDIT</span><span style="color: #000000;">_</span><span style="color: #000000;">UNDO</span><span style="color: #000000;">, </span><span style="color: #000000;">a</span><span style="color: #000000;"> в пункте 4 из списка </span><span style="color: #000000;">Message</span><span style="color: #000000;"> - идентификатор сообщения </span><span style="color: #000000;">UPDATE</span><span style="color: #000000;">_</span><span style="color: #000000;">COMMAND</span><span style="color: #000000;">_</span><span style="color: #000000;">UI</span><span style="color: #000000;">. </span><span style="color: #000000;">Мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;"> создаст функцию с именем </span><span style="color: #000000;">OnUpdateEditUndo</span><span style="color: #000000;">. Добавьте в эту функцию следующий код:</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;"></span>
</p>
<pre>void
CMiniDrawDoc::OnUpdateEditUndo(CCmdUI* pCmdUI)
{
// TODO: Здесь добавьте собственный код обработчика
pCmdUI-&gt;Enable(m_LineArray.GetSize());
}
</pre>
<p style=" ">
	<span style="color: #000000;">Работа этой функции аналогична работе функции </span><span style="color: #000000;">OnUpdateEditClearAll</span><span style="color: #000000;">, описанной ранее. Она делает команду </span><span style="color: #000000;">Undo</span><span style="color: #000000;"> доступной при наличии хотя бы одной линии для удаления.</span>
</p>
<p style="">
	<span style="color: #000000;">Выше были приведены все необходимые изменения. Теперь можно построить и запустить программу.</span>
</p>
<p style="">
	Задания:
</p>
<ol>
	<li>
	Разработать программу, позволяющую рисовать окружности.
	</li>
	<li>
	Разработать программу, позволяющую рисовать прямоугольники.
	</li>
	<li>
	Разработать программу, позволяющую рисовать линии, содержащие стрелку на конце.
	</li>
	<li>
	Разработать программу, позволяющую рисовать линии, содержащие стрелки на 2 концах.
	</li>
	<li>
	Разработать программу, позволяющую выводить набранный текст.
	</li>
	<li>
	Разработать программу, позволяющую рисовать окружности несколькими цветами.
	</li>
	<li>
	Разработать программу, позволяющую рисовать прямоугольники несколькими цветами.
	</li>
	<li>
	Разработать программу, позволяющую рисовать линии, содержащие стрелку на конце, несколькими цветами.
	</li>
	<li>
	Разработать программу, позволяющую рисовать линии, содержащие стрелки на 2 концах, несколькими цветами.
	</li>
	<li>
	Разработать программу, позволяющую выводить набранный текст несколькими цветами.
	</li>
</ol>
<p style="text-align: center;"><strong>ЛАБОРАТОРНАЯ РАБОТА №2</strong>
</p>
<p style="text-align: center;"><strong>«ХРАНЕНИЕ ДАННЫХ»</strong>
</p>
<p style="">
	Цель работы – ознакомиться с процессом сохранения и считывания данных Win32-приложения с помощью Microsoft Visual C++.
</p>
<p style="text-align: center; margin-left: 20px;"><strong>Методические указания</strong>
</p>
<p style=" ">
	<span style="color: #000000;">В лабораторной работе изучаются принципы сохранения и загрузки данных документа с файлов на диске. Для демонстрации базовых методов ввода-вывода рассмотрена методика добавления кода, реализующего стандартные команды меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> (</span><span style="color: #000000;">New</span><span style="color: #000000;">, </span><span style="color: #000000;">O</span><span style="color: #000000;">ре</span><span style="color: #000000;">n</span><span style="color: #000000;">..., </span><span style="color: #000000;">Save</span><span style="color: #000000;"> и </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">...), в программу, написанную в прошлой лабораторной работе. Вы узнаете, как реализовать технологию </span><span style="color: #000000;">drag</span><span style="color: #000000;">-</span><span style="color: #000000;">and</span><span style="color: #000000;">-</span><span style="color: #000000;">drop</span><span style="color: #000000;">, позволяющую открывать файл, перетаскивая объект файла из папки </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> или окна </span><span style="color: #000000;">Windows</span><span style="color: #000000;">
	</span><span style="color: #000000;">Explorer</span><span style="color: #000000;"> и отпуская его в окне программы.</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;"><strong>Добавление средств ввода-вывода в программу </strong></span><span style="color: #000000;"><strong>MiniDraw</strong></span><span style="color: #000000;">. Для добавления команд в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> после открытия проекта в </span><span style="color: #000000;">Developer</span><span style="color: #000000;">
	</span><span style="color: #000000;">Studio</span><span style="color: #000000;"> откройте вкладку </span><span style="color: #000000;">Resource</span><span style="color: #000000;">
	</span><span style="color: #000000;">View</span><span style="color: #000000;"> в окне </span><span style="color: #000000;">Workspace</span><span style="color: #000000;">. Чтобы изменить меню программы, откройте редактор меню, выполнив двойной щелчок на идентификаторе </span><span style="color: #000000;">IDR</span><span style="color: #000000;">_</span><span style="color: #000000;">MAINFRAME</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">В редакторе меню откройте меню </span><span style="color: #000000;">File</span><span style="color: #000000;">. Под командой </span><span style="color: #000000;">New</span><span style="color: #000000;"> в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> необходимо добавить команды </span><span style="color: #000000;">Open</span><span style="color: #000000;">…, </span><span style="color: #000000;">Save</span><span style="color: #000000;">, </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">…, разграничитель и команду </span><span style="color: #000000;">Recent</span><span style="color: #000000;">
	</span><span style="color: #000000;">File</span><span style="color: #000000;">. Для этого используйте методику, описанную ранее. Ниже для каждой новой команды в таблице приведены идентификатор, надпись и другие свойства, задаваемые в диалоговом окне </span><span style="color: #000000;">Menu</span><span style="color: #000000;">
	</span><span style="color: #000000;">Item</span><span style="color: #000000;">
	</span><span style="color: #000000;">Properties</span><span style="color: #000000;">.</span>
</p>
<p style="text-align: center;">
	<span style="color: #000000;">Свойства пунктов, добавляемых в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> программы</span>
</p>
<table class="table table-responsive table-bordered table-hover"><colgroup><col><col><col></colgroup>
<tr>
	<td>
		<p style="">
			Идентификатор пункта
		</p>
	</td>
	<td>
		<p style="">
			Надпись
		</p>
	</td>
	<td>
		<p style="">
			Другие параметры
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="">
			<span style="color: #000000;">ID</span><span style="color: #000000;">_</span><span style="color: #000000;">FILE</span><span style="color: #000000;">_</span><span style="color: #000000;">OPEN</span>
		</p>
	</td>
	<td>
		<p style="">&Open...\tCtrl-O
		</p>
	</td>
	<td>
		<p style="">
			Отсутствуют
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="">ID_FILE_SAVE
		</p>
	</td>
	<td>
		<p style="">&Save\tCtrl+S
		</p>
	</td>
	<td>
		<p style="">
			Отсутствуют
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="">ID_FILE_SAVE_AS
		</p>
	</td>
	<td>
		<p style="">
			<span style="color: #000000;">Save</span><span style="color: #000000;">& </span><span style="color: #000000;">As</span><span style="color: #000000;">...</span>
		</p>
	</td>
	<td>
		<p style="">
			Отсутствуют
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="">
			Отсутствует
		</p>
	</td>
	<td>
		<p style="">
			Отсутствует
		</p>
	</td>
	<td>
		<p style="">
			Разделитель
		</p>
	</td>
</tr>
<tr>
	<td>
		<p style="">ID_FILE_MRU_FILE1
		</p>
	</td>
	<td>
		<p style="">Recent File
		</p>
	</td>
	<td>
		<p style="">
			Недоступны
		</p>
	</td>
</tr>
</tbody>
</table>
<p style="">
	<span style="color: #000000;">Если в программе открыт хотя бы один файл, то </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> заменяет надпись </span><span style="color: #000000;">Recent</span><span style="color: #000000;">
	</span><span style="color: #000000;">File</span><span style="color: #000000;"> именем последнего открытого файла. </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> будет добавлять в меню </span><span style="color: #000000;">File</span><span style="color: #000000;"> имена последних использованных файлов. При создании программы мастер </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;"> устанавливает максимальное количество последних использованных файлов, равное 4. </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> хранит их имена в файле инициализации программы (</span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">.</span><span style="color: #000000;">ini</span><span style="color: #000000;">) каталога </span><span style="color: #000000;">Windows</span><span style="color: #000000;">, поэтому список команд сохраняется, когда пользователь выходит из программы и перезапускает ее. Закройте окно редактора меню. Для этих команд задавать комбинации клавиш не нужно, так как мастер </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;"> уже определил их при первичном создании приложения. Вспомните: сгенерированное меню содержало все команды, перечисленные в вышеуказанной таблице. (В прошлой лабораторной работе они были удалены, так как не использовались.)</span>
</p>
<p style="">
	<span style="color: #000000;">Следующий этап – изменение строкового ресурса программы для определения стандартного расширения файлов, отображаемых в диалоговых окнах </span><span style="color: #000000;">Open</span><span style="color: #000000;"> и </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">. Для этого откройте редактор строк, выполнив двойной щелчок на элементе </span><span style="color: #000000;">String</span><span style="color: #000000;">
	</span><span style="color: #000000;">Table</span><span style="color: #000000;"> графа </span><span style="color: #000000;">ResourceView</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">Первая строка в окне редактора имеет идентификатор </span><span style="color: #000000;">IDR</span><span style="color: #000000;">_</span><span style="color: #000000;">MAINFRAME</span><span style="color: #000000;">. Она создана мастером </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;"> и содержит информацию, относящуюся к программе. Ее текущее значение такое:</span>
</p>
<pre>	MiniDraw\n\nMiniDr\n\n\nMiniDraw.Document\nMiniDr Document
</pre>
<p style="">
	<span style="color: #000000;">Чтобы модифицировать строку, откройте диалоговое окно </span><span style="color: #000000;">String</span><span style="color: #000000;">
	</span><span style="color: #000000;">Properties</span><span style="color: #000000;">. Смените содержимое поля </span><span style="color: #000000;">Caption</span><span style="color: #000000;"> следующим образом: </span>
</p>
<pre>	MiniDraw\n\nMiniDr\nMiniDraw Files(*.drw)\n.drw\nMiniDraw.Document\nMiniDr Document
</pre>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">При редактировании строки не нажимайте клавишу </span><span style="color: #000000;">Enter</span><span style="color: #000000;">. Когда текст достигнет край текстового поля, тогда он автоматически будет перенесен на следующую строку.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Вставьте строку "</span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">
	</span><span style="color: #000000;">Files</span><span style="color: #000000;">(*.</span><span style="color: #000000;">drw</span><span style="color: #000000;">)", отображаемую в списке </span><span style="color: #000000;">Files</span><span style="color: #000000;">
	</span><span style="color: #000000;">of</span><span style="color: #000000;">
	</span><span style="color: #000000;">type</span><span style="color: #000000;"> (или </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">as</span><span style="color: #000000;">
	</span><span style="color: #000000;">type</span><span style="color: #000000;">) диалогового окна </span><span style="color: #000000;">Open</span><span style="color: #000000;"> (или </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">) и определяющую стандартное расширение файлов программы. Затем вставьте "(.</span><span style="color: #000000;">drw</span><span style="color: #000000;">)" – стандартное расширение файлов. Если в процессе выполнения программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> расширение файла при открытии или сохранении не указано, то в диалоговых окнах </span><span style="color: #000000;">Open</span><span style="color: #000000;"> и </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;"> отобразится список всех файлов со стандартными расширениями, а в диалоговом окне </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;"> стандартное расширение файла будет добавлено к его имени.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;"><strong>Задание расширения файлов в новой программе. </strong></span><span style="color: #000000;">Приведенные инструкции относятся только к заданию стандартного расширения файлов в существующей программе. Это можно также сделать при создании приложения мастером </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;">:</span>
</p>
<ol>
	<li>
	В диалоговом окне мастера AppWizard (Step 4) щелкните на кнопке Advanced..., чтобы открыть диалоговое окно Advanced
Options, а затем откройте в этом окне вкладку Document
Template Strings.
	</li>
	<li>
	Введите в поле File
extension стандартное расширение файла (без точки), например drw.
	</li>
	<li>
	После ввода стандартного расширения мастер AppWizard автоматически введет описание расширения в поле Filter name (например, MiniDraw Files (*.drw)). Эта строка отображается в диалоговом окне Open (или Save As) в списке Files of
type (или Save
as type). При желании эту строку можно отредактировать.
	</li>
	<li>
	Щелкните на кнопке Close и введите оставшуюся информацию в диалоговые окна мастера AppWizard.
	</li>
</ol>
<p style="">
	<span style="color: #000000;"><strong>Поддержка команд меню </strong></span><span style="color: #000000;"><strong>File</strong></span><span style="color: #000000;"><strong>.</strong></span><span style="color: #000000;"> В предыдущей лабораторной работе при добавлении команд </span><span style="color: #000000;">Undo</span><span style="color: #000000;"> и </span><span style="color: #000000;">Delete</span><span style="color: #000000;">
	</span><span style="color: #000000;">All</span><span style="color: #000000;"> в меню </span><span style="color: #000000;">Edit</span><span style="color: #000000;"> для определения их обработчиков использовался мастер </span><span style="color: #000000;">ClassWizard</span><span style="color: #000000;">. Для команд </span><span style="color: #000000;">New</span><span style="color: #000000;">, </span><span style="color: #000000;">Open</span><span style="color: #000000;">..., </span><span style="color: #000000;">Save</span><span style="color: #000000;"> и </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">... определять обработчики не требуется, так как они предоставляются </span><span style="color: #000000;">MFC</span><span style="color: #000000;">. В этом случае необходимо написать код для их поддержки. Библиотека </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> также предоставляет обработчики команд для работы с последними использованными файлами в меню </span><span style="color: #000000;">File</span><span style="color: #000000;">. Функция </span><span style="color: #000000;">OnFileNew</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;"> (от которого порождался класс приложения </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">) обрабатывает команду </span><span style="color: #000000;">New</span><span style="color: #000000;">. Эта функция вызывает виртуальную функцию </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;"> для удаления текущего содержимого документа, а затем инициализирует новый документ.</span>
</p>
<p style="">
	<span style="color: #000000;">Команда </span><span style="color: #000000;">Open</span><span style="color: #000000;">... обрабатывается функцией </span><span style="color: #000000;">OnFileOpen</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;">, которая отображает стандартное диалоговое окно </span><span style="color: #000000;">Open</span><span style="color: #000000;">. Если выбрать файл и щелкнуть на кнопке </span><span style="color: #000000;">Open</span><span style="color: #000000;">, то </span><span style="color: #000000;">OnFileOpen</span><span style="color: #000000;"> откроет файл для чтения, а затем вызовет функцию </span><span style="color: #000000;">Serialize </span><span style="color: #000000;">класса</span><span style="color: #000000;">
	</span><span style="color: #000000;">документа</span><span style="color: #000000;"> (CMiniDrawDoc:: Serialize). </span><span style="color: #000000;">Функция </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> предназначена для фактического выполнения операции чтения. Функция </span><span style="color: #000000;">OnFileOpen</span><span style="color: #000000;"> сохраняет полный путь к загруженному файлу и отображает имя файла в строке заголовка главного окна. (Обработчик команды загрузки последнего использованного файла открывает файл для чтения и вызывает функцию </span><span style="color: #000000;">Serialize</span><span style="color: #000000;">, не отображая диалоговое окно </span><span style="color: #000000;">Open</span><span style="color: #000000;">).</span>
</p>
<p style="">
	<span style="color: #000000;">Если файл еще не был сохранен, то в поле </span><span style="color: #000000;">File</span><span style="color: #000000;">
	</span><span style="color: #000000;">name</span><span style="color: #000000;"> диалогового окна </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;"> отобразится имя файла по умолчанию, которое создается добавлением стандартного расширения файла (.</span><span style="color: #000000;">drw</span><span style="color: #000000;"> для программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">) к имени "</span><span style="color: #000000;">Untitled</span><span style="color: #000000;">".</span>
</p>
<p style="">
	<span style="color: #000000;">Функция </span><span style="color: #000000;">OnFileSave</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CDocument</span><span style="color: #000000;"> (от которого порожден класс документа программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">) обрабатывает команду </span><span style="color: #000000;">Save</span><span style="color: #000000;">, а функция </span><span style="color: #000000;">OnFileSaveAs</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CDocument</span><span style="color: #000000;"> – команду </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">... Если документ сохраняется впервые, то функции </span><span style="color: #000000;">OnFileSaveAs</span><span style="color: #000000;"> и </span><span style="color: #000000;">OnFileSave</span><span style="color: #000000;"> начинают работу с отображения стандартного диалогового окна </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">, позволяющего задать имя файла. Эти функции открывают файл для записи, а затем вызывают функцию </span><span style="color: #000000;">CMiniDrawDoc</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> для выполнения собственно операции записи. Они также сохраняют полный путь к файлу и отображают его имя в строке заголовка. Длина имени и расширения файла в </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> 95/98 и </span><span style="color: #000000;">Windows</span><span style="color: #000000;">
	</span><span style="color: #000000;">NT</span><span style="color: #000000;"> не ограничена восемью и тремя символами соответственно. В </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> 95, например, имя файла может содержать до</span><span style="color: #000000;">
	</span><span style="color: #000000;">255 символов. Если хотите быть уверенным в достаточном размере буфера, то для хранения имени файла и полного или частичного пути к файлу используйте одну из констант, определенных в файле </span><span style="color: #000000;">Stdio</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;">: </span><span style="color: #000000;">_</span><span style="color: #000000;">MAX</span><span style="color: #000000;">_</span><span style="color: #000000;">PATH</span><span style="color: #000000;">, _</span><span style="color: #000000;">MAX</span><span style="color: #000000;">_</span><span style="color: #000000;">DRIVE</span><span style="color: #000000;">, _</span><span style="color: #000000;">MAX</span><span style="color: #000000;">_</span><span style="color: #000000;">DIR</span><span style="color: #000000;">, _</span><span style="color: #000000;">MAX</span><span style="color: #000000;">_</span><span style="color: #000000;">FNAME</span><span style="color: #000000;">, </span><span style="color: #000000;">и </span><span style="color: #000000;">_</span><span style="color: #000000;">MAX</span><span style="color: #000000;">_</span><span style="color: #000000;">EXT</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Сериализация данных документа. </strong></span><span style="color: #000000;">При создании программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> мастер </span><span style="color: #000000;">AppWizard</span><span style="color: #000000;"> определяет в файле </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> следующую минимальную реализацию функции </span><span style="color: #000000;">Serialize</span><span style="color: #000000;">:</span>
</p>
<pre>void CMiniDrawDoc::Serialize(CArchive& ar)
{
if(ar.IsStoring())
{
// TODO: здесь добавьте код сохранения
} else
{
// TODO: здесь добавьте код загрузки
}
</pre>
<p style=" ">
	<span style="color: #000000;">В эту функцию необходимо добавить собственный код для чтения или записи данных. </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> передает функции </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> ссылку на экземпляр класса </span><span style="color: #000000;">CArchive</span><span style="color: #000000;">. Для открытого файла задается объект класса </span><span style="color: #000000;">CArchive</span><span style="color: #000000;">, предоставляющий набор функций для чтения и/или записи данных этого файла.</span>
</p>
<p style=" ">
	<span style="color: #000000;">Если файл открыт для записи (т.е. выбрана команда </span><span style="color: #000000;">Save</span><span style="color: #000000;"> или </span><span style="color: #000000;">Save</span><span style="color: #000000;">
	</span><span style="color: #000000;">As</span><span style="color: #000000;">...), то функция </span><span style="color: #000000;">IsStoring</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CArchive</span><span style="color: #000000;"> возвращает значение </span><span style="color: #000000;">TRUE</span><span style="color: #000000;">, а если файл открыт для чтения (т.е. выбрана команда </span><span style="color: #000000;">Open</span><span style="color: #000000;">... или команда вызова последнего использованного файла из меню </span><span style="color: #000000;">File</span><span style="color: #000000;">), то функция </span><span style="color: #000000;">IsStoring</span><span style="color: #000000;"> возвращает значение </span><span style="color: #000000;">FALSE</span><span style="color: #000000;">. </span><span style="color: #000000;">Следовательно, код операции вывода помещается внутри блока </span><span style="color: #000000;">if</span><span style="color: #000000;">, а код операции ввода - внутри блока </span><span style="color: #000000;">else</span><span style="color: #000000;">.</span>
</p>
<p style=" ">
	<span style="color: #000000;">В программе </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> класс документа хранит единственную переменную </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;">, управляющую множеством объектов класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">. Переменная m_</span><span style="color: #000000;">LineArray</span><span style="color: #000000;"> имеет собственную функцию-член </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> (наследуемую от класса СОbАггау), которая вызывается для чтения или записи всех объектов класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, хранимых в данной переменной. В результате функцию </span><span style="color: #000000;">CMiniDrawDoc</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> можно дописать, просто добавив два обращения к функции </span><span style="color: #000000;">CObArray</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;">:</span>
</p>
<pre>void CMiniDrawDoc::Serialize(CArchive& ar)
{
if(ar.IsStoring())
{
//TODO: здесь добавьте код сохранения
m_LineArray.Serialize(ar);
}else
{
// TODO: здесь добавьте код загрузки 
m_LineArray.Serialize (ar);
}
</pre>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">При записи данных в файл функция </span><span style="color: #000000;">CObArray</span><span style="color: #000000;">:</span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> выполняет два основных действия для каждого объекта класса </span><span style="color: #000000;">Cline</span><span style="color: #000000;">:</span>
</p>
<ol>
	<li>записывает в файл информацию о классе объекта;
	</li>
	<li>вызывает функцию Serialize объекта, записывающую данные объекта в файл.
	</li>
</ol>
<p style=" ">
	<span style="color: #000000;">При чтении данных из файла функция </span><span style="color: #000000;">CObArray</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> выполняет два действия для каждого объекта класса </span><span style="color: #000000;">Cline</span><span style="color: #000000;">:</span>
</p>
<ol>
	<li>читает информацию класса из файла, динамически создает объект соответствующего класса (CLine) и сохраняет указатель на объект;
	</li>
	<li>вызывает функцию Serialize объекта для чтения данных из файла во вновь созданный объект.
	</li>
</ol>
<p style=" ">
	<span style="color: #000000;">Необходимо обеспечить поддержку сериализации класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">. Для этого включите в его определение два макроса (</span><span style="color: #000000;">DECLARE</span><span style="color: #000000;">_</span><span style="color: #000000;">SERIAL</span><span style="color: #000000;">, а также </span><span style="color: #000000;">IMPLEMENT</span><span style="color: #000000;">_</span><span style="color: #000000;">SERIAL</span><span style="color: #000000;">) </span><span style="color: #000000;">и определите конструктор класса по умолчанию. Эти макрокоманды и конструктор позволяют функции </span><span style="color: #000000;">CObArray</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> сохранить информацию класса в файле, а затем использовать ее для динамического создания объекта класса. Макрокоманды и конструктор обеспечивают выполнение первого пункта двух приведенных выше алгоритмов с помощью функции </span><span style="color: #000000;">CObArray</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;">.</span>
</p>
<p style=" ">
	<span style="color: #000000;">Добавьте макрокоманду </span><span style="color: #000000;">DECLARE</span><span style="color: #000000;">_</span><span style="color: #000000;">SERIAL</span><span style="color: #000000;"> и конструктор по умолчанию в определение класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> в файле </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;"> как показано ниже:</span>
</p>
<pre>class CLine : public CObject
{
	protected:
	int m_Xl, m_Yl, m_X2, m_Y2;
	CLine(){}
	DECLARE_ SERIAL (CLine)
	public:
	оставшаяся часть определения класса CLine
	}
</pre>
<p style="">
	<span style="color: #000000;">Имя класса передается макросу </span><span style="color: #000000;">DECLARE</span><span style="color: #000000;">_</span><span style="color: #000000;">SERIAL</span><span style="color: #000000;"> как параметр. В файле </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> макрокоманда </span><span style="color: #000000;">IMPLEMENT</span><span style="color: #000000;">_</span><span style="color: #000000;">SERIAL</span><span style="color: #000000;">
	</span><span style="color: #000000;">добавляется сразу перед определением функции </span><span style="color: #000000;">CLine</span><span style="color: #000000;">::</span><span style="color: #000000;">Draw</span><span style="color: #000000;">:</span>
</p>
<p style=" margin-left: 0in; margin-right: -0in;">
	<strong></strong>
</p>
<pre>IMPLEMENT_SERIAL (CLine, CObject, 1)
	void CLine::Draw(CDC *pDC)
	{
	pDC-&gt;MoveTo (m_XI, m_Yl) ;
	pDC-&gt;LineTo (m_X2, m_Y2);
	}
</pre>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Первый параметр, переданный макросу </span><strong>IMPLEMENT</strong><strong>_</strong><strong>SERIAL</strong><span style="color: #000000;">, - </span><span style="color: #000000;">это имя самого класса, а второй – имя базового класса. Третий параметр – это номер версии, идентифицирующий отдельную версию программы. Он сохраняется внутри записанного файла, прочитать который может только программа, указавшая такой же номер. Номер версии предотвращает чтение данных программой другой версии. Для текущей версии </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> задан номер 1. В более поздних версиях он увеличивается при каждом изменении формата данных. Нельзя задавать номер версии -1.</span>
</p>
<p style=" margin-right: 0in;">
	<span style="color: #000000;">Второе действие, необходимое для сериализации класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;">, - это добавление в класс </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> функции </span><span style="color: #000000;">Serialize</span><span style="color: #000000;">, вызываемой в методе </span><span style="color: #000000;">CObArray</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> для чтения или записи данных каждой строки. Добавьте объявление функции </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> в раздел </span><span style="color: #000000;">public</span><span style="color: #000000;"> определения класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> в файле </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">h</span><span style="color: #000000;">:</span>
</p>
<pre>public:
	CLine (int X1, int Y1, int X2, int Y2) {
	m_X1=X1; m_Y1=Y1; m_X2=X2; m_Y2=Y2;
	}
	void Draw (CDC *pDC);
	virtual void Serialize(CArchive& ar);
</pre>
<p style=" margin-left: 0in;"><strong></strong>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Добавьте определение функции </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> в файл реализации с именем </span><span style="color: #000000;">MiniDrawDoc</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> после определения </span><span style="color: #000000;">CLine</span><span style="color: #000000;">::</span><span style="color: #000000;">Draw</span><span style="color: #000000;">:</span>
</p>
<p style=" margin-left: 0in; margin-right: 2in;">
	<strong></strong>
</p>
<pre>void CLine::Serialize(CArchive& ar)
	{
	if(ar.IsStoring()
	ar&lt;&lt;m_X1&lt;&lt;m_Y1&lt;&lt;m_X2&lt;&lt;m_Y2;
	else
	ar&gt;&gt;m_X1&gt;&gt;m_Y1&gt;&gt;m_Х2&gt;&gt;m_Y2;
	}
</pre>
<p style=" "><strong></strong>
</p>
<p style="">
	<span style="color: #000000;">Класс, объекты которого могут быть сериализованы, должен прямо или косвенно порождаться от </span><span style="color: #000000;">MFC</span><span style="color: #000000;">-класса </span><span style="color: #000000;">CObject</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;">Фактически операции чтения и записи выполняет функция </span><span style="color: #000000;">CLine</span><span style="color: #000000;">::</span><span style="color: #000000;">Serialize</span><span style="color: #000000;">, а не одноименные функции других классов. Функция </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> использует перегруженные операторы “&lt;&lt;” и “&gt;&gt;” для записи переменных класса </span><span style="color: #000000;">CLine</span><span style="color: #000000;"> в файл и для чтения их из файла соответственно. Эти операторы определяются классом </span><span style="color: #000000;">CArchive</span><span style="color: #000000;"> и используются для чтения и записи данных различных типов.</span>
</p>
<p style="">
	<span style="color: #000000;">Как видно из кода ввода-вывода, добавленного в программе </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">, объект класса, сохраняющий данные, обычно отвечает за их запись на диск и чтение с диска. Этот класс должен предоставлять функцию </span><span style="color: #000000;">Serialize</span><span style="color: #000000;">, обеспечивающую чтение и запись. Общий принцип объектно-ориентированного программирования состоит в том, что каждый объект работает с собственными данными. Например, объект может нарисовать, прочитать, сохранить себя или выполнить другие характерные операции с собственными данными. Для переменных, являющихся объектами класса, вызывается функция-член </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> их собственного класса. Для переменных, не являющихся объектами, функция </span><span style="color: #000000;">Serialize</span><span style="color: #000000;"> использует перегруженные операторы “&lt;&lt;” и “&gt;&gt;”, предоставляемые классом </span><span style="color: #000000;">CArchive</span><span style="color: #000000;">.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Установка флага изменений</strong></span><span style="color: #000000;">. Класс </span><span style="color: #000000;">CDocument</span><span style="color: #000000;"> поддерживает флаг изменений, показывающий, содержит ли документ несохраненные данные. </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> проверяет этот флаг перед вызовом функции </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;"> класса документа для удаления данных. </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> вызывает функцию </span><span style="color: #000000;">DeleteContents</span><span style="color: #000000;"> перед созданием нового документа, открытием уже существующего или выходом из программы. Если флаг содержит значение </span><span style="color: #000000;">TRUE</span><span style="color: #000000;"> (в документе имеются несохраненные данные), то выводится соответствующее сообщение.</span>
</p>
<p style="">
	<span style="color: #000000;">Класс </span><span style="color: #000000;">CDocument</span><span style="color: #000000;"> устанавливает значение флага в </span><span style="color: #000000;">FALSE</span><span style="color: #000000;">, когда документ открыт и сохранен. Для установки флага в </span><span style="color: #000000;">TRUE</span><span style="color: #000000;">
	</span><span style="color: #000000;">(при каждом изменении документа) вызывается функция </span><span style="color: #000000;">CDocument</span><span style="color: #000000;">::</span><span style="color: #000000;">SetModifiedFlag</span><span style="color: #000000;">. Добавьте функции </span><span style="color: #000000;">SetModifiedFlag</span><span style="color: #000000;"> в функцию </span><span style="color: #000000;">AddLine </span><span style="color: #000000;">в</span><span style="color: #000000;">
	</span><span style="color: #000000;">файле</span><span style="color: #000000;"> MiniDrawDoc.cpp:</span>
</p>
<pre>void CMiniDrawDoc::AddLine(int X1, int Y1, int X2, int Y2)
	{
	CLine *pLine=new CLine(X1, Y1, X2, Y2);
	m_LineArray.Add(pLine);
	SetModifiedFlag();
	}
</pre>
<p style="">
	<span style="color: #000000;">Теперь проделайте то же самое для функции </span><span style="color: #000000;">OnEditClearAll</span><span style="color: #000000;"> в том же файле:</span>
</p>
<pre>void CMiniDrawDoc::OnEditClearAll()
	{
	//TODO: Здесь добавьте собственный код обработчика
	DeleteContents();
	UpdateAllViews(0);
	SetModifiedFlag();
	}
</pre>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">И</span><span style="color: #000000;">, </span><span style="color: #000000;">наконец</span><span style="color: #000000;">, </span><span style="color: #000000;">добавьте</span><span style="color: #000000;">
	</span><span style="color: #000000;">вызов</span><span style="color: #000000;">
	</span><span style="color: #000000;">функции</span><span style="color: #000000;"> SetModifiedFlag </span><span style="color: #000000;">в</span><span style="color: #000000;">
	</span><span style="color: #000000;">обработчик</span><span style="color: #000000;"> OnEditUndo </span><span style="color: #000000;">в</span><span style="color: #000000;">
	</span><span style="color: #000000;">файле</span><span style="color: #000000;"> MiniDrawDoc.cpp:</span>
</p>
<pre>void CMiniDrawDoc::OnEditUndo()
	{
	// TODO: Здесь добавьте собственный код обработчика
	int Index=m_LineArray.GetUpperBound();
	if(Index&gt;-1){
	delete m_LineArray.GetAt (Index);
	m_LineArray.RemoveAt (Index);
	}
	UpdateAllViews(0);
	SetModifiedFlag();
	}
</pre>
<p style=" ">
	<span style="color: #000000;">Так</span><span style="color: #000000;">
	</span><span style="color: #000000;">как</span><span style="color: #000000;">
	</span><span style="color: #000000;">параметр</span><span style="color: #000000;">
	</span><span style="color: #000000;">функции</span><span style="color: #000000;"> SetModifiedFlag </span><span style="color: #000000;">имеет</span><span style="color: #000000;">
	</span><span style="color: #000000;">стандартное</span><span style="color: #000000;">
	</span><span style="color: #000000;">значение</span><span style="color: #000000;"> TRUE, </span><span style="color: #000000;">флаг</span><span style="color: #000000;">
	</span><span style="color: #000000;">изменений</span><span style="color: #000000;">
	</span><span style="color: #000000;">можно</span><span style="color: #000000;">
	</span><span style="color: #000000;">установить</span><span style="color: #000000;">
	</span><span style="color: #000000;">в</span><span style="color: #000000;"> TRUE, </span><span style="color: #000000;">вызывая</span><span style="color: #000000;">
	</span><span style="color: #000000;">эту</span><span style="color: #000000;">
	</span><span style="color: #000000;">функцию</span><span style="color: #000000;">
	</span><span style="color: #000000;">без</span><span style="color: #000000;">
	</span><span style="color: #000000;">аргументов</span><span style="color: #000000;">. </span><span style="color: #000000;">Чтобы установить флаг изменений в </span><span style="color: #000000;">FALSE</span><span style="color: #000000;">, необходимо явно передать это значение (обычно эту задачу выполняет класс </span><span style="color: #000000;">CDocument</span><span style="color: #000000;">).</span>
</p>
<p style=" ">
	<span style="color: #000000;"><strong>Поддержка технологии "</strong></span><span style="color: #000000;"><strong>drag</strong></span><span style="color: #000000;"><strong>-</strong></span><span style="color: #000000;"><strong>and</strong></span><span style="color: #000000;"><strong>-</strong></span><span style="color: #000000;"><strong>drop</strong></span><span style="color: #000000;"><strong>".</strong></span><span style="color: #000000;"> Если программа поддерживает традиционную технологию "</span><span style="color: #000000;">drag</span><span style="color: #000000;">-</span><span style="color: #000000;">and</span><span style="color: #000000;">-</span><span style="color: #000000;">drop</span><span style="color: #000000;">", можно открывать файл, перемещая объект файла из папки </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> (а также из окна программы </span><span style="color: #000000;">Explorer</span><span style="color: #000000;"> или любого другого окна, поддерживающего эту операцию) и отпуская его в окне программы.</span>
</p>
<p style=" ">
	<span style="color: #000000;">Для поддержки операции перетаскивания в программе </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> вызовите функцию </span><span style="color: #000000;">CWnd</span><span style="color: #000000;">::</span><span style="color: #000000;">DragAcceptFiles</span><span style="color: #000000;"> для объекта главного окна. Поместите это обращение внутри функции </span><span style="color: #000000;">Initlnstance</span><span style="color: #000000;"> класса приложения в файле </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;"> после вызова </span><span style="color: #000000;">UpdateWindow</span><span style="color: #000000;">:</span>
</p>
<p style=" ">
	<br>
</p>
<pre>BOOL CMiniDrawApp::InitInstance()
	{
	// другие
	операторы
	if(!ProcessShellCommand(cmdInfo))
	return FALSE;
	m_pMainWnd-&gt;ShowWindow(SW_SHOW);
	m_pMainWnd-&gt;UpdateWindow();
	m_pMainWnd-&gt;DragAcceptFiles();
	return
	TRUE;
	}
</pre>
<p style="">
	<span style="color: #000000;">Объект приложения содержит переменную </span><span style="color: #000000;">m</span><span style="color: #000000;">_</span><span style="color: #000000;">pMainWnd</span><span style="color: #000000;"> (определенную в классе </span><span style="color: #000000;">CWinThread</span><span style="color: #000000;">, базовом для </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;">), являющуюся указателем на объект главного окна. Функция </span><span style="color: #000000;">Initlnstance</span><span style="color: #000000;"> использует этот указатель для вызова функции </span><span style="color: #000000;">DragAcceptFiles</span><span style="color: #000000;">. Обращение к ней помещается после вызова функции ProcessShellCommand, так как внутри последней создает главное окно и присваивает значение переменной m_pMainWnd.</span>
</p>
<p style="">
	<span style="color: #000000;">После вызова функции </span><span style="color: #000000;">DragAcceptFiles</span><span style="color: #000000;"> (когда пользователь отпускает перетаскиваемый значок файла) </span><span style="color: #000000;">MFC</span><span style="color: #000000;"> автоматически открывает файл, создает объект класса </span><span style="color: #000000;">CArchive</span><span style="color: #000000;"> и вызывает функцию </span><span style="color: #000000;">Serialize</span><span style="color: #000000;">. Следовательно, для поддержки операции перетаскивания писать дополнительный код не нужно.</span>
</p>
<p style="">
	<span style="color: #000000;"><strong>Регистрация типа файла.</strong></span><span style="color: #000000;"> В системный реестр </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> следует добавить информацию, позволяющую открыть файл программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> (т.е. файл с расширением .</span><span style="color: #000000;">drw</span><span style="color: #000000;">), выполняя двойной щелчок на файле в папке </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> или в окне программы </span><span style="color: #000000;">Explorer</span><span style="color: #000000;"> (или любом другом окне, поддерживающем указанную операцию). Для этого вызовите функции </span><span style="color: #000000;">EnableShellOpen</span><span style="color: #000000;"> и </span><span style="color: #000000;">RegisterShellFileTypes</span><span style="color: #000000;"> класса </span><span style="color: #000000;">CWinApp</span><span style="color: #000000;"> из определения функции </span><span style="color: #000000;">Initlnstance</span><span style="color: #000000;"> в файле </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">.</span><span style="color: #000000;">cpp</span><span style="color: #000000;">:</span>
</p>
<pre>BOOL CMiniDrawApp::Initlnstance()
{
	// другие
	операторы ...
	AddDocTemplate (pDocTemplate);
	EnableShellOpen();
	RegisterShellFileTypes ();
	// Анализ
	командной
	строки
	с
	целью
	поиска
	команд // оболочки, DDE, открытия
	файлов
	CCommandLinelnfo
	cmdInfo; // другие //операторы ...
	}
</pre>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Эти функции создают в реестре </span><span style="color: #000000;">Windows</span><span style="color: #000000;"> связь между стандартным расширением файла программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;"> (.</span><span style="color: #000000;">drw</span><span style="color: #000000;">) и самой программой. Объект, представляющий любой файл с этим расширением, отображает значок программы </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">, а двойной щелчок на объекте запускает программу </span><span style="color: #000000;">MiniDraw</span><span style="color: #000000;">, если она еще не запущена, и открывает файл в этой программе. </span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Такая связь остается в реестре до тех пор, пока она не будет изменена явным образом.</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Заметьте! Обращения к функциям </span><span style="color: #000000;">EnableShellOpen</span><span style="color: #000000;"> и </span><span style="color: #000000;">RegisterShellFileTypes</span><span style="color: #000000;"> помещаются после вызова функции </span><span style="color: #000000;">AddDocTemplate</span><span style="color: #000000;">, добавляющей шаблон документа в приложение, чтобы информация о стандартном расширении файла и типе документа была доступна объекту приложения (стандартное расширение вводится в строковый ресурс с идентификатором </span><span style="color: #000000;">IDR</span><span style="color: #000000;">_</span><span style="color: #000000;">MAINFRAME</span><span style="color: #000000;">, который передается в шаблон.)</span>
</p>
<p style=" margin-left: 0in;">
	<span style="color: #000000;">Задание: дополнить программу, разработанную в предыдущей лабораторной работе, возможностями сохранения и восстановления данных.</span>
</p>
<p style="text-align: center; margin-left: 0in;"><strong><br></strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>ЛАБОРАТОРНАЯ РАБОТА №3</strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>«СТАНДАРТНЫЕ ЭЛЕМЕНТЫ УПРАВЛЕНИЯ»</strong>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in; margin-right: -0in;">
	Цели работы:
</p>
<ol>
	<li>создать диалог и его класс. При помощи редактора ресурсов установить на диалог надпись (static text), текстовое поле (edit box), кнопку (button). В заготовке каждого диалогового окна уже присутствуют кнопки “ОК” и “Cancel”, но можно добавить еще и свои – столько, сколько посчитаете нужным, флажок (check box), переключатель-радиокнопку (radio
button), список (list
box). Создать переменные для элементов управления;
	</li>
	<li>создать обработчики событий для элементов интерфейса при помощи ClassWizard.
	</li>
</ol>
<p style="">В работе необходимо реализовать:
</p>
<ol>
	<li>в<span style="color: #000000;">ызо</span>в диалога при старте приложения;
	</li>
	<li>определение статуса закрытия диалога (нажата кнопка “OK” или “Cancel”);
	</li>
	<li>вывод сообщения (в MessageBox ) в зависимости от состояния флажка и переключателя-радиокнопки; 
	</li>
	<li>изменение выводимого сообщения (в MessageBox ) в зависимости от состояния флажка и переключателя-радиокнопки. 
	</li>
</ol>
<p><br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>Методические указания</strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p>На первом этапе создадим SDI-приложение, а на втором этапе –диалоговое окно. Процесс создания ресурсов для диалоговых окон подробно рассмотрен в приложении 2.
</p>
<p>Установите элементы управления на поверхности диалога. Для этого щелкните мышью на пиктограмме соответствующего элемента управления, а затем щелкните на форме в том месте, где будет расположен этот элемент. Если посчитаете нужным, "ухватитесь" указателем мыши за один из размерных маркеров вокруг изображения элемента. С помощью его передвижения можно изменять границы размеров элемента.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_fdce27ee.png" alt="" style="float: bottom;">
</p>
<p style="text-align: left; margin-left: 1in;">
	<em>Рис.</em><em> 3.1.</em><em> Диалоговое окно с элементами управления</em>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Добавьте элемент типа флажок и три переключателя в диалоговое окно, чтобы оно приняло вид, изображенный на рис. 3.1. В поле Caption измените надписи для переключателей. Пусть это будут One (один), Two (два) и Three (три). Чтобы выровнять включенные в окно элементы (выстроить их в колонку), выберите один из них, а затем, нажав и удерживая клавишу &lt;Ctrl&gt;, выберите по очереди остальные. После этого выберите в меню<span style="color: #00ff00;">
	</span>Lay-Out\Align
Control Left, затем выберите команду Lay-Out\Space
Evenly\Down (Размещение\Подравнять интервал\Вниз). Эта команда позво­ляет установить одинаковый интервал между элементами по вертикали.
</p>
<p style=" margin-left: 0in;">
	Выберите переключатель One, вызовите окно Dialog Properties и установите в нем флажок Group (Группа). Такая установка означает, что переключатель One является первым элементом группы переключателей.
</p>
<p style=" margin-left: 0in;">
	Теперь добавьте в формируемое окно еще и элемент типа список. Установите его слева от переключателей и измените размеры в соответствии с заданием. В то время, когда этот элемент еще остается выбранным, с помощью команды View=&gt; Properties вызовите на экран окно Dialog Properties. Выберите вкладку Styles (Стили) и проверьте, не установлен ли флажок Sort (Сортировка). Если этот флажок установлен, то при выполнении программы элементы в списке будут отсортированы по алфавиту.
</p>
<p style=" margin-left: 0in;">
	Краткая характеристика основных Windows-элементов управления, используемых для построения диалога:
</p>
<ul>
	<li>
	<strong>надпись</strong> (static text) – по существу, это "неполноценный" элемент управления, поскольку он используется только как поле для вывода надписи, относящейся к "настоящему" элементу управления, расположенному рядом;
	</li>
	<li>
	<strong>текстовое поле</strong> (edit box) – может быть однострочным или многострочным; сюда пользователь может ввести текст;
	</li>
	<li>
	<strong>кнопка</strong> (button) – данный элемент предназначен для начала каких-либо действий после нажатия на неё;
	</li>
	<li>
	<strong>флажок</strong> (check box) – используется для установки опций, каждая из которых может быть выбрана независимо от других;
	</li>
	<li>
	<strong>переключатель-радиокнопка</strong> (radio button) – используется для выбора одной из групп связанных опций; если выбрана одна из них, то другие полагаются невыбранными;
	</li>
	<li>
	<strong>список</strong> (list box) – используется для выбора одного элемента из заранее подготовленного набора; набор может быть как жестко установленным на этапе разработки программы, так и меняться программно в процессе выполнения приложения; главное – пользователь по своей воле не может непосредственно менять элементы в наборе, он может только их выбирать;
	</li>
	<li>
	<strong>поле со списком (Combo box) </strong> это комбинация текстового поля и списка; такой элемент управления позволяет пользователю не только выбирать элементы из ранее под­готовленного набора, но и самостоятельно пополнять его, непосредственно внося необходимый текст в текстовое поле.
	</li>
</ul>
<p style=" margin-left: 0in; margin-right: -0in;">
	<strong>Задание идентификаторов диалогового окна и элементов управления.</strong> Поскольку каждое диалоговое окно в приложении является уникальным объектом (исключение составляют только стандартные окна, о которых речь будет идти в последующих главах), разработчику практически всегда нужно присваивать окнам и элементам управления, входящим в их состав, идентификаторы по собственному выбору. Конечно, можно согласиться и с теми идентификаторами, которые предлагает редактор диалоговых окон по умолчанию. Они не несут смысловой нагрузки (как правило, нечто вроде IDD_DIALOG1, IDC_EDIT1, IDC_RADI01) и их можно заменить другими, связанными с назначением и функциями окна или элемента. Но в любом случае рекомендуется соблюдать соглашение о префиксах: идентификаторы диалоговых окон имеют префикс IDD_, а идентификаторы элементов управления – <strong>IDC</strong><strong>_</strong>. Заменить идентификатор можно с помощью диалогового окна Dialog
Properties. Для этого выберите элемент управления или диалог и Edit Properties, если ранее окно Dialog
Properties не было выведено и закреплено на экране. Затем измените идентификатор ресурса в поле ID, но при этом не забывайте о префиксах: IDD_– для диалоговых окон и IDC_ – для элементов управления.
</p>
<p style=" margin-left: 0in; margin-right: -0in;">
	<strong>Создание ассоциированных переменных.</strong> Ассоциированная переменная класса диалогового окна задается в ClassWizard на закладке Member
Variables (рис.3.2) и соответствует либо значению - содержимому элемента управления, либо объекту класса соответствующего данному типу элемента управления. Пример, представленный на рис. 3.3, демонстрирует один из вариантов ассоциативной связи. Элементу IDC_CHECK1 следует присвоить идентификатор переменной m_check. Нужно проверить, чтобы в раскрывающемся списке Category (Категория) было выбрано Value (Значение). Если вы раскроете список Variable
type (Тип переменной), то увидите, что вам предоставлен единственный "свободный" выбор –
BOOL. Флажок может быть либо установлен, либо сброшен, а значит, ассоциирован только с переменной типа BOOL, которая принимает только два значения –
TRUE и FALSE. Нажмите на ОК для завершения процедуры.
</p>
<p style=" margin-left: 0in; margin-right: -0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_ca21d83e.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.3</em><em>.2.</em><em> Закладка </em><em>Member</em><em>
	</em><em>Variables</em><em> и элементы управления </em>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_f2cd55cf.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 3.3.</em><em> Диалог установки идентификатора члена-переменной класса, ассоциированного с некоторым элементом управления</em>
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in; margin-right: -0in;">
	Ниже перечислены типы переменных, которые могут быть ассоциированы с тем или иным типом элемента управления:
</p>
<ul>
	<li>
	текстовые поля – как правило, строковый тип(CString), но иногда и другие – int, fIoat и Iong;
	</li>
	<li>
	кнопки – int;
	</li>
	<li>
	флажки – BOOL;
	</li>
	<li>
	переключатели – int; 
	</li>
	<li>
	список – строковый тип;
	</li>
	<li>
	поле со списком – строковый тип;
	</li>
	<li>
	полоса прокрутки – int .
	</li>
</ul>
<p style=" margin-left: 0in;">
	Свяжите таким же образом значение, которое содержится в элементе IDC_EDIT1, с членом-переменной m_edit типа CString<em>. </em>Элемент IDC_LIST1 должен быть связан с членом-переменной m_list, который должен быть объектом класса CListBox (в списке Category должно быть избрано Control). Первый переключатель в группе IDC_RADI01 должен быть связан с членом-переменной m<em>_</em>radio типа int, причем связь должна быть установлена по значению.
</p>
<p style=" margin-left: 0in;">
	После добавления переменных ClassWizard предложит установить параметры, которые могут быть использованы для проверки достоверности ввода данных. Это делается не для всех видов переменных. Но, на­пример, если речь идет о переменной, связанной с текстовым полем, СlassWizard предлагает в поле Maximum Characters (Максимум символов) установить максимальную длину вводимой строки (рис.3.4.). Для члена-переменной m_edit установите значение этого параметра равным 10. Если текстовое поле ассоциировано с переменной типа int или float, ClassWIzard использует эту же часть окна для установки верхнего и нижнего пределов вво­димого пользователем значения. В дальнейшем всю работу по проверке соответствия введен­ного значения установленным ограничениям и выдачу в случае их нарушения сообщения с просьбой повторить ввод берут на себя функции из библиотеки MFC.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_1849105.png" alt="" style="float: bottom;">
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.3</em><em>.4.Выбор элементов управления для установки параметров проверки достоверности ввода данных</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	В классе, связанном с диалогом, присутствует функция OnOK(), которая унаследована от базового класса CDialog, классом-наследником которого является наш диалог. Помимо прочего в нем находится функция DoDataExchange(), подготовленная средствами СlassWizard. Вот как она выглядит в настоящий момент:
</p>
<pre>void CSDIDialog::DoDataExchange(CDataExchange* pDX)
	{
	CDialog::DoDataExchange(pDX);
	//{{AFX_DATA_MAP(CSdiDiaIog)
DDX_Control(pDX, IDC_LIST1, m_list);
     DDX_Check(pDX, IDC_CHECK1, m_check);
     DDX_Text(pDX, IDC_EDIT1, m_edit);
	DDV_MaxChars(pDX, m_edit, 10);
     DDX_Radio(pDX, IDC_RADI01, m_radio);
	//}}AFX_DATA_MAP
}
</pre>
<p style=" margin-left: 0in;">
	Все функции, имена которых начинаются с DDX, выполняют обмен данными. Вторым аргу­ментом каждой функции является идентификатор элемента управления, а третьим – переменная класса. Именно таким образом СIassWizard устанавливает соответствие между элементами управления и членами класса диалогового окна – это СIassWizard подгото­вил такой текст программы вместо вас.
</p>
<p style=" margin-left: 0in;">
	Имеются 34 функции, их имена начинаются с DDX – одна на каждый тип данных, которы­ми могут обмениваться диалоговое окно и соответствующий класс. Каждая функция включа­ет в свое имя также имя элемента управления. Например, функция DDX_Check() используется для связи между элементом типа флажок (check box) и членом-переменной типа BOOL. Анало­гично DDX_Text() используется для связи члена-переменной типа CString с текстовым по­лем. СIassWizard выбирает соответствующую функцию в процессе выполнения описанной выше операции связывания членов класса с элементами управления.
</p>
<p style=" margin-left: 0in;">
	Существует несколько DDX-функций, за которые ClassWizard не несет ответственности. Например, если вы связываете список по значению с переменной, то единственным выбором для вас является тип CString. В этом случае ClassWizard формирует функ­цию DDX_LBString(), которая связывает выбранный в списке элемент с членом-переменной типа CString. Однако иногда эффективнее использовать индекс выбран­ного элемента, а не сам элемент. Для этого случая имеется функция DDX_LBlndex(), которая выполняет соответствующий обмен. Вызов этой функции можно добавить в текст функции-члена DoDataExchange. Соответствующая строка может быть вставле­на в том месте программы, где имеется специальный комментарий, созданный ClassWizard. При этом не забудьте добавить соответствующую переменную-член в объявление класса в файле заголовка. Полный список DDX-функций можно найти в электронной документации.
</p>
<p style=" margin-left: 0in;">
	Функции, имена которых начинаются с DDV, ответственны за проверку соблюдения задан­ных ограничений на вводимые данные. ClassWizard вставляет вызов DDV_MaxChars() сразу за вызовом DDX_Text, которая передает содержимое текстового поля IDC_EDIT1 в переменную m_edit. Второй аргумент вызова функции – идентификатор переменной-члена, а третий – значение параметра, ограничивающего длину вводимой строки. Если пользователь когда-нибудь при работе с программой попытается ввести символов больше, чем дозволено, то DDV_MaxChars() организует вывод на экран предупреждающего сообщения. Так что вы можете только указать величину ограничения и рассчитывать, что все дальнейшее будет орга­низовано СIassWizard и MFC.
</p>
<p style=" margin-left: 0in;">
	<strong>Организация вывода диалогового окна на экран.</strong> Выберите вкладку ClassView в рабочей зоне проекта, раскройте пункт SDI
Classes, а в нем –
CSDIApp. Дважды щелкните на функции-члене InitInstance(). Эта функция вызывает­ся при любом запуске приложения. Перейдите в самое начало файла и после уже имеющихся директив # inсlude вставьте еще одну:
</p>
<p style=" margin-left: 0in;">
	<strong>#include "sdidialog.h"</strong>
</p>
<p style="">
	Теперь при трансляции компилятор будет знать, где взять информацию о классе CSDIDialog. Перейдите в конец текста функции CSDIApp::Initlnstance() в файле
SDI.CPP и добавьте перед окончанием текста функции (перед оператором return) следующие строки:
</p>
<p style="text-align: left; margin-right: 0in;">
	<strong></strong>
</p>
<pre>CSDIDialog dlg;
dlg.m_check = TRUE;
	dlg.m_edit = "hi there";
CString msg;
	if (dlg.DoModal() == IDOK) {
	msg = "You сIicked OK.
	";}
else
{
	msg = "You can clicked Cancel.
	";
}
	msg += "Edit Box is: ";
	msg += dlg.m_edit;
	AfxMessageBox(msg);
</pre>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Приведенный выше фрагмент программы – экземпляр класса диалогового окна. Он устанавливает параметры по умолчанию для двух элементов управления – флажка и текстового поля. Сам по себе вывод диалогового окна производится функцией DoModal(), которая возвращает числовое значение – IDOK, если пользователь вышел из окна, нажав на ОК, и IDCANCEL, если выход произошел после нажатия на Cancel. Затем в приведенном фрагменте формируется сообщение, которое выводится на экран функцией AfxMessageBox().
</p>
<p style="">
	<strong>Использование элемента управления типа </strong><em><span style="text-decoration: underline"><strong>список. </strong></span></em>Работать со списками сложнее, поскольку реальным объектом список становится тогда, когда диалоговое окно уже выведено на экран. Нельзя вызывать функции-члены списка до тех пор, пока не будет порожден экземпляр класса диалогового окна. Таким образом, инициализировать список – заполнить его элементами-строками – и анализировать, какая строка выбрана, можно только на том участке программы, который выполняется во время присутствия диалогового окна на экране.
</p>
<p style="">
	Когда наступает время инициализировать диалоговое окно, перед выводом его на экран, вызывается функция-член класса CDialog
OnInitDialog(). Для того, чтобы включить эту функцию в члены класса необходимо воспользоваться услугами ClassWizard.
</p>
<p style="">
	В окне ClassView щелкнуть правой кнопкой на CsdiDialog и в контекстном меню выбрать команду Add Windows
Message Handler (Добавить обработчик сообщений Windows). На экране
появится окно New Message and Event Handlers. В списке New Windows Messages/Events выбрать WM_INITDIALOG и щелкнуть
на кнопке Add Handler. Идентификатор сообщений исчезнет из списка в левой части окна и появится в списке Existing
Messages/Event
Handlers в правой части. Щелкнуть на нем и затем щелкнуть на кнопке EditExisting с тем, чтобы увидеть текст программы.
</p>
<p style="">
	Удалите комментарий TODO и вставьте вызовы функций-членов списка.
</p>
<p style="">
	<br>
</p>
<pre>BOOL CsdiDialog:: OnInitDialog()
	{
	CDialog::OnInitDialog();
	<br>
	 m_list.AddString(“First String”);
	 m_list.AddString(“Second String”);
	 m_list.AddString(“Third String”);
	 m_list.AddString(“Fourth String”);
	 m_list.SetCurSel(2);
	<br>
	 m_radio=1;
	 UpdateData(FALSE);
	<br>
	return TRUE; //Возвращает TRUE , если только вы не //установили фокус ввода на элемент //управления
</pre>
<p style="">
	Работы этого фрагмента начинается с вызова той версии функции OnInitDialog(), которая принадлежит базовому классу СDialog. Она выполнит все фоновые операции, предусмотренные в MFC, для инициализации диалогового окна. Затем вызывается функция член <strong>AddString </strong>, которая добавляет в список элементы. Функция <strong>SetCurSel </strong>устанавливает начальный фокус выбора в списке. Индекс начинается с нуля.
</p>
<p style="">
	Для того чтобы организовать вывод в окне сообщения информации о выбранном из списка элементе, нужно также включить специальный член-переменную в класс диалогового окна. В эту переменную при закрытии окна будет записываться значение, к которому затем можно обратиться, несмотря на то, что окно уже закрыто. В окне ClassView правой кнопкой на CsdiDialog и выбрать Add Member
Variable. Заполните реквизиты: имя – m_selected; тип – Cstring и щелкните OK. Описание переменной появится в файле заголовка класса диалогового окна. Если планируется, что список должен поддерживать многозначный выбор, то тип введенной переменной будет CStringArray, т.е. эта переменная будет содержать массив выбранных переменных. Член- переменную вообще говоря следует объявлять закрытой (private), а функции доступа к ней открытыми (public). Эта новая переменная будет хранить выбранный пользователем элемент списка. Запись в нее будет производиться тогда, когда пользователь щелкает на OK или CANCEL.
</p>
<p>Создание обработчиков событий нажатия на кнопки OK и CANCEL. Простейшим событием является нажатие на кнопку в диалоге. Для его создания можно просто дважды нажать левой клавишей мыши в окне ресурса по соответствующей кнопке. После этого на экране появится диалог (рис.3.5).
</p>
<p><br>
</p>
<p><br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_4c7576c7.png" alt="" style="float: bottom;">
</p>
<p style=" ">
	<br>
</p>
<p style="text-align: center; ">
	<em>Рис.3</em><em>.5. Диалог</em><em> определения имени функции</em>
</p>
<p style=" ">
	<br>
</p>
<p style=" margin-right: 0in;">
	По умолчанию ClassWizard предлагает очень удачное имя для этой функции обработки события.
</p>
<p style=" margin-right: 0in;">
	Листинг: SDIDIALOG.СРР , функция CSDIDialog::OnOK():
</p>
<pre>void CSDIDialog::OnOK()
{
	int index = m_list.GetCurSel();
	if (index != LB_ERR)
{
m_list.GetText(index, m_selected);}
	else {
	m_selected = "";
	}
	CDialog::OnOK();
}
</pre>
<p style=" margin-left: 0in;">
	Работа этого фрагмента программы начинается с вызова функции-члена класса объектов список GetCurSel(), которая возвращает константу LB_ERR в случае, если не выбран ни один элемент списка или если выбрано более одного элемента. Иначе возвращается индекс выбранного элемента. Функция GetText() (член того же класса) переписывает строку выбранного элемента в переменную m_selected класса CSDIDialog. Первым аргументом функции является индекс выбранного элемента. После этого вызывается функция ОnОК() базового класса CDialog, которая выполняет все стандартные действия по закрытию окна.
</p>
<p style=" margin-left: 0in;">
	Сейчас можно скорректировать текст функции CSDIApp::Initlnstance() для того, чтобы в выведенном после закрытия окна сообщении было упомянуто, какой выбор сделал пользователь в списке. Эти строки программы будут выполняться независимо от того, каким образом было закрыто окно – нажал пользователь на ОК или на Cancel. Сначала нужно создать дополнительно функцию, которая обрабатывала бы щелчок на Cancel. Такая функ­ция – OnCanceI() – создается точно таким же образом, как и ОnОК(), но в правом списке Class or
object to handle выделите IDCANCEL и согласитесь с именем функции OnCancel() Как видно из листинга сформированной функции, переменная m_selected очищается, по­скольку пользователь отказался от диалога с программой.
</p>
<p style="">
	Листинг:<strong> </strong>SDIDIALOG.СРР, функция CSDIDialog: :OnCancel():
</p>
<pre>void CSDIDialog::OnCanceI()
	{
	m_selected = "";
	CDdialog::OnCancel();
	}
</pre>
<p style="text-align: left; margin-left: 0in;">
	В функцию CSDIApp::InitInstance() добавьте следую­щие строки перед обращением к функции AfxMessageBox():
</p>
<pre>	msg += ". List Selection: ";
	msg += dlg.m_selected;
</pre>
<p>Для выбора одного из переключателей в группе диалогового окна в функции CSDIDialog::OnInitDialog() имеется добавить следующий текст:
</p>
<pre>	m_radio = 1;
	UpdateData(FALSE);
</pre>
<p style=" margin-left: 0in;">
	Членом-переменной является m_radio, с которым связана группа переключателей. Она (переменная) представляет собой индекс выбранного переклю­чателя в этой группе элементов управления (как всегда, индекс начинается с 0). Зна­чение индекса 1 соответствует второму переключателю в группе. Вызов функции UpdateData() в этом фрагменте обновляет содержимое элементов управления диалогового ок­на соответственно состоянию связанных с ними переменных-членов. Аргумент функции UpdateData() указывает направление передачи данных: UpdateData(TRUE) обновило бы содер­жимое переменных соответственно элементам управления, т.е. переписало бы в m_radio индекс выбранного в группе переключателя.
</p>
<p style=" margin-left: 0in;">
	В отличие от списка группа переключателей доступна и после того, как диалоговое окно убрано с экрана. Так что вам не придется добавлять что-либо в функции ОnОК() и OnCanceI(). Вместо этого у вас будет другая проблема – как преобразовать целое значение индекса в строковое выражение, которое нужно будет добавить в "хвост" текста сообщения в переменную msg. Су­ществует множество ее решений, включая функцию-член Format() класса CString, но в дан­ном случае можно поступить гораздо проще – использовать оператор switch, поскольку индекс может принимать лишь ограниченное множество значений. В конец текста функции CSDIApp::Initlnstance(), перед вызовом AfxMessageBox(), добавьте несколько строк, пред­ставленных в листинге.
</p>
<p style="">
	Листинг функции CSDIApp::Initlnstance():
</p>
<pre>void CSDIApp::InitInstance()
	{
	msg += "\r\n";
	msg += "Radio Selection: ";
	switch (dlg.m_radio)
	{
	case 0:
	msg += "O";
	break;
	case 1:
	msg += "1";
	break;
	case 2:
	msg += "2";
	break;
	default:
	msg += "none";
	break;
	}
	}
</pre>
<p>Первая из новых строк добавляет в сообщение два специальных символа – перевод ка­ретки \r и перевод строки \n,
 которые в совокупности представляют маркер конца строки Windows. В результате дальнейшая часть сообщения msg начнется с новой строки.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	<strong>Запуск и компиляция приложения. </strong>Запустите процесс компиляции и компоновки проекта, выбрав команду Build=&gt;Build или щелкнув на пиктограмме Build (Построить) панели инструментов Build. Запустите выполнение приложения, воспользовавшись командой Build\Execute (Построить\Выполнить) или щелкнув на пиктограмме Execute (Выполнить) панели инструментов Build. Вы увидите, что на экра­не появилось диалоговое окно с параметрами элементов управления, установленными по умол­чанию в программе, которую вы только что отредактировали.
</p>
<p style=" margin-left: 0in;">
	После загрузки созданного вами приложения поменяйте что-либо в текстовом поле (например, введите текст hello), а затем щелкните на ОК. После этого на эк­ране должно появиться окно сообщения.
</p>
<p style=" margin-left: 0in;">
	Снова запустите приложение, отредактируйте текст в поле и выйдите из окна, щелкнув на Cancel. Обратите внимание на сообщение, гласящее, что в поле остался исходный текст hello. Это получилось потому, что MFC не дублирует содержимое текстового поля (как элемента управления) в переменную-член в случае, если пользователь щелкает на Cancel для выхода из окна. И снова, как и в предыдущем эксперименте, закройте приложение.
</p>
<p style=" margin-left: 0in;">
	После того, как вы щелкнете на ОК, приложение выведет в окне со­общения копию текста, введенного в текстовом поле. Надпись в окне гла­сит: <em>В”</em><em>You</em><em>
	</em><em>clicked</em><em> </em><em>OK</em><em>. </em><em>Edit Box is: hello”</em>.
</p>
<p style=" margin-left: 0in;">
	Если вы щелкнете на Cancel, приложение проигнорирует любые из­менения элементов управления. Надпись
в окне
гласит: “
	<em>You can clicked Cancel. Edit Box is: hello”.</em>
</p>
<p><strong>Варианты задания:</strong>
</p>
<p>1.Разработать приложение управления двумя списками, расположенными на диалоге горизонтально. Приложение должно обеспечивать перемещение любого выбранного элемента или содержимого всего списка в другой список, как из левого – в правый, так и из правого – в левый. Элемент при перемещении должен исчезать из одного списка и появляться в другом. Помимо того приложение должно обеспечивать управление левым списком – добавление нового элемента, редактирование, удаление.
</p>
<p>2.Разработать приложение, обеспечивающее возможность множественного выбора элементов из списка. Выбранные элементы должны образовывать строку текста и помещаться в строку редактирования. Предусмотреть возможность вывода сообщения в случае, если суммарное количество символов будет превышать 100.
</p>
<p>3.Разработать приложение, реализующее калькулятор. Приложение должно иметь строку редактирования, набор кнопок 0…9, кнопки арифметических действий – суммирование, вычитание, деление, умножение.
</p>
<p>4.Разработать приложение, реализующее калькулятор. Приложение должно иметь две строки редактирования. Набор переключателей-радио кнопок определяет, какое арифметическое действие необходимо выполнить: суммирование, вычитание, деление, умножение.
</p>
<p>5.Разработать приложение, обеспечивающее поиск в списке (list
box) фрагмента текста. Строки, в которых будет найден искомый фрагмент, должны быть выделены (предполагается, что несколько строк может иметь искомый фрагмент). Помимо этого приложение должно обеспечивать управление содержимым списка – добавление нового элемента, редактирование, удаление.
</p>
<p>6.Разработать приложение генерации счетчика 100 случайных чисел и вывод их в отсортированном по убыванию порядке. Обеспечить возможность расчета суммы трех наибольших чисел и трех наименьших. Суммируемые числа выделить.
</p>
<p>7.Разработать приложение управления двумя списками, расположенными на диалоге горизонтально. Приложение должно обеспечивать перемещение любого количества выбранных элементов. Элемент при перемещении не исчезает, а выделяется. Помимо этого приложение должно обеспечивать заполнение левого списка 10 строками при запуске приложения.
</p>
<p>8. Разработать приложение управления списком. На диалоге установлено два флажка (check
box). При первом включенном флажке осуществляется выбор всех нечетных строк, при втором включенном флажке осуществляется выбор всех четных строк.
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>ЛАБОРАТОРНАЯ РАБОТА №4</strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>«РАЗРАБОТКА ПРИЛОЖЕНИЯ УПРАВЛЕНИЯ БАЗОЙ ДАННЫХ»</strong>
</p>
<p style=" margin-left: 0in;">
	Цель работы – ознакомиться с процессом создания Win32-приложений, поддерживающих работу с базами данных.
</p>
<p style=" margin-left: 0in;">
	Задачи:
</p>
<ol>
	<li>создание приложения, отображающего данные из БД;
	</li>
	<li>обеспечение удаления, редактирования, добавления записей в БД;
	</li>
	<li>обеспечение сортировки и фильтрации записей из БД.</li>
</ol>
<p style="text-align: center; margin-left: 0in;">
	<strong>Методические указания</strong>
</p>
<p style="text-align: left; margin-left: 0in;">
	<strong>Создание экранной формы для отображения содержимого базы данных.</strong> Пусть наша программа называется DB. Как указано в приложении 5 создайте заготовку программы. Затем вам необходимо модифицировать диалог, связанный с производным классом от CRecordView, предназначенным для отображения данных в окне приложения. Поскольку этот диалог является просто специализированным типом диалогового окна, связанного с базой данных, модификацию можно осуществить с помощью редактора ресурсов Visual Studio:
</p>
<ol>
	<li>
	Для отображения ресурсов приложения щелкните на корешке вкладки ResourceView. Разверните дерево ресурсов, щелкнув на знаке "+'" перед папкой DB<span style="color: #00ff00;">
	</span>Resources. Далее, откройте папку ресурсов Dialog и сделайте двойной щелчок на идентификаторе диалогового окна IDD_DB_FORM (AppWizard генерирует диалог IDD_DB_FORM) и тем самым откройте диалог в редакторе ресурсов. 
	</li>
	<li>
	Выделите строку в центре диалогового окна, а затем удалите ее, нажав клавишу &lt;Del&gt;. 
	</li>
	<li>
	Пользуясь инструментами редактора диалогового окна, добавьте в него текстовые поля редак­тирования и статические надписи по образцу, показанному на рис. 4.1. Присвойте полям редактирования идентифи­каторы в соответствии с шаблоном: IDC_названиетаблицы_названиеполя (например для поля ID таблицы User IDC_USERID, а для поля FirstName – идентификатор IDC_USERFIRSTNAME). Для текстового поля, содержащего идентификатор IDC_USERID, установите стиль Read-OnIу (определяется одноимен­ным флажком на вкладке Styles в окне свойств Edit Properties). Часто перед названием поля на этапе проектирования ставится название таблицы. Особенно это удобно, если поле с таким названием существует в нескольких таблицах.
	</li>
	<li>
	Каждое из этих текстовых полей будет представлять собой поле записи базы данных. Атрибут Read-Only (только для чтения) установлен для первого (текстового) поля по той причине, что оно будет содержать первичный ключ базы данных, который не подлежит изменению.
	</li>
	<li>
	Для вызова мастера СlassWizard выберите команду View\ClassWizard и в раскрывшемся окне щелкните на корешке вкладки Member
Variables.
	</li>
	<li>
	Выбрав ресурс IDC_USERFIRSTNAME, щелкните на кнопке Add
Variable. Раскроется диалого­вое окно Add Member
Variable.
	</li>
	<li>
	Щелкните на стрелке рядом с раскрывающимся списком Member
Variable Name и выбе­рите в нем значение m_pSet-&gt;m_UserFirstName (рис. 4.2).
	</li>
	<li>
	Аналогично свяжите с элементами редактирования остальные переменные-члены (m_pSet-&gt;m_UserMiddleName, m_pSet-&gt;m_UserLastName и m_pSet-&gt;m_UserEMail). Когда это будет сделано, вкладка Member
Variables окна MFC
ClassWizard должна выглядеть так, как показано на рис. 4.3.
	</li>
</ol>
<p style=" margin-left: 0in;">
	Выбрав переменные-члены класса приложения CDBSet (производного от класса MFC CRecordset) в качестве переменных для элементов управления в классе представления базы данных (в форме), вы установили связь, посредством которой может происходить обмен данными между элементами редактирования и источником данных.
</p>
<ol>
	<li>
	После щелчка на кнопке ОК в окне MFC ClassWizard внесенные изменения будут зафик­сированы в тексте программы.
	</li>
</ol>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_cf302c0.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.4.1. Создание диалогового окна, которое будет </em>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>использоваться в качестве формы для базы данных</em>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_ec700391.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; ">
	<br>
</p>
<p style="text-align: center; ">
	<em>Рис.</em><em> 4.2.</em><em> Связывание поля </em><em>IDC</em><em>_</em><em>USER</em><em> _</em><em>USERFIRSTNAME</em><em> </em><em>c</em><em> переменной-членом </em><em>m</em><em>_</em><em>UserFirstName</em><em> класса выборки данных</em>
</p>
<p style=" margin-left: 1in; margin-right: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_98b1e22e.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.3.Связь</em><em> элементов управления с переменными-членами класса </em><em>CDBSet</em>
</p>
<p style="text-align: center; margin-left: 1in;">
	<br>
</p>
<p style="text-align: left; margin-left: 0in;">
	Мы завершили создание экранной формы для отображения данных в приложении Employee. Откомпилируйте и запустите программу и вы увидите окно, показанное на рис. 4.4. Приложение отображает содержимое записей таблицы User.Используя элементы навигации, расположенные на панели инструментов, можно перемешаться от одной записи таблицы User к другой.
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_a733a26f.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>Рис.</em><em> 4.4.</em><em> Отображение</em><em> в</em><em> приложении данных из таблицы </em><em>User</em>
</p>
<p style="text-align: left; ">
	<br>
</p>
<p style=" margin-left: 0in;">
	Проверив возможность перемещения в базе данных, попробуйте обновить любую из запи­сей. Для этого достаточно просто изменить содержимое любого из полей записи (за исклю­чением поля UserID, которое является первичным ключом и не может быть изменено). При переходе к другой записи приложение автоматически перенесет отредактированные дан­ные в таблицу. Команды меню Record (Запись) приложения позволяют перемещаться по за­писям в базе данных точно так, как пиктограммы панели инструментов.
</p>
<p style=" margin-left: 0in;">
	<strong>Добавление и удаление записей.</strong> После включения в создаваемое приложение возможности добавлять и удалять записи в таблице базы данных оно превратится в полнофункциональную программу обработки одно­файловой (но не реляционной) базы данных. В нашем случае в роли однофайловой базы данных выступает таблица User реляционной базы данных виртуального магазина. Добавление и удаление за­писей в таблице базы данных реализуются достаточно просто благодаря существованию в Visual C++ классов CRecordView и CRecordset, предоставляющих все необходимые методы для выпол­нения этих стандартных операций. Необходимо будет добавить в приложение несколько команд меню (приложение 3). Для добавления к приложению команд Add (Добавить) и Delete (Удалить) выполните следующие действия:
</p>
<ol>
	<li>
	Щелкните на корешке вкладки ResourceView, откройте папку Menu и сделайте двойной Щелчок на меню IDR_MAINFRAME. На экране раскроется окно редактора меню.
	</li>
	<li>
	Щелкните в меню Record и тем самым откройте его, а затем щелкните на пустой области в нижней части этого меню. Выберите команду View\Properties и переместите раскрыв­шееся диалоговое окно Properties на подходящее для него место.
	</li>
	<li>
	В поле ID введите значение ID_RECORD_ADD, а в поле Caption введите значение &Add Record. В результате в меню Record будет добавлена новая команда.
	</li>
	<li>
	В следующий пустой элемент меню внесите команду удаления, имеющую идентификатор ID_RECORD_DELETE (поле ID) и заголовок Delete
   Record (поле Caption), как показано на рис.4.5.
	</li>
</ol>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_29a0a2f1.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.5.</em><em> Добавление в меню команд добавления и удаления записей</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Далее необходимо добавить на панель инструментов пару новых пиктограмм (приложение 4) и связать с командами меню. Выполните следующие действия:
</p>
<ol>
	<li>
	В дереве ресурсов в окне ResourceView откройте папку Toolbar и сделайте двойной щел­чок на идентификаторе IDR_MAINFRAME. Панель инструментов приложения будет отображе­на в окне редактора ресурсов.
	</li>
	<li>
	Щелкнув на пустой пиктограмме панели инструментов, выберите ее, а затем с помощью инструментов графического редактора нарисуйте на ней голубой знак "плюс", как по­казано на рис. 4.6.
	</li>
	<li>
	Сделайте двойной щелчок на новой пиктограмме панели инструментов. Раскроется окно
свойств Toolbar Button Properties. В списке ID выберите значение ID_RECORD_ADD. 
	</li>
	<li>
	Снова выделите пустую пиктограмму панели инструментов и нарисуйте на ней красный знак "минус", присвойте пиктограмме идентификатор ID_RECORD_DELETE аналогично “плюсу”. Перетащите пиктограммы добавления и удаления левее пиктограммы справки, помеченной знаком вопроса.
	</li>
</ol>
<p style="">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_165d4552.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.6.</em><em> Добавление пиктограммы на панель инструментов</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Теперь, когда в меню уже добавлены новые команды и на панель инструментов помещены соответствующие пиктограммы, необходимо сформировать программный код, который будет обрабатывать командные сообщения, посылаемые, когда пользователь щелкает на пиктограмме или выбирает пункт меню. Так как в нашем приложении с базой данных связан класс представления, в нем следует организовать перехват этих сообщений. Выполните следующие операции:
</p>
<ol>
	<li>
	Раскройте окно ClassWizard и выберите в нем вкладку Message
Maps. 
	</li>
	<li>
	В списке Class Name выберите CDBView, а в списке Object IDS – значение ID_RECORD_ADD, после чего сделайте двойной щелчок на значении COMMAND в списке Messages. Раскроется диалоговое окно Add Member
Function.
	</li>
	<li>
	Щелкните на кнопке ОК, приняв для новой функции имя, предложенное по умолчанию. Имя новой функции появится в списке Member Functions в нижней части окна ClassWizard.
	</li>
	<li>
	Аналогичным образом добавьте метод для обработки команды ID_RECORD_DELETE. Закройте окно мастера СIassWizard, щелкнув на кнопке ОК.
	</li>
	<li>
	В окне ClassView, дважды щелкнув на элементе CDBView, откройте файл DBView.h. В объявлении класса добавьте следующие строки в раздел Attributes:</li>
</ol>
<pre>	protected:
BOOL m_bAdding;
</pre>
<ol>
	<li>
	В окне ClassView сделайте двойной щелчок на конструкторе класса CDBView и до­бавьте следующую строку в конец этой функции:
	</li>
</ol>
<pre>	m_bAdding = FALSE;
</pre>
<ol>
	<li>
	Сделайте двойной щелчок на функции OnRecordAdd() и отредактируйте ее текст так, как показано в листинге:
	</li>
</ol>
<p style="">
	Листинг функции CDBView: :OnRecordAdd():
</p>
<p style="">
	<strong></strong>
</p>
<pre>void CDBView::OnRecordAdd()
{
	m_pSet-&gt;AddNew();
	m_bAdding = TRUE;
	CEdit* pCtrl = (CEdit*)GetDlgltem(IDC_USERID);
	int result = pCtrl-&gt;SetReadOnly(FALSE);
	UpdateData(FALSE);
}
</pre>
<p style=""><br>
</p>
<ol>
	<li>
	В окне ClassView щелкните правой
кнопкой мыши
на элементе CDBView и выберите
в раскрывшемся
контекстном меню
команду Add Virtual Function. В левом списке выберите значение OnMove, как показано на рис. 4.7, а затем щелкните на кнопке Add and Edit. В результате в класс будет добавлена функция и можно будет немедленно отредактироват заготовку ее текста.
	</li>
	<li>
	Отредактируйте функцию OnMove() так, чтобы она содержала текст программы, приведенный в листинге.
	</li>
</ol>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_edf8b913.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.7.</em><em> Переопределение функции</em><em> OnMove</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="">
	Листинг функции<strong>
	</strong>CDBView: :OnMove():
</p>
<p style=" margin-right: -0in;">
	<strong></strong>
</p>
<pre>BOOL CDBView::OnMove(UNIT nIDMoveCommand) 
	{
	if (m_bAdding) {
	m_bAdding = FALSE;
	UpdateData(TRUE);
	if (m_pSet-&gt;CanUpdate()) 
	m_pSet-&gt;Update();
	m_pSet-&gt;Requery();
	UpdateData(FALSE);
	CEdit* pCtrl = (CEdit*)GetDlgItem(IDC_USERID);
	pCtrI-&gt;SetReadOnly(TRUE);
	return TRUE;
	} else
	return CRecordView::OnMove(nIDMoveCommand);
}
</pre>
<p style=""><strong></strong>
</p>
<ol>
	<li>
	Сделайте двойной щелчок на функции OnRecordDelete() и отредактируйте ее так, чтобы ее код соответствовал приведенному ниже листингу. Пояснения к этому тексту будут даны в следующем разделе.
	</li>
</ol>
<p style="">Листинг функции
СDBView::OnRecordDelete():
</p>
<p style="">
	<strong></strong>
</p>
<pre>void CDBView::OnRecordDelete()
{
	m_pSet-&gt;Delete();
	m_pSet-&gt;MoveNext();
	if (m_pSet-&gt;lsEOF())
	m_pSet-&gt;MoveLast();
if (m_pSet-&gt;lsBOF())
	m_pSet-&gt;SetFieldNull(NULL);
	UpdateData(FALSE);
	}
</pre>
<p style=""><strong></strong>
</p>
<p style=" margin-left: 0in;">
	Мы модифицировали приложение, и теперь оно способно выполнять добавление и удаление записей, равно как и их обновление. Откомпилируйте приложение и запустите его на выполнение, выбрав в меню Visual Studio команду Builds Execute или нажав
клавиши &lt;Ctrl+F5&gt;. Когда приложение начнет работу, на экране раскроется его главное окно, внешний вид которого не претерпел никаких изменений в сравнении с предыдущей версией приложения. Однако теперь у вас появилась возможность добавить в базу данных новую за­пись, щелкнув на пиктограмме добавления записи на панели инструментов (или выбрав ко­манду Record\Add
Record), либо удалить текущую запись из базы, щелкнув на пиктограм­ме удаления записи на панели инструментов (или выбрав команду Record\Delete
Record).
</p>
<p style=" margin-left: 0in;">
	После щелчка на пиктограмме добавления записи приложение отображает в экранной форме пустую запись. Заполните поля новой записи. При переходе к другой записи приложе­ние автоматически внесет новую запись в базу данных. Для того чтобы запись удалить, про­сто щелкните на пиктограмме удаления. Текущая запись (та, которая отображена на экране) исчезнет, и на экран будет выведена следующая запись базы данных.
</p>
<p style=" margin-left: 0in;">
	<strong>Анализ функции</strong><strong> OnRecordAdd(). </strong>Вероятно, вам будет интересно узнать, как работают подпрограммы на C++, добавленные в приложение. Функция OnRecordAdd() начинает свою работу с вызова метода AddNew() класса CDBSet, производного от класса CRecordset. Вызванная функция формирует пустую за­пись, предназначенную для заполнения пользователем. Однако эта запись не появится на эк­ране до тех пор, пока не будет вызван метод UpdateData() класса представления. Но прежде чем осуществить вызов этого метода, необходимо проделать подготовительные действия.
</p>
<p style=" margin-left: 0in;">
	После того, как пользователь создаст новую запись, необходимо будет обновить базу дан­ных. Установка в данной подпрограмме определенного флажка позволит подпрограмме переcылки определить, какое именно действие пользователя имеет место: перемещение к следующей записи базы данных от существовавшей ранее записи базы или же от вновь добавленной. Именно с этой целью переменной m_bAdding присваивается значение TRUE.
</p>
<p style=" margin-left: 0in;">
	В данный момент, когда пользователю предоставляется возможность ввести новую запись, необходимо изменить статус поля кода служащего UserID, обычно имеющего атрибут “только чтение". Для снятия этого атрибута программе, прежде всего, необходимо с помощью функции GetDIgItem() получить указатель на соответствующий элемент управления, а затем вызвать метод SetReadOnly() для присвоения значения FALSE атрибуту “только чтение” этого элемента управления.
</p>
<p style=" margin-left: 0in;">
	Теперь все готово к вызову функции UpdateData() для отображения на экране новой
пустой записи.
</p>
<p><br>
</p>
<p><strong>Анализ функции OnMove(). </strong><span style="font-weight: normal;">Теперь, когда пустая запись выведена на экран, пользователю не составит большого труда заполнить поля ввода необходимыми данными. Для того чтобы новая запись действительно бы­ла помещена в базу данных, пользователю необходимо выполнить переход к другой записи ба­зы. При этом будет вызван метод </span><span style="font-weight: normal;">OnMove</span><span style="font-weight: normal;">(</span><span style="font-weight: normal;">)</span><span style="font-weight: normal;"> класса представления. Обычно функция </span><span style="font-weight: normal;">OnMove</span><span style="font-weight: normal;">(</span><span style="font-weight: normal;">)</span><span style="font-weight: normal;"> не выполняет ничего, кроме отображения следующей записи базы данных. Сделанное нами пере­определение этой функции дополнительно обеспечит и сохранение новой записи.</span>
</p>
<p style=" margin-left: 0in;">
	При вызове функция OnMove() прежде всего проверяет значение логической переменной m_bAdding и таким образом выясняет, от какой записи происходит переход: от существовав­шей или от вновь добавленной. Если значение m_bAdding равно FALSE, то основное тело опе­ратора IF пропускается и выполняется фрагмент программы, следующий за ELSE<em>.</em> При этом программа вызывает метод OnMove базового класса (CRecordView), который выполняет обычный переход на следующую запись.
</p>
<p style=" margin-left: 0in;">
	Если переменная m_bAdding имеет значение TRUE, выполняется основное тело оператора IF. Здесь программа прежде всего сбрасывает флаг m_bAdding, а затем вызывает функцию UpdateData() для передачи данных из полей окна представления в буфер выбранных записей. Вызов функции CanUpdate() класса выборки данных определяет, можно ли обновлять источ­ник данных, и, если можно, вызов функции Update(), являющейся членом этого же класса, добавляет новую запись к источнику данных.
</p>
<p style=" margin-left: 0in;">
	Для формирования новой выборки данных программа должна вызвать функцию Requery(), являющуюся членом класса CRecordset, а затем вызовом метода класса окна пред­ставления UpdateData() поместить новые данные в элементы управления этого окна. И нако­нец, программа восстанавливает для поля кода служащего UserID атрибут "только чте­ние", еще раз вызвав функции GetDIgItem() и SetReadOnIy().
</p>
<p style=" margin-left: 0in;">
	<strong>Анализ функции </strong><strong>OnRecordDelete</strong><strong>().</strong> Удаление записи выполняется достаточно просто. Функция OnRecordDelete() вызывает функцию Delete(), являющуюся членом класса выборки данных. После выполнения удале­ния вызов метода MoveNext() класса выборки данных позволяет организовать переход к отображению следующей записи таблицы.
</p>
<p style=" margin-left: 0in;">
	Однако здесь может возникнуть проблема, если удаляемая запись была в таблице послед­ней или же единственной. Вызов метода IsEOF() класса CRecordset позволяет выяснить, достигнут ли конец последовательности записей. Если эта функция возвращает TRUE, то указа­тель записи нужно поместить на последнюю запись в текущей выборке. Для этого использу­ется метод класса выборки данных MoveLast.
</p>
<p style=" margin-left: 0in;">
	Когда все записи из текущей выборки данных будут удалены, указатель текущей записи будет находиться в начале выборки. Программа должна проверить наличие такой ситуациипосредством вызова метода IsBOF() класса CRecordset. Если эта функция возвращает значение TRUE, то программа устанавливает значения полей текущей записи равными NULL.
</p>
<p style=" margin-left: 0in;">
	Для завершения работы подпрограммы необходимо обновить содержимое окна представления, что осуществляется вызовом функции UpdateData().
</p>
<p style=" margin-left: 0in;">
	<strong>Сортировка и фильтрация записей. </strong>Часто при работе с базой данных требуется изменить порядок, в котором записи отображаются на экране, или же осуществить поиск записей, удовлетворяющих определенному критерию. Существующие в MFC классы работы с базами данных ODBC располагают методами, позволяющими сортировать выбранные записи по любому из их полей. Кроме того, вызов определенных методов этих классов предоставит возможность ограничить набор отображае­мых записей только такими, поля которых содержат указанную информацию, например конкретное имя или идентификатор. Данная операция называется <em>фильтрацией.</em> В этом разделе мы добавим функции сортировки и фильтрации в наше приложение. Выполните следую­щие действия:
</p>
<ol>
	<li>
	Добавьте меню Sort (Сортировка) в основное меню приложения, как показано на рис.4.8. Предоставьте Visual Studio автоматически определить идентификаторы команд.
	</li>
	<li>
	С помощью мастера ClassWizard организуйте в классе CDBView перехват четырех но­вых команд сортировки, используя имена функций, предложенные этим мастером. Оконча­тельный вид окна ClassWizard показан на рис.4.9.
	</li>
	<li>
	Добавьте меню Filter (Фильтрация) в строку меню приложения. Предоставьте Visual
Studio установить идентификаторы команд.
	</li>
	<li>
	С помощью мастера СlassWizard организуйте в классе CDBView перехват четырех но­вых команд фильтрации, используя имена функций, предложенные этим мастером.
	</li>
	<li>
	Выберите команду Insert\Resource и создайте новое диалоговое окно, сделав двойной щелчок на элементе Dialоg, а затем отредактируйте диалоговое окно так, чтобы оно выгля­дело, как показано на рис.4.10. Присвойте элементу управления – текстовому полю – идентификатор IDC_FILTERVALUE.
	</li>
</ol>
<p style="text-align: left;">
	Оставив новое диалоговое окно раскрытым на экране, запустите мастер ClassWizard. Рас­кроется диалоговое окно Adding a
Class. Установите опцию Create a new
class и щелк­ните на кнопке ОК. Раскроется диалоговое окно New
Class. В поле Name введите значение CFiIterDlg, как показано на рис. 4.11.
</p>
<p style="">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_ee565f5a.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>Рис.4.8.Создание меню </em><em>Sort</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_fd5218de.png" alt="" style="float: bottom;">
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.9.</em><em> Вид окна мастера </em><em>ClassWizard</em><em> после добавления</em>
</p>
<p style=" margin-left: 0in;">
	<em>четырех новых функций сортировки</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_e8cc1e3.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.10.</em><em> Создание диалогового окна установки параметров фильтрации</em>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<ol>
	<li>
	В окне мастера ClassWizard щелкните на корешке вкладки Member
  Variables, cвяжите элемент управления IDC_FILTERVALUE с переменной-членом m_fiIterValue. Завершите ра­боту с мастером СlassWizard, щелкнув на кнопке ОК.
	</li>
</ol>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_d3267d02.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 4.11.</em><em> Создание класса диалога для окна </em><em>Filter</em>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: left; margin-left: 0in;">
	Теперь, когда меню и диалоговые окна уже созданы и связаны с заготовками функций, необходимо добавить в эти заготовки определенный программный код. На панели ClassView сделайте двойные щелчки на функциях, связанных с командами сортировки, отредактируйте их текст в
соответствии с листингом:
</p>
<p style="margin-right: -0in;">
	<strong></strong>
</p>
<pre>void CDBView:: OnSortUserID ()
{
m_pSet-&gt;Close();
m_pSet-&gt;m_strSort = "UserID";
m_pSet-&gt;Open():
UpdateData(FALSE);
}
	void CDBView: :OnSortFirstName ()
{
	m_pSet-&gt;Close();
	m_pSet-&gt;m_strSort = "UserFirstName";
	m_pSet-&gt;Open();
	UpdateData(FALSE);
}
<br>
	void CDBView: : OnSortMiddleName()
	{
	m_pSet-&gt;Close();
	m_pSet-&gt;m_strSort = “UserMiddleName";
	m_pSet-&gt;Open();
	UpdateData(FALSE);
	}
	void CDBView: : OnSortLastName()
	{
	m_pSet-&gt;Close();
	m_pSet-&gt;m_strSort = “UserLastName";
	m_pSet-&gt;Open();
	UpdateData(FALSE);
	}
	void CDBView::OnSortEMail ()
{
	m_pSet-&gt;Close():
	m_pSet-&gt;m_strSort = "UserEMail";
	m_pSet-&gt;Open();
	UpdateData(FALSE);
	}
</pre>
<p style="text-align: left; margin-left: 0in;"><strong></strong>
</p>
<p style="text-align: left; ">
	Введите в
начало файла DBView.cpp после уже
имеющихся директив #include
	<sup> </sup>строку
	<strong>#include "FiIterDlg.h"</strong>.<strong>
	</strong>Добавьте функции-обработчики:
</p>
<p style="text-align: left; ">
	<strong></strong>
</p>
<pre>void CDBView:: OnFilterUserID ()
{
DoFilter("UserID");
}
	void CDBView: :OnFilterFirstName ()
{
	DoFilter("FirstName");
}
	void CDBView: : OnFilterMiddleName()
	{
	DoFilter(“MiddleName");
	}
	void CDBView: : OnFilterLastName()
	{
	DoFilter(“LastName");
	}
	void CDBView::OnFilterEMail ()
{
	DoFilter("EMail");
	}
</pre>
<p style="text-align: left;"><strong></strong>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Все эти четыре функции вызывают функцию DoFilter(). Далее необходимо будет написать функцию, выполняющую фильтрацию записей базы данных, представленных в классе вы­борки данных. На панели ClassView щелкните правой кнопкой мыши на классе CDBView и выберите в раскрывшемся контекстном меню команду Add
Member Function. Укажите в рас­крывшемся диалоговом окне тип функции void и введите ее объявление как DoFilter(CString
col). Данный метод должен быть защищенным, так как он вызывается только другими метода­ми этого же класса CDBView. На панели ClassView сделайте двойной щелчок на функции DoFilter() и поместите в нее текст программы, показанный в листинге:
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	<strong></strong>
</p>
<pre>void CDBView::DoFilter(CString col)
	{
CFiIterDlg dig;
int result = dlg.DoModal():
	if (result == IDOK)
	{
	CString str = col + " = " + dlg.m_fiIterValue;
	m_pSet-&gt;Close();
m_pSet-&gt;m_strFiIter = str;
m_pSet-&gt;Open();
int recCount = m_pSet-&gt;GetRecordCount();
	if (recCount == 0) {
	MessageBox("No matching records.");
	m_pSet-&gt;Close();
	m_pSet-&gt;m_strFiIter = "";
	m_pSet-&gt;Open();
	}
	UpdateData(FALSE);
	}
}
</pre>
<p><strong></strong>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Мы добавили к создаваемому приложению функции сортировки и фильтрации записей базы данных. Оттранслируйте приложение и запустите его на выполнение. На экране появит­ся главное окно приложения, которое выглядит так же, как и раньше. Однако теперь можно сортировать записи по любому полю, для чего достаточно просто выбрать имя поля в меню Sort. Кроме того, появилась возможность задать фильтрацию отображаемых записей, выбрав имя требуемого поля в меню Filter, а затем введя значение фильтра в раскрывшемся диалого­вом окне Filter. Определить, как записи отсортированы или какой для них задан фильтр, вы сможете, перемещаясь от одной записи к другой. Попробуйте, например, отсортировать запи­си по отделам или по зарплате, а затем установите фильтрацию по любому из отделов, кото­рый вы видели, просматривая базу.
</p>
<p style=" margin-left: 0in;">
	<strong>Анализ функции </strong><strong>OnSortFirstName</strong><strong>(). </strong>Все функции сортировки имеют одинаковую структуру. Они закрывают выборку данных, устанавливают свои переменныe-члены m_strSort в выборке и снова открывают выборку данных, а затем вызывают функцию UpdateData() для обновления окна представления данными из вновь полу­ченной отсортированной выборки данных. Однако в тексте функций сортировки вы не найдете ни одного вызова функции, в названии которой было бы слово Sort. Когда же в таком случае выполняется сортировка? Она выполняется, когда выборка данных открывается заново.
</p>
<p style=" margin-left: 0in;">
	Объект класса CRecordSet (как и объект любого другого класса, производного от CRecordSet, например объект класса CDBSet в этой программе) использует специальную стро­ковую переменную m_strSort для определения способа упорядочения записей. Объект анали­зирует эту строковую переменную при формировании выборки данных и соответственно упорядочивает выбранные из базы записи.
</p>
<p style=" margin-left: 0in;">
	<strong>Анализ функции </strong><strong>DoFilter</strong><strong>(). </strong>Всякий раз, когда пользователь выбирает команду из меню Filter, управляющая програм­ма вызывает соответствующий этой команде метод: OnFi lterDept(),
OnFilterUserlD(),
OnFiIterMiddleName() или OnFilterEMail(). Каждая из этих функций ничего не делает, кроме вызова метода DoFilter(), передавая ему в качестве параметра строковую переменную, опреде­ляющую поле, по которому требуется выполнить фильтрацию.
</p>
<p style=" margin-left: 0in;">
	Функция DoFilter() независимо от того, какая именно команда была выбрана в меню, всегда отображает одно и то же диалоговое окно. Если значение <em>result</em> не равно IDOK, значит, пользователь выполнил щелчок на кнопке Cancel и весь оператор IF пропускается, а функции DoFilter() остается только закончить свою работу.
</p>
<p style=" margin-left: 0in;">
	Внутри конструкции IF прежде всего создается строковая переменная, которая будет ис­пользоваться для фильтрации записей базы данных. Строковая переменная применяется для выполнения фильтрации записей так же, как это происходит при сортировке. В данном слу­чае строковая переменная называется m_strFiIter. Строка, которая используется для фильт­рации записей базы данных, должна иметь следующий формат:
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>ИдентификаторПоля</em><em> =</em><em> Значение</em>
</p>
<p style=" margin-left: 0in;">
	Здесь <em>ИдентификаторПоля</em> является аргументом типа CString функции DoFiIter(), а <em>Значе­ние</em> вводится пользователем в диалоговом окне. Например, если пользователь выберет ко­манду фильтрации по полю отдела и введет в диалоговом окне значение фильтра hardware, функция DoFiIteг() должна будет создать строку.
</p>
<p style=" margin-left: 0in;">
	Сформировав указанную строку, программа будет готова к выполнению фильтрации за­писей. Для этого, как и в случае сортировки, выборка данных должна быть закрыта, а затем, при ее повторном открытии, функция DoFilter() выполнит формирование выборки данных с учетом требуемой фильтрации.
</p>
<p style=" margin-left: 0in;">
	Что произойдет, если в результате работы установленного фильтра не будет выбрано ни одной записи? Хороший вопрос. Функция DoFilter() обнаруживает подобную ситуацию, подсчитывая количество записей в создаваемой выборке и сравнивая затем это число с нулем. Если набор записей пуст, программа выводит окно сообщения, информирующее пользователя о сложившейся ситуации. Затем программа закрывает выборку, присваивает строковой пере­менной фильтра пустое значение и снова открывает выборку записей. Таким образом восста­навливается выборка, включающая все записи таблицы User.
</p>
<p style=" margin-left: 0in;">
	И, наконец, независимо от того, удалось ли обнаружить записи, отвечающие заданному фильтру, или же выборка данных включает всю базу данных, программа должна заново ото­бразить данные на экране. Для этого вызывается функция UpdateData().
</p>
<p style=" margin-left: 0in;">
	<strong>Выбор между классами </strong><strong>ODBC</strong><strong> и </strong><strong>DAO</strong><strong>.</strong> MSVC++ предоставляет набор классов для доступа к БД через ODBC и DAO. Во многих отношениях DAO является для классов ODBC суперклассом, включая большинство функциональных возможностей ODBC и добавляя при этом множество своих собственных. К сожалению, хотя классы DAO и могут работать с источниками данных ODBC, для которых существуют ODBC-драйверы, такое их применение не особенно эффектив­но. По этой причине DAO-классы больше подходят для создания программных приложений, оперирующих файлами баз данных формата .mdb фирмы Microsoft, создаваемых приложением Microsoft Access. Файлы других форматов, с которыми можно работать напрямую, используя классы DAO, создаются приложениями FoxPro и Excel.
</p>
<p style=" margin-left: 0in;">
	Классы интерфейса  DAO, которые используют приложение Microsoft Jet
Database Engine, настолько похожи на классы интерфейса  ODBC, что в некоторых случаях можно путем простого изменения названия класса в тексте программы заменить интерфейс доступа с ODBC на DAO: CDatabase изменяется на CDaoDatabase, CRecordset – на CDaoRecordset, a
CRecordView – на CDaoRecordView. Однако между классами ODBC и DAO имеется существенное различие в том, как реализуются системные библиотеки. ODBC-классы реализованы как набор модулей DLL, в то время как классы DAO реализованы в виде объектов OLE. Использование объектов OLE делает систему DAO несколько более современной в сравнении с ODBC, по крайней ме­ре, в отношении архитектуры.
</p>
<p style=" margin-left: 0in;">
	Хотя система DAO реализована в виде объектов OLE, вам не придется беспокоиться о ра­боте с подобными объектами напрямую. Входящие в MFC классы DAO берут обработку всех деталей управления на себя, предоставляя данные и методы, обеспечивающие взаимодейст­вие с объектами OLE. Класс CDaoWorkspace обеспечивает с помощью статических методов прямой доступ к объектам ядра базы данных DAO. Хотя MFC берет управление рабочей об­ластью на себя, можно использовать ее данные и методы для непосредственной инициализа­ции связи с базой данных.
</p>
<p style=" margin-left: 0in;">
	Еще одно отличие состоит в том, что классы DAO предоставляют более мощный набор функций, которые можно использовать для манипулирования базой данных. Эти более мощные методы позволяют выполнять с базами данных сложные операции, используя небольшой объем исходного текста на C++ или SQL-выражения, написанные непосредственно разработчиком:
</p>
<ul>
	<li>
	обе системы (ODBC и DAO) могут работать с ODBC-источниками данных, но в этом случае DAO менее эффективна, так как ориентирована для работы с базами данных формата .
mdb;
	</li>
	<li>
	мастер AppWizard может создать заготовку БД-приложения, используя либо классы ODBC, либо классы DAO. Выбор типа создаваемого приложения зависит частично от баз данных, с которыми вы будете работать;
	</li>
	<li>
	обе системы – и ODBC и DAO – используют для соединения с базой данных, к которой осуществляется доступ, объекты классов баз данных MFC. В ODBC такой класс базы данных называется CDatabase, а в системе DAO – CDaoDatabase. Хотя эти классы и имеют разные названия, они содержат множество похожих членов;
	</li>
	<li>
	обе системы, ODBC и DAO, используют объекты класса выборки данных для хране­ния записей, выбранных на текущий момент. В ODBC такой класс выборки данных называется CRecordset, а в системе DAO – CDaoRecordset. DAO-класс выборки данных содержит практически все члены класса ODBC. Кроме того, DAO-класс имеет большой набор дополнительных методов;
	</li>
	<li>
	системы ODBC и DAO используют схожие методики просмотра содержимого источ­ника данных, а именно: в обеих системах приложение должно создать объект базы данных, объект выборки данных, а затем вызвать методы соответствующего класса для манипулирования базой данных.
	</li>
</ul>
<p style="text-align: left;">
	Различия между системами ODBC и DAO состоят в следующем:
</p>
<ul>
	<li>
	хотя входящие в MFC классы ODBC и DAO похожи (иногда даже очень), некоторые аналогичные методы имеют разные имена. Кроме того, классы DAO включают много методов, которым нет аналогов в классах ODBC;
	</li>
	<li>
	в системе ODBC для определения опций, которые могут использоваться при открытии выборки данных, используются макросы и перечисления, тогда как в DAO для этих целей определены константы;
	</li>
	<li>
	большое количество существующих ODBC-драйверов делает систему ODBC пригодной для работы с множеством файлов баз данных различных форматов, в то время как система DAO больше подходит для приложений, работающих только с файлами формата . mdb;
	</li>
	<li>
	система ODBC реализована в виде набора DLL-модулей, а DAO реализована как на­бор объектов OLE;
	</li>
	<li>
	в ODBC объект класса CDatabase напрямую взаимодействует с источником данных. DAO-объект класса CDaoWorkspace занимает промежуточное положение между объек­тами классов CDaoRecordset и CDaoDatabase, что дает возможность рабочей среде взаимодействовать со многими объектами класса баз данных.
	</li>
</ul>
<p style="text-align: left; margin-left: 0in;">
	OLE DB
– это совокупность интерфейсов OLE, которые упрощают доступ к данным, сохраненным приложениями, не являющимися СУБД, например, хранящимся в почтовых ящиках электронной почты или линейных файлах. Приложение, использующее OLE
DB, может интегрировать информацию из таких СУБД, как Oracle, SQL Server и Access, с информацией из систем, не являющихся СУБД, но использующих возможности OLE.
</p>
<p style=" margin-left: 0in;">
	Для использования этого мощного инструмента вы должны уверенно чувствовать себя при работе с интерфейсами OLE. Если вам раньше приходилось создавать прило­жения OLE (ActiveX) только с помощью MFC и мастера AppWizard, вас может шокировать знакомство с тем, что Microsoft полагает "упрощенным". Вы встретитесь с множеством вызо­вов функции Querylnterface() и множеством переменных с именами наподобие pIColslnfo и rgCol Info. Все же, разобравшись во всех интерфейсах и всех установках, вы сможете вызвать такую функцию, как GetData(), и получить информацию из приложения, не являющегося СУБД, как будто это база данных. В результате получается существенный выигрыш во времени.
</p>
<p style=" margin-left: 0in;"><strong>Варианты задания:</strong>
</p>
<ol>
	<li>
	Разработать приложение управления базой данных сдачи студентами экзаменационной сессии. 
	</li>
	<li>
	Разработать приложение управления базой данных студенческого общежития. 
	</li>
	<li>
	Разработать приложение управления базой данных выданных студентам курсовых. 
	</li>
	<li>
	Разработать приложение управления базой данных посещения студентами занятий. 
	</li>
	<li>
	Разработать приложение управления базой данных студенческой библиотеки. 
	</li>
	<li>
	Разработать приложение управления базой данных студенческой бухгалтерии для выдачи стипендий. 
	</li>
	<li>
	Разработать приложение управления базой данных распределения путевок студенческого профкома. 
	</li>
	<li>
	Разработать приложение управления базой данных, содержащей расписание студенческих занятий. 
	</li>
	<li>
	Разработать приложение управления базой данных коммунальных платежей за квартиру. 
	</li>
	<li>
	Разработать приложение управления базой данных учета времени доступа к Интернету. 
	</li>
	<li>
	Разработать приложение управления базой данных учета времени переговоров по телефону. 
	</li>
	<li>
	Разработать приложение управления базой данных учета страховых полисов. 
	</li>
</ol>
<p><span style="font-weight: normal;">В разрабатываемом приложении обеспечить добавление, редактирование и удаление записей из базы данных, сохранение результатов в файле (создание текстового отчета). </span>
</p>
<h3>
<strong>Литература</strong></h3>
<p style="">
	Грегори К. Использование Visual
C++ 6. – М.: Вильямс, 1999.
</p>
<p style="">
	Круглински Д. Основы Visual
C++. Версия 4. – М.: Русская редакция, 1997.
</p>
<p style="text-align: right; margin-left: 0in;">
	<strong>Приложение 1</strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>Мастер создания приложений </strong><strong>AppWizard</strong>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Мастер создания приложений AppWizard позволяет создавать различные типы приложений, но обычно большинством программистов используются исполняемые программы (файл приложения с расширением .ехе). Кроме того, желательно получить от AppWizard готовые фрагменты программного кода – классы, объекты, функции, которые присутствуют едва ли не в каждой стандартной программе. Для создания программы подобного типа, необходимо выбрать File\New, а затем – вкладку Projects в окне New, как это показано на рис.1.1.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_f055fe43.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 1.1.</em><em> Выбор типа приложения, которое вы хотите создать</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	В левой части окна находится список возможных типов проектов. Для создания типового приложения необходимо выбрать MFC AppWizard (.ехе). Также необходимо указать имя проекта в поле Project name, а в поле Location – каталог, в котором будет находиться проект, (например, мы создали приложение с именем sssss в каталоге c:\temp). Дальнейшие действия AppWizard пронумерованы как отдельные этапы (step), причем номер текущего этапа – всегда в строке заголовка окна MFC AppWizard. Данный тип проекта использует библиотеку классов Microsoft
Foundation Classes (MFC). На каждом этапе программист может изменить некоторые параметры создаваемого приложения. Для перехода на следующий этап необходимо щелкнуть на кнопке Next, для перехода к предыдущему этапу – щелкнуть на кнопке Back. При нажатии на кнопке Cancel процесс создания приложения вообще будет прерван. Оперативная справка по текущему этапу вызывается на экран с помощью кнопки Help. Кнопка Finish позволяет завершить сеанс настройки, пропустив последующие этапы и настроить все оставшиеся параметры в состоянии по умолчанию. Рассмотрим более подробно этапы создания приложения AppWizard:
</p>
<p style=" margin-left: 0in;">
	<strong>Шаг 1. Выбор типа приложения. </strong>Первое, что должен определить программист, приступая к работе в AppWizard, – сколько документов будет поддерживать будущее приложение, т.е. будет ли оно MDI-приложением,
SDI-приложением или простым диалоговым приложением. Для каждого из этих типов приложе­ний AppWizard создает различные классы. Окно MFC
AppWizard при этом будет выглядеть так, как показано на рис.1.2. Подробности о каждом из этих типов приложений приведены ниже:
</p>
<ul>
	<li>
	SDI-приложение <em>(</em><em>SD</em><em>
	</em><em>I</em><em>–</em><em>
	</em><em>Single</em><em> </em><em>Document</em><em>
	</em><em>Interface</em><em>,</em> интерфейс с единственным документом) позволяет в каждый момент времени иметь открытым только один документ, однако количество открытых окон не ограничено. Примером может служить известный каждому редактор Notepad. Если вы выберете в таком приложении File\0pen, то открытый в текущий момент файл будет закрыт прежде, чем откроется новый. Создание SDI-приложения настраивается в окне MFC
AppWizard переключателем Single document.
	</li>
</ul>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_fb7b2446.png" alt="" style="float: bottom;">
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 1.2.</em><em> Первый этап создания типового приложения с</em>
</p>
<p style=" margin-left: 0in;">
	<em>помощью </em><em>AppWizard</em><em> – выбор варианта интерфейса пользователя</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<ul>
	<li>
	MDl-приложение (<em>MDI</em><em>
	</em><em>–</em><em> </em><em>Multiple</em><em>
	</em><em>Document</em><em> </em><em>Interface</em><em>,</em> дословно – ”многодокументный интерфейс”) может одновременно держать открытыми несколько документов, каждый из которых представлен отдельным файлом, примеры – Excel, Word и другие хорошо знакомые многим аналогичные приложения. Такие приложения обязательно имеют в главном меню пункт Window, а в меню File – пункт Close. Создание MDI-приложения настраивается в окне MFC AppWizard переключателем Multiple
documents.
	</li>
	<li>
	Простое диалоговое приложение, как правило, вообще не открывает документов. Примером могут служить приложение Character Map (Таблица символов) и множество других про­стых приложений, которые входят в базовый комплект Windows. Такие приложения не имеют меню. Приложение Character Map, скорее всего, находится в папке Accessories (Стандартные), которую можно запустить, щелкнув на кнопке Start (Пуск). Возможно, вам понадобится установить его на свой компьютер, тогда воспользуйтесь функцией Add/Remove
programs программы Control
Panel. 
	</li>
</ul>
<p style="text-align: left;">
	Создание приложения этого типа настраивается в окне MFC
AppWizard переключателем Dialog based. В левой части диалогового окна после выбора переключателя типа приложения появится соответствующий образец вашего будущего приложения. Ниже этой группы переключателей в диалоговом окне находится флажок Document/View
architecture support (Поддержка архитектуры документ/представление). Пользователи, которые имеют большой опыт разработки приложений в среде Visual C++, могут отключить поддержку этой архитектуры мастером, но для большинства разработчиков она будет отнюдь не лишней. Поэтому в дальнейшем, если не будет оговорено особо, будем считать, что флажок Document/View
architecture support установлен.
</p>
<p style=" margin-left: 0in;">
	Еще ниже в диалоговом окне находится раскрывающийся список для выбора языка, который вы собираетесь использовать при написании текста программы. Если системный язык операционной среды, не заданный по умолчанию English (United States) – американский вариант английского, не забудьте сделать такой же выбор и в списке. Иначе можете в дальнейшем столкнуться с совершенно неожиданными эффектами в работе с ClassWizard. (Конечно, если вы создаете приложения для заказчика, который пользуется американским английским, у вас не остается иного выбора, как изменить системный язык с помощью программы Control panel.)
</p>
<p style=" margin-left: 0in;">
	<strong>Шаг 2. Базы данных.</strong> Второй этап создания приложения Windows с помощью AppWizard – выбор уровня под­держки операций с базами данных. Окно MFC AppWizard при этом будет выглядеть так, как показано на рис.1.3.
</p>
<p style=" margin-left: 0in;">
	Здесь вам на выбор предлагаются четыре варианта уровня поддержки:
</p>
<ul>
	<li>
	если работа с базами данных в приложении не планируется, выберите переключатель None (Никакой);
	</li>
	<li>
	если предполагается иметь доступ к базам данных, но для этого не будут использованы классы просмотра, производные от CFormView, или нет необходимости в меню Record (Запись), выбирайте переключатель Header
files only (Только файлы заголовков);
	</li>
	<li>
	если вы планируете разрабатывать классы просмотра базы данных в приложении как производные от CFormView и иметь меню Record, но не нуждаетесь в средствах сохранения-восстановления (сериализации) документов, выбирайте переключатель Database view
without file
support (Просмотр базы данных без поддержки операций с файлами). Записи в базе данных можно будет обновлять с помощью CRecordset – класса MFC доступа к базам данных;
	</li>
	<li>
	если помимо всего что задано в предыдущем случае, вы планируете и сохранение-восстановление документов на диске (возможно, это будет одна из опций пользовате­ля), выберите Database
view with file
support (Просмотр базы данных и поддержка операций с файлами).
	</li>
</ul>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_962e07b.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.</em><em> 1.3.</em><em> Второй этап создания типового приложения с помощью</em>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>AppWizard</em><em> – выбор варианта поддержки операции с базами данных</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Если вы выбрали один из вариантов с использованием базы данных, в этом же окне задайте базу, которая будет источником данных. Для этого нужно щелкнуть на кнопке Data
Source (Источник данных).
</p>
<p style=" margin-left: 0in;">
	Картинка в левой части окна MFC
AppWizard меняется после задания любого из предложенных вариантов обращения к базе данных, демонстрируя последствия сделанного выбора.
</p>
<p style=" margin-left: 0in;">
	<strong>Шаг 3. Поддержка составных документов. </strong>Третий этап создания выполняемого приложения Windows с помощью AppWizard – выбор уровня поддержки операции с составными документами. Окно MFC
AppWizard при этом будет выглядеть так, как показано на рис.1.4.
</p>
<p style=" margin-left: 0in;">
	На выбор предлагается пять вариантов поддержки:
</p>
<ul>
	<li>
	если не планируется создание OLE-приложения, выберите переключатель None (Никакой);
	</li>
	<li>
	если вы хотите, чтобы в приложении использовались связанные или внедренные объекты OLE (например, такие, как документы Word или рабочие листы Excel), выберите переключатель Container (Контейнер); 
	</li>
</ul>
<p style="text-align: left; margin-left: 0in; margin-right: -1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_5cd6dee6.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<em>Рис.1</em><em>.4.</em><em> Третий этап создания типового приложения с помощью</em>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<em>AppWiz­ard –</em><em> выбор варианта поддержки составных документов</em>
</p>
<p style="text-align: left; margin-left: 0in; margin-right: -1in;">
	<br>
</p>
<ul>
	<li>
	если планируется создание приложения, документы которого могли бы быть внедрены в другое приложение, но при этом само приложение не будет использоваться автономно, выберите переключатель Mini-server (Мини-сервер);
	</li>
	<li>
	если ваше будущее приложение будет не только служить сервером для других приложений, но и сможет работать автономно, выберите переключатель Full-server (Полный сервер); 
	</li>
	<li>
	если создаваемое приложение должно обладать способностью включать документы других приложений и само обслуживать их своими объектами, выбирайте переключатель Both
container and
server (и контейнер, и сервер).
	</li>
</ul>
<p style=" margin-left: 0in; margin-right: -0in;">
	Если вы выбрали какой-либо из вариантов поддержки составных документов, то придется поддерживать и <em>составные файлы (</em><em>compound</em><em> </em><em>files</em><em>).</em> Составные файлы содержат один или более объектов ActiveX и сохраняются на диске в особом формате, так что один из объектов может быть заменен без переписи всего файла. Таким образом удается сберечь довольно много времени. В середине диалогового окна Step 3 имеется группа из двух переключателей – “Would  you
like to support
compound files?” (Необходима ли поддержка составных файлов?)
</p>
<p style=" margin-left: 0in;">
	Если вы хотите, чтобы создаваемое приложение могло передавать управление другому приложению через механизм автоматизации ActiveX, установите флажок Automation (Автоматизация). Если планируется использовать в приложении элементы управления ActiveX, установите флажок ActiveX Controls (Элементы управления ActiveX).
</p>
<p style=" margin-left: 0in;">
	Если хотите, чтобы создаваемое приложение само было элементом управления Ac­tiveX, то все описываемое в этой главе вас не касается, поскольку вам не нужно заказывать типовое приложение (Ехе-файл).
</p>
<p style=" margin-left: 0in;">
	<strong>Шаг 4. Внешний вид приложения и другие опции.</strong> Четвертый этап создания выполняемого приложения Windows с помощью AppWizard – выбор опций, определяющих внешний вид элементов пользовательского интерфейса. MFC
AppWizard при этом будет выглядеть так, как показано на рис.1.5.
</p>
<p style=" margin-left: 0in;">
	Диалоговое окно MFC
AppWizard – Step 4 Of 6 содержит много переключателей-флажков, соответствующих предлагаемым опциям оформления:
</p>
<ul>
	<li>
	<em>Docking</em><em> </em><em>toolbar</em> (Фиксируемая панель инструментов). В приложение будет добавлена панель инструментов, которая может быть пристыкована (зафиксирована) к одной из границ окна (затем можно будет удалить ненужные пиктограммы из панели или добавить новые, связанные с теми пунктами меню, которые вы посчитаете нужными включить в свое приложение);
	</li>
	<li>
	<em>Initial Status</em> bar (Панель состояния). В приложение будет добавлена панель состояния, в которой можно будет выводить подсказки соответственно выбранным пунктам меню и другие сообщения;
	</li>
</ul>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_301fdb78.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.1</em><em>.5.У</em><em>становка некоторых опций пользовательского интерфейса с помощью </em><em>AppWizard</em>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<ul>
	<li>
	<em>Printing</em><em> </em><em>and</em><em>
	</em><em>print</em><em> </em><em>preview</em> (Печать и предварительный просмотр печати). Приложение при выборе этой опции будет иметь пункты Print и Print preview в меню File, и AppWizard включит в приложение большую часть программного кода, связанного с выполнением этих операций; 
	</li>
	<li>
	<em>Context sensitive Help</em> (Контекстная справка). Меню Help в приложении будет иметь опции Index и Using Help, а значительная часть программного кода, необходимого для организации контекстной справки в приложении, будет включена в него мастером AppWizard;
	</li>
	<li>
	<em>3D</em><em> </em><em>controls</em> (Объемный дизайн элементов управления). При установке этой опции дизайн приложения будет полностью соответствовать стилю, принятому в фирменных приложениях Windows 95. Если вы откажетесь от этой опции, то фон диалоговых окон будет белым, а такие элементы, как текстовые поля, переключатели и вкладки, не будут отбрасывать тени;
	</li>
	<li>
	MAPI (Messaging
API – почтовый интерфейс). При установке этой опции приложение сможет обмениваться сообщениями по электронной почте;
	</li>
	<li>
	<em>Windows</em><em> </em><em>Sockets</em><em>.</em> Если эта опция будет установлена, приложение сможет иметь не­посредственный доступ к Internet через такие протоколы, как FTP и HTTP (протокол World Wide
Web). Можно создать Internet-программу и без поддержки Windows Sockets, если использовать классы Winlnet
	<em>.</em>
	</li>
</ul>
<p style=" margin-left: 0in;">
	С помощью группы переключателей “<em>How</em><em> </em><em>do</em><em>
	</em><em>you</em><em> </em><em>want</em><em>
	</em><em>your</em><em> </em><em>toolbars</em><em>
	</em><em>to</em><em> </em><em>look</em><em>?” </em>мастеру AppWizard можно заказать создание панелей инструментов в традиционном стиле, как в Word или в самом продукте Visual C++ (переключатель Normal), или в новом стиле оформления, принятом в Internet
Explorer (переключатель Internet Explorer
ReBars). Можно также установить длину списка последних открываемых файлов в поле меню File создаваемого приложения. Для
этого служит
раскрывающийся список
	<em>“How many files would you like on your recent file list?” </em>По умолчанию этот параметр имеет значение 4 и менять его не рекомендуется без очень весомых причин.
</p>
<p style=" margin-left: 0in;">
	После щелчка на кнопке Advanced (Дополнительно) в нижней части диалогового окна MFC AppWizard
Step 4 на экран будет выведено новое диалоговое окно Advanced Options (Дополнительные опции), которое имеет две вкладки. На рис.1.6 показана одна из них – Document
Template Strings (Строковые шаблоны
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_196c07ad.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис</em><em>.</em><em>1.6.</em><em>
	</em><em>Вкладка</em><em> Document Template Strings </em><em>диалогового</em><em>
	</em><em>окна</em><em> </em>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Advanced Options </em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	документов). Дело в том, что AppWizard формирует многочисленные запросы и идентификаторы, принимая в качестве главного переменного элемента имя приложения, и иногда ему необходимы аббревиатуры этого имени. Здесь же их можно при желании откорректировать, а также уточнить надпись, которая будет выведена в строке заголовка главного окна создаваемого приложения. Расширения имени файла, если вы установите его в поле File
extension, будут автоматически добавляться к именам всех файлов, которые записываются на диск приложением. Аналогично по команде File\Open в соответствующем диалоговом окне будут выведены по умолчанию только файлы с заданным расширением.
</p>
<p style=" margin-left: 0in;">
	На рис.1.7 показана другая вкладка – Window
Styles (Стили оформления окон). Это окно позволяет изменить внешний вид окон приложения. Первый флажок – Use
Split Window (Использование разделения окна). При его установке в приложение включается весь программный код, необходимый для организации разделения окна приложения таким же образом, как это сделано, например, в редакторе программного кода из комплекта средств Visual
Studio. Остальные элементы диалогового окна устанавливают параметры, определяющие оформление фрейма (рамки) главного окна приложения, а для MDI-приложений – фреймов дочерних окон (child frames). Фрейм является весьма важным элементом окна. Системное меню, строка заголовка, кнопки минимизации и максимизации, собственно границы – все это свойства фрейма как объекта. Фрейм главного окна содержит всё SDI-приложение. MDl-приложение имеет несколько дочерних окон (по одному на каждый документ), которые размещаются в пределах главного, родительского, окна.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_3448447c.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>Рис.</em><em>1.7.</em><em> Вкладка </em><em>Window</em><em> </em><em>Styles</em><em> диалогового окна</em>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>Advanced</em><em> </em><em>Options</em><em>.</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Ниже перечислены свойства фрейма, которые можно настраивать во вкладке, о которой идет речь:
</p>
<ul>
	<li>
	<em>Thick</em><em> </em><em>frame</em> (утолщенная рамка) – кромки окна утолщены, и можно будет изменять размеры окна стандартным для Windows способом;
	</li>
	<li>
	<em>Minimize</em><em> </em><em>box</em> (кнопка минимизации) – окно имеет кнопку минимизации в правой части строки заголовка.
	</li>
	<li>
	<em>Maximize</em><em> </em><em>box</em> (кнопка максимизации) – окно имеет кнопку максимизации в правой части строки заголовка.
	</li>
	<li>
	<em>System</em><em> </em><em>menu</em> (системное меню) – в левом верхнем углу окна будет установлена пиктограмма вызова системного меню;
	</li>
	<li>
	<em>Minimized</em><em> – </em>при запуске приложения окно сворачивается в пиктограмму. Для SDI-приложений выбор этой опции не будет иметь никаких последствий при выполнении приложения в среде Windows 95;
	</li>
	<li>
	<em>Maximized</em><em> </em>– при запуске приложения окно разворачивается на весь экран. Для SDI-приложений выбор этой опции не будет иметь никаких последствий при выполнении приложения в среде Windows 95.
	</li>
</ul>
<p style=" margin-left: 0in;">
	После завершения всех манипуляций щелкните на Close для возврата в окно MFC AppWizard – Step 4
of 6.
</p>
<p style="">
	<strong>Шаг 5. Другие опции. </strong>Пятый этап создания выполняемого приложения Windows с помощью AppWizard – выбор опций, которые нельзя было отнести по назначению ни к одному из предыдущих этапов. Диалоговое окно AppWizard – Step 5
of 6 при этом будет выглядеть так, как показано на рис.1.8. Будете ли вы включать в формируемый текст программ приложения комментарии? Редко кто отказывается от этого, тем более что задать такой режим не составляет никакого труда – нужно просто выбрать один из переключателей группы “Would
you
like
to
generate
source
file
comments?”
</p>
<p style=" ">
	<br>
</p>
<p style="text-align: center; ">
	<img src="i_c8a70228255136ad_html_48e49a43.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; ">
	<br>
</p>
<p style="text-align: center; ">
	<em>Рис.1</em><em>.8.</em><em> Установка опций, определяющих оформление формируемого текста программы и метод связывания программы с модулями библиотеки </em><em>MFC</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Ответ на второй вопрос в этом окне: “Желаете ли вы, чтобы библиотека MFC <em>была разделяемой, динамически связываемой библиотекой</em> (shared DLL) или <em>статически прикомпилированной</em> (statically linked
library)?” – не так очевиден. Динамически связываемая библиотека (DLL – Dynamic-Link
Library) представляет собой множество функций, используемых самыми разными приложениями. Использование DLL сокращает объем программы, но несколько усложняет установку продукта. Если вы просто перенесете на другой компьютер выполняемый файл программы, то скорее всего приложение работать не будет, поскольку оно нуждается еще и в соответствующих DLL-файлах. Если же модули библиотеки прикомпонованы статически к выполняемому файлу, то приложение легко перемещается с одного компьютера на другой, поскольку весь выполняемый код сосредоточен в одном файле.
</p>
<p style=" margin-left: 0in;">
	<strong>Шаг 6. Имена файлов и классов. </strong>И, наконец, последний этап создания выполняемого приложения Windows с помощью AppWizard – подтверждение имен классов и имен файлов, которые создает для вас AppWizard, как это показано на рис.1.9.
AppWizard использует имя проекта (в данном случае –
sssss) для формирования имен классов и имен файлов. Нет никакой нужды их изменять. Если в приложении используются классы представления, можно изменить имя класса, наследниками которого являются вновь создаваемые классы. По умолчанию базовым является CView, но многие разработчики предпочитают CScrollView или CEditView. После завершения работы в диалоговом окне Step 6
of 6 необходимо нажать на кнопку Finish.
</p>
<p style="text-align: left; ">
	<br>
</p>
<p style="text-align: center; ">
	<img src="i_c8a70228255136ad_html_8318929a.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; ">
	<br>
</p>
<p style="text-align: center; ">
	<em>Рис.1</em><em>.9.</em><em> Подтверждение имен классов и файлов на последнем этапе создания типового приложения</em>
</p>
<p style=" ">
	<br>
</p>
<p style=" ">
	<strong>Шаг 7. Создание приложения.</strong> После того, как вы щелкнете на Finish, AppWizard покажет вам в окне New Project
Information информацию о новом проекте (рис.1.10). Если что-либо не устраивает, можно вернуться, нажав на кнопку Cancel, и затем последовательно двигаться в обратном порядке по окнам этапов настройки, пока не будет найдено то окно, в котором возможно изменение данной настройки. После уточнения настройки можно повторить путь по шагам AppWizard’а либо сразу принять оставшиеся установки. После чего можно опять взглянуть на окно New
project information и дать согласие на генерацию классов. AppWizard создаст необходимые классы и ресурсы.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_ad8a3743.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.1</em><em>.10.</em><em> Завершающий диалог</em><em> AppWizard</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: -0in;">
	<br>
</p>
<p><br>
</p>
<p style="text-align: right; margin-left: 0in;">
	<strong>Приложение 2</strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>Диалоговые окна</strong>
</p>
<p style="margin-left: 0in;"><br>
</p>
<p style=" margin-left: 0in;">
	Приложение может иметь любое количество диалоговых окон, в которых происходит ввод данных пользователем. Как правило, для каждого диалогового окна в приложении существуют ресурс диалога и класс.
</p>
<p style=" margin-left: 0in;">
	В класс окна включены переменные и функции-члены, ответственные за работу диалога.
</p>
<p style=" margin-left: 0in;">
	Ресурсы диалога создаются посредством редактора ресурсов, с помощью которого возможно включать в его состав необходимые элементы управления и размещать их в необходимом порядке. Класс создается при помощи ClassWizard. Как правило, класс диалогового окна в проекте является производным от класса CDialog, входящего в MFC. ClassWizard также позволяет облегчить работу с элементами управления, расположенными на диалоговом окне. Обычно каждый элемент управления, включенный в состав ресурсов диалога, имеет в классе окна соответствующий член-переменную. Для того чтобы вывести диалоговое окно на экран, нужно вызвать функцию- член его класса. Для того чтобы установить или считать значения элементов управления, необходимо обращаться к членам-переменным класса.
</p>
<p style="">
	<strong>Формирование нового ресурса диалогового окна.</strong> Первый шаг процесса организации диалогового окна в приложении – формирование ресурса окна.
</p>
<p style=" margin-left: 0in;">
	Чтобы приступить к формированию ресурсов, необходимо выбрать пункт Insert Resource из меню Visual Studio – появится диалоговое окно Insert
Resource, показанное на рис.2.1. Дважды щелкните на элементе Dialog в окне Resource Type – этим вы вызываете редактор диалогового окна, который выводит на экран заготовку окна, как это показано на рис.2.2.
</p>
<p style="text-align: left; margin-left: 1in; margin-right: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 1in; margin-right: 0in;">
	<img src="i_c8a70228255136ad_html_d6176958.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; ">
	<br>
</p>
<p style="text-align: center; ">
	<em>Рис.</em><em> 2.1.</em><em> Добавление ресурса диалогового окна</em>
</p>
<p style="text-align: left; ">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_a1fcf89.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.2</em><em>.2.</em><em> Заготовка диалогового окна</em>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: left; margin-left: 0in;">
	Вызовите на экран диалоговое окно Dialog Properties для вновь создаваемого диалогового окна, выбрав в меню View\Properties или щёлкнув правой кнопкой мыши на диалоговом окне. В поле Caption (Надпись) введите заголовок диалога, как это показано на рис.2.3.
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_1febbd8d.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.2</em><em>.3.</em><em> Окно свойств (</em><em>Dialog</em><em>
	</em><em>Properties</em><em>) создаваемого</em>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>диалогового окна</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	<strong>Создание класса диалогового окна. </strong>Когда формирование ресурсов диалогового окна будет завершено, вызовите на экран диа­логовое окно мастера ClassWizard. Для этого нужно выбрать View\ClassWIzard. Мастер ClassWizard обнаружит новый диалог и предложит создать новый класс, как это показано на рис. 2.4. Установите переключатель <em>Create</em><em>
	</em><em>a</em><em> </em><em>new</em><em>
	</em><em>class</em><em> </em>(создать новый класс) и щелкните на ОК. Появится новое диалоговое окно New
Class (новый класс), которое показано на рис.2.5. В поле Name (имя) введите имя нового класса (например, CSDIDialog) и щелкните на ОК. После этого ClassWizard создаст новый класс, подготовит файл текста программы SDIDialog.cpp и файл заголовка SDIDialog.h и включит их в состав проекта.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_d88e96d0.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>Рис.2</em><em>.4.</em><em>Диалог предложения создать или выбрать</em>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>класс для нового диалогового окна </em>
</p>
<p style=" margin-left: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_6ddcf746.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 1in;">
	<br>
</p>
<p style="text-align: center; margin-left: 1in;">
	<em>Рис.2</em><em>.5.С</em><em>оздание класса для диалогового окна </em>
</p>
<p style="text-align: left;">
	<strong>Модальные и немодальные диалоговые окна. </strong>Большинство диалоговых окон, которые приходится включать в состав приложения, относятся к так называемым <em>модальным</em> окнам. Модальное окно выведено <em>всегда</em> поверх всех остальных окон на ране. Пользователь должен поработать в этом окне и обязательно закрыть его, прежде чем приступить к работе в любом другом окне этого же приложения. Примером может служить окно, которое открывается при выборе команды File\Open любого приложения Windows.
</p>
<p style="">
	Немодальное диалоговое окно позволяет пользователю, не закончив работы с ним, работать в других окнах приложения, выполнить там необходимые действия, затем снова вернуться в немодальное окно и продолжить работу. Типичными немодальными окнами являются окна, которые открываются при отра­ботке команд Edit\Find (Правка\Поиск) и Edit\Replace (Правка\Замена) во многих приложениях Windows.
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: right;">
	<strong>Приложение 3</strong>
</p>
<p style="text-align: center;">
	<strong>Меню</strong>
</p>
<p style="text-align: center;">
	<br>
</p>
<p style=" margin-left: 0in;">
	<strong>Создание меню. </strong>AppWizard формирует в заготовке для MDI приложения два меню (для SDI одно). Если ни один файл не открыт в приложении, выводится ме­ню IDR_MAINFRAME; если же хотя бы один документ открыт, выводится меню IDR_MDITYPE. Обратите внимание, что меню IDR_MAINFRAME не имеет пунктов (выпадающих меню) Edit и Window, а само меню File значительно короче, чем в IDR_MDITYPE. В первом варианте в нем есть только пункты New (Новый), Open (Открыть), Print Setup (Настройка принтера), Recent
File (Последние файлы) и Exit (Выход) (рис.3.1).
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<img src="i_c8a70228255136ad_html_b77de8f.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.3.1.Редактирование ресурсов типа меню</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Выберите из списка ресурсов меню. Появляется изображение меню. Необходимо выбрать пункт, в который необходимо добавить новую команду. В конце дочерних пунктов есть свободное место для нового пункта. Вызывается выпадающее (popup) меню путем нажатия правой кнопки мыши. Далее выбирается пункт Properties. В поле Caption вводится текст, который будет отображаться при выводе меню на экран.
</p>
<p style=" margin-left: 0in;">
	Каждый пункт меню имеет свой идентификатор, посредством которого программа связывается с ним. Данный идентификатор вводится в поле ID диалога Properties. Если оставить это поле пустым, то Visual
Studio само автоматически назначит уникальный идентификатор.
</p>
<p style=" margin-left: 0in;">
	Для создания и подключения клавиш-акселераторов к пунктам меню (и другим элементам управления) необходимо развернуть узел Accelerator в дереве ресурсов и выбрать необходимую таблицу акселераторов. Далее требуется найти пустую строку в таблице и выбрать пункт Properties в popup-меню. В поле <em>ID</em> необходимо выбрать идентификатор требуемого пункта меню. В поле <em>Key</em> вводится символ, который будет использоваться в акселераторе. Также необходимо указать клавиши-модификаторы (Ctrl, Alt, Shift), которые тоже используются в акселераторе.
</p>
<p style="text-align: right; margin-left: 5in;">
	<strong>Приложение 4</strong>
</p>
<p style="text-align: center;"><strong>Панель инструментов</strong>
</p>
<p style="text-align: center;"><br>
</p>
<p style=" margin-left: 0in;">
	Генерируемая AppWizard панель инструментов (Toolbar) содержит пиктограммы для наиболее распространенных команд. Однако при разработке часто требуется удалить или добавить пиктограммы. Для работы с панелью инструментов необходимо развернуть узел ToolBar в дереве ресурсов и выбрать необходимую панель – откроется окно редактирования панели инструментов (рис. 4.1).
</p>
<p style="text-align:center; margin-left: 0in;margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_c60c5d9c.gif" alt="" style="float: bottom;"><br>
</p>

<p style="text-align: center; margin-left: 0in;">
	<em>Рис.4</em><em>.1.</em><em> Редактирование панели инструментов</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	После того, как окно редактора панелей инструментов будет открыто, удаление пикто­грамм с панели инструментов сводится к простому перетаскиванию их с панели на свободное место в окне.
</p>
<p style=" margin-left: 0in;">
	<strong>Добавление пиктограмм на панель инструментов. </strong>Процедура включения новой пиктограммы в панель инструментов состоит из двух этапов. На первом из них следует нарисовать изображение пиктограммы, а на втором – вы должны связать команду с новой пиктограммой. Приступая к созданию изображения новой пик­тограммы, необходимо выбрать заглушку пустой пиктограммы, расположенной на формируемой панели инструментов. Изображение пустой пиктограммы в увеличенном масштабе появится в окне редактирования.
</p>
<p style=" margin-left: 0in;">
	Далее выведите на экран окно свойств Properties и назначьте пиктограмме соответст­вующий идентификатор команды (рис.4.2).
</p>
<p style="text-align:center; margin-left: 0in;margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_cc72af51.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in;">
	<em>Рис.4</em><em>.2.</em><em> Определение свойств пиктограммы</em>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: left; margin-left: 0in;">
	<br>
</p>
<p style="text-align: right; margin-left: 0in;">
	<strong>Приложение 5</strong>
</p>
<p style="text-align: center; margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in;">
	<strong>Генерация приложения, связанного с базой данных</strong>
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style=" margin-left: 0in;">
	Процесс создания приложений для работы с базой данных отличается от процесса создания простого приложения лишь выбором на втором этапе AppWizard.
</p>
<p style=" margin-left: 0in;">
	В данном диалоговом окне необходимо выбрать либо <em>Database</em><em>
	</em><em>view</em><em>without</em><em>
	</em><em>file</em><em> </em><em>support</em> (если нет необходимости работать с другими файлами), либо <em>Database</em><em>
	</em><em>view</em><em> </em><em>with</em><em>
	</em><em>file</em><em> </em><em>support</em><em>
	</em>(рис.5.1). Для определения источника данных необходимо нажать кнопку Data
Source – появится диалог Database option. На данном этапе необходимо определить способ доступа к данным (ODBC, DAO, OLEDB), после чего в соответствующем поле выбрать источник данных (рис.5.2).
</p>
<p style=" margin-left: 0in;">
	После окончания работы с диалогом необходимо выбрать таблицы, данные которых будут доступны программе (рис.5.3). После выбора источника данных и таблиц процесс выбора возвращается ко второму этапу AppWizard.
</p>
<p style=" margin-left: 0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_ba7a1ad.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; ">
	<br>
</p>
<p style="text-align: center; ">
	<em>Рис.</em><em> 5.1.</em><em> Диалог поддержки работы проекта с базой данных</em>
</p>
<p style="text-align: left; ">
	<br>
</p>
<p style="text-align: left; ">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_fc3ddeaf.png" alt="" style="float: bottom;">
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<em>Рис.</em><em>5.2.</em><em> Выбор базы данных </em><em>Education</em><em>.</em><em>mdb</em>
</p>
<p style="text-align: left; ">
	<br>
</p>
<p style="text-align: center; margin-left: 0in; margin-right: -0in;">
	<img src="i_c8a70228255136ad_html_5975afc9.png" alt="" style="float: bottom;">
</p>
<p style=" margin-left: 0in; margin-right: -0in;">
	<br>
</p>
<p style="text-align:center; margin-left: 0in; margin-right: -0in;">
	<em>Рис.5</em><em>.3.</em><em> Выбор из источника данных таблицы </em><em>User</em><em>,</em>
</p>
<p style="text-align:center; margin-left: 0in; margin-right: -0in;">
	<em>которая будет использоваться в создаваемом при­ложении<br></em>
</p>

</div>

<footer class="footer_style">
<p>БГУИР 2016</p>
</footer>

</body>
</HTML>