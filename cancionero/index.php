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
    <title>UEC | Cancionero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logo_ico.ico">
</head>
<body>
    <!--Menu de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #4496C8;">
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
                        <a class="nav-link active" href="./">Cancionero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../actividades">Noticias</a>
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

    <!-- Combo para seleccionar el himnario -->
    <div class="container">
        <div class="row mt-2">
            <div class="col-12 col-md-4">
                <select class="form-select" aria-label="Default select example" id="cmb-himnario">
                    <option value="0" selected>Seleccione himnario</option>
                    <option value="1">Himnario Verde</option>
                    <option value="2">Himnario Poder del Evangelio</option>
                    <option value="3">Himnario Union de Jóvenes</option>
                </select>
            </div>
            <?php
                if($usu_actual <> '') {
            ?>
            <div class="col-12 col-md-2 mt-2 mt-md-0">
                <button type="button" class="btn btn-primary w-100 d-none" data-bs-toggle="modal" data-bs-target="#modal-nueva-cancion" id="btn-nueva-cancion">
                    Nuevo
                </button>
            </div>
            <?php
                } else {
                    echo '<div id="btn-nueva-cancion"></div>';
                }
            ?>
        </div>
    </div>

    <!-- Tabla de lista de canciones -->
    <div class="container">
        <div class="table-responsive mt-2">
            <table class="table table-hover"  id="lista-canciones">
                <!--Lista de canciones-->
            </table>
        </div>
    </div>

    <!-- ventana modal mostrar cancion-->
    <div div class="modal fade" id="modal-cancion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content" id="modal-contenido-cancion">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><!--Titulo de la cancion--></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-mostrar-letra">
                    <!--Letra de cancion -->
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--Ventana modal nueva cancion-->
    <div class="modal fade" id="modal-nueva-cancion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="exampleModalLabel2">Nueva cancion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-cerrar-modal-form"></button>
                </div>
                <div class="modal-body">
                    <form id="form-datos-cancion" class="">
                        <input type="hidden" name="txthimnarioform" id="txthimnarioform">
                        <label for="txtnumerocancion">Nro:</label>
                        <input type="number" name="txtnumerocancion" id="txtnumerocancion" class="form-control valid" required>
                        <label for="txttitulocancion">Titulo:</label>
                        <input type="text" name="txttitulocancion" id="txttitulocancion" class="form-control" required>
                        <label for="txtautorcancion">Autor:</label>
                        <input type="text" name="txtautorcancion" id="txtautorcancion" class="form-control" required>
                        <label for="txtnotacancion">Nota:</label>
                        <input type="text" name="txtnotacancion" id="txtnotacancion" class="form-control" required>
                        <label for="txtletracancion">Letra:</label>
                        <textarea name="txtletracancion" id="txtletracancion" cols="30" rows="10" class="form-control" required></textarea>
                        <label for="txtenlacecancion">Enlace (opcional):</label>
                        <input type="text" name="txtenlacecancion" id="txtenlacecancion" class="form-control">
                    </form>
                    <div class="alert alert-success mt-2 text-center d-none" role="alert" id="alert-form-respuesta"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-guardar-cancion">Guardar</button>
                    <button type="button" class="btn btn-primary d-none" id="btn-modificar-cancion">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <div id="overlay-cargando" class="position-absolute d-flex justify-content-center align-items-center d-none" style="top: 0; bottom: 0; left: 0; right: 0; background-color: rgba(0,0,0,.2);">
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/canciones.js"></script>
</body>
</html>