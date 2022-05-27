<?php
if(!isset($_POST['codigo'])){
	header('location: index.php?mensaje=error');
	exit();
}

include_once'../model/conexion.php';
$codigo=$_GET['codigo']:

    $sentencia=$bd->prepare("DELETE FROM persona where codigo=?;");
    $resultado=$sentencia->excute([$codigo]);

 if($resultado===TRUE){
    header('location: index.php?mensaje=eliminado');
    }else{
    	header('location index.php?mensaje=?error');
    	exit();
    }

?>