<?php

$nombreMas = $_POST['nomMasc'];
$raza = $_POST['raza'];
$nombrePro = $_POST['propt'];
$telefono = $_POST['telef'];
$direccion = $_POST['direc'];
$sexo = $_POST['sexMas'];
$nacimiento = $_POST['nacMas'];
$peso = $_POST['peso'];
$color = $_POST['color'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registros</title>
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
                <li class="nav-item"><a id="btn2" href="mascotas.php" class="btn btn-outline-primary active">Mascota</a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre de la mascota</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Propietario</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nacimiento</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Color</th>
                </tr>
            </thead>
            <tbody>
                <td><?php echo $nombreMas ?></td>
                <td><?php echo $raza ?></td>
                <td><?php echo $nombrePro ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $sexo ?></td>
                <td><?php echo $nacimiento ?></td>
                <td><?php echo $peso ?></td>
                <td><?php echo $color ?></td>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>