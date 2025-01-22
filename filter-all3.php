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
<a href="adminpanel.php" class="url-min" title="Наш сайт">back Новая База</a><br><br>
  <head>


	<script src="/BD/jquery-1.12.2.min2.js"></script>
   <! <script src="/BD/jquery-1.12.2.min.js"></script>
	
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
<script src="/BD/123/123/jquery.min.js"></script> 
<script src="/BD/123/123/FileSaver.js"></script> 
<script src="/BD/123/123/jquery.wordexport.js"></script> 
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
      
<th>ID	</th><th>Oper	</th> <th>Стыковка оперы	</th> <th>Имя пользователя	</th><th>Учетная запись в AD	</th><th>Имя ПК	</th><th>Дата входа	</th><th>Время входа</th><th>Мак адрес	</th><th>Тип действии (повторный вход)	</th>

		
 </tr><tr class='table-filters'><td>   <input type="text"/> </td><td>   <input type="text"/> </td> <td> <input type="text"/> </td>  <td> <input type="text"/> </td><td><input type="text"/> </td><td> <input type="text"/> </td><td><input type="text"/> </td> <td> <input type="text"/></td> <td><input type="text"/></td><td> <input type="text"size="25"/></td>
		  
</tr>
    
  

		
		   <?php	$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());	mysql_select_db('povtor'); mysql_set_charset("utf8");
		$resultat=mysql_query("select * FROM dxml2_doperlog_dbt");$array = mysql_fetch_array ($resultat);	if($resultat) { while($array= mysql_fetch_array($resultat))
		{echo " <tr class='table-data'> <td> ".$array ['ID']."</td> <td> ".$array ['T_USERID']."</td><td> ".$array ['T_OPER']."</td><td> ".$array ['T_NAME']."</td><td> ".$array ['T_USERNAME']."</td><td> ".$array ['T_COMPNAME']."</td><td> ".$array ['T_DATE']."</td><td> ".$array ['T_TIME']."</td>
		<td> ".$array ['T_SADDR']."</td>
		<td> ".$array ['T_OPCODE']."-Повторный вход<br></big><big></br><a href='send.php?edit=$array[ID]'>Отправить письмо</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</big><big></br></td></tr><b><u>
 
</td>
		</tr> " ;   } } 	?>  
     
 

		
  
 
 
   

	
	
</table>


   
       <?php //if ($handle = opendir('./Filedata/')) {    while (false !== ($entry = readdir($handle))) {        if ($entry != "." && $entry != "..") {            echo "<a href='Filedata/".$entry."'>".$entry."</a></br>\n";        }    }    closedir($handle);}?>
	   
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
