<?php
include "modelo/conexion.php";

if (isset($_GET["btnbuscar"])) {
    $tipo_busqueda = isset($_GET["tipo_busqueda"]) ? $_GET["tipo_busqueda"] : "";
    $busqueda = isset($_GET["busqueda"]) ? $_GET["busqueda"] : "";

    if ($tipo_busqueda == "dpi") {
        $sql = $conexion->prepare("SELECT * FROM personas WHERE dpi LIKE ?");
        $busqueda = "%$busqueda%";
        $sql->bind_param("s", $busqueda);
    } elseif ($tipo_busqueda == "nombre") {
        $sql = $conexion->prepare("SELECT * FROM personas WHERE primer_nombre LIKE ? OR segundo_nombre LIKE ? OR tercer_nombre LIKE ?");
        $busqueda = "%$busqueda%";
        $sql->bind_param("sss", $busqueda, $busqueda, $busqueda);
    } elseif ($tipo_busqueda == "fecha") {
        $sql = $conexion->prepare("SELECT * FROM personas WHERE fecha_nacimiento = ?");
        $sql->bind_param("s", $busqueda);
    }

    if (isset($sql)) {
        $sql->execute();
        $result = $sql->get_result();
    }
}
?>