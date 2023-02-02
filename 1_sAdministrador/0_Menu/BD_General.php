<?php

if (isset($_POST['sendForm'])) {
    if (isset($_POST['conditions']) && $_POST['conditions'] == '1')
        echo '<div class="alert alert-success">dado de baja.</div>';
        
        if (isset($_POST['conditions']) && $_POST['conditions'] == '2')
        echo '<div class="alert alert-success">falta docimentos.</div>';
        
        if (isset($_POST['conditions']) && $_POST['conditions'] == '3')
        echo '<div class="alert alert-success">falta archivos.</div>';
        
        if (isset($_POST['conditions']) && $_POST['conditions'] == '4')
        echo '<div class="alert alert-success">Felicidades todo correcto.</div>';
    //else
     //   echo '<div class="alert alert-danger">Debes aceptar las condiciones de uso.</div>';
}


include_once '../1_PHP/conexion.php';

	$sentencia_select=$con->prepare('SELECT * FROM Usuarios Admin LEFT OUTER JOIN InicioSesion on Admin.id_Alumno_Expediente = InicioSesion.id_Usuarios;');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();
    if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('SELECT * FROM Usuarios WHERE PAterno LIKE :campo OR MAterno LIKE :campo OR Matricula LIKE :campo OR Periodo LIKE :campo OR Carrera LIKE :campo;');

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));
		$resultado=$select_buscar->fetchAll();
	}
	
	if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
if (!isset($_POST['buscacarrera'])){$_POST['buscacarrera'] = '';}
if (!isset($_POST['genero'])){$_POST['color'] = 'genero';}
if (!isset($_POST['buscafechagdesde'])){$_POST['buscafechagdesde'] = '';}
if (!isset($_POST['buscafechaghasta'])){$_POST['buscafechaghasta'] = '';}
if (!isset($_POST['buscaperiododesde'])){$_POST['buscaperiododesde'] = '';}
if (!isset($_POST['buscaperiodohasta'])){$_POST['buscaperiodohasta'] = '';}

if (!isset($_POST["orden"])){$_POST["orden"] = '';}







?>
<!DOCTYPE html>
<HTML Lang="es">
    <HEAD>
        
 <script> 
function cambiaColor() { 
   	var i 
   	for (i = 0; i < document.fcolores.colorin.length; i++){ 
      	if (document.fcolores.colorin[6].checked) {
         	break; 
 		}
   	} 
   	document.bgColor = document.fcolores.colorin[i].value 
} 
</script> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
    </HEAD>
    <BODY>
      
        
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
                           <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;" href="">Tabla_General</a>
                           <!--<a class="nav-item nav-link" href="BD_Inicial.php">Tabla Dinámica</a>-->
                           <a class="nav-item nav-link" href="GestionUsuarios.php">Editar_usuarios</a>
                           <a class="nav-item nav-link" href="GenerarDocumento.php">Documento</a>
                            </form>

                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!--table start-->
	<div class="contenedorT">
		<center><big><h1>General</h1></big></center>
		<div class="barra__buscador" style="text-align:center;">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
				<input type="text" name="buscar" placeholder="BUSQUEDA" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="../1_PHP/insertarGeneral.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
	</div>
    <div class="col-13">
