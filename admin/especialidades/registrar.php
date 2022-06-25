<?php 


if (isset($_POST)) {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $fecha = date('Y-m-d');
    
    require "../../conf/db.php";
    if (empty($_POST['idE'])){
        $query = $conexion->prepare("INSERT INTO especialidades (codEspecialidad, nomEspecialidad, fechaCarga) VALUES (:cod, :nomb, :fec)");
        $query->bindParam(":cod", $codigo);
        $query->bindParam(":nomb", $nombre);
        $query->bindParam(":fec", $fecha);
        $query->execute();
        $conexion = null;
        echo "ok";
    }else{
        $id = $_POST['idE'];
        $query = $conexion->prepare("UPDATE especialidades SET codEspecialidad = :cod, nomEspecialidad = :nomb, fechaCarga =:fec WHERE idE = :id");
        $query->bindParam(":cod", $codigo);
        $query->bindParam(":nomb", $nombre);
        $query->bindParam(":fec", $fecha);
        $query->bindParam("id", $id);
        $query->execute();
        $conexion = null;
        echo "modificado";
    }
    
}

    

?> 