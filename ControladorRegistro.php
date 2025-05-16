<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="registro"; 
//crear conexion con la base de datos 
$conn=new mysqli ($servername, $username, $password, $dbname); 
// verificar conexion 
if ($conn->connect_error) 
{ 
    die("conexion fallida:". $conn->connect_error); 
} 
//obtener datos de formulario 
$usuario=$_POST['usuario']; 
$clave=$_POST['clave']; 
//insertar datos en la base de datos (corregido el SQL)
$sql="INSERT INTO informacion (usuario, clave) VALUES ('$usuario', '$clave')"; 
if ($conn->query($sql)===TRUE) 
{
    // Redirigir a la página de inicio de sesión
    header("Location:index.html");
    exit();
} 
else 
{ 
    echo 'Registro incorrecto'; 
} 
$conn->close(); 
?>