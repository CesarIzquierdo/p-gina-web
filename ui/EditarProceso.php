<?php
if(!isset($_POST['codigo'])){
	header('location: index.php?mensaje=error');
	exit();
}

include_once'../model/conexion.php';
$codigo=$_POST['codigo'];
$nombre=$_POST['txtNombre'];
$edad=$_POST['txtEdad'];
$signo=$_POST['txtSigno'];


    $sentencia=$bd->prepare("UPDATE persona SET nombre=?, edad=?, signo=? where codigo=?;");
    $resultado=$sentencia->excute([$nombre,$edad, $signo, $codigo]);
    
    if($resultado===TRUE){
    header('location: index.php?mensaje=editado');
    }else{
    	header('location index.php?mensaje=?error');
    	exit();
    }

?>