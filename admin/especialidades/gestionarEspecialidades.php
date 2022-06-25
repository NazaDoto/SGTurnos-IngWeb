<?php

include('../../conf/db.php');
session_start();

?>
<!DOCTYPE html>
<html id="htmlAdmin" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos Online SMAUNSE</title>
    <script type="text/javascript" src="https://livejs.com/live.js"></script>
    <link rel="stylesheet" href="../../estilos.css">
    <link rel="icon" href="recursos/icono.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</head>

<body id="bodyIndex" style="background-color: rgb(255, 255, 255); background-image: url(../../recursos/adminFondo2.png); ">
    <!-- Navbar -->
    <?php
                        
                        if (isset($_SESSION["conexionAceptadaAdmin"])) {
                            $conexionAceptadaAdmin = $_SESSION["conexionAceptadaAdmin"];
                        }     else { 
                            header("location: ../../Validation/sinSesion.php"); 
                        }   
                        
                        ?>
    <nav style="background-color: rgba(165, 250, 174, 0.7);" class="navbar navbar-expand-lg">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler navbar-toggler-icon" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="../../recursos/iconoNav.png" class="d-none d-sm-block" alt="" loading="lazy" />
                </a>
                <!-- Left links -->
                <a class="nav-link" href="#">Gestionar Profesionales</a>
                <a class="nav-link" style="color:blue;" href="">Gestionar Especialidades</a>
                <a class="nav-link" href="#">Generar Reportes</a>

                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
            <a style="color:rgb(177, 12, 12)"class="nav-link" href="../../Validation/logout.php">Cerrar Sesión</a>

            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <div class="d-flex container-fluid justify-content-center">
        <div class="col-lg-3 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="titulo">Gestionar Especialidades</h3>
                </div>
                <div class="card-body">
                    <form method="post" id="frm">
                        <div class="mb-3">
                            <label class="form-label">Código</label>
                            <input type="hidden" name="ide" id="ide" value=""> 
                            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group text-center ">
                            <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block w-100">
                        </div>

                    </form>


                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4 align-items-center">

            <div class="row mb-2">
                <div class="col-lg-4 ">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="buscar"></label>
                            <input type="text" name="buscar" id="buscar" placeholder="Buscar especialidad..." class="form-control">
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-hover table-responsive table-striped text-center">
                <thead class="thead-light ">
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th></th>   <th></th>   
                        <th>Fecha de Carga</th> 
                        <th></th>                       
                    </tr>
                </thead>
                <tbody id="resultado" class="text-center " style="color: white; font-weight:bold;text-shadow: 1px 1px 2px black;">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </div>




    <script src="script.js"></script>


</body>

</html>