<?php
session_start();
$sinSesion = "<script>const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
      
    timerProgressBar: false,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'error',
    title: 'No se encontró una sesión activa. Por favor ingrese sus datos.'
  })</script>";
  $_SESSION["sinSesion"] = $sinSesion ;
header('Location: ../');
exit;
?>