<?php
 session_start ();
if (!isset($_SESSION['auth']))
{

exit ("go to <a href='admin111.php'>login page</a>");
}
echo "<a href='adminpanel.php?exit=1'> EXIT </a><br>";
if (isset($_GET['exit']) ==1)

{

unset ($_SESSION['auth']);
session_destroy();
 exit();
}

?>
<html><head>
<title>АдминПанель</title></head><body  bgcolor= "#01DFD7" background= "./img/rD000.gif"><img src="./img/lombard24.png"> 
<br><br><br><br>                                                                                               
<br><p style= "color://#a8d7ff">
<big><big><big>Административный панель:</big></big></big>

<form method="post" action="adminpanel.php" id="form"> 
<p style= "">
<big><big><big> <i><b><u>Согласование:</i></b></u><br><br></big></big></big>
<input type="button" img src="/img/123.png" style=  "width:100x;height:75px;" bgcolor= "#01DFD7"  name="sub" value="Согласование"  onclick = "window.location = 'result.php'"/> <br><br>


<p style= "color://#a8d7ff">
<big><big><big><i><b><u>Ввод данных:</i></b></u><br><br></big></big></big>
	

<input type="button" style="width:100x;height:75px" name="sub" value="Ввод данных в базу " onclick = "window.location = '1.php'"/> <br><br>

_______________________________________________________________________________________________________________________________________________________	 <br><br>
<big><big><big> <p style= "color://#a8d7ff"><i><b><u>Поиск и редактирование аккаунтов:</i></b></u><br><br></big></big></big>
	
<input type="button" style="width:100x;height:75px"  name="sub" value="Поиск и редактирование аккаунтов" onclick = "window.location = 'pass.php'"/> <br><br>
_______________________________________________________________________________________________________________________________________________________	 <br><br>
<big><big><big><p style= "color://#a8d7ff"><i><b><u>Поиск и редактирование баз:</i></b></u> <br><br></big></big></big>


<input type="button" style="width:100x;height:75px" name="sub" value="Поиск и редактирование базы " onclick = "window.location = 'redit1.php'"/> <br><br>
<input type="button"  style="width:100x;height:75px" name="sub" value="Поиск и редактирование базы и фильтр и отправка сообщении " onclick = "window.location = 'redit1fil.php'"/> <br><br>

_______________________________________________________________________________________________________________________________________________________	 <br><br>

<big><big><big><p style= "color://#a8d7ff"><i><b><u>Фильтр по пунктам и разделом:</i></b></u> <br><br></big></big></big>


<input type="button" style="width:100x;height:75px"  name="sub" value="Фильтр-базы " onclick = "window.location = 'filter-all1.php'"/> <br><br>
<input type="button" style="width:100x;height:75px" name="sub" value="Фильтр-базы c выборкой chekbox" onclick = "window.location = 'filter-all2.php'"/> <br><br>
<input type="button" style="width:100x;height:75px" name="sub" value="Фильтр-базы c выборкой по столбцам" onclick = "window.location = 'filter-all3.php'"/> <br><br>


__________________________________________________________________________________________________________________________________________________	 <br><br>
<big><big><big><p style= "color://#a8d7ff"><i><b><u>Для печати бланков:</i></b></u> <br><br></big></big></big>


<input type="button" style="width:100x;height:75px"  name="sub" value=" печать мониторинга мер " onclick = "window.location = 'redit1p.php'"/> <br><br>


_______________________________________________________________________________________________________________________________________________________	 <br><br>
_______________________________________________________________________________________________________________________________________________________	 <br><br>

	<big><big><big><p style= "color://#a8d7ff"><i><b><u>Файлы:</i></b></u><br><br></big></big></big>

<input type="button" style="width:100x;height:75px"  name="sub" value="Поиск и редактирование файлов" onclick = "window.location = 'File.php'"/> <br><br>
<input type="button" style="width:100x;height:75px" name="sub" value="загрузка новых файлов" onclick = "window.location = 'upload1.php'"/> <br><br>

	<big><big><big> <p style= "color://#a8d7ff"><i><b><u>Старая база:</i></b></u><br><br></big></big></big>

<input type="button" style="width:100x;height:75px"  name="sub" value="Старая база пoиск и редактирование" onclick = "window.location = 'redit1old.php'"/> <br><br>
<input type="button" style="width:100x;height:75px"  name="sub" value="(Старая база)Фильтр-базы c выборкой по столбцам и отправка сообщение" onclick = "window.location = 'filter-allold3.php'"/> <br><br></p>
<a href="admin111.php " class="url-min" title="?? ????">back</a><br>
  </div> 
</body>
</html>


