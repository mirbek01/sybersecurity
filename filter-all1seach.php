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
<html>
<a href="adminpanel.php" class="url-min" title="Наш сайт">back</a><br><br>
<head>
<script src="/zaiaviteli-basrmir.nas.gov.kg/jquery-1.12.2.min.js"></script>
	

<title>Filter</title>

<!-- <style type="text/css">
   #maket {
    width: 100%; /* Ширина всей таблицы */
   }
   TD {
    vertical-align: top; /* Вертикальное выравнивание в ячейках */
    padding: 1px; /* Поля вокруг ячеек */
   }
   TD#leftcol {
    width: 100px; /* Ширина левой колонки */
    background: #ccc; /* Цвет фона левой колонки */
    border-right: 1px dashed #000; /* Параметры линии */
   }
   TD#rightcol {
    background: #fc3; /* Цвет фона правой колонки */
   }
   


  </style>-->
  <style type="text/css">
   TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   TH {
    background: #b0e0e6; /* Цвет фона */
   }
  </style>
 <script type="text/javascript">
function check(field,flag) {
 if (flag=="1") {for (i=0; i<field.length; i++) { field[i].checked=true; }}
 else {for (i=0; i<field.length; i++) { field[i].checked=false; }}
}
</script>
 
<script>


function arm() {
   $('#form1 input[type="checkbox"]').each(function() {
       if ($(this).is(":checked")) {
      var id = ".td" + $(this).val();
      $(id).show();
     }
   });
}
</script>
</head>
<body>
<div style="float: left; width: 97%";></div><i>Выбор фильтра по пукнтам:</i><div style="float: right; width: 97%";> 

 
Идентификатор ID	<br>
Audit type	<br>
#	<br>
Номер отчета	<br>
Аудит на	<br>
Наименование отчета	<br>
Решение Правления	<br>
Дата отчета	<br>
Нарушение	<br>
Мероприятие	<br>
Ответственное подразделение	<br>
Аудиторы	<br>
Линия компетенции	<br>
Рейтинг	<br>
Первоначальная	дата исполнения	<br>
Статус	<br>
Новая дата исполнения	<br>
monitoring period	<br>
рассылка	<br>
эл.адрес рассылки	<br>
Комментарии	<br>
Необходимые корректирующие меры	<br>
Описание№1	<br>
Описание№2	<br>
Описание№3	<br>
Описание№4	<br>
Описание№5	<br>
Описание№6	<br>
Описание№7	<br>
Описание№8	<br>



 
  </div><div class="clear">
<?php
$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase');  mysql_set_charset("utf8");
  $result1 = mysql_query("SELECT * FROM audit");
  $result11 = mysql_query("SHOW COLUMNS FROM audit");
  

  echo '
  <form id="form1">

  <td>';
  $index = 0;
  while($col = mysql_fetch_row($result11)){
 //echo '<input type="checkbox" name="'.$col[0].'" value="'.$index++.'">'.$col[0].'<br>';	
 //echo '<input type="checkbox" name=".$col[0]." value="'.$index++.'" checked>><br>';
echo '<input type="checkbox" name="list" value="'.$index++.'">><br>';
  }
    echo '
 <form name="select_all" method="post" style="margin-left:100px;">
<b>Какими языками Вы владеете?</b><br>

<input type="button" value="Выделить все" onclick="check(this.form.list,1)">
<input type="button" value="Снять выделение" onclick="check(this.form.list,0)">
</form>
 </td>
  </table>
  
  <input type="button" value="Filter" onClick="arm()"><br>
  <input type="reset" value="reset"><br>
  </form>';
  echo '
  <table id="result1">';

  echo '<tr>';
  $index = 0;
  $result11 = mysql_query("SHOW COLUMNS FROM audit");
  while ($col = mysql_fetch_row($result11)) {
    $column_name = '';
    switch ($index) {
case 	0	:	$column_name ="	Идентификатор ID	";break;
case 	1	:	$column_name ="	Audit type	";break;
case 	2	:	$column_name ="	#	";break;
case 	3	:	$column_name ="	Номер отчета	";break;
case 	4	:	$column_name ="	Аудит на	";break;
case 	5	:	$column_name ="	Наименование отчета	";break;
case 	6	:	$column_name ="	Решение Правления	";break;
case 	7	:	$column_name ="	Дата отчета	";break;
case 	8	:	$column_name ="	Нарушение	";break;
case 	9	:	$column_name ="	Мероприятие	";break;
case 	10	:	$column_name ="	Ответственное подразделение	";break;
case 	11	:	$column_name ="	Аудиторы	";break;
case 	12	:	$column_name ="	Линия компетенции	";break;
case 	13	:	$column_name ="	Рейтинг	";break;
case 	14	:	$column_name ="	Первоначальная Дата исполнения	";break;
case 	15	:	$column_name ="	Статус	";break;
case 	16	:	$column_name ="	Новая дата исполнения	";break;
case 	17	:	$column_name ="	monitoring period	";break;
case 	18	:	$column_name ="	рассылка	";break;
case 	19	:	$column_name ="	эл.адрес рассылки	";break;
case 	20	:	$column_name ="	Комментарии	";break;
case 	21	:	$column_name ="	Необходимые корректирующие меры	";break;
case 	22	:	$column_name ="	Описание№1	";break;
case 	23	:	$column_name ="	Описание№2	";break;
case 	24	:	$column_name ="	Описание№3	";break;
case 	25	:	$column_name ="	Описание№4	";break;
case 	26	:	$column_name ="	Описание№5	";break;
case 	27	:	$column_name ="	Описание№6	";break;
case 	28	:	$column_name ="	Описание№7	";break;
case 	29	:	$column_name ="	Описание№8	";break;


   default:
       $column_name = $col[0];
       break;
   }
   echo '<th class="td'.$index.'" style="display:none">'.$column_name.'</th>';
   
   $index++;


  }
  
 
  echo '</tr>';

  while($row = mysql_fetch_row($result1)){
    echo '<tr>';
    foreach ($row as $key => $value){
	
      echo '<td class="td'.$key.'" style="display:none">';
      echo $value;
      echo '</td>';
    }
    echo '</tr>';
  }
?>

<a href="adminpanel.php" class="url-min" title="Наш сайт">back</a><br><br>

</body>
</html> 