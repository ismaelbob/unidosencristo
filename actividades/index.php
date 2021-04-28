<?php
    include '../includes/sesion.php';
    include '../includes/usuario.php';
    $sesion = new Sesion();
    $usuario = new Usuario();
    if(isset($_SESSION['user-uec'])) {
        $usuario -> setUsuario($sesion -> getSesion());
    }
    $usu_actual = $usuario -> getUsuario();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC | Actividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logo_ico.ico">
    <link rel="stylesheet" href="../css/paleta.css">
</head>
<body class="bg-fondo">
    <!--Menu de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-pri">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand text-light d-block m-auto" style="font-family: 'Lobster Two', cursive; font-size: 23px;">Unidos en Cristo &nbsp</div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Inicio</a>
                    </li>
                    <?php
                        if($usu_actual <> '') {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../ofrendas">Ofrendas</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../cancionero">Cancionero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Noticias</a>
                    </li>
                </ul>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex align-items-center">
                            <?php
                                if($usu_actual == '') {
                            ?>
                            <a class="nav-link" href="../login/">
                                <img src="../img/user.png" alt="User" class="rounded-circle" width="25px">
                                Iniciar sesion
                            </a>
                            <?php
                                } else {
                                    echo '<img src="../img/user.png" alt="User" class="rounded-circle" width="25px">';
                                    echo '<a class="nav-link" href="../includes/logout.php">Salir</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Actividades-->
    <div class="container mt-2">
        <h4 class="text-center text-light rounded-2 p-2 bg-ter">ACTIVIDADES</h4>
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="card h-100">
                    <h5 class="card-header">General</h5>
                    <div class="card-body">
                        <h5 class="text-pri">MARZO</h5>
                        <div class="py-2 border-bottom">
                            <h6 class="card-title">&bull; Bautismo</h6>
                            <p class="card-text">
                                <span class="text-pri">Para:</span> Bautizo<br>
                                <span class="text-pri">Hora:</span> 8:00<br>
                                <span class="text-pri">Fecha:</span> Martes 8<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                <div class="card h-100">
                    <h5 class="card-header">Ministerios</h5>
                    <div class="card-body">
                        <h5 class="text-pri">ABRIL</h5>
                        <div class="py-2 border-bottom">
                            <h6 class="card-title">&bull; Practicas de canto</h6>
                            <p class="card-text">
                                <span class="text-pri">Para:</span> Vocalistas de los ministerios de alabanza<br>
                                <span class="text-pri">Hora:</span> 19:00<br>
                                <span class="text-pri">Fecha:</span> Miercoles 7, 14, 21, 28<br>
                            </p>
                        </div>
                        <div class="py-2 border-bottom">
                            <h6 class="card-title">&bull; Taller de teoria musical</h6>
                            <p class="card-text">
                                <span class="text-pri">Para:</span> Integrantes de los ministerios de alabanza<br>
                                <span class="text-pri">Hora:</span> 19:00<br>
                                <span class="text-pri">Fecha:</span> 12<br>
                            </p>
                        </div>
                        <div class="py-2 border-bottom">
                            <h6 class="card-title">&bull; Taller devocional</h6>
                            <p class="card-text">
                                <span class="text-pri">Para:</span> Integrandes de los ministerios de alabanza<br>
                                <span class="text-pri">Hora:</span> 7:00<br>
                                <span class="text-pri">Fecha:</span> 18<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Rol de direccion-->
    <div class="container mt-3">
        <h4 class="text-center text-light rounded-2 p-2 bg-ter">ROL DE DIRECCION PARA MINISTERIOS</h4>
        <div class="card">
        <h5 class="card-header">Marzo</h5>
            <div class="card-body">
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Pregoneros de Cristo</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Domingo 28</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1 my-sm-0 my-1">Martes 2</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Jueves 4</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Even-Ezer</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Domingo 7</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2 my-sm-0 my-1">Martes 9</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Jueves 11</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Oriel</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g3">Domingo 14</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g3 my-sm-0 my-1">Martes 16</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g3">Jueves 18</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Hno. Ismael</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g4">Domingo 21</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g4 my-sm-0 my-1">Martes 23</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g4">Jueves 25</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-4 col-sm-2">Culto de jóvenes</div>
                    <div class="col-8 col-sm-10">
                        <div class="row">
                            <div class="col-12 col-sm-3 rounded-pill bg-g4">Sab. 6 Ismael</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g2 my-sm-0 mt-1">Sab. 13 Even-Ezer</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g3 my-sm-0 my-1">Sab. 27 Oriel</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g4 my-sm-0">Sab. 31 Ismael</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card">
        <h5 class="card-header">Abril</h5>
            <div class="card-body">
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Cuerdas</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Domingo 28 Marzo</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1 my-sm-0 my-1">Martes 30 Marzo</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Jueves 1</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Even-Ezer</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Domingo 4</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2 my-sm-0 my-1">Martes 6</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Jueves 8</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Oriel</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g3">Domingo 11</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g3 my-sm-0 my-1">Martes 13</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g3">Jueves 15</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Hno. Ismael</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g4">Domingo 18</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g4 my-sm-0 my-1">Martes 20</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g4">Jueves 22</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Cuerdas</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Domingo 25</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1 my-sm-0 my-1">Martes 27</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Jueves 29</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-4 col-sm-2">Culto de jóvenes</div>
                    <div class="col-8 col-sm-10">
                        <div class="row">
                            <div class="col-12 col-sm-3 rounded-pill bg-g4">Sab. 3 Ismael</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g1 my-sm-0 mt-1">Sab. 10 Min. Invitado</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g2 my-sm-0 my-1">Sab. 17 Even-Ezer</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g3 my-sm-0">Sab. 24 Oriel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card">
        <h5 class="card-header">Mayo</h5>
            <div class="card-body">
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Even-Ezer</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Domingo 2</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2 my-sm-0 my-1">Martes 4</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Jueves 6</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Oriel</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g3">Domingo 9</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g3 my-sm-0 my-1">Martes 11</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g3">Jueves 13</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Hno. Ismael</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g4">Domingo 16</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g4 my-sm-0 my-1">Martes 18</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g4">Jueves 20</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Hno. Cuerdas</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Domingo 23</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1 my-sm-0 my-1">Martes 25</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g1">Jueves 27</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-5 col-sm-6">Ministerio Even-Ezer</div>
                    <div class="col-7 col-sm-6">
                        <div class="row">
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Domingo 30</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2 my-sm-0 my-1">Martes 1 junio</div>
                            <div class="col-12 col-sm-4 rounded-pill bg-g2">Jueves 3 junio</div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom p-2">
                    <div class="col-4 col-sm-2">Culto de jóvenes</div>
                    <div class="col-8 col-sm-10">
                        <div class="row">
                            <div class="col-12 col-sm-3 rounded-pill bg-g2">Sab. 1 Even-Ezer</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g3 my-sm-0 mt-1">Sab. 8 Oriel</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g4 my-sm-0 my-1">Sab. 15 Ismael</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g2 my-sm-0">Sab. 22 Even-Ezer</div>
                            <div class="col-12 col-sm-3 rounded-pill bg-g3 my-sm-0">Sab. 29 Oriel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src=""></script>
</body>
</html>