<!DOCTYPE html>
<HTML Lang="es">
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Área de Vinculación y Estadías</title>
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
                           <a class="nav-item nav-link" href="BD_General.php">Tabla_General</a>
                           <!--<a class="nav-item nav-link" href="BD_Inicial.php">Tabla Dinámica</a>-->
                           <a class="nav-item nav-link" href="GestionUsuarios.php">Editar_usuarios</a>
                           <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;"href="">Documento</a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!--home start-->
	<div class="ContenedorC">
	   <table class="Format">
                <tr>
                    <td><center><h1>FORMATO DE SOLICITUD DE ESTADIAS UTSV</h1></center></td>
                </tr>
                <tr>
                    <td><center><h1 id="segundo">UTSV-DVI-FO-02</h1></center></td>
                </tr>
                <tr>
                    <td><p style="text-align:right;">Nanchital, ver. </p></td>
                </tr>
                <tr>
                    <td><p style="text-align:right;">Fecha: <input type="date" name="fecha" > </p></td>
                </tr>
                <tr>
                    <td><h4>DRA.SILVIA ELENA LÒPEZ VALLEJO </h4>
                    <h4>DIRECTORA DE VINCULACIÓN </h4>
                    <h4>PRESENTE.-</h4></td>
                </tr>
                <tr>
                    <td><p>Solicito su apoyo para que se pueda elaborar la carta de presentación para mis Estadias.</p>
                    <p>Los datos son los siguientes:</p>
                    </td>
                </tr>
                <tr>
                       <td><legend> DATOS DE LA EMPRESA</legend>
                        <label for="nombre">Nombre de la Empresa:</label>
                        <input type="text" name="nombre" required></td>
                </tr>
                <tr>
                    <td><label>GIRO:</label>
                        <p>
                        <div id="seleccion 1">
                            <input type="checkbox" value="1" id="giro-1-1" name="check" /> Industrial<br/>
                            <input type="checkbox" value="2" id="giro-1-2" name="check" /> Comercial<br/>
                            <input type="checkbox" value="3" id="giro-1-3" name="check" /> Servicios<br/>
                        </div></td>
                </tr>
                <tr>
                    <td><label>TAMAÑO:</label>
                        <div id="seleccion 2">
                            <input type="checkbox" value="1" id="tam-2-1" name="check" /> Micro<br/>
                            <input type="checkbox" value="2" id="tam-2-2" name="check" /> Pequeña<br/>
                            <input type="checkbox" value="3" id="tam-2-3" name="check" /> Mediana<br/>
                            <input type="checkbox" value="4" id="tam-2-4" name="check" /> Grande <br/>
                        </div></td>
                </tr>
                <tr>
                    <td><label>SECTOR:</label>
                        <div id="seleccion 3">
                            <input type="checkbox" value="1" id="sect-3-1" name="check" /> Privado<br/>
                            <input type="checkbox" value="2" id="sect-3-2" name="check" /> Publico<br/>
                            <input type="checkbox" value="3" id="tam-3-3" name="check" /> Social<br/> 
                        </div></td>
                </tr>
                <tr>
                    <td>
                        <label for="Dirigido"> Dirigido a: </label> <input type="text" name="Dirigido" size=50 required>
                        <p> 
                        <label for="Cargo"> Cargo:</label>
                        <input type="text" name="Cargo" size=60 required>
                        <p>
                        <label for="Direc"> Dirección: </label>
                        <input type="text" name="Direc" size=60>
                        <br>
                        <p><label for="Municipio"> Municipio:</label> <input type="text" name="Municipio" size=40>
                        <p> <label> E-mail:</label>  <input type="email" name="correo"  size=20 required>
                        <p>
                        <p><label>Telefono:</label> <input type="tel" name="telefono">
                        <p>
                        <label for="RFC">RFC:</label>  
                        <input type="text" name="CURP" required onkeyup="this.value=this.value.toUpperCase();">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="boton" value="local">Local &nbsp; <input type="radio" name="boton" value="foranea">Foranea &nbsp;
                        <label for="Estado"> ESTADO:</label> 
                        <input type="text" name="Estado" size=30><p></td>
                </tr>
                <tr>
                    <td><legend> DATOS DEL ALUMNO</legend>
                        <label for="Nombre">Nombre del Alumno:</label>
                        <input type="text" name="Nombre" size=30 required ></td>
                </tr>
                <tr>
                    <td><label>Carrera:</label>
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
                        </select> </td>
                </tr>
                <tr>
                    <td><label for="Grup"> Grupo:</label>  <input type="text" name="Grup" size=10 required> 
                                <p>
                               <label for="Matricula">Matricula </label>
                               <input type="text" name="Matricula" size=20 required>  <p> 
                               <label for="Periodo"> Periodo de Estadia:  
                               <input type="text" name="Periodo" size=30 required>
                               <p>
                               <p>E-mail: <input type="email" name="correo" size=40> 
                               <p> Celular: <input type="tel" name="telefono"></td>
                </tr>
                <tr>
                    <td><label> Municipio: </label>
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
                </tr>
                <tr><td>
                    <label for="CURP">CURP</label> 
                                <input type="text" name="CURP" required onkeyup="this.value=this.value.toUpperCase();"></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn btn__update" value="Enviar Formulario" class="button"></td>
                </tr>
            </table>
        </div>
                    <p> Al firmar la presente solicitud, acepto plena y concientemente mi interés y obligación por realizar mi Estadía en la empresa arriba 
                        señalada, entendido que, en caso contrario, podre afectuar un solo cambio si surgiese un problema ajeno a mis circunstancias, previa 
                        autorización. Así mismo estoy conciente y en acuerdo a lo que indica el Art.75 de nuestro reglamento escolar vigente.</p>
	</div>
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
      
    </BODY>
</HTML>