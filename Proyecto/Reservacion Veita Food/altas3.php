<?php
//variables
include ("connecion3.php"); 
$fecha=$_POST["fecha"];
$horas=$_POST["horas"];
$nombre=$_POST["nombre"];
$numero=$_POST["numero"];
$personas=$_POST["personas"];
//sentencia
$squery= "INSERT INTO reservacion (fecha, hora,nombre,numero,personas) VALUES ('$fecha', '$horas', 'nombre', '$numero', '$personas')";

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