<?php 


if (isset($_POST)) {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $fecha = date('d-m-Y');
    
    require "../../conf/db.php";
    if (empty($_POST['idp'])){
        $query = $conexion->prepare("INSERT INTO especialidades (cod, nombre, fecha) VALUES (:cod, :nomb, :fec)");
        $query->bindParam(":cod", $codigo);
        $query->bindParam(":nomb", $nombre);
        $query->bindParam(":fec", $fecha);
        $query->execute();
        $conexion = null;
        echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $conexion->prepare("UPDATE especialidades SET cod = :cod, nombre = :nomb, fecha =:fec WHERE id = :id");
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