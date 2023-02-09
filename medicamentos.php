<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medicamentos</title>
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
                <li class="nav-item"><a id="btn3" href="dueño.php" class="btn btn-outline-primary">Dueño</a></li>
                <li class="nav-item"><a id="btn4" href="#" class="btn btn-outline-primary active">Medicamentos</a></li>
                <li class="nav-item"><a id="btn5" href="login.php" class="btn btn-outline-danger">Salir <i class="bi bi-box-arrow-left"></i></a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <form action="Registro_medicamentos.php" class="row g-3" method="post">
            <h3>Registro de Medicamentos</h3>
            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="fecha" id="fecha">
                        <label for="floatingInputGroup1">Fecha:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-paw"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nomPaci" id="nomPaci">
                        <label for="floatingInputGroup1">Nombre del Paciente:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-capsules"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nomMedi" id="nomMedi">
                        <label for="floatingInputGroup1">Nombre del Medicamento:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-pills"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="canMedi" id="canMedi">
                        <label for="floatingInputGroup1">Cantidad de Medicamentos:</label>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-calendar-day-fill"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="diaTrmto" id="diaTrmto">
                        <label for="floatingInputGroup1">Dias de Tratamiento:</label>
                    </div>
                </div>
            </div>

            <div class="col-7">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-file-earmark-diff-fill"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="descr" id="descr">
                        <label for="floatingInputGroup1">Descripcion:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nomPro" id="nomPro">
                        <label for="floatingInputGroup1">Nombre Propietario:</label>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-money-check-dollar"></i></span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="totPag" id="totPag">
                        <label for="floatingInputGroup1">Total a Pagar:</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="Registro_medicamentos.php" id="btn6" class="btn btn-outline-warning" target="_blank">Registros</a>
                <button type="submit" class="btn btn-outline-success">Guardar Info</button>
            </div>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>