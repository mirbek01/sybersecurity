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
<script src="/optimabank-dba.kg/jquery-1.12.2.min.js"></script>
<!--	<link href="/123/123/jquerysctipttop.css" rel="stylesheet" type="text/css">-->

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
<body bgcolor= "#01DFD7" background= "./img/rD000.gif" >
<div style="float: left; width: 97%";></div><i>Выбор фильтра по пукнтам:</i><div style="float: right; width: 97%";> 

 
<input type="checkbox" name="list" value="'.$index++.'">Идентификатор ID	<br>
<input type="checkbox" name="list" value="'.$index++.'">Audit type	<br>
<input type="checkbox" name="list" value="'.$index++.'">#	<br>
<input type="checkbox" name="list" value="'.$index++.'">Номер отчета	<br>
<input type="checkbox" name="list" value="'.$index++.'">Аудит на	<br>
<input type="checkbox" name="list" value="'.$index++.'">Наименование отчета	<br>
<input type="checkbox" name="list" value="'.$index++.'">Решение Правления	<br>
<input type="checkbox" name="list" value="'.$index++.'">Дата отчета	<br>
<input type="checkbox" name="list" value="'.$index++.'">Нарушение	<br>
<input type="checkbox" name="list" value="'.$index++.'">Мероприятие	<br>
<input type="checkbox" name="list" value="'.$index++.'">Ответственное подразделение	<br>
<input type="checkbox" name="list" value="'.$index++.'">Аудиторы	<br>
<input type="checkbox" name="list" value="'.$index++.'">Линия компетенции	<br>
<input type="checkbox" name="list" value="'.$index++.'">Рейтинг	<br>
<input type="checkbox" name="list" value="'.$index++.'">Первоначальная	дата исполнения	<br>
<input type="checkbox" name="list" value="'.$index++.'">Статус	<br>
<input type="checkbox" name="list" value="'.$index++.'">Новая дата исполнения	<br>
<input type="checkbox" name="list" value="'.$index++.'">monitoring period	<br>
<input type="checkbox" name="list" value="'.$index++.'">рассылка	<br>
<input type="checkbox" name="list" value="'.$index++.'">эл.адрес рассылки	<br>
<input type="checkbox" name="list" value="'.$index++.'">Комментарии	<br>
<input type="checkbox" name="list" value="'.$index++.'">Необходимые корректирующие меры	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№1	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№2	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№3	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№4	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№5	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№6	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№7	<br>
<input type="checkbox" name="list" value="'.$index++.'">Описание№8	<br>



 
  </div><div class="clear"><div id="page-content">


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
echo '<input type="checkbox" name="list" value="'.$index++.'">-<br>';
  }
    echo '
 <form name="select_all" method="post" style="margin-left:100px;">


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
</div>
<a href="adminpanel.php" class="url-min" title="Наш сайт">back</a><br><br>
<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>

</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="/123/123/f.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<h1 style="margin-top:150px;">Word Export</h1>

<a class="word-export" href="javascript:void(0)"> Exportas.doc </a> 
<script src="/optimabank-dba.kg/123/123/jquery.min.js"></script> 
<script src="/optimabank-dba.kg/123/123/FileSaver.js"></script> 
<script src="/optimabank-dba.kg/123/123/jquery.wordexport.js"></script> 
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    });
    </script>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html> 