<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="registro"; 
//crear conexion con la base de datos 
$conn=new mysqli ($servername, $username, $password, $dbname); 
// verificar conexion 
if ($conn->connect_error) { 
    die("conexion fallida:". $conn->connect_error); 
} 
//obtener datos de formulario 
$usuario=$_POST['usuario']; 
$clave=$_POST['clave']; 
//verificar usuario y contraseña
$sql = "SELECT * FROM `informacion` WHERE usuario='$usuario' AND clave='$clave'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // Redirige a la página de inicio (cambia 'bienvenido.html' por la que desees)
    header("Location:Uniones-Academicas.html");
    exit();
} else { 
    echo 'Usuario o contraseña incorrecta'; 
} 
$conn->close(); 
?>