<!DOCTYPE html>
<html> 
<head> 
<LINK REL="stylesheet" TYPE="text/css" HREF="style.css">

<title> isw <?php echo date('y-m-d'); ?> </title> 
<body>
<?php
$email=$_POST['email'];
$contra = $_POST['contra'];


$con =  mysql_connect('localhost', 'root', '') or die ('Problema con la base de datos');
mysql_select_db('isw',$con) or die ('Problemas al seleccionar la base de datos');

$result = mysql_query ("select Contra from usuarios where Email= '$email'",$con) or die('problema en la consulta'); 
$row = mysql_fetch_array($result);


if ($_POST['contra'] == $row[0])
header("Refresh:0; url=index.html");
else{
echo "Usuario o contraseña incorrecta.   Seras redireccionado a la pagina principal";  
header("Refresh:3; url=tarea.html");
}


mysql_close($con);




  
 
    




        


?>
</head> 
</body> 
</html>

