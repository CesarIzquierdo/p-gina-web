<?php
      if(!isset($_POST['codigo'])){
      header('location:index.php?mensaje=error');
exit();
}

include_once'../model/conexion.php';
$nombre=$_POST["txtNombre"];
$edad=$_POST["txtmarca"];
$cantidad=$_POST["txtcanitdad"];
$codigo=$_POST["txtcodigo"];


$sentencia=$bd-> prepare("UPDATE productos SET Nombre=?, marca=?,cantidad=? where codigo=?;");
$resultado=$sentencia-> excute([$Nombre,$marca,$canitdad, $codigo]);

if($resultado===TRUE){
	header('location:index.php?mensaje=editado');
}else{
	header('location:index.php?mensaje=error');
	exit();
}
?>