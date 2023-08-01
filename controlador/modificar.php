<?php

if(!empty($_POST["btnmodificar"])){
    
    if(!empty($_POST["dpi"])and!empty($_POST["nombre1"])and!empty($_POST["apellido1"]) and!empty($_POST["fechanacimiento"])and!empty($_POST["lugar"])
    and!empty($_POST["vecindad"])and!empty($_POST["estadocivil"])and!empty($_POST["fechavencimiento"])and!empty($_POST["nacionalidad"])){


        $iden=$_POST["iden"];
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

        $sql=$conexion->query("update personas set dpi='$dpi',primer_nombre='$nombre1',segundo_nombre='$nombre2',tercer_nombre='$nombre3',
        primer_apellido='$apellido1',segundo_apellido='$apellido2',sexo='$sexo',fecha_nacimiento='$fechanacimiento',lugar_nacimiento='$lugar',vencindad='$vecindad',estado_civil='$estadocivil',
        fecha_vencimiento='$fechavencimiento',nacionalidad='$nacionalidad' where dpi='$iden'");

        if($sql==1){
             header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'> ERROR NO SE PUDO MODIFICAR </div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'> campos sin llenar </div>";
    }
}
?>