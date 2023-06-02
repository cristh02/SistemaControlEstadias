<?php
include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT * FROM usuarios ORDER BY id_Alumno_Expediente DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

    if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM usuarios WHERE PAterno LIKE :campo OR MAterno LIKE :campo OR Matricula LIKE :campo OR Periodo LIKE :campo OR Carrera LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();
	}
		
?>
<!DOCTYPE html>
<html lang="es">
<head>
<script>

window.alert("BIENVENIDO A LA TABLA PRINCIPAL ADMINISTRATIVA");
	</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="#" />
	<title>Inicio</title>
	<link rel="stylesheet" href="../2_CSS/estilos.css">
<link rel="stylesheet" type="text/css" href="../../CSS/Estilo.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 <style>
            tr{transition: all ease-in-out .25s}
            .selected{background-color:blue;color:#fff;font-weight: bold}

    </style>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Área de Vinculación y Estadías</title>
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
        <link rel="stylesheet" type="text/css" href="../../CSS/Estilo.css">
        <link rel="stylesheet" href="../3_CSS/estilos.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="../../CSS/responsive.css">
        <link rel="stylesheet" href="../../CSS/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">-->
        <!--Extra BD Gral-->
        <link rel="shortcut icon" href="#" />
</head>
<body >

<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="TablaGeneral.php"><img ID="iLogo" src="../../IMAGENES/Logo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="../pagAdministrador.php">Inicio</a>
                           <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;" href="">Tabla_General</a>
                          
                           <a class="nav-item nav-link" href="GestionSesion.php">Editar_usuarios</a>
                           <a class="nav-item nav-link" href="GenerarDocumento.php">Documento</a>
                             <a class="nav-item nav-link" href="CerrarSesion.php">Cerrar_Sesion</a>
                            </form>

                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>







<div class="contenedorI">
	<div class="contenedorT">
		<center><big><h1>Tabla General</h1></big></center>
		<div class="barra__buscador" style="text-align:center;">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
				<input type="text" name="buscar" placeholder="Buscar por Apellidos" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insertarGeneral.php" class="btn btn__nuevo">Nuevo</a>

				<a href="filtro_busqueda.php" class="btn btn__nuevo">busqueda Avazanda</a>
			</form>
		</div>
</div
		<table border="1" bordercolor="666633" cellpadding="2" cellspacing="2">
<div class="tableG">
<table bordercolor="666633" cellpadding="2" cellspacing="2" width="200%">
<div class="container">

        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive" >        
                        <table id="example" class="table table-striped table-bordered" cellspacing="1" width="50%" >
                        <thead>    
                      <tr >
<tr ><td align = "center" colspan="12" bgcolor="#5FB404"><B><H5> DATOS GENERALES DE LOS ALUMNOS</H5> </B></td><td align = "center" colspan="2" bgcolor="#5FB404" ><B><H5>PROCESO</H5> </B></td><td align = "center" colspan="8" bgcolor="#5FB404" ><B><H5>DATOS DE LA EMPRESA</H5> </B></td><td align = "center" colspan="6" bgcolor="#5FB404" ><B><H5>DOCUMENTACIÓN</H5> </B></td><td align = "center" colspan="6" bgcolor="#5FB404" ><B><H5>ACCIONES</H5> </B></td></tr>


		<!--	<tr class="tabla"> -->
				<td bgcolor="#BCF5A9"><B>GENERACIÓN<B></td>
				<td bgcolor="#BCF5A9"><B>PERIODO</B></td>
                <td bgcolor="#BCF5A9"><B>EXTENCIÓN</B></td>
                <td bgcolor="#BCF5A9"><B>MODALIDAD</B></td>
                <td bgcolor="#BCF5A9"><B>GRUPO</B></td>
                <td bgcolor="#BCF5A9"><B># EXP.</B></td>
                <td bgcolor="#BCF5A9"><B>CARRERA</B></td>
                <td bgcolor="#BCF5A9"><B>MATRICULA</B></td>
                <td bgcolor="#BCF5A9"><B>ALUMNO</B></td>
                <td bgcolor="#BCF5A9"><B>GENERO</B></td>
<td bgcolor="#BCF5A9"><B>CELULAR</B></td>
<td bgcolor="#BCF5A9"><B>CORREO</B></td>
<td bgcolor="#BCF5A9"><B>INDUCCIÓN</B></td>
<td bgcolor="#BCF5A9"><B>FECHA Y HR.
DE PREREGISTRO</B></td>
<td bgcolor="#BCF5A9"><B>EMPRESA</B></td>
<td bgcolor="#BCF5A9"><B>DESTINATARIO</B></td>
<td bgcolor="#BCF5A9"><B>CARGO QUE
OCUPA</B></td>
<td bgcolor="#BCF5A9"><B>TELEFONO DE 
EMPRESA</B></td>
<td bgcolor="#BCF5A9"><B>CORREO DE
EMPRESA</B></td>
<td bgcolor="#BCF5A9"><B>DIRECCIÓN DE
EMPRESA</B></td>
<td bgcolor="#BCF5A9"><B>MUNICIPIO</B></td>
<td bgcolor="#BCF5A9"><B>CAMBIO</B></td>
<td bgcolor="#BCF5A9"><B>ESTATUS S.E.</B></td>
<td bgcolor="#BCF5A9"><B>PRESENTACIÓN</B></td>
<td bgcolor="#BCF5A9"><B>ACEPTACIÓN</B></td>
<td bgcolor="#BCF5A9"><B>COMPROMISO</B></td>
<td bgcolor="#BCF5A9"><B>LIBERACIÓN</B></td>
<td bgcolor="#BCF5A9"><B>ASESOR</B></td>
                <td bgcolor="#BCF5A9"><B>Editar</B></td>
                 <td bgcolor="#BCF5A9"><B>Eliminar</B></td>
                  <td colspan="4" bgcolor="#BCF5A9"><B>Estatus</B></td>
<!--
				<td>Fecha de Nacimiento</td>
				<td>Edad</td>
				<td>Induccion</td>
				<td>Pre-Registro</td>
				<td>Solicitud de estadías</td>
				<td>Consentimiento Seguro</td>
				<td>Empresa</td>
				<td>Giro</td>
				<td>Tamaño</td>
				<td>Sector</td>
				<td>Dirigido a</td>
				<td>Cargo</td>
				<td>Dirección</td>
				<td>Municipio</td>
				<td>Estado</td>
				<td>Local o Foranea</td>
				<td>Telefono</td>
				<td>Email</td>
				<td>RFC</td>
				<td>Seguro de vida</td>
				<td>Carta precentación</td>
				<td>Carta aceptación</td>
				<td>Carta compromiso</td>
				<td>Encuesta</td>
				<td>Liberacion</td> 
-->        
				
			</tr>

                       </thead>

                        <tbody>

                          <tr >
                       
			<?php foreach($resultado as $fila):?>


				
<td bgcolor="#EFF8FB"><?php echo $fila['id_Alumno_Expediente']; ?></td>


<td bgcolor="#EFF8FB"><?php echo $fila['Periodo']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Generacion']; ?></td>

<td bgcolor="#EFF8FB" ><?php echo $fila['Extencion']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Modalidad']; ?></td>


<td bgcolor="#EFF8FB"><?php echo $fila['Carrera']; ?></td>

<td bgcolor="#EFF8FB" ><?php echo $fila['Matricula']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['NomCompleto']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Curp']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>

<td bgcolor="#EFF8FB"><?php echo $fila['Genero']; ?></td>
                    <td bgcolor="#BCF5A9"><a href="actualizarGeneral.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>"  class="btn__update" >Editar</a></td>
		<td bgcolor="#BCF5A9"><a href="Generaldelete.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>" class="btn__delete">Eliminar</a></td>
		
</a></td>


<!--
					<td><?php echo $fila['Festividad']; ?></td>
					<td><?php echo $fila['edad']; ?></td>
					<td><?php echo $fila['Induccion']; ?></td>
					<td><?php echo $fila['PreRegistro']; ?></td>
					<td><?php echo $fila['SoliciEstadia']; ?></td>
					<td><?php echo $fila['ConsentSeguro']; ?></td>
					<td><?php echo $fila['Empresa']; ?></td>
					<td><?php echo $fila['Giro']; ?></td>
					<td><?php echo $fila['Tamano']; ?></td>
					<td><?php echo $fila['Sector']; ?></td>
					<td><?php echo $fila['Dirigido']; ?></td>
					<td><?php echo $fila['Cargo']; ?></td>
					<td><?php echo $fila['Direccion']; ?></td>
					<td><?php echo $fila['Municipio']; ?></td>
					<td><?php echo $fila['Estado']; ?></td>
					<td><?php echo $fila['LocalForane']; ?></td>
					<td><?php echo $fila['Telefono']; ?></td>
					<td><?php echo $fila['Email']; ?></td>
					<td><?php echo $fila['RFC']; ?></td>
					<td><?php echo $fila['SeguroDeVida']; ?></td>
					<td><?php echo $fila['CartPrecentacion']; ?></td>
					<td><?php echo $fila['CartAceptacion']; ?></td>
					<td><?php echo $fila['Compromiso_DC']; ?></td>
					<td><?php echo $fila['Encuesta']; ?></td>
					<td><?php echo $fila['Liberacion']; ?></td>

 

-->                       


  		
				</tr>
			<?php endforeach ?>
		</table>



                        

		

			
			
		
</tbody>
	</div>

 <!--copeado de pagina secundaria de boostrap-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap5.min.js"></script>
   <!--  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>Botones-->


<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>




</body>
</html>	