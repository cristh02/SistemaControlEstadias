<!DOCTYPE HTML>
    <HTML lang="es">
        <head>
<script>

window.alert("BIENVENIDO A DOCUMENTO DE ESTADIA");
	</script>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('input[type=checkbox]').live('click', function(){
                    var parent = $(this).parent().attr('id');
                    $('#'+parent+' input[type=checkbox]').removeAttr('checked');
                    $(this).attr('checked', 'checked');
                    });
                });
            </script>
            
            <link rel="stylesheet" type="text/css" href="../2_CSS/estilo.css">
             <TITLE>ESTADIA</TITLE>
<link rel="stylesheet" type="text/css" href="../../CSS/Estilo.css">
<link rel="stylesheet" type="text/css" href="../../CSS/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
        
<!-- Responsive-->
        <link rel="stylesheet" href="../../CSS/responsive.css">
        <link rel="stylesheet" href="../../CSS/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

        </head>
        <body "> 

<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="GenerarDocumento.php"><img ID="iLogo" src="../../IMAGENES/Logo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="../pagAdministrador.php">Inicio</a>
                           <a class="nav-item nav-link" href="TablaGeneral.php">Tabla_General</a>
                           <!--<a class="nav-item nav-link" href="BD_Inicial.php">Tabla Dinámica</a>-->
                           <a class="nav-item nav-link" href="GestionSesion.php">Editar_usuarios</a>
                           <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;"href="">Documento</a>
                           <a class="nav-item nav-link" href="CerrarSesion.php">Cerrar_Sesion</a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	
	
<div class="contenedorJ">
		
<div class="doc">

<center> <fieldset> 


            
        	<center><h1>FORMATO DE SOLICITUD DE ESTADIAS</h1><h1 id="segundo">UTSV-DVI-FO-02</h1></center>
                <p style="text-align:right;">Nanchital, ver. </p>
                <p style="text-align:right;">Fecha: <input type="date" name="fecha" > </p>
                  <right>  <h4 style="text-align:left">DRA.SILVIA ELENA LÒPEZ VALLEJO </h4>
                    <h4 style="text-align:left">DIRECTORA DE VINCULACIÓN </h4>
                    <h4 style="text-align:left">PRESENTE.-</h4>
                <p style="text-align:left">Solicito su apoyo para que se pueda elaborar la carta de presentación para mis Estadias.</p>
                <p style="text-align:left">Los datos son los siguientes:</p>
                <p>
	            <div id="contenedor">
                    <form action="mailto:esmeraldaclara2184@gmail.com" method="post" enctype="text/plain">


                        
                        <fieldset style="text-align:left " >

                        <legend FONT COLOR="blue"> DATOS DEL ALUMNO Y ESCOLARES</legend>
                        <label for="Nombre">NOMBRE DEL ALUMNO:</label>
                        <input type="text" name="Nombre" size=30 required >
                        <p>


                        <label>GÉNERO:</label>
                        <select name="menu">
                            <option value="0">
                            <option>Mujer </option>
                                <option> Hombre</option>
                         </select> 
 <p>
                          E-MAIL: <input type="email" name="correo" size=40> 
                               <p> CELULAR: <input type="tel" name="telefono">
                               <p>
                               <label> MUNICIPIO: </label>
                               <select name="menu">
                                    <option value="0">
                                    <option> Acayucan</option>
                                    <option> Angel R. Cabada</option>
                                    <option> Coatzacoalcos</option>
                                    <option> Cosoleacaque</option>
                                    <option> Cuichapa</option>
                                    <option>Chinameca</option>
                                    <option> Las Choapas</option>
                                    <option> Emiliano Zapata</option>
                                    <option> Hidalgotitlán</option>
                                    <option> Ignacio de la Llave</option>
                                    <option> Ixhuatlán del Sureste</option>
                                    <option> Jáltipan </option>
                                    <option> Jesús Carranza</option>
                                    <option> Minatitlán</option>
                                    <option> Moloacan</option>
                                    <option> Agua Dulce</option>
                                    <option> Mapachapa- Minatitlán</option>
                                    <option> Villa Allende</option>
                                    <option> Hueyapan de Ocampo</option>
                                    <option> Las Barrillas</option>
                                    <option> Zapopan</option>
                                </select> 
