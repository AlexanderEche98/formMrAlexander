<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["dpi"])and!empty($_POST["nombre1"])and!empty($_POST["apellido1"]) and!empty($_POST["sexo"])and!empty($_POST["fechanacimiento"])and!empty($_POST["lugar"])
    and!empty($_POST["vecindad"])and!empty($_POST["estadocivil"])and!empty($_POST["fechavencimiento"])and!empty($_POST["nacionalidad"])){

       $dpi=$_POST["dpi"];
       $nombre1=$_POST["nombre1"];
       $nombre2=$_POST["nombre2"];
       $nombre3=$_POST["nombre3"];
       $apellido1=$_POST["apellido1"];
       $apellido2=$_POST["apellido2"];
       $sexo=$_POST["sexo"];
       $fechanacimiento=$_POST["fechanacimiento"];
       $lugar=$_POST["lugar"];
       $vecindad=$_POST["vecindad"];
       $estadocivil=$_POST["estadocivil"];
       $fechavencimiento=$_POST["fechavencimiento"];
       $nacionalidad=$_POST["nacionalidad"];

      $sql=$conexion->query("insert into personas(dpi,primer_nombre,segundo_nombre,tercer_nombre,primer_apellido,segundo_apellido,sexo,fecha_nacimiento,lugar_nacimiento,vencindad,estado_civil,fecha_vencimiento,nacionalidad)
      values('$dpi','$nombre1','$nombre2','$nombre3','$apellido1','$apellido2','$sexo','$fechanacimiento','$lugar','$vecindad','$estadocivil','$fechavencimiento','$nacionalidad')");
      if ($sql==1){

        echo '<div class="alert alert-success"> Registro Completado Exitoso </div>';
      }else{
        echo '<div class="alert alert-danger"> NO se completo </div>';
      }
    }else{
        echo '<div class="alert alert-warning"> campos sin llenar </div>';
    }
} 
?>