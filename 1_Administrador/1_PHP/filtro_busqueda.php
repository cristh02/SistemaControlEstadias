

<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="InformacionAlumno";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
////////////////// VARIABLES DE CONSULTA////////////////////////////////////

$where="";


////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{
@$nombre=$_POST['xnombre'];
@$carrera=$_POST['xcarrera'];
@$modalidad=$_POST['xmodalidad'];
@$extencion=$_POST['xextencion'];

//Falta Agregar ModaLIDAD
	

	if (empty($_POST['xcarrera']))
	{
		$where="where Nombre like '".$nombre."%'";
	}


	else if (empty($_POST['xnombre']))
	{
		$where="where Carrera='".$carrera."'";
	}

	else if (empty($_POST['xmodalidad']))
	{
		$where="where Modalidad='".$modalidad."'";
	}

	else
	{
		$where="where Nombre like '".$nombre."%' and Carrera='".$carrera."' ";
	}
}
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$alumnos="SELECT * FROM usuarios $where";
$alumnosCarreras = "SELECT * DISTINCT Carrera FROM usuarios $where ";
$resAlumnos=$conexion->query($alumnos);
$resCarreras=$conexion->query($alumnos);
$resModalidad=$conexion->query($alumnos);
$resExtencion=$conexion->query($alumnos);
if(mysqli_num_rows($resAlumnos)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}
?>
<html lang="es">

	<head>
		<title>Filtro de Búsqueda PHP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Busqueda Avanzada</h2>
			</div>
		</header>


		<section>
			<form method="post">
				<input type="text" placeholder="Nombre..." name="xnombre"/>
				<select name="xcarrera">
					<option value="">Carrera </option>
					<?php
						while ($registroCarreras = $resCarreras->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$registroCarreras['Carrera'].'">'.$registroCarreras['Carrera'].'</option>';
						}
					?>
				</select>

				<select name="xmodalidad">
					<option value="">Modalidad </option>
					<?php
						while ($registroModalidad = $resModalidad->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$registroModalidad['Modalidad'].'">'.$registroModalidad['Modalidad'].'</option>';
						}
					?>
				</select>


				<select name="xextencion">
					<option value="">Extencion </option>
					<?php
						while ($registroExtencion = $resExtencion->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$registroExtencion['Extencion'].'">'.$registroExtencion['Extencion'].'</option>';
						}
					?>
				</select>

				
				<button name="buscar" type="submit">Buscar</button>
				<a href="TablaGeneral.php" class="btn btn__nuevo">Regresar</a>
			</form>
			<table class="table">
				<tr>
					
					<th>Nombre</th>
					<th>Carrera</th>
					<th>Modalidad</th>
					<th>Extencion</th>
					
				</tr>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{

					echo'<tr>
						 
						 <td>'.$registroAlumnos['Nombre'].'</td>
						 <td>'.$registroAlumnos['Carrera'].'</td>
						 <td>'.$registroAlumnos['Modalidad'].'</td>
						 <td>'.$registroAlumnos['Extencion'].'</td>
						 </tr>';
				}
				?>
			</table>

			<?
				echo $mensaje;
			?>
		</section>
	</body>
</html>


