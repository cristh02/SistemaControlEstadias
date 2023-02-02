<?php
	include_once 'conexion.php';
       error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if(isset($_GET['idSesion'])){
		$idSesion=(int) $_GET['idSesion'];

		$buscar_id=$con->prepare('SELECT Usuarios.Nombre, Usuarios.PAterno, Usuarios.MAterno, Usuarios.Matricula, InicioSesion.idSesion, InicioSesion.NombreSesion, InicioSesion.correo, InicioSesion.contrasena, InicioSesion.id_Usuarios, InicioSesion.bloqueo FROM InicioSesion, Usuarios WHERE Usuarios.id_Alumno_Expediente=InicioSesion.id_Usuarios, correo LIKE :campo OR correo OR bloqueo LIKE :campo;');
		$buscar_id->execute(array(
			':idSesion'=>$idSesion
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: ../0_Menu/GestionSesion.php');
	}

	if(isset($_POST['guardar'])){
	    $Nombre=$_POST['Nombre'];
	    $PAterno=$_POST['PAterno'];
	    $MAterno=$_POST['MAterno'];
	    $Matricula=$_POST['Matricula'];
	    $idSesion=$_POST['idSesion'];
	    $NombreSesion=$_POST['NombreSesion'];
        $correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];
        $idSesion=(int) $_GET['idSesion'];

		if(!empty($correo) && !empty($contrasena) && !empty($idSesion)){
		//	if(!filter_var($EXPEDIENTE,FILTER_VALIDATE_EXPEDIENTE)){
//		echo "<script> alert('Llene el campo expediente ');</script>";
			//}else{
                       
				$consulta_update=$con->prepare(' UPDATE InicioSesion SET
				NombreSesion=:NombreSesion,
				correo=:correo,
				contrasena=:contrasena
				WHERE idSesion=:idSesion;'
				);
				$consulta_update->execute(array(
				':NombreSesion' =>$NombreSesion,
				':correo' =>$correo,
				':contrasena' =>$contrasena,
                ':idSesion' =>$idSesion
				));
				header('Location: ../0_Menu/GestionUsuarios.php');
			//}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
	<link rel="stylesheet" href="../3_CSS/estilos.css">
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
	<form action="" method="post">
	    <div class="form-group">
	        <a>Nombre(s)</a><br>
            <input type="text" name="Nombre" placeholder="Nombre del Alumno" value="<?php if($resultado) echo $resultado['Nombre']; ?>"class="input__text" disabled><br>
            <a>Primer Apellido</a><br>
			<input type="text" name="PAterno" placeholder="Apellido Paterno" value="<?php if($resultado) echo $resultado['PAterno']; ?>" class="input__text" disabled>
		</div>
		<div class="form-group">
		    <a>Segundo Apellido</a><br>
			    <input type="text" name="MAterno" placeholder="Apellido Materno" value="<?php if($resultado) echo $resultado['MAterno']; ?>"class="input__text" disabled><br>
			    <a>Matricula</a><br>
			    <input type="text" name="Matricula" placeholder="Matricula" value="<?php if($resultado) echo $resultado['Matricula']; ?>" class="input__text" disabled>
			</div>
		<div class="form-group">
		    <h1>Puedes editar estos datos</h1>
		    <a>Nombre de Usuario</a><br>
		    <input type="text" name="NombreSesion" placeholder="Nombre de Usuario" value="<?php if($resultado) echo $resultado['NombreSesion']; ?>"class="input__text"><br>
		    <a>Correo electronico</a><br>
			<input type="text" name="correo" placeholder="correo" value="<?php if($resultado) echo $resultado['correo']; ?>" class="input__text">
		</div>
		<div class="form-group">
		    <a>Contraseña</a><br>
		    <input type="text" name="contrasena" placeholder="contrasena" value="<?php if($resultado) echo $resultado['contrasena']; ?>" class="input__text">
		</div>
		<div class="btn__group">
			<a href="../0_Menu/GestionUsuarios.php" class="btn btn__danger">Cancelar</a>
			<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
		</div>
	</form>
	</div>
</body>
</html>