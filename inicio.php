<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['pass'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
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
                <li class="nav-item"><a id="btn1" href="#" class="btn btn-outline-primary active" aria-current="page">Inicio</a></li>
                <li class="nav-item"><a id="btn2" href="mascotas.php" class="btn btn-outline-primary">Mascota</a></li>
                <li class="nav-item"><a id="btn3" href="dueño.php" class="btn btn-outline-primary">Dueño</a></li>
                <li class="nav-item"><a id="btn4" href="medicamentos.php" class="btn btn-outline-primary">Medicamentos</a></li>
                <li class="nav-item"><a id="btn5" href="login.php" class="btn btn-outline-danger">Salir <i class="bi bi-box-arrow-left"></i></a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <td>
                        <div class="card" style="width: 18rem; margin:40px; justify-content: center;">
                            <img src="img/Husky.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text"><b>Husky Siberiano.</b> <br>
                                    Conoce la historia de esta increible raza de perro.</p>
                                <a href="https://es.wikipedia.org/wiki/Husky_siberiano" class="btn btn-primary" target="_blank">Go somewhere</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin:40px">
                            <img src="img/Rottweilerr.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text"><b>Rottweiler.</b> <br>
                                    Conoce la historia de esta increible raza de perro.</p>
                                <a href="https://es.wikipedia.org/wiki/Rottweiler" class="btn btn-primary" target="_blank">Go somewhere</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card" style="width: 18rem; margin:60px">
                            <img src="img/american-pitbull-terrier5.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text"><b>Pitbull terrier americano.</b> <br>
                                    Conoce la historia de esta increible raza de perro.</p>
                                <a href="https://es.wikipedia.org/wiki/Pit_bull_terrier_americano" class="btn btn-primary" target="_blank">Go somewhere</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>