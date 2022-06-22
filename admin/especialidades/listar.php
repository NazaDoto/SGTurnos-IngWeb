
<?php 

$data = file_get_contents("php://input");
require "../../conf/db.php";
$consulta = $conexion->prepare("SELECT * FROM especialidades ORDER BY id DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $conexion->prepare("SELECT * FROM especialidades WHERE id LIKE '%".$data."%' OR nombre LIKE '%".$data."%' OR cod LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['cod'] . "</td>
            <td>" . $data['nombre'] . "</td>
            <td>" . $data['fecha'] . "</td>
            <td></td>
            <td>
                <button type='button' class='btn-success' onclick=editar('" . $data['id'] . "')>Editar</button>
                <button type='button' class='btn-danger' onclick=eliminar('" . $data['id'] . "')>Eliminar</button>
            </td>        
        </tr>";
}

?>