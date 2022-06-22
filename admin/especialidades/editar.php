<?php

$data = file_get_contents("php://input");
    require "../../conf/db.php";
    $query = $conexion->prepare("SELECT * FROM especialidades WHERE id = :id");
    $query->bindParam(":id", $data);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    echo json_encode($resultado);
?>