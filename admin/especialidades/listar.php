
<?php 

$data = file_get_contents("php://input");
require "../../conf/db.php";
$consulta = $conexion->prepare("SELECT * FROM especialidades ORDER BY idE DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $conexion->prepare("SELECT * FROM especialidades WHERE idE LIKE '%".$data."%' OR nomEspecialidad LIKE '%".$data."%' OR codEspecialidad LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            
            <td>" . $data['codEspecialidad'] . "</td>
            <td>" . $data['nomEspecialidad'] . "</td>
            <td>" . $data['fechaCarga'] . "</td>
            <td></td>
            <td>
                <button type='button' class='btn-success' onclick=editar('" . $data['idE'] . "')>Editar</button>
                <button type='button' class='btn-danger' onclick=eliminar('" . $data['idE'] . "')>Eliminar</button>
            </td>        
        </tr>";
}

?>