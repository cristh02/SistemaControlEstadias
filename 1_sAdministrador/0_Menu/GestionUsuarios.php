<?php
include_once '../1_PHP/conexion.php';

	$sentencia_select=$con->prepare('SELECT Usuarios.Nombre, Usuarios.PAterno, Usuarios.MAterno, Usuarios.Matricula, InicioSesion.idSesion, InicioSesion.NombreSesion, InicioSesion.correo, InicioSesion.contrasena, InicioSesion.id_Usuarios, InicioSesion.bloqueo FROM InicioSesion, Usuarios WHERE Usuarios.id_Alumno_Expediente=InicioSesion.id_Usuarios ORDER BY idSesion DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

    if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		if(!empty($buscar_text)){
		$select_buscar=$con->prepare('SELECT Usuarios.Nombre, Usuarios.PAterno, Usuarios.MAterno, Usuarios.Matricula, InicioSesion.idSesion, InicioSesion.NombreSesion, InicioSesion.correo, InicioSesion.contrasena, InicioSesion.id_Usuarios, InicioSesion.bloqueo FROM InicioSesion, Usuarios WHERE (InicioSesion.id_Usuarios=Usuarios.id_Alumno_Expediente) and (InicioSesion.correo=:correo or InicioSesion.NombreSesion=:NombreSesion) LIMIT 1;'
		);
		    $select_buscar->execute(array(
			':correo'=>$buscar_text,
			':NombreSesion'=>$buscar_text
			));
		$resultado=$select_buscar->fetchAll();
		}else{
		    $sentencia_select->execute();
		    $resultado=$sentencia_select->fetchAll();
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Gestion de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Estilo.css">
    <link rel="stylesheet" href="../3_CSS/estilos.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../CSS/responsive.css">
    <link rel="stylesheet" href="../../CSS/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
    <!--heder start-->
    <div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="index.php"><img ID="iLogo" src="../../IMAGENES/Logo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="../PagAdministrador.php">Inicio</a>
                           <a class="nav-item nav-link" href="BD_General.php">Tabla_General</a>
                           <!--<a class="nav-item nav-link" href="BD_Inicial.php">Tabla Dinámica</a>-->
                           <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;"href="">Editar_usuarios</a>
                           <a class="nav-item nav-link" href="GenerarDocumento.php">Documento</a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
	<div class="tablaG">
		<center><h2>Gestión de Usuarios</h2></center>
		<div class="barra__buscador" style="text-align:center;">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
				<input type="text" name="buscar" placeholder="Buscar por Correo" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="../1_PHP/Nuevo.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table style="margin: 0 auto;" border="1" bordercolor="666633" cellpadding="2" cellspacing="2">
			<tr style="text-align:center;">
			    <td bgcolor="#BCF5A9"><B><H5>Nombre(s)</B></td>
			    <td bgcolor="#BCF5A9"><B><H5>Apellido Paterno</B></td>
			    <td bgcolor="#BCF5A9"><B><H5>Apellido Materno</B></td>
			    <td bgcolor="#BCF5A9"><B><H5>Matricula</B></td>
				<td bgcolor="#BCF5A9"><B><H5>Nombre Usuario</B></td>
				<td bgcolor="#BCF5A9"><B><H5>Correo</B></td>
				<td bgcolor="#BCF5A9"><B><H5>Bloqueo</B></td>      
				<td align = "center" colspan="6" bgcolor="#5FB404" ><B><H5>ACCIONES</H5> </B></td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr>
				    <td ><?php echo $fila['Nombre']; ?></td>
				    <td ><?php echo $fila['PAterno']; ?></td>
				    <td ><?php echo $fila['MAterno']; ?></td>
				    <td ><?php echo $fila['Matricula']; ?></td>
					<td ><?php echo $fila['NombreSesion']; ?></td>
					<td ><?php echo $fila['correo']; ?></td>
                   <td><?php echo $fila['bloqueo']; ?></td>
		<td bgcolor="#BCF5A9"><a href="../1_PHP/act.php?idSesion=<?php echo $fila['idSesion']; ?>"  class="btn__update" >Editar</a></td>
		<td bgcolor="#BCF5A9"><a href="../1_PHP/Eliminar.php?idSesion=<?php echo $fila['idSesion']; ?>" class="btn__delete">Eliminar</a></td>
              <td bgcolor="#BCF5A9"><a href ="../1_PHP/bloquear.php?idSesion=<?php echo $fila['idSesion']; ?>" class = "btn__update"> Bloquear </a> 
             <!-- <form action="../1_PHP/Bloquear.php" method="post">
              <input type="submit" name="guardarBloqueo" value="GuardarBloqueo" class="btn btn__danger">
              </form></td>-->
              
              <td bgcolor="#BCF5A9"> <a href ="../1_PHP/desbloquear.php?idSesion=<?php echo $fila['idSesion']; ?>"  class = "btn__delete" > DesBloquear </a> </td>
              
				</tr>
			<?php endforeach ?>
		</table>
	</div>
	<!-- Javascript files-->
      <script src="../../JS/jquery.min.js"></script>
      <script src="../../JS/popper.min.js"></script>
      <script src="../../JS/bootstrap.bundle.min.js"></script>
      <script src="../../JS/jquery-3.0.0.min.js"></script>
      <script src="../../JS/plugin.js"></script>
      <!-- sidebar -->
      <script src="../../JS/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../../JS/custom.js"></script>
</body>
</html>	