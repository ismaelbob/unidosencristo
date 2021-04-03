<?php
    include 'includes/sesion.php';
    include 'includes/usuario.php';
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
    <title>UEC | Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logo_ico.ico">
</head>
<body style="background-color:#D7DBDD;">
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
                        <a class="nav-link active" href="./">Inicio</a>
                    </li>
                    <?php
                        if($usu_actual <> '') {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="ofrendas/">Ofrendas</a>
                    </li>
                    <?php
                        }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="cancionero/">Cancionero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actividades/">Noticias</a>
                    </li>
                </ul>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex align-items-center">
                            <?php
                                if($usu_actual == '') {
                            ?>
                            <a class="nav-link" href="login/">
                                <img src="img/user.png" alt="User" class="rounded-circle" width="25px">
                                Iniciar sesion
                            </a>
                            <?php
                                } else {
                                    echo '<img src="img/user.png" alt="User" class="rounded-circle" width="25px">';
                                    echo '<a class="nav-link" href="includes/logout.php">Salir</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Carrusel-->
    <div class="container mt-2">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/foto1_2008.jpg" class="d-block w-100" alt="Imagen 1">
                    <div class="carousel-caption d-none d-md-block rounded shadow-sm" style="background: rgba(52, 73, 94, 0.5)">
                        <h5>Aniversario Femenil</h5>
                        <p>2008</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/foto4_2020.jpg" class="d-block w-100" alt="imagen 2">
                    <div class="carousel-caption d-none d-md-block rounded shadow-sm" style="background: rgba(52, 73, 94, 0.5)">
                        <h5>Aniversario Union de Jovenes</h5>
                        <p>Heroes de la Fe 2020</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/foto5_2018.jpg" class="d-block w-100" alt="imagen 3">
                    <div class="carousel-caption d-none d-md-block rounded shadow-sm" style="background: rgba(52, 73, 94, 0.5)">
                        <h5>Iglesia</h5>
                        <p>2018 culto de noche</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/foto3_2019.jpg" class="d-block w-100" alt="imagen 4">
                    <div class="carousel-caption d-none d-md-block rounded shadow-sm" style="background: rgba(52, 73, 94, 0.5)">
                        <h5>Aniversario Union de jovenes</h5>
                        <p>Heroes de la Fe 2019</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <!--Bienvedido-->
    <div class="container mt-2">
        <div class="bg-light shadow">
            <div class="text-primary fs-2 text-center" style="font-family: 'Lobster Two', cursive;">Bienvenido!</div>
        </div>
    </div>

    <!--Dias de reunion-->
    <div class="container my-2">
        <div class="bg-light p-3">
            <div class="text-primary fs-3 text-center mb-3">NUESTRAS REUNIONES</div>
            <div class="row">
                <div class="col-12 col-md-3 mb-md-0 mb-2">
                    <div class="card text-white h-100" style="background-color: rgb(40, 116, 166);">
                        <div class="card-header text-center">DOMINGOS</div>
                        <div class="card-body">
                            <h5 class="card-title">10:00</h5>
                            <p class="card-text">Escuela dominical.</p>
                            <h5 class="card-title">19:00</h5>
                            <p class="card-text">Culto Central.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-md-0 mb-2">
                    <div class="card text-white h-100" style="background-color: rgb(40, 116, 166);">
                        <div class="card-header text-center">MARTES</div>
                        <div class="card-body">
                            <h5 class="card-title">19:00</h5>
                            <p class="card-text">Noche de oración.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-md-0 mb-2">
                    <div class="card text-white h-100" style="background-color: rgb(40, 116, 166);">
                        <div class="card-header text-center">JUEVES</div>
                        <div class="card-body">
                            <h5 class="card-title">14:00</h5>
                            <p class="card-text">Culto de Union Femenil "Lea".</p>
                            <h5 class="card-title">20:00</h5>
                            <p class="card-text">Noche de estudio bíblico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-md-0 mb-2">
                    <div class="card text-white h-100" style="background-color: rgb(40, 116, 166);">
                        <div class="card-header text-center">SABADO</div>
                        <div class="card-body">
                            <h5 class="card-title">19:00</h5>
                            <p class="card-text">Culto de Union de Jóvenes "Heroes de la Fe"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Ubicacion-->
    <div class="container">
        <div class="bg-light">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d944.720444256612!2d-66.10751173010414!3d-17.447048262684724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sbo!4v1611193718733!5m2!1ses!2sbo" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

    <!--Pie de pagina-->
    <div class="container">
        <div class="text-light text-center p-3 mt-2" style="background-color: rgb(40, 55, 71);">
            <div clas="fst-italic">
                “Y todo lo que hagáis, hacedlo de corazón, como para el Señor y no para los hombres.” <br><span class="fw-bold">Colocenses 3:23</span>
            </div>
            <div class="my-4">
                <p><a href="https://www.facebook.com/H%C3%A9roes-de-la-FE-563077153787010" target="_blanck"><img src="img/fbk.png" alt="fb" width="25px" class="rounded"></a>&nbsp Héroes de la Fé - UJ</p>
            </div>
            <div class="fs-5 mt-4">Cochabamba - Bolivia</div>
            <div>2021</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>