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

if ($handle = opendir('./Filedata/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='./BD/Filedata/".$entry."'>".$entry."</a></br>\n";
        }
    }
    closedir($handle);
}

?>

<style>

body {
  background: radial-gradient(#E2DBC6 1px, transparent 3px);
  background-size: 7px 7px;
}
.button-wrapper {
  display: table;
  margin: 50px auto;
  text-align: center;
}
.transform-button {
  position: relative;
  display: inline-block;
  text-decoration: none;
  padding: 10px 30px;
  margin-right: 20px;
  border: 1px solid #68E5F7;
  background: transparent;
  color: #fff;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  perspective: 5000px;
  background: white;
  transition: .3s;
}
.transform-button:last-of-type {margin-right: 0;}
.transform-button span {    
  position: relative;
  z-index: 2;
}
.transform-button:before {
  content: "";
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #68E5F7;
  transform-origin: left;
  transition: .5s;
}
.transform-button:hover {
  color: #68E5F7;
  border-color: #68E5F7;
 }
.transform-button:hover:before {transform: rotateY(92deg);}
@media(max-width:680px){.transform-button{display:block;margin-right:0;margin-bottom:20px;}}


</style>  

 <html>
	<a href="adminpanel.php" class="url-min" title="Наш сайт">Back</a><br><br>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

</head>
<body bgcolor= "#01DFD7" background= "./img/rD000.gif"> 	
	<big></br>______________________________________________________________________________________________________________________________________________________________________________
	</br></br></br>

echo "Enter to File => <a href='./BD/Filedata/'> dowload File ftp</a> 

</body>

</html>

