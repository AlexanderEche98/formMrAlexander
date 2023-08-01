<?php

include "modelo/conexion.php";
$dpi = $_GET["dpi"];
$sql = $conexion->query("select * from personas where dpi=$dpi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <form class="col-md-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">MODIFICAR REGISTROS </H3>
        <input type="hidden" name="iden" value="<?= $_GET["dpi"]?>">
        <?php
        include "controlador/modificar.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No. DPI</label>
                    <input type="text" class="form-control" name="dpi" value= "<?= $datos->dpi?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">PRIMER NOMBRE</label>
                    <input type="text" class="form-control" name="nombre1" value= "<?= $datos->primer_nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SEGUNDO NOMBRE</label>
                    <input type="text" class="form-control" name="nombre2" value= "<?= $datos->segundo_nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TERCER NOMBRE</label>
                    <input type="text" class="form-control" name="nombre3" value= "<?= $datos->tercer_nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">PRIMER APELLIDO</label>
                    <input type="text" class="form-control" name="apellido1" value= "<?= $datos->primer_apellido?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">SEGUNDO APELLIDO</label>
                    <input type="text" class="form-control" name="apellido2" value= "<?= $datos->segundo_apellido?>">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">SEXO</label>
                    <select id="sexo" name="sexo" required >
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE NACIMIENTO</label>
                    <input type="date" class="form-control" name="fechanacimiento" value= "<?= $datos->fecha_nacimiento?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">LUGAR DE NACIMIENTO</label>
                    <input type="text" class="form-control" name="lugar"value= "<?= $datos->lugar_nacimiento?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">VECINDAD</label>
                    <input type="text" class="form-control" name="vecindad"value= "<?= $datos->vencindad?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ESTADO CIVIL</label>
                    <input type="text" class="form-control" name="estadocivil"value= "<?= $datos->estado_civil?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">FECHA DE VENCIMIENTO</label>
                    <input type="date" class="form-control" name="fechavencimiento"value= "<?= $datos->fecha_vencimiento?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NACIONALIDAD</label>
                    <input type="text" class="form-control" name="nacionalidad"value= "<?= $datos->nacionalidad?>">

                <?php }

        ?>


                <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">MODIFICAR</button>
    </form>

</body>

</html>