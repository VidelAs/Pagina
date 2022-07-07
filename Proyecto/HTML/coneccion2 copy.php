<?php
 //Conectar a base de datos 
 $serverName="DIEGO-PC";
 $connectionInfo=array( "Database"=>"proyecto", "UID"=>"sa", "PWD"=>"1234", "CharacterSet"=>"UTF-8");
 $conn=sqlsrv_connect($serverName, $connectionInfo);
 $conn = sqlsrv_connect($serverName,$connectionInfo);

if($conn) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r(sqlsrv_errors(), true));
}

?>
