<?php
include('conf/db.php');
session_start();
?>
<!DOCTYPE html>
<html id="htmlIndex" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos Online SMAUNSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="recursos/icono.png">
    <script src="https://kit.fontawesome.com/ad11afadb2.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="bodyIndex">
    <?php
    if (isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
        echo "$error";
    } else if
        (isset($_SESSION["sinSesion"])){
            $sinSesion = $_SESSION["sinSesion"];
            echo "$sinSesion";
        
    }
    ?>
    <div class="container">

        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header text-center">
                    <img src="recursos/logoChico.png" alt="" style="vertical-align: middle; width: 100%; height: 100%;  ">
                </div>
                <div class="card-body">

                    <form method="POST" action="Validation/validacion.php" class="mt-4">

                        <!-- Parte de login -->
                        <div class="input-group form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                            </div>
                        </div>
                        <p></p>
                        <div class="input-group form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                            </div>
                        </div>

                        <P></P>
                        <div class="text-center mt-4">
                            <button type="submit" value="ingresar" class="btn login_btn ">Ingresar</button>
                        </div>

                        <!-- Parte de login -->
                    </form>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 153, 255, 0.774); font-weight: bold;">© 2022
            Copyright:
            <a class="text-light" href="https://cuv-fceyt.unse.edu.ar/user/profile.php?id=2118">Matías Díaz</a> & <a class="text-light" href="https://cuv-fceyt.unse.edu.ar/user/profile.php?id=3878">Nazareno Navarrete</a>
        </div>
        <!-- Copyright -->

        <script src="../script.js"></script>

</body>

</html>
<?php
unset($_SESSION["error"]);
?>