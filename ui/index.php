<?php 
	include '../template/header.php'
?>
<?php 
	include_once "../model/conexion.php";
	$sentencia = $bd -> query("SELECT * FROM persona");
	$persona = $sentencia->fetchAll(PDO::FETCH_OBJ); 
?>

<!-- Listado del contenido -->
<div class="card">
	<div class="card=header">
		Lista de personas
	</div>
	<div class="p-4">
		<table class="table align-middle">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Edad</th>
					<th scope="col">Signo</th>
					<th scope="col" colspan="2">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($persona as $dato ) 
					{
				?> 
						<tr>
							<td scope="ro"> 
								<?php 
									echo $dato->codigo; 
								?>		
							</td>

							<td scope="ro"> 
								<?php 
									echo $dato->nombre; 
								?>		
							</td>

							<td scope="ro"> 
								<?php 
									echo $dato->edad; 
								?>		
							</td>

							<td scope="ro"> 
								<?php 
									echo $dato->signo; 
								?>		
							</td>

							<td>
								<a class="text-success" href="editar.php?codigo=<?php 
									echo $dato->codigo; 
								?>">
									<i class="bi bi-pencil-square"></i>
								</a>
							</td>			
							
							<td>
								<a onclick="return confirm('¿Estas seguro de eliminar?'); class="text-danger" href="eliminar.php?codigo= <?php 
									echo $dato->codigo; 
								?>"> 
									<i class="bi bi-trash"></i>
								</a>
							</td>
						</tr>

						<?php 
					}
						?>
			</tbody>
		</table>
	</div>
</div>
<?php include '../template/footer.php' ?>