<div class="container8"><!--Si le quitas el 8 se vuelve una tabla "resposibe" pero debes cofngirar bien el espacio que utiliza lat tabla para que no quede muy pequeña-->
    <div class="row">   
        <div class="col-15 grid-margin">
            <div class="col-5">
                <h4 class="card-title">Filtro de búsqueda</h4>  
                <table class="table">
                     <thead>
                         <tr class="filters">
                             <th>
                                 Carrera
                                <select id="assigned-tutor-filter" id="buscacarrera" name="buscacarrera"
                                 class="form-control mt-2"style="border: #bababa 1px solid; color:#000000;" >
                                     <?php if ($_POST["buscacarrera"] != ''){ ?>
                                     <option value="<?php echo $_POST["buscacarrera"]; ?>"><?php echo $_POST["buscacarrera"]; ?></option><?php } ?><option value="Gestión del Capital Humano"> Gestión del Capital Humano</option>
                                     <option value="Contaduría">Contaduría</option>
                                     <option value="Mecánica">Mecánica</option>
                                     <option value="Tecnologías de la Información">Tecnologías de la Información</option>
                                     <option value="Mantenimiento Industrial">Mantenimiento Industrial</option>
                                     <option value="Mecatrónica"> Mecatrónica</option>
                                     <option value="Química">Química</option>
                                </select>
                                </th>
                                <th>
                                    Periodo desde:
                                    <input type="number" id="buscaperiododesde" name="buscaperiododesde" class="form-control mt-2" value="<?php echo $_POST["buscaperiododesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                    </th>
                                    <th>
                                    Periodo hasta:
                                    <input type="number" id="buscaperiodohasta" name="buscaperiodohasta" class="form-control mt-2" value="<?php echo $_POST["buscaperiodohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                    </th>
                                    <th>
                                    Generación Fecha desde:
                                    <input type="date" id="buscafechagdesde" name="buscafechagdesde" class="form-control mt-2" value="<?php echo $_POST["buscafechagdesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                    </th>
                                    <th>
                                    Genración Fecha hasta:
                                    <input type="date" id="buscafechaghasta" name="buscafechaghasta" class="form-control mt-2" value="<?php echo $_POST["buscafechaghasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                    </th>
                                    <th>
                                    Genero
                                    <select id="subject-filter" id="Genero" name="Genero" class="for
                                    -control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                    <?php if ($_POST["Genero"] != ''){ ?>
                                    <option value="<?php echo $_POST["Genero"]; ?>"><?php echo
                                    $_POST["Genero"]; ?></option>
                                    <?php } ?>
                                    <option value="">Todos</option>
                                    <option style="Genero: Femenino;" value="Femenino">Femenino</option>
                                    <option style="Genero: Masculino;" value="Masculino">Masculino</option>
                                </select>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-11">
                <h4 class="card-title">Ordenar por</h4> 
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th>Selecciona el orden
                                                        <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["orden"] != ''){ ?>
                                                                <option value="<?php echo $_POST["orden"]; ?>">
                                                                <?php 
                                                                if ($_POST["orden"] == '1'){echo 'Ordenar por carrera';} 
                                   
                                                                if ($_POST["orden"] == '2'){echo 'Ordenar por Genero';} 
                                                                if ($_POST["orden"] == '3'){echo 'Ordenar por periodo de menor a mayor';} 
                                                                if ($_POST["orden"] == '4'){echo 'Ordenar por periodo de mayor a menor';} 
                                                                if ($_POST["orden"] == '5'){echo 'Ordenar por Generación fecha de reciente';} 
                                                                if ($_POST["orden"] == '6'){echo 'Ordenar por Generación fecha de antigua';} 
                                                                ?>
                                                                </option>
                                                                <?php } ?>
                                                                <option value=""></option>
                                                                <option value="1">Ordenar por carrera</option>
                                                                <option value="2">Ordenar por Genero</option>
                                                                <option value="3">Ordenar por periodo de menor a mayor</option>
                                                                <option value="4">Ordenar por periodo de mayor a menor</option>
                                                                <option value="5">Ordenar por Generación fecha de reciente</option>
                                                                <option value="6">Ordenar por Generación fecha de antigua</option>
                                                                
                                                        </select>
                                                </th>
                                          
                                              
                                      
                                        </tr>
                                </thead>
                        </table>
            </div>
                <div class="col-1">
                        <input type="submit" class="btn " value="Ver" style="margin-top: 38px; background-color: purple; color: white;">
                </div>
        </div>
    </div>	
