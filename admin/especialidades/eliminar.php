<?php 

$data = file_get_contents("php://input");
//print_r($data); Nos muestra por consola
require "../../conf/db.php";
$query = $conexion->prepare("DELETE FROM especialidades WHERE idE = :id");
$query->bindParam(":id",$data);
$query->execute();
echo "ok";


?>