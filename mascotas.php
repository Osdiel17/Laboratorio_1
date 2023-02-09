<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/258602d944.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img class="bi me-2" src="img/logo.png" alt="" width="40px" height="40px">
                </img>
                <span class="fs-4">Veterinaria Rodríguez</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a id="btn1" href="inicio.php" class="btn btn-outline-primary" aria-current="page">Inicio</a></li>
                <li class="nav-item"><a id="btn2" href="#" class="btn btn-outline-primary active">Mascota</a></li>
                <li class="nav-item"><a id="btn3" href="dueño.php" class="btn btn-outline-primary">Dueño</a></li>
                <li class="nav-item"><a id="btn4" href="medicamentos.php" class="btn btn-outline-primary">Medicamentos</a></li>
                <li class="nav-item"><a id="btn5" href="login.php" class="btn btn-outline-danger">Salir <i class="bi bi-box-arrow-left"></i></a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <form action="Registro_mascota.php" class="row g-3" method="post">
            <h3>Registro de Mascota</h3>
            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-paw"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nomMasc" id="nomMasc">
                        <label for="floatingInputGroup1">Nombre de la mascota:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-sharp fa-solid fa-mars-and-venus"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="raza" id="raza">
                        <label for="floatingInputGroup1">Raza:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="propt" id="propt">
                        <label for="floatingInputGroup1">Propietario:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="telef" id="telef">
                        <label for="floatingInputGroup1">Telefono:</label>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="direc" id="direc">
                        <label for="floatingInputGroup1">Direccion:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="sexMas" id="sexMas">
                        <label for="floatingInputGroup1">Sexo de la Mascota:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nacMas" id="nacMas">
                        <label for="floatingInputGroup1">Nacimiento de la Mascota:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-weight-scale"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="peso" id="peso">
                        <label for="floatingInputGroup1">Peso:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-droplet"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="color" id="color">
                        <label for="floatingInputGroup1">Color:</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="Registro_mascota.php" id="btn6" class="btn btn-outline-warning" target="_blank">Registros</a>
                <button type="submit" class="btn btn-outline-success">Guardar Info</button>
            </div>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>