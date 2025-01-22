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

?><!DOCTYPE html>
<html>
<a href="adminpanel.php" class="url-min" title="Наш сайт">back</a><br><br>
  <head> 
  <link rel="shortcut icon" href="http://srv54.energobank.kg/optimabank-dba.kg/img/123.png" type="image/png">
	
  <title>filter optima</title>
  
    <style type="text/css">
   TABLE {
    width: 1700px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   TH {
    background: #b0e0e5; /* Цвет фона */ 
   } 
  </style> 
	<script src="/optimabank-dba.kg/jquery-1.12.2.min2.js"></script>
   <! <script src="/optimabank-dba.kg/jquery-1.12.2.min.js"></script>
	
	<!<script data-require="jquery@2.0.3" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
	


  </head>
	
  <body bgcolor= "#01DFD7" background= "./img/rD000.gif">
    <table class="grid">
      <thead>
        <tr>
          <td index=0>Идентификатор ID
            <div class="filter"></div>
          </td>
          <td index=1>Audit type  
            <div class="filter"></div>
            </td>
          <td index=2># 
            <div class="filter"></div>
          </td>
		   <td index=3>Номер отчета
            <div class="filter"></div>
          </td>
		  <td index=4>Аудит на
            <div class="filter"></div>
          </td>
		  <td index=5>Наименование отчета
            <div class="filter"></div>
          </td>
		  <td index=6>Решение Правления
            <div class="filter"></div>
          </td>
		  <td index=7>Дата отчета
            <div class="filter"></div>
          </td>
		  <td index=8>Нарушение
            <div class="filter"></div>
          </td>
		  <td index=9>Мероприятие
            <div class="filter"></div>
          </td>
		  <td index=10>Ответственное подразделение
            <div class="filter"></div>
          </td>
		  <td index=11>Аудиторы
            <div class="filter"></div>
          </td>
		  <td index=12>Линия компетенции
            <div class="filter"></div>
          </td>
		  <td index=13>Рейтинг
            <div class="filter"></div>
          </td>
		  <td index=14>Первоначальная дата исполнения
            <div class="filter"></div>
          </td>
		  <td index=15>Статус
            <div class="filter"></div>
          </td>
		  <td index=16>Новая дата исполнения
            <div class="filter"></div>
          </td>
		  <td index=17>monitoring period
            <div class="filter"></div>
          </td>
		  <td index=18>рассылка
            <div class="filter"></div>
          </td>
		  <td index=19>эл.адрес рассылки
            <div class="filter"></div>
          </td>
		  <td index=20>Комментарии
            <div class="filter"></div>
          </td>
		  <td index=21>Необходимые корректирующие меры
            <div class="filter"></div>
          </td>
		  <td index=22>Описание№1
            <div class="filter"></div>
          </td>
		  <td index=23>Описание№2
            <div class="filter"></div>
          </td>
		  <td index=24>Описание№3
            <div class="filter"></div>
          </td>
		  <td index=25>Описание№4
            <div class="filter"></div>
          </td>
		  <td index=26>Описание№5
            <div class="filter"></div>
          </td>
		  <td index=27>Описание№6
            <div class="filter"></div>
          </td>
		  <td index=28>Описание№7
            <div class="filter"></div>
          </td>
		  <td index=29>Описание№8
            <div class="filter"></div>
          </td>
        </tr>
      </thead>

    
       
     <?php	$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());	mysql_select_db('host_29723_mirbase');mysql_set_charset("utf8"); $resultat=mysql_query("select * FROM audit");$array = mysql_fetch_array ($resultat);	if($resultat) { while($array= mysql_fetch_array($resultat))  {echo " <tr><td>".$array ['id']."</td><td> ".$array ['Audittype']."</td><td> ".$array ['opis11']."</td><td> ".$array ['nomerotcheta']."</td><td> ".$array ['auditna']."</td><td> ".$array ['naimenovanieotcheta']."</td><td> ".$array ['resheniepravlenie']."</td><td> ".$array ['dataotcheta']."</td><td> ".$array ['narushenie']."</td><td> ".$array ['meropiatia']."</td><td> ".$array ['otvetctvenoepodrazdel']."</td><td> ".$array ['auditori']."</td><td> ".$array ['liniacompitenci']."</td><td> ".$array ['reiting']."</td><td> ".$array ['pervonachalnidataispolenie']."</td><td> ".$array ['status']."</td><td> ".$array ['novaiadataispolnenia']."</td><td> ".$array ['monitoringperiod']."</td><td> ".$array ['rassilka']."</td><td> ".$array ['eladressrassilki']."</td><td> ".$array ['komment']."</td><td> ".$array ['neophodimiecorrectmeri']."</td><td> ".$array ['opis1']."</td><td> ".$array ['opis2']."</td><td> ".$array ['opis3']."</td><td> ".$array ['opis4']."</td><td> ".$array ['opis5']."</td><td> ".$array ['opis6']."</td><td> ".$array ['opis7']."</td><td> ".$array ['opis8']."</td></tr> ";   } }		?> 
      
	 

     

    </table>
  </body>

</html>
