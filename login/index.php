<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body style="background: background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);">
    <div class="container" id="contenedor-login">
        <div class="contenedor-login">
            <div class="login shadow">
                <div class="logo"></div>
                <h4>ACCESO</h4>
                <form action="verificar.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txtusuario" name="txtusuario" placeholder="Usuario">
                        <label for="txtusuario">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Contraseña">
                        <label for="txtpassword">Contraseña</label>
                    </div>
                    <input type="submit" value="Acceder" class="btn btn-lg btn-primary w-100 mt-3" id="btn-login">
                </form>
                <div class="text-center">
                    <a href="#" class="btn btn-link mt-2">olvide mi contraseña</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="../" class="btn btn-secondary mt-md-1 mt-4">Volver a Inicio</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>