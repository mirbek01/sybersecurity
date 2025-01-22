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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вы успешно отправили</title>
</head>

<?php

/*mail("mirbek.tukeev@optimabank.kg","Предложение или жалоба","Content-type:text/plain; charset = UTF8\r\n","Человек по имени $fio указал email - $email \n
Предложение или жалоба - $add_text.");
*//*

$mail_from = "mirbek.tukeev@optimabank.kg";
$to="О мониторинге";
$charset = "Windows-1251";
$subject = "С уважением, К.Бейшеева,Начальник ОАМиИТА ДВА ОАО Оптима Банк;ул. Т.Молдо,21 720001, Бишкек, Кыргызская Республика Телефоны: +996 (312) т.90 58 58 (вн.1121) эл.почта: kanym.beisheeva@optimabank.kg";
$txt ="Здр. Коллеги,В рамках мониторинга мер на ......  ........... 2018г., просим сообщить статус исполнения нижеуказанной меры/мер:";
$headers = "From:kanym.beisheeva@optimabank.kg ываваава"."\r\n";

mail($mail_from,$to,$subject,$txt,$headers);
*/

 $tema = "О мониторинге";
$massage = "Здр. Коллеги,
В рамках мониторинга мер на ......  ........... 2018г., просим сообщить статус исполнения нижеуказанной меры/мер:




С уважением, 

К.Бейшеева,
Начальник ОАМиИТА ДВА
ОАО Оптима Банк
ул. Т.Молдо, 21
Бишкек, Кыргызская Республика
Телефоны: +996 (312) т.32 45 45  (вн.119)
эл.почта: kanym.beisheeva@optimabank.kg";
        $massage1 = "";
          $to = "mirbek.tukeev@optimabank.kg";
        $from = "mirbek.tukeev@optimabank.kg";
        $subject = $tema;
        $subject = "=?utf-8?b?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to:$from\r\nContent-type:text/html;charset=utf-8\r\n";
        mail($to, $subject, $massage,$massage1, $headers);
		
?> 


<?php
  /*  $mail = array(  
        'to' => "kanym.beisheeva@optimabank.kg;
        'subject' => "Новое сообщение";
        'message' => "<html><body><p>Текст сообщения</p></body></html>";
        'headers' => "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: Эта кириллица выводится иероглифами <frommail@site.ru>\r\n");  

    mail($mail['to'], $mail['subject'], $mail['message'], iconv ('utf-8', 'windows-1251', $mail['headers']));
	*/?>
<?php	/*
	$to = "mirbek.tukeev@optimabank.kg"; 
	$subject = "mirbek.tukeev@optimabank.kg"; 
$charset = "Windows-1251"; 
$headers = "Reply-to: $to\n"; 
$headers .= "MIME-Version: 1.0\n";  
$headers .= "Content-Type: text/plain"; 
$headers .= "; Charset=".$charset."\nContent-Transfer-Encoding: 8bit\n"; 
$body .= "dиапиаи";
mail($to, $subject, $body, $headers);  */
		?>

<body>
<big>Вы успешно отправили сообщение !!!</big>
</body>

</html>
