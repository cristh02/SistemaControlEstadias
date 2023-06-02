<!DOCTYPE html>
<?php 
	
	require_once 'conn.php'
?>
<html lang = "en">
	<head>
		<title>Gestor Free | Fuente Web</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "Estiloss/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "Estiloss/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "Estiloss/style.css" />


<!-- site metas -->
        <title>Área de Vinculación y Estadías</title>
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Estilo.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="../CSS/responsive.css">
        <link rel="stylesheet" href="../CSS/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">









	</head>
<body>

<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="student_profile.php"><img ID="iLogo" src="../IMAGENES/Logo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="../pagAdministrador.php">Inicio</a>
                           <a class="nav-item nav-link" href="1_PHP/TablaGeneral.php">Tabla_General</a>
         
                           <a class="nav-item nav-link" href="1_PHP/GestionSesion.php">Editar_usuarios</a>
                           <a class="nav-item nav-link" href="1_PHP/GenerarDocumento.php">Documento</a>
                            <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;" href="">AlmacenamientoDOC</a>
                           <a class="nav-item nav-link" href="1_PHP/CerrarSesion.php">Cerrar_Sesion</a>
                            </form>

                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>














	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:blue;">
		<div class="container-fluid">
			<label class="navbar-brand" id="title">Respaldo de información importante¡</label>
		</div>
	</nav>
	<div class="col-md-4">
		
		<div class="panel panel-default" style="background-color:#393f4d;" id="panel-margin">
			<div class="panel-heading" style="background-color:#feda6a;">
				
			</div>
			<div class="panel-body">
				

<h4 style="color:#fff;">Cta. Estudiante: <label class="pull-right"><?php echo $fetch['stud_no']?></label></h4>
				<h4 style="color:#fff;">Name: <label class="pull-right"><?php echo $fetch['firstname']." ".$fetch['lastname']?></label></h4>
				<h4 style="color:#fff;">Género: <label class="pull-right"><?php echo $fetch['gender']?></label></h4>
				<h4 style="color:#fff;">Año & Grupo: <label class="pull-right"><?php echo $fetch['yr&sec']?></label></h4>




				<h3 style="color:#fff;">Carga de Archivo</h3>
				<form method="POST" enctype="multipart/form-data" action="save_file.php">
					<input type="file" name="file" size="4" style="background-color:#fff;" required="required" />
					<br />
					<input type="hidden" name="stud_no" value="<?php echo $fetch['stud_no']?>"/>
					<button class="btn btn-success btn-sm" name="save"><span class="glyphicon glyphicon-plus"></span> Agregar Archivo</button>
				</form>
				<br style="clear:both;"/>
				<hr style="border-top:1px solid #fff;"/>
				<button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal_confirm"><span class="glyphicon glyphicon-log-out"></span> Salir</button>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default" style="margin-top:100px;">
			<div class="panel-body">
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>Nombre de Archivo</th>
							<th>Tipo</th>
							<th>Fecha de subida</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$stud_no = $fetch['stud_no'];
							$query = mysqli_query($conn, "SELECT * FROM `storage` WHERE `stud_no` = '$stud_no'") or die(mysqli_error());
							while($fetch = mysqli_fetch_array($query)){
						?>

						<tr class="del_file<?php echo $fetch['store_id']?>">
							<td><?php echo substr($fetch['filename'], 0 ,30)."..."?></td>
							<td><?php echo $fetch['file_type']?></td>
							<td><?php echo $fetch['date_uploaded']?></td>
							<td><a href="download.php?store_id=<?php echo $fetch['store_id']?>" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Descargar</a> | <button class="btn btn-danger btn_remove" type="button" id="<?php echo $fetch['store_id']?>"><span class="glyphicon glyphicon-trash"></span> Remover</button></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Fuente Web <?php echo date("Y", strtotime("+8 HOURS"))?></label>
	</div>
	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Sistema</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">¿Estás seguro de que quieres cerrar sesión?</h4></center>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-success" data-dismiss="modal">Cancelar</a>
					<a href="logout.php" class="btn btn-danger">Continuar</a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_remove" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Sistema</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">   ¿Estás seguro de que quieres eliminar este archivo?</h4></center>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-success" data-dismiss="modal">No</a>
					<button type="button" class="btn btn-danger" id="btn_yes">Si</button>
				</div>
			</div>
		</div>
	</div>
<?php include 'script.php'?>
<script type="text/javascript">
$(document).ready(function(){
	$('.btn_remove').on('click', function(){
		var store_id = $(this).attr('id');
		$("#modal_remove").modal('show');
		$('#btn_yes').attr('name', store_id);
	});
	
	$('#btn_yes').on('click', function(){
		var id = $(this).attr('name');
		$.ajax({
			type: "POST",
			url: "remove_file.php",
			data:{
				store_id: id
			},
			success: function(data){
				$("#modal_remove").modal('hide');
				$(".del_file" + id).empty();
				$(".del_file" + id).html("<td colspan='4'><center class='text-danger'>Deleting...</center></td>");
				setTimeout(function(){
					$(".del_file" + id).fadeOut('slow');
				}, 1000);
			}
		});
	});
});
</script>

<script src="../JS/jquery.min.js"></script>
      <script src="../JS/popper.min.js"></script>
      <script src="../JS/bootstrap.bundle.min.js"></script>
      <script src="../JS/jquery-3.0.0.min.js"></script>
      <script src="../JS/plugin.js"></script>
      <!-- sidebar -->
      <script src="../JS/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../JS/custom.js"></script>




	
</body>
</html>