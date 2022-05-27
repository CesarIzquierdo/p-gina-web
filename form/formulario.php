<?php 
	include_once "../model/conexion.php";
	$sentencia = $bd -> query("SELECT * FROM productos");
	$persona = $sentencia->fetchAll(PDO::FETCH_OBJ); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
	label
	{
		font-size: 14px;
		font-weight: bold;
		font-family: arial;
	}

	input [type = text], input[type=password]
	{
		width: 100%;
		padding: 8px 20px;
		border: 2px solid #ccc;
		box-sizing: border-box;
	}

	img
	{
		width: 100px;
		height: 100px;
	}

	label
	{
		font-size: 14px;
		font-weight: bold;
		font-family: arial;
	}

	input [type=submit]
	{
		background-color: #1C94C8;
		color: white;
		padding: 8px 10px;
		margin: 8px 0px;
		border: solid;
		cursor: pointer;
		width: 40%;
	}
</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="css/cabecera.css">	 
	<title> Agregar dulces</title>
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	<div>
		
		<h4 class="p-3 mb-2 bg-primary text-white"> Menú de opciones  <a href="/pp/home.php"> <img src="../IMG/menu.png"></a></h4>
	</div>	
</table>
	
	<form name="formulario1" id="f1">
		<h1 class="p-3 mb-2 bg-info text-white" align="center">Agregar dulces</h1>		
		<table  width="1300" bgcolor=DDDECB align=center>
			<tr width = "3300" bgcolor=FCCCDA align=center >
				
			</tr>
			<tr>
				<td> <p class="p-3 mb-2 bg-warning text-dark">Nombre del dulce:</p> <img src="../IMG/chocolate64.png"></td>
				<td>
					<input type="text" name="nombre" maxlength="15" placeholder="Ingrese su nombre(s)">
				</td>		
			</tr>

			<tr>
				<td> <p class="p-3 mb-2 bg-warning text-dark">Marca :</p> </td>
				<td>
					<input type="text" name="ap_pat" maxlength="25" placeholder="Ingrese la marca">
				</td>
			</tr>

			<tr>
				<td> Ingrese la cantidad: </td>
				<td>
					<input type="text" name="ap_mat" maxlength="25" placeholder="Ingrese la cantidad">
				</td>
			</tr>

			<tr>
				<td> codigo: </td>
				<td>
					<input type="text" name="ap_mat" maxlength="25" placeholder="ingrese el codigo">
				</td>
			</tr>

			<tr>
				<td>
					<input type="hidden" name="oculto" value="acceso">
					<td>
						<input type="reset" name="borrarformulario1" value="borrar_datos">
					</td>
					<td>
						<input type="submit" name="enviarformulario1" value="enviarinformacion">
					</td>

				</td>
			</tr>
				</table>
			
				<?php 
					foreach ($productos as $dato ) 
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
		</table>
	</form>
	<br>
	<br>

	<a class="p-3 mb-2 bg-dark text-white"><img  src="../IMG/face.png"> tienda la chida</a>
</body>
</html>