<?php
    include '../includes/sesion.php';
    include '../includes/usuario.php';
    $sesion = new Sesion();
    $usuario = new Usuario();
    if(isset($_SESSION['user-uec'])) {
        $usuario -> setUsuario($sesion -> getSesion());
    $usu_actual = $usuario -> getUsuario();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC | Ofrendas</title>
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
                        <a class="nav-link active" href="./">Ofrendas</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../cancionero/">Cancionero</a>
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
    <!--Menu combos-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <select class="form-select form-select my-1 my-md-3">
                    <option value="1">Domingo Noche</option>
                    <option value="2">E. Dominical</option>
                    <option value="3">Martes</option>
                    <option value="4">Jueves</option>
                    <option value="5">U. Femenil</option>
                    <option value="6">U. de Jovenes</option>
                </select>
            </div>
            <div class="col-12 col-md-4">
                <select class="form-select form-select my-1 my-md-3" id="cmb-mes">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                    <option value="todo">Todos</option>
                </select>
            </div>
        </div>
    </div>
    <!--Tabla de enero-->
    <div class="container" id="tabla-enero">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ofrenda</th>
                        <th scope="col">Diezmo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Recogió</th>
                        <th scope="col">Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>03-01-2021</td>
                        <td>30</td>
                        <td>120</td>
                        <td>Gabriela Cordero</td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>10-01-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>17-01-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>24-01-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>31-01-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Tabla de enero-->
    <div class="container invisible" id="tabla-febrero">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ofrenda</th>
                        <th scope="col">Diezmo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Recogió</th>
                        <th scope="col">Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>07-02-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>14-02-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>21-02-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>28-02-2021</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                        <td><div class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">Editar</div></td>
                        <td><div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-eliminar">Eliminar</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Modal editar-->
    <div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Regitro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="txtusuario-ofrenda">
                        <label for="txtmonto" class="form-label">Ofrenda:</label>
                        <input type="number" name="txtofrenda" id="txtofrenda" class="form-control">
                        <label for="txtdiezmo" class="form-label">Diezmo:</label>
                        <input type="number" name="txtdiezmo" id="txtdiezmo" class="form-control">
                        <label for="txtfecha-ofrenda" class="form-label">Detalle:</label>
                        <textarea name="txtdescripcion" id="txtdescripcion" cols="20" rows="3" class="form-control"></textarea>
                        <label for="txtfecha-ofrenda" class="form-label">Fecha:</label>
                        <input type="date" name="txtfecha-ofrenda" id="txtfecha-ofrenda" class="form-control">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Guardar registro</button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal eliminar-->
    <div class="modal fade" id="modal-eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="txtmensaje">Esta seguro de eliminar el registro?</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>
<?php
    } else {
        header('Location:../login/');
    }
?>