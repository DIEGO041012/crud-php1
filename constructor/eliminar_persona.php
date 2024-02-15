<?php
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from persona where id_persona=$id");

    echo '<div class="alert alert-success" >persona eliminado correctamente</div>';
}else{
    echo '<div class="alert alert-danger "text-center p-3"">Error al eliminar</div>'; 
}
?>