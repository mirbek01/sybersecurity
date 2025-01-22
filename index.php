 
<?php
 
 $msg = "";
 if(isset($_POST['submit'])){
$connect=@mysql_connect('localhost:3306 ','root','rFn76#bL3') or die(mysql_error());
	mysql_select_db('host_29723_mirbase') or die('db not selected'); 
mysql_set_charset("utf8");

	$login=$_POST['login'];
	

	$sql = "select count(*) as num from reg2 where login = '$login'";
	$res	= mysql_query($sql, $connect);
	while($row = mysql_fetch_array($res))
	   {
		  if($row[0] > 0)
		  {  }
		  
		  if($login=='ol'){
			mysql_close($connect);
			@header("Location: ol\in.php");
			return;
		  }
		  if($login=='auditor'){
			mysql_close($connect);
			@header("Location: auditor\in.php");
			return;
		  }
		   if($login=='uores'){
			mysql_close($connect);
			@header("Location: uores\in.php");
			return;
		  }
		   if($login=='urm'){
			mysql_close($connect);
			@header("Location: urm\in.php");
			return;
		  }
		    if($login=='emc'){
			mysql_close($connect);
			@header("Location: emc\in.php");
			return;
		  }  
		   if($login=='admin'){
			mysql_close($connect);
			@header("Location: admin111.php");
			return;
		  }
		   
		  else{
		    $msg = "Incorrect login";
		  }
	   
	   
	   }
   
   mysql_close($connect);
}

?>
<html>
<head>
</head>
<body>
<body bgcolor= "#a8d7ff" background= "./img/J4o.gif"><img src="./img/lombard24.png">


<form method="post" action="index.php" id="form"> 
<br>
 Логин     <input type="text" name="login" required placeholder='Логин'/> <?php echo ($msg ? "<font color='red'>$msg </font>" : ""); ?><br>
 
<input type="submit" name="submit" value="вход"/> <br>
<input type="reset" name="reset" value="Отмена"/> <br>

</form>


Видеоурок: <br>
<video width="900" height="350" src="./video/L22.mp4"  controls="controls" poster="./img/123.jpg""></video> <br><br><br>
Уважаемый пользователь, доводим до Вашего сведения что, что данная веб-страница\интернет-страница находится в тестовом режиме.
</body>
</html>

