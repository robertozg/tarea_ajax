<!DOCTYPE html>
<html> 
<head> 
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

<title> isw <?php echo date('y-m-d'); ?> </title> 
<body>
<?php
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contra=$_POST['contra'];

$con =  mysql_connect('localhost', 'root', '') or die ('Problema con la base de datos');
mysql_select_db('isw',$con) or die ('Problemas al seleccionar la base de datos');
$result = mysql_query ("select Email from usuarios where Email= '$email'",$con) or die('problema en la consulta'); 
$row = mysql_fetch_array($result);
if ($_POST['email'] == $row[0])
{
        echo "El usuario $email ya esta registrado. ";
        echo '<p> <a href="javascript:history.go(-1)"> Volver al formulario de registro</a></p>';
    }
    else{
    $sql= "INSERT INTO usuarios  (Email, Nombre, Apellidos, Contra) VALUES ('$email','$nombre','$apellidos', '$contra')";
    mysql_query($sql, $con);
    echo "Bienbenid@ $nombre, has sido registrado exitosamente.";
    echo "Redireccionando a la pagina de inicio";
    header("Refresh:5; url=tarea.html");
        }







  
 
    




        


?>
</head> 
</body> 
</html>

