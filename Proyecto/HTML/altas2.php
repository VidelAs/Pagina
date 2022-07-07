<?php
//variables
include ("coneccion2.php"); 
$nombre=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
//sentencia
$squery= "INSERT INTO Usuarios (nombre, email,clave) VALUES ('$nombre', '$email', '$password')";

//función de SQL Server
$res=sqlsrv_prepare($conn,$squery);

//Envio de datos correctamente
if (sqlsrv_execute($res)) {
    echo"Datos insertados correctamente";
} else {
    echo" Error al insertar los datos";
}
header("location:../HTML/proyect.html")

?>




