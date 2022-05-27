<?php include '../template/header.php'?>

<?php 
if(!isset($_GET['codigo'])){
	header('location:index.php=mensaje=error');
	exit();
}
   include_once'../model/conexion.php';
   $codigo=$GET['codigo'];
   $sentencia=$bd-> prepare("SELECT*FROM persona WHERE codigo =?;");
   $SENTENCIA->excute([$codigo]);
   $persona=$sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona)];
?>


<div class="col-md-4">
<div class="card">
<div class="card-header">
ediatr datos:</div>
<form class="p-4" method="POST" action="editarProceso.php">
	<div class="mb-3">
	<label class="form-label">
	nombre:</label>
	<input class="form-control" type="text" name="txtNombre" autofocus requiered  value="<?php echo $persona->nombre;?>">
	</div>
    <div class="mb-3">

	<label class="form-label>edad:">
	Edad:</label>
	<input class="form-control" type="number" name="txtEdad" autofocus requiered  value="<?php echo $persona->Edad;?>"> 
    </div>
	<div class="mb-3">
	<label class="form-label>edad:">
	signo:</label>
	<input class="form-control" type="text" name="txtSigno" autofocus requiered  value="<?php echo $persona->signo;?>">
	 </div>
	<div class="d-grid">
	<input type="hidden " name="codigo" value="<?php echo $persona->codigo;?>">
	<input type="submit" class="btn btn-primary" value="ediatr">
	</div>
</form>
</div>
</div>


<?php include'../template/footer.php'?>