</div>
		<div class="tableG">
		<table bordercolor="666633" cellpadding="2" cellspacing="2" width="200%">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive"> 
							<table id="example" class="table table-striped table-bordered"cellspacing="10"   width="100%" bordercolor="#000000">
								<thead>
									<tr>
										<tr ><td align = "center" colspan="12" bgcolor="#5FB404"><B>
										    <H5> DATOS GENERALES DE LOS ALUMNOS</H5> </B></td><td align = "center" colspan="2" bgcolor="#5FB404" ><B>
										    <H5>PROCESO</H5> </B></td><td align = "center" colspan="8" bgcolor="#5FB404" ><B>
										    <H5>DATOS DE LA EMPRESA</H5></B></td><td align = "center" colspan="6" bgcolor="#5FB404" ><B>
										    <H5>DOCUMENTACIÓN</H5> </B></td><td align = "center" colspan="6" bgcolor="#5FB404" ><B>
										    <H5>ACCIONES</H5> </B></td></tr>       
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
											<td bgcolor="#BCF5A9"><B>FECHA Y HR.DE PREREGISTRO</B></td>
											<td bgcolor="#BCF5A9"><B>EMPRESA</B></td>
											<td bgcolor="#BCF5A9"><B>DESTINATARIO</B></td>
											<td bgcolor="#BCF5A9"><B>CARGO QUE OCUPA</B></td>
											<td bgcolor="#BCF5A9"><B>TELEFONO DE EMPRESA</B></td>
											<td bgcolor="#BCF5A9"><B>CORREO DE EMPRESA</B></td>
											<td bgcolor="#BCF5A9"><B>DIRECCIÓN DE EMPRESA</B></td>
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
                    <td><?php echo $fila['Generacion']; ?></td>
                    <td><?php echo $fila['Periodo']; ?></td>
                    <td><?php echo $fila['Extencion']; ?></td>
                    <td><?php echo $fila['Modalidad']; ?></td>
                    <td><?php echo $fila['Grupo']; ?></td>
                    <td><?php echo $fila['id_Alumno_Expediente']; ?></td>
                    <td><?php echo $fila['Carrera']; ?></td>
					<td><?php echo $fila['Matricula']; ?></td>
                    <td><?php echo $fila['NomCompleto']; ?></td>
					<td><?php echo $fila['Genero']; ?></td>
					<td><?php echo $fila['Celular']; ?></td><!--Table Iniciosesion-->
					<td><?php echo $fila['correo']; ?></td><!--Table Iniciosesion-->
                    <td><?php echo $fila['PreRegistro']; ?></td>
                    <td><?php echo $fila['Induccion']; ?></td>
                    <td><?php echo $fila['Empresa']; ?></td>
                    <td><?php echo $fila['Destinatario']; ?></td>
                    <td><?php echo $fila['Cargo']; ?></td>
                    <td><?php echo $fila['Telefono']; ?></td>
                    <td><?php echo $fila['Email']; ?></td>
                    <td><?php echo $fila['Direccion']; ?></td>
                    <td><?php echo $fila['Municipio']; ?></td>
                    <td><?php echo $fila['Cambio']; ?></td>
                    <td><?php echo $fila['EstatusSE']; ?></td>
                    <td><?php echo $fila['CartPrecentacion']; ?></td>
                    <td><?php echo $fila['CartAceptacion']; ?></td>
					<td><?php echo $fila['Compromiso_DC']; ?></td>
					<td><?php echo $fila['Liberacion']; ?></td>
					<td><?php echo $fila['Encuesta']; ?></td>
					
                    <td><a href="../1_PHP/actualizarGeneral.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>"  class="btn__update" >Editar</a></td>
                    <td><a href="../1_PHP/Generaldelete.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>" class="btn__delete">Eliminar</a></td>
                                           

                    <td>
                        
                        

<form action="" method="post">
    <div class="form-group form-check" >
        <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="1" >
        <label class="form-check-label" for="conditions">baja</label>
    </div>
    
    <div class="form-group form-check" checked>
        <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="2">
        <label class="form-check-label" for="conditions">falta documento</label>
    </div>
    
    <div class="form-group form-check" checked>
        <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="3">
        <label class="form-check-label" for="conditions">faltan archivos</label>
        
    </div>
    
    <div class="form-group form-check" checked>
        <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="4">
        <label class="form-check-label" for="conditions">todo correcto</label>
    </div>
    
    <input type="submit" class="btn btn-primary" name="sendForm" value="Enviar"/>
    
    
    
    

</form>
                        
                        
                        
                        </td>
                    
                    
                    
</a></td>
                    
				</tr>
			<?php endforeach ?>                  

		</table>
		</tbody>
	</div>
		</table>
        </div>
	<!--Table end-->
     <!-- Javascript files
      <script src="../../JS/jquery.min.js"></script>
      <script src="../../JS/jquery-3.0.0.min.js"></script>
      <script src="../../JS/bootstrap.bundle.min.js"></script>
      <script src="../../JS/popper.min.js"></script>-->
      <!--Necesita actalizar la version-->
      <script src="../../JS/plugin.js"></script>
      <!-- sidebar -->
      <script src="../../JS/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../../JS/custom.js"></script>
      <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--Codigo Botones de kathia--->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>-->
    
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>
    
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
    </BODY>
</HTML>