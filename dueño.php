<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dueño</title>
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
                <li class="nav-item"><a id="btn2" href="mascotas.php" class="btn btn-outline-primary">Mascota</a></li>
                <li class="nav-item"><a id="btn3" href="#" class="btn btn-outline-primary active">Dueño</a></li>
                <li class="nav-item"><a id="btn4" href="medicamentos.php" class="btn btn-outline-primary">Medicamentos</a></li>
                <li class="nav-item"><a id="btn5" href="login.php" class="btn btn-outline-danger">Salir <i class="bi bi-box-arrow-left"></i></a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <form action="Registro_dueño.php" class="row g-3" method="post">
            <h3>Registro del Dueño</h3>
            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nom" id="nom">
                        <label for="floatingInputGroup1">Nombre:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="ape" id="ape">
                        <label for="floatingInputGroup1">Apellido:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-arrow-up-1-9"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="edad" id="edad">
                        <label for="floatingInputGroup1">Edad:</label>
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

            <div class="col-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="direc" id="direc">
                        <label for="floatingInputGroup1">Direccion:</label>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="dui" id="dui">
                        <label for="floatingInputGroup1">Dui:</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="Registro_dueño.php" id="btn6" class="btn btn-outline-warning" target="_blank">Registros</a>
                <button type="submit" class="btn btn-outline-success">Guardar Info</button>
            </div>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>