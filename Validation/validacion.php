<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
$error = "<script>const Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: false,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'error',
    title: 'Datos incorrectos'
  })</script>";
$conexionAceptada = "<script>const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: false,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'success',
    title: 'Ingreso satisfactorio'
  })</script>";

  
$conexion = mysqli_connect("localhost:3306", "root", "", "sgtsmaunse");

/* if(isset($conexion)){
    echo "conexcion exitosa";
}
 */
$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña' ";
$resultado = mysqli_query($conexion, $consulta);


$filas = mysqli_fetch_array($resultado);
if (isset($filas)) {
    if ($filas['idCargo'] == 1) { // Administrador 
        $_SESSION['conexionAceptadaAdmin'] = $conexionAceptada;
        header("location:../admin/ingresoVistaAdmin.php");
    } else
    if ($filas['idCargo'] == 2) { // Afiliado
        $_SESSION['conexionAceptadaAfiliado'] = $conexionAceptada;
        header("location:../afiliado/ingresoVistaAfiliado.php");
    } else
    if($filas['idCargo'] == 3){ //Medico
      $_SESSION['conexionAceptadaMedico'] = $conexionAceptada;
      header("location: ../profesional/ingresoVistaAfiliadoMedico.php");
    }
} else {
    $_SESSION['error'] = $error;
    header("location: ../"); // Vuelve al login

}
    
  
    
    

mysqli_free_result($resultado);
mysqli_close($conexion)





    ?>