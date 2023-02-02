<?php
	include_once 'conexion.php';
       error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if(isset($_GET['idSesion'])){
		$idSesion=(int) $_GET['idSesion'];

		$buscar_id=$con->prepare('SELECT * FROM InicioSesion WHERE idSesion=:idSesion LIMIT 1');
		$buscar_id->execute(array(
			':idSesion'=>$idSesion
		));
		$resultadoBloqueo=$buscar_id->fetch();
	}else{
		header('Location: ../0_Menu/GestionUsuarios.php');
	}

	if(isset($_POST['guardarBloqueo'])){
                $bloqueo=$_POST['guardarBloqueo'];
        if(!empty($bloqueo))
		{
		//	if(!filter_var($EXPEDIENTE,FILTER_VALIDATE_EXPEDIENTE)){
//		echo "<script> alert('Llene el campo expediente ');</script>";
			//}else{
                       
				$consulta_updateBloqueo=$con->prepare('UPDATE InicioSesion SET 
				idSesion=:idSesion, 
				NombreSesion=:NombreSesion, 
				correo=:correo, 
				contrasena=:contrasena, 
				bloqueo=:bloqueo WHERE idSesion =:idSesion;');
				$consulta_updateBloqueo->execute(array(
				    ':idSesion' =>'idSesion',
				    ':NombreSesion'=>'NombreSesion' ,
				    ':correo'=>'correo',
				    ':contrasena'=>'contrasena',
					':bloqueo' =>$bloqueo
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
	<title>bloquear Usuario</title>
	<link rel="stylesheet" href="../3_CSS/estilos.css">
   </head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLOGICA DEL SURESTE DE VERACRUZ</h2>
	<form action="" method="post">
			<div class="form-group">
<input type="text" name="bloqueo" placeholder="bloqueo" value="<?php if($resultadoBloqueo) echo $resultadoBloqueo['bloqueo']; ?>" class="input__text">
</div>
</div>
<div class="btn__group">
				<a href="../0_Menu/GestionUsuarios.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardarBloqueo" value="GuardarBloqueo" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>