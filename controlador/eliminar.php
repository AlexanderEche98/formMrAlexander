<?php
if(!empty($_GET["dpi"])){
    $dpi=$_GET["dpi"];

    $sql=$conexion->query("delete from personas where dpi='$dpi'");
    if($sql==1){
        echo '<div class="alert alert-success">ELIMINADO </div>';
   }else{
       echo '<div class="alert alert-danger"> ERROR NO SE PUDO ELIMINAR</div>';
   }
}
?>