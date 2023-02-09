<?php

$fecha = $_POST['fecha'];
$nombrePaciente = $_POST['nomPaci'];
$nombreMedicamento = $_POST['nomMedi'];
$cantidad_medicamento = $_POST['canMedi'];
$dias_tratamiento = $_POST['diaTrmto'];
$descripcion = $_POST['descr'];
$nombre_propietario = $_POST['nomPro'];
$total = $_POST['totPag'];

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
                <li class="nav-item"><a id="btn2" href="medicamentos.php" class="btn btn-outline-primary active">Medicamentos</a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre del Paciente</th>
                    <th scope="col">Nombre del Medicamento</th>
                    <th scope="col">Cantidad de Medicamentos</th>
                    <th scope="col">Dias del Tratamiento</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Nombre Propietario</th>
                    <th scope="col">Total a Pagar</th>
                </tr>
            </thead>
            <tbody>
                <td><?php echo $fecha ?></td>
                <td><?php echo $nombrePaciente ?></td>
                <td><?php echo $nombreMedicamento ?></td>
                <td><?php echo $cantidad_medicamento ?></td>
                <td><?php echo $dias_tratamiento ?></td>
                <td><?php echo $descripcion ?></td>
                <td><?php echo $nombre_propietario ?></td>
                <td><?php echo $total ?></td>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>