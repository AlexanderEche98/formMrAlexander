<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/31cf2c8649.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>

        funcion eliminar(){
            var respuesta=confirm("SE ELIMINARA REGISTRO ESTAS SEGURO?");
            return respuesta 
        }
        </script>
        
    <h1 class="text-center p-3">FORMULARIO</H1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar.php";
    
    ?>
    <div class="container-fluid row">
        <div class="row">
            <form class="col-md-4 p-3 " method="POST">
                <h3 class="text-center text-secondary"> REGISTROS </H3>
                <?php
                 
                 include "controlador/registros.php"


                ?>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No. DPI</label>
                        <input type="text" class="form-control" name="dpi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">PRIMER NOMBRE</label>
                        <input type="text" class="form-control" name="nombre1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">SEGUNDO NOMBRE</label>
                        <input type="text" class="form-control" name="nombre2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TERCER NOMBRE</label>
                        <input type="text" class="form-control" name="nombre3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">PRIMER APELLIDO</label>
                        <input type="text" class="form-control" name="apellido1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">SEGUNDO APELLIDO</label>
                        <input type="text" class="form-control" name="apellido2">
                    </div>
                    <div class="mb-3">
                        <label for="sexo" class="form-label">SEXO</label>
                        <select id="sexo" name="sexo" required>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">FECHA DE NACIMIENTO</label>
                        <input type="date" class="form-control" name="fechanacimiento">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">LUGAR DE NACIMIENTO</label>
                        <input type="text" class="form-control" name="lugar">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">VECINDAD</label>
                        <input type="text" class="form-control" name="vecindad">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ESTADO CIVIL</label>
                        <input type="text" class="form-control" name="estadocivil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">FECHA DE VENCIMIENTO</label>
                        <input type="date" class="form-control" name="fechavencimiento">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NACIONALIDAD</label>
                        <input type="text" class="form-control" name="nacionalidad">

                        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">REGISTRAR</button>
            </form>

            <div class="col-md-8 p-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> DPI</th>
                            <th scope="col">Primer Nombre</th>
                            <th scope="col">Segundo Nombre</th>
                            <th scope="col">Tercer Nombre</th>
                            <th scope="col">Primer Apellido</th>
                            <th scope="col">Segundo Apellido</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Lugar de Nacimiento</th>
                            <th scope="col">Vecindad</th>
                            <th scope="col">Estado Civil</th>
                            <th scope="col">Fecha de Vencimiento</th>
                            <th scope="col">Nacionalidad</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query("select * from personas");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->dpi ?></td>
                                <td><?= $datos->primer_nombre ?></td>
                                <td><?= $datos->segundo_nombre ?></td>
                                <td><?= $datos->tercer_nombre ?></td>
                                <td><?= $datos->primer_apellido ?></td>
                                <td><?= $datos->segundo_apellido ?></td>
                                <td><?= $datos->sexo ?></td>
                                <td><?= $datos->fecha_nacimiento ?></td>
                                <td><?= $datos->lugar_nacimiento ?></td>
                                <td><?= $datos->vencindad ?></td>
                                <td><?= $datos->estado_civil ?></td>
                                <<td><?= $datos->fecha_vencimiento ?></td>
                                <td><?= $datos->nacionalidad ?></td>
                                <td>
                                        <a href="modificar_registros.php?dpi=<?=$datos->dpi?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="index.php?dpi=<?=$datos->dpi?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                                    </td>
                            </tr>

                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>