<?php
include('../../conf/db.php');
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

    <link rel="stylesheet" href="../../estilos.css">
    <link rel="icon" href="../../recursos/icono.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="javascript.js"></script>

    <link rel="stylesheet" href="style.css">

    <!-- MDB -->

</head>

<body id="bodyIndex" style="background-color: rgb(47, 179, 255);">
    <!-- Navbar -->
    <?php
    if (isset($_SESSION["conexionAceptadaMedico"])) {
        $conexionAceptada = $_SESSION["conexionAceptadaMedico"];
    } else {
        header("location: ../../Validation/sinSesion.php");
    }

    ?>
    <nav style="background-color: rgba(154, 201, 255, 0.3);" class="navbar navbar-expand-lg navbar-light ">
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

                <a class="nav-link" style="color:blue;" href="">Mi Agenda</a>
                <a class="nav-link" href="#">Perfil</a>

                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-end">
                <a class="nav-link" href="../ingresoVistaAfiliadoMedico.php">Cambiar a vista de afiliado</a>
                <a style="color:rgb(177, 12, 12)" class="nav-link" href="../../Validation/logout.php">Cerrar Sesión</a>

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
                            <input type="hidden" name="idp" id="idp" value="">
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
    <div class="table-responsive mt-5 col-lg-6  align-items-center">
            <table class="table table-hover table-bordered table-responsive text-center" >
                <thead class="thead-light">
                    <tr class="bg-light-gray">
                        <th class="text-uppercase">Hora
                        </th>
                        <th class="text-uppercase">Lunes</th>
                        <th class="text-uppercase">Martes</th>
                        <th class="text-uppercase">Miércoles</th>
                        <th class="text-uppercase">Jueves</th>
                        <th class="text-uppercase">Viernes</th>
                    </tr>
                </thead>
                <tbody class="fondo-tabla" style="color: white; font-weight:bold;text-shadow: 1px 1px 2px black;" >
                    <tr>

                        <td class="align-middle fondo-hora">08:00</td>
                        <td>
                            <!-- Lunes -->
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                            <!-- Martes -->
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>

                            <div class="font-size13 text-light-gray">Marta Healy</div>
                        </td>

                        <td>
                            <!-- Miércoles -->
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                            <!-- Jueves -->
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                            <!-- Viernes -->
                            <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>

                            <div class="font-size13 text-light-gray">Kate Alley</div>
                        </td>
                    </tr>

                    <tr>

                        <td class="align-middle fondo-hora">09:00</td>
                        <td>
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>

                        </td>
                        <td>
                            <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>

                            <div class="font-size13 text-light-gray">Kate Alley</div>
                        </td>
                        <td>
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>

                            <div class="font-size13 text-light-gray">Marta Healy</div>
                        </td>
                        <td>
                            <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>

                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                    </tr>

                    <tr>

                        <td class="align-middle fondo-hora">10:00</td>
                        <td>
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>

                    </tr>

                    <tr>

                        <td class="align-middle fondo-hora">11:00</td>
                        <td>
                            <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>

                            <div class="font-size13 text-light-gray">Kate Alley</div>
                        </td>
                        <td>
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>

                        </td>

                    </tr>

                    <tr>

                        <td class="align-middle fondo-hora">12:00</td>
                        <td>
                            <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>

                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                            <div class="font-size13 text-light-gray">Ivana Wong</div>
                        </td>
                        <td>
                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>

                        <div class="font-size13 text-light-gray">Ivana Wong</div>

                        </td>
                        <td>
                            <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>

                            <div class="font-size13 text-light-gray">James Smith</div>
                        </td>
                        <td>
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>

                            <div class="font-size13 text-light-gray">Marta Healy</div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
   

</body>

</html>