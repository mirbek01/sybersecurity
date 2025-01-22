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
<?php 

$file = basename($_GET['file']);
//$file = './Filedata/'.$file;
$file = $file;
if(!file_exists($file)){ // file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
}

?>



 <html>

<head>

</head>
<body bgcolor= "#01DFD7" background= "./img/rD000.gif"> 	
	<big></br>______________________________________________________________________________________________________________________________________________________________________________
	</br></br></br>

<a href="file.php" class="url-min" title="Наш сайт">Back</a><br><br>

</body>

</html>

