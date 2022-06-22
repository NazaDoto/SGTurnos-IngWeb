<?php
include('../conf/db.php');
session_start();
?>
<!DOCTYPE html>
<html id="htmlIndex" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos Online SMAUNSE</title>
    <script type="text/javascript" src="https://livejs.com/live.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../estilos.css">
    <link rel="icon" href="../recursos/icono.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- MDB -->
  
</head>

<body id="bodyIndex" style="background-color: rgb(47, 179, 255);">
    <!-- Navbar -->
    <?php
                         if (isset($_SESSION["conexionAceptadaMedico"])) {
                            $conexionAceptada = $_SESSION["conexionAceptadaMedico"];
                            echo "$conexionAceptada";
                        }            else { 
                            header("location: ../Validation/sinSesion.php"); 
                           }  
                        
                        ?>
    <nav style="background-color: rgba(154, 201, 255, 0.3);"class="navbar navbar-expand-lg navbar-light ">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler navbar-toggler-icon" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="../recursos/iconoNav.png" class="d-none d-sm-block" alt="" loading="lazy" />
                </a>
                <!-- Left links -->
                
                <a class="nav-link" href="./miAgenda/miAgenda.php">Mi Agenda</a>
                <a class="nav-link" href="#">Perfil</a>

                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-end">
                <a class="nav-link" href="ingresoVistaAfiliadoMedico.php">Cambiar a vista de afiliado</a>
                <a style="color:rgb(177, 12, 12)"class="nav-link" href="../Validation/logout.php">Cerrar Sesión</a>

            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</body>

</html>