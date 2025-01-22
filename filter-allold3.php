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
<!DOCTYPE html>
<html>
<a href="adminpanel.php" class="url-min" title="Наш сайт">back Старая база</a><br><br>
  <head>


	<script src="/optimabank-dba.kg/jquery-1.12.2.min2.js"></script>
   <! <script src="/optimabank-dba.kg/jquery-1.12.2.min.js"></script>
	
	<!<script data-require="jquery@2.0.3" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
	
  <body bgcolor= "#01DFD7" background= "./img/rD000.gif">
   <!-- <style type="text/css">
    #filter-table{
        width: 100%;
    }
    #filter-table th{
        background-color: #dadada; #b0e0e6;
    }
    #filter-table td, #filter-table th{
        padding: 5px;
        border-bottom: 1px solid #ccc;
    }
	TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
</style>--><div id="page-content">
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
<h1 style="margin-top:150px;">Word или Excel Export</h1>

<a class="word-export" href="javascript:void(0)"> Export виде файла (Word или Excel)  </a> 
<script src="/optimabank-dba.kg/123/1234/jquery.min.js"></script> 
<script src="/optimabank-dba.kg/123/1234/FileSaver.js"></script> 
<script src="/optimabank-dba.kg/123/1234/jquery.wordexport.js"></script> 
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    });
    </script>
<style type="text/css">
   TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 5px; /* Поля вокруг содержимого таблицы */
    border: 2px solid black; /* Параметры рамки */
   }
   TH {
    background: #dadada /* Цвет фона */
   }
  </style>



<table id="filter-table">
    <tr>
     <th>Идентификатор ID	</th>
<th>Audit type	</th>
<th>#	</th>
<th>Номер отчета	</th>
<th>Аудит на	</th>
<th>Наименование отчета	</th>
<th>Решение Правления	</th>
<th>Дата отчета	</th>
<th>Нарушение&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</th>
<th>Мероприятие&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</th>
<th>Ответственное подразделение	</th>
<th>Аудиторы	</th>
<th>Линия компетенции	</th>
<th>Рейтинг	</th>
<th>Первоначальная	дата исполнения	</th>
<th>Статус</th>
<th>Новая дата исполнения	</th>
<th>monitoring period	</th>
<th>рассылка	</th>
<th>эл.адрес рассылки</th>	
<th>Комментарии &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	</th>
<th>Необходимые корректирующие меры	</th>
<th>Описание№1	</th>
<th>Описание№2	</th>
<th>Описание№3	</th>
<th>Описание№4	</th>
<th>Описание№5	</th>
<th>Описание№6	</th>
<th>Описание№7	</th>
<th>Описание№8	 </th>
		
    </tr>
    <tr class='table-filters'>
        <td>
            <input type="text"/>
        </td>
        <td>
            <input type="text"/>
        </td>
        <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"size="120"/>
        </td>
		  <td>
            <input type="text"size="120"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
		  <td>
            <input type="text"/>
        </td>
	
    </tr>
    
  

         <?php	$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());	mysql_select_db('host_29723_mirbase'); mysql_set_charset("utf8");
		$resultat=mysql_query("select * FROM auditold");$array = mysql_fetch_array ($resultat);	if($resultat) { while($array= mysql_fetch_array($resultat))
		{echo " <tr class='table-data'><td>".$array ['id']."</td>   <td>  ".$array ['Audittype']."  </td> <td> ".$array ['opis11']."</td><td> ".$array ['nomerotcheta']."</td><td> ".$array ['auditna']."</td><td> ".$array ['naimenovanieotcheta']."</td><td> ".$array ['resheniepravlenie']."</td><td> ".$array ['dataotcheta']."</td><td> ".$array ['narushenie']."</td><td> ".$array ['meropiatia']."</td><td> ".$array ['otvetctvenoepodrazdel']."</td><td> ".$array ['auditori']."</td><td> ".$array ['liniacompitenci']."</td><td> ".$array ['reiting']."</td><td> ".$array ['pervonachalnidataispolenie']."</td><td> ".$array ['status']."</td><td> ".$array ['novaiadataispolnenia']."</td><td> ".$array ['monitoringperiod']."</td><td> ".$array ['rassilka']."</td><td> ".$array ['eladressrassilki']."</td><td> ".$array ['komment']."</td><td> ".$array ['neophodimiecorrectmeri']."</td><td> ".$array ['opis1']."</td><td> ".$array ['opis2']."</td><td> ".$array ['opis3']."</td><td> ".$array ['opis4']."</td><td> ".$array ['opis5']."</td><td> ".$array ['opis6']."</td><td> ".$array ['opis7']."</td><td> ".$array ['opis8']."</td>    </tr> ";   } }		?>  
     
 
 

 
   

	
	
</table>


   
       
	   
<script>
$('.table-filters input').on('input', function () {
    filterTable($(this).parents('table'));
});

function filterTable($table) {
    var $filters = $table.find('.table-filters td');
    var $rows = $table.find('.table-data');
    $rows.each(function (rowIndex) {
        var valid = true;
        $(this).find('td').each(function (colIndex) {
            if ($filters.eq(colIndex).find('input').val()) {
                if ($(this).html().toLowerCase().indexOf(
                $filters.eq(colIndex).find('input').val().toLowerCase()) == -1) {
                    valid = valid && false;
                }
            }
        });
        if (valid === true) {
            $(this).css('display', '');
        } else {
            $(this).css('display', 'none');
        }
    });
}
</script>


	   
	   
   


    </table>
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
