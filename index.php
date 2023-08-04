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
        function eliminar() {
            var respuesta = confirm("SE ELIMINARÁ EL REGISTRO. ¿ESTÁS SEGURO?");
            return respuesta;
        }
    </script>

    <h1 class="text-center p-3">FORMULARIO</h1>

    <?php
    // se agregan el llamado de los demas archivos php 
    include "modelo/conexion.php";
    include "controlador/eliminar.php";
    include "controlador/buscar.php"; 
    ?>

    <div class="container-fluid row">
        <div class="row">
            <form class="col-md-4 p-3 " method="POST">
                <h3 class="text-center text-secondary"> REGISTROS </H3>
                <?php
                include "controlador/registros.php";
                ?>
                <!-- Campos del formulario de los  registros -->
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

            <!-- Formulario para buscar -->
            <form class="col-md-4 p-3" method="GET">
                <h3 class="text-center text-secondary">BÚSQUEDA</h3>
                <div class="mb-3">
            <!-- Selección del tipo de busqueda  -->
                    <label for="busqueda" class="form-label">Buscar por:</label>
                    <select class="form-select" name="tipo_busqueda">
                        <option value="dpi">DPI</option>
                        <option value="nombre">Primer Nombre</option>
                        <option value="fecha">Fecha de Nacimiento</option>
                    </select>
            <!-- Entrada de búsqueda -->
                    <input type="text" class="form-control mt-3" name="busqueda" id="busqueda">
                </div>
            <!-- Botón iniciar la búsqueda -->   
                <button type="submit" class="btn btn-primary" name="btnbuscar">BUSCAR</button>
            </form>

            <!-- Tabla para mostrar los registros de la busqueda-->
            <div class="col-md-8 p-4">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- Encabezados de la tabla -->
                            <th scope="col">DPI</th>
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
                        // Comprobación si hay resultados de búsqueda
                        if (isset($result)) {
                            while ($datos = $result->fetch_object()) {
                                // Muestra los resultados de búsqueda
                                ?>
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
                                    <td><?= $datos->fecha_vencimiento ?></td>
                                    <td><?= $datos->nacionalidad ?></td>
                                    <td>
                                        <a href="modificar_registros.php?dpi=<?= $datos->dpi ?>"
                                            class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="index.php?dpi=<?= $datos->dpi ?>"
                                            class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            // Mostrar todos los registros si no hay resultados de búsqueda
                            $sql = $conexion->query("SELECT * FROM personas");
                            while ($datos = $sql->fetch_object()) {
                                // Muestra todos los registros
                                ?>
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
                                    <td><?= $datos->fecha_vencimiento ?></td>
                                    <td><?= $datos->nacionalidad ?></td>
                                    <td>
                                         <!-- Enlaces para editar y eliminar registros -->
                                        <a href="modificar_registros.php?dpi=<?= $datos->dpi ?>"
                                            class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="index.php?dpi=<?= $datos->dpi ?>"
                                            class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
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