<p>
                                

                         <label for="Colonia">COLONIA:</label>
                        <input type="text" name="Col" size=30 required >
                        <p>

                        <label for="NombreC">NOMBRE DE LA CALLE y NÚMERO EN DONDE VIVES:</label>
                        <input type="text" name="NombC" size=30 required >
                        <p>


                        <label for="Nombre">GRUPO ACTUAL:</label>
                        <input type="text" name="Grup" size=30 required >
                        <p>



                        <label for="CodPos">CÓDIGO POSTAL:</label>
                        <input type="text" name="CodPos" size=30 required >
                        <p>


                       <label for="NoCelu">NO. DE CELULAR:</label>
                        <input type="text" name="NoCelu" size=30 required >
                        <p>

                        <label for="Correo">CORREO ELECTRÓNICO QUE CONSULTAS DIARIAMENTE:</label>
                        <input type="text" name="Correo" size=30 required >
                        <p>


                        <label for="Matricula">MATRICULA </label>
                        <input type="text" name="Matricula" size=20 required>  
                        <p>

                        <label for="Nombre">PROMEDIO ACTUAL(Aproximadamente puede  ser el de tu cuatrimestre anterior):</label>
                        <input type="text" name="Promedio" size=30 required >
                        <p>


                        <label>MODALIDAD:</label>
                        <select name="menu">
                            <option value="0">
                            <option>Escoralizado </option>
                                <option> Despresuriazado</option>
                         </select> 

               <p>

 
                        <label>CARRERA:</label>
                        <select name="menu">
                            <option value="0">
                            <option>TSU Mantenimiento Área Industrial</option>
                                <option>ING.Mantenimiento Industrial</option>
                                    <option>TSU Mecatrónica	Área Automatización</option>
                                <option>ING. Mecatrónica</option>
                                    <option>TSU Tecnologías De la Información Área DSM</option>
                                <option>ING. Tecnologías de la Información</option>
                                    <option>TSU Química Área Industrial</option>
                                <option>ING. Química</option>
                                    <option>TSU Contaduría</option>
                                    <option>TSU Administración Área Capital Humano</option>
                                    <option>TSU Mecánica Área Automotriz</option>
                                <option>ING. Metal Mecánica</option>
                                    <option>TSU Energías Renovables</option>		
                                </select> 
 <p>
                        <label>¿REALIZASTE TUS ESTUDIOS DE TSU EN OTRA UT? (Indica No o si segun sea tu caso.(Si tu                         respuestas es SI indica el nombre de la universidad en la siguiente pregunta):</label>
                        <select name="menu">
                            <option value="0">
                            <option> SI </option>
                                <option> NO </option>
                         </select>
 <p>

                         <label for="pregunta">Si estudiaste en otra UT, indicar el nombre de la universidad, si tu respuesta anterior fue NO escribe N/A </label>
                        <input type="text" name="pregunta" size=20 required>  
                        <p>
  
<label>¿REALIZASTE EL ACTO PROTOCOLARIO EN TSU? :</label>
                        <select name="menu">
                            <option value="0">
                            <option> SI </option>
                                <option> NO </option>
                         </select>


                                
                               </fieldset>
                               <p> 
                               <fieldset style="text-align:left">

                               <legend> DATOS DE ACTO PROTOCOLARIO DE TSU</legend>
                               <label for="NomP"> NOMBRE DE TU PROYECTO DE TSU:  
                               <input type="text" name="PTSU" size=30 required>
                               <p>
                               
                               
                                </fieldset>



<p>
                                
                               <fieldset style="text-align:left">

                               <legend> DATOS GENERALES</legend>
                               <label for="Nss">NSS( Número de Seguro Social):  
                               <input type="text" name="Nss" size=30 required>
                               <p>

                                &nbsp; <label for="CURP">CURP</label> 
                                <input type="text" name="CURP" required onkeyup="this.value=this.value.toUpperCase();">



 <p>

                               <label for="Edad">EDAD:  
                               <input type="text" name="Edad" size=30 required>
                               <p>

                       <label>ESTADO CIVIL:</label>
                        <select name="menu">
                            <option value="0">
                            <option> Soltero(a) </option>
                                <option> Casado(a) </option>
                         </select>
                               <p>
                               
                                </fieldset>

<p>
                               <fieldset style="text-align:left">

                               <legend> DATOS ADICIONALES</legend>
                               <p>
                           <label>¿ACTUALMENTE CUENTAS CON UN TRABAJO?:</label>
                            <select name="menu">
                            <option value="0">
                            <option> Si </option>
                                <option> No </option>
                         </select>
                               
                               
                                </fieldset>
                               


<p>



                               <fieldset style="text-align:left">

                               <legend> SOLICITUD DE ESTADIAS </legend>
                               <p>
                           <label>¿DONDE SOLICITAS REALIZAR TUS ESTADÍAS?:</label>
                            <select name="menu">
                            <option value="0">
                            <option> UTSV </option>
                                <option> EMPRESA </option>
                                 <option> LUGAR DONDE TRABAJO </option>
                         </select>
                               
                               
                                </fieldset>
                               


<p>
 
<fieldset style="text-align:left">
                        <legend> DATOS DE LA EMPRESA PARA ELABORAR TU CARTA DE PRESENTACIÓN</legend>
                        <label for="nombreOfi">A QUIEN DIRIGIMOS EL OFICIO:</label>
                        <input type="text" class="Empresa" name="nombreOfi" required>  
                        <p>
                        <label for="Cargo">CARGO QUE OCUPA EN LA EMPRESA:</label>
                        <input type="text" class="Empresa" name="Cargo" required>  
                        <p>
                       <label for="Nombre">NOMBRE DE LA EMPRESA:</label>
                        <input type="text" class="Empresa" name="Nombre" required>  
                        <p>
                        <label for="Dire">DIRECCIÓN DE LA EMPRESA:</label>
                        <input type="text" class="Empresa" name="Direc" required>  
                        <p>


                        <label for="Tele">TELÉFONO DE LA EMPRESA:</label>
                        <input type="text" class="Empresa" name="Tele" required>  
                        <p>
                        <label for="CorElec">CORREO ELECTRÓNICO:</label>
                        <input type="text" class="Empresa" name="CorElec" required>  
                        <p>
                        <label for="RFC">RFC DE LA EMPRESA:</label>
                        <input type="text" class="Empresa" name="RFC" required>  
                        <p>

                        <label>GIRO:</label>
                        <p>
                        <div id="seleccion 1">
                            <input type="checkbox" value="1" id="giro-1-1" name="check" /> Industrial<br/>
                            <input type="checkbox" value="2" id="giro-1-2" name="check" /> Comercial<br/>
                            <input type="checkbox" value="3" id="giro-1-3" name="check" /> Servicios<br/>
                        </div>
                        <p> 
                        <label>TAMAÑO:</label>
                        <div id="seleccion 2">
                            <input type="checkbox" value="1" id="tam-2-1" name="check" /> Micro<br/>
                            <input type="checkbox" value="2" id="tam-2-2" name="check" /> Pequeña<br/>
                            <input type="checkbox" value="3" id="tam-2-3" name="check" /> Mediana<br/>
                            <input type="checkbox" value="4" id="tam-2-4" name="check" /> Grande <br/>
                        </div>
                        <p>
                        <label>SECTOR:</label>
                        <div id="seleccion 3">
                            <input type="checkbox" value="1" id="sect-3-1" name="check" /> Privado<br/>
                            <input type="checkbox" value="2" id="sect-3-2" name="check" /> Publico<br/>
                            <input type="checkbox" value="3" id="tam-3-3" name="check" /> Social<br/> 
                        </div>
                        
                     
                        
                        <br>
                        <input type="radio" name="boton" value="local">Local &nbsp; <input type="radio" name="boton" value="foranea">Foranea &nbsp;
                        <label for="Estado"> ESTADO:</label> 
                        <input type="text" name="Estado" size=30><p>
                        </fieldset>
                        <p>
                                <p>
                                
                    </form>
                </div>

		</div>	

                    <p> Al firmar la presente solicitud, acepto plena y conscientemente mi interés y obligación por realizar mi Estadía en la empresa arriba señalada, entendido que, en caso contrario, podre afectuar un solo cambio si surgiese un problema ajeno a mis circunstancias, previa autorización. Así mismo estoy conciente y en acuerdo a lo que indica el Art.75 de nuestro reglamento escolar vigente.</p>04:58 p. m. 03/05/2022

</fieldset></center>
	<!--home end-->
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