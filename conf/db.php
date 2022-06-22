<?php 

$host="localhost:3306";
$bd="sgtsmaunse";
$usuario="root";
$contraseña="";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
    if($conexion){
        //echo "La conexion exitosa";
    }
} catch (Exception $ex) {
    echo $ex -> getMessage();
} 

?>