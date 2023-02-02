<?php 
include_once 'conexion.php';
	if(isset($_POST['guardar'])){
		$Periodo=$_POST['Periodo'];
		$PAterno=$_POST['PAterno'];
		$MAterno=$_POST['MAterno'];
		$Nombre=$_POST['Nombre'];
        $Generacion=$_POST['Generacion'];
		$Extencion=$_POST['Extencion'];
		$Modalidad=$_POST['Modalidad'];
		$Grupo=$_POST['Grupo'];
		$id_Alumno_Expediente=$_POST['id_Alumno_Expediente'];
		$Carrera=$_POST['Carrera'];
		$Matricula=$_POST['Matricula'];
        $NomCompleto=$_POST['PAterno'].' '.$_POST['MAterno'].' '.$_POST['Nombre'];//Concatenación del nombre
    	$Genero=$_POST['Genero'];
    	$Celular=$_POST['Celular'];
    	$correo=$_POST['correo'];
        $Curp=$_POST['Curp'];
		$Festividad=$_POST['Festividad'];
		$edad=$_POST['edad'];
		$Induccion=$_POST['Induccion'];
		$PreRegistro=$_POST['PreRegistro'];
		$SoliciEstadia=$_POST['SoliciEstadia'];
		$ConsentSeguro=$_POST['ConsentSeguro'];
		$Empresa=$_POST['Empresa'];
		$Destinatario=$_POST['Destinatario'];
		$Giro=$_POST['Giro'];
		$Tamano=$_POST['Tamano'];
		$Sector=$_POST['Sector'];
		$Dirigido=$_POST['Dirigido'];
		$Cargo=$_POST['Cargo'];
		$Direccion=$_POST['Direccion'];
		$Municipio=$_POST['Municipio'];
		$EstatusSE=$_POST['EstatusSE'];
		$Estado=$_POST['Estado'];
		$LocalForane=$_POST['LocalForane'];
		$Telefono=$_POST['Telefono'];
		$Email=$_POST['Email'];
		$RFC=$_POST['RFC'];
		$SeguroDeVida=$_POST['SeguroDeVida'];
		$CartPresentacion=$_POST['CartPrecentacion'];
		$CartAceptacion=$_POST['CartAceptacion'];
		$Compromiso_DC=$_POST['Compromiso_DC'];
		$Encuesta=$_POST['Encuesta'];
		$Liberacion=$_POST['Liberacion'];
               
		if(!empty($Periodo) && !empty($PAterno) && !empty($MAterno) && !empty($Nombre) && !empty($Generacion) && !empty($Extencion) && !empty($Modalidad) && !empty($Carrera) && !empty($Matricula) && !empty($NomCompleto) && !empty($Genero) && !empty($Curp) ){

			//if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			//echo "<script> alert('Correo no valido');</script>";
			//}else{

$consulta_insert=$con->prepare('INSERT INTO Usuarios(Periodo,PAterno,MAterno,Nombre,Generacion,Extencion,Modalidad,Carrera,Matricula,NomCompleto,Genero,Curp,Festividad,edad,Induccion,
PreRegistro,SoliciEstadia,ConsentSeguro,Empresa,Giro,Tamano,Sector,Dirigido,Cargo,Direccion,Municipio,Estado,LocalForane,Telefono,Email,RFC,SeguroDeVida,CartPrecentacion,
CartAceptacion,Compromiso_DC,Encuesta,Liberacion) 
VALUES (:Periodo,:PAterno,:MAterno,:Nombre,:Generacion,:Extencion,:Modalidad,:Carrera,:Matricula,:NomCompleto,:Genero,:Curp,:Festividad,:edad,:Induccion,:PreRegistro,
:SoliciEstadia,:ConsentSeguro,:Empresa,:Giro,:Tamano,:Sector,:Dirigido,:Cargo,:Direccion,:Municipio,:Estado,:LocalForane,:Telefono,:Email,:RFC,
:SeguroDeVida,:CartPrecentacion,:CartAceptacion,:Compromiso_DC,:Encuesta,:Liberacion)');

				$consulta_insert->execute(array(
					':Periodo' =>$Periodo,
					':PAterno' =>$PAterno,
					':MAterno' =>$MAterno,
					':Nombre' =>$Nombre,
                    ':Generacion' =>$Generacion,
					':Extencion' =>$Extencion,
					':Modalidad' =>$Modalidad,
					':Grupo' =>$Grupo,
					':id_Alumno_Expediente' =>$id_Alumno_Expediente,
					':Carrera' =>$Carrera,
                    ':Matricula' =>$Matricula,              
                    ':NomCompleto' =>$NomCompleto,
                    ':Genero' =>$Genero,
                    ':Celular' =>$Celular,
                    ':correo' =>$correo,
                    ':Curp' =>$Curp,
					':Festividad'=>$Festividad,
					':edad'=>$edad,
					':Induccion'=>$Induccion,
					':PreRegistro'=>$PreRegistro,
					':SoliciEstadia'=>$SoliciEstadia,
					':ConsentSeguro'=>$ConsentSeguro,
					':Empresa'=>$Empresa,
					':Giro'=>$Giro,
					':Tamano'=>$Tamano,
					':Sector'=>$Sector,
					':Dirigido'=>$Dirigido,
					':Cargo'=>$Cargo,
					':Direccion'=>$Direccion,
					':Municipio'=>$Municipio,
					':Estado'=>$Estado,
					':LocalForane'=>$LocalForane,
					':Telefono'=>$Telefono,
					':Email'=>$Email,
					':RFC'=>$RFC,
					':SeguroDeVida'=>$SeguroDeVida,
					':CartPrecentacion'=>$CartPresentacion,
					':CartAceptacion'=>$CartAceptacion,
					':Compromiso_DC'=>$Compromiso_DC,
					':Encuesta'=>$Encuesta,
					':Liberacion'=>$Liberacion
				));

				header('Location: ../0_Menu/BD_General.php');
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
	<title>Registro de Alumno</title>
	<link rel="stylesheet" href="../3_CSS/estilos.css"
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
		<form action="" method="post">
			<center><div class="form-group">
				<a>Periodo</a><br>
				<input type="Number" maxlength="2" name="Periodo" placeholder="Ejemplo '10'" class="input__text">
			</div>
			<div class="form-group">
				<a>Apellido Paterno</a><br>
				<input type="text" name="PAterno" placeholder="Ejemplo 'Hernández'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Apellido Materno</a><br>
				<input type="text" name="MAterno" placeholder="Ejemplo 'Gomez'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="form-group">
				<a>Nombre</a><br>
				<input type="text" name="Nombre" placeholder="Ejemplo 'Claudia Elena'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Generación</a><br>
                <input type="text" maxlength="9"  name="Generacion" placeholder="Ejemplo '2018-2020'" class="input__text">
			</div>
			<div class="btn__group">
				<a>Extención</a><br>
                <!--<input type="text" name="Extencion" placeholder="Ejemplo 'Nanchital'" class="input__text">-->
                <select type="text" name="Extencion" class="input__text">
                    <option>Agua Dulce</option>
                    <option>Angel R Cabada</option>
                    <option>Nanchital</option>
                </select>
				<br><a>Modalidad</a><br>
                <select type="text" name="Modalidad" class="input__text">
                    <option>Escolarizado</option>
                    <option>Despresurizado</option>
                    <option>Reincorporado Esc</option>
                    <option>Reincorporado Desp</option>
                </select>
			</div>
			<div class="form-group">
			<br><a>Expediente</a><br>
                <input type="text" name="id_Alumno_Expediente" class="input__text" disabled><br>
                <br><a>Grupo</a><br>
                <input type="text" name="Grupo" placeholder="101'" maxlength="5" class="input__text">
            </div>
			<div class="btn__group">
				<a>Carrera</a><br>
                <select type="text" name="Carrera" class="input__text">
                    <option>TSU en TIC</option>
                    <option>TSU en Mantenimiento Industrial</option>
                    <option>TSU Mecatrónica</option>
                    <option>TSU QUIMICA</option>
                    <option>ING. EN TECNOLOGÍAS DE LA INFORMACIÓN</option>
                    <option>ING. EN MANTENIMIENTO INDUSTRIAL</option>
                    <option>ING. MECATRONICA</option>
                    <option>ING. QUÍMICA</option>
                </select>
				<br><a>Matricula</a><br>
                <input type="Number" name="Matricula" placeholder="Ejemplo '17180500'" class="input__text">
			</div>
			<div class="btn__group">
				<!--<a>Nombre Completo</a><br>
                  no es necesario pues eN el array concatenamos el nombre
				 <br>--><a>Genero</a><br>
                <select type="text" name="Genero" class="input__text">
                    <option>HOMBRE</option>
                    <option>MUJER</option>
                </select>
			</div>
			<div class="form-group">
			<br><a>Celular</a><br>
                <input type="text" name="Celular" class="input__text" maxlength="10" minlength="10"><br>
                <br><a>Grupo</a><br>
                <input type="text" name="correo"  maxlength="5" class="input__text">
            </div>
			<div class="btn__group">
				<a>Curp</a><br>
            <input type="text" maxlength="18" name="Curp" placeholder="Ejemplo 'HGCL000212HVZLNRA5'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">           
			</div>
			<div>
				<a>Fecha de nacimiento</a><br>
				<input type="date" maxlength="8" name="Festividad" placeholder="Ejemplo '2000-04-30'" class="input__text">
				<br><a>Edad</a><br>
				<input type="Number" max="99" name="edad" placeholder="Ejemplo '21'" class="input__text">
			</div>
			<div>
				<a>Fecha de inducción</a><br>
				<input type="date" name="Induccion" class="input__text">
				<br><a>Pre-registro</a><br>
				<select type="text" name="PreRegistro" class="input__text">
                    <option>SI</option>
                    <option>NO</option>
                </select>
			</div>
			<div>
				<a>Solicitud de estadía</a><br>
				<select type="text" name="SoliciEstadia" class="input__text">
                    <option>SI</option>
                    <option>NO</option>
                </select></input>
				<br><a>Consentimiento de Seguro</a><br>
				<select type="text" name="ConsentSeguro" class="input__text">
                    <option>SI</option>
                    <option>NO</option>
                </select>
			</div>
			<div>
				<a>Empresa</a><br>
				<input type="text" name="Empresa" placeholder="Ejemplo 'Braskem Idesa'" class="input__text">
				<br><a>Giro</a><br>
				<input type="text" maxlength="9" name="Giro" placeholder="Ejemplo 'Servicio'" class="input__text">
			</div>
			<div>
				<a>Tamaño</a><br>
				<input type="text" maxlength="7" name="Tamano" placeholder="Ejemplo 'Mediana'" class="input__text">
				<br><a>Sector</a><br>
				<input type="text" maxlength="7" name="Sector" placeholder="Ejemplo 'Productivo'" class="input__text">
			</div>
			<div>
				<a>Dirigido a</a><br>
				<input type="text" name="Dirigido" placeholder="Ejemplo 'LIC. José Hermida Mijangos'" class="input__text">
				<br><a>Cargo</a><br>
				<input type="text" name="Cargo" placeholder="Ejemplo 'Recursos Humanos'" class="input__text">
			</div>
			<div>
				<a>Direccion</a><br>
				<input type="text" name="Direccion" placeholder="Ejemplo 'Calle obrera Col. 18 de Marzo #3 97750'" class="input__text" >
				<br><a>Municipio</a><br>
				<input type="text" name="Municipio" placeholder="Ejemplo 'Coatzacoalcos'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Estado</a><br>
				<input type="text" name="Estado" placeholder="Ejemplo 'Veracruz'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Local o Foranea</a><br>
				<select type="text" name="LocalForane" class="input__text">
                    <option>Local</option>
                    <option>Foranea</option>
                </select>
			</div>
			<div>
				<a>Telefono</a><br>
				<input type="Number" name="Telefono" placeholder="Ejemplo '9261124400'" class="input__text">
				<br><a>Email</a><br>
				<input type="text" name="Email" placeholder="Ejemplo 'OlivaCE1320@hotmail.com'" class="input__text">
			</div>
			<div>
				<a>RFC</a><br>
				<input type="text" maxlength="13" name="RFC" placeholder="Ejemplo '445633377753'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Seguro de vida</a><br>
				<select type="text" name="SeguroDeVida" class="input__text">
                    <option>SI</option>
                    <option>NO</option>
                </select>
			</div>
			<div>
				<a>Carta de Precentación</a><br>
                <input type="date" name="CartPrecentacion" class="input__text">
				<br><a>Carta de aceptación</a><br>
                <input type="date" name="CartAceptacion" class="input__text">
			</div>
			<div>
				<a>Compromiso DC</a><br>
                <input type="date" name="Compromiso_DC" class="input__text">
				<br><a>Encuesta</a><br>
				<select type="text" name="Encuesta" class="input__text">
                    <option>SI</option>
                    <option>NO</option>
                </select>
			</div>
			<div>
				<a>Liberacion</a><br>
				 <input type="date" name="Liberacion" class="input__text">
				 <br><a>Estatus S.E.</a><br>
				<input type="text" name="EstatusSE" class="input__text">
			</div>
			<div class="btn__group">
				<a href="../0_Menu/BD_General.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
			</center>
		</form>
	</div>
</body>
</html>
