<?php
//include_once 'conexion.php';
$usuario = "id16726646_informaionalumnos";
$contrasena = "!yu?BTFx3SSeLxr/";  
$servidor = "localhost";
$basededatos = "id16726646_informacionalumnos";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos );// agregé Base dedatos innecesariamente

if(!$conexion){
	echo"No se estableció la conexión.";
}else{
	$base=mysqli_select_db($conexion,$basededatos);
	if(!$base){
		echo"No se encontro la Base de Datos solicitada.";
	}else{
    $Matricula =$_POST['Matricula'];
        if (isset($Matricula)) {
	        $ejecutar = mysqli_query($conexion, "SELECT id_Alumno_Expediente FROM Usuarios
	        WHERE Matricula LIKE '%$Matricula%'");
            $filas = mysqli_num_rows($ejecutar);
            if ($filas === 0) {
	            $mensaje = "<p>No hay registro de alumno con esa matricula</p>";
            }else{
	            while($resultados = mysqli_fetch_array($ejecutar)) {
	            $id_Alumno_Expediente = $resultados['id_Alumno_Expediente'];
                $Usuario =$_POST['NombreSesion'];//para inicio sesion
                $contra1=$_POST['Contra'];
                $Contra2 =$_POST['Contras'];
            if ($contra1!==$Contra2) {
	            echo "<script>
		        alert('Las contraseñas lo coinciden');
				    window.location='../../clients.php?page=Registrarse'
			      </script>";
            }else{
	        $correo =$_POST['email'];
        	$contrasena = $contra1;
        //	$Nombre =$_POST['Nombre'];
        //  $ApePaterno =$_POST['Apaterno'];
	        $Matricula =$_POST['Matricula'];
	        $Celular =$_POST['Celular'];

            $ejecutar=mysqli_query($conexion,$sql="INSERT INTO InicioSesion ( NombreSesion, Correo, Contrasena, Celular, id_Usuarios) VALUES ('$Usuario','$correo','$contrasena','$Celular','$id_Alumno_Expediente ');");
                if(!$ejecutar){
	                echo"Tus datos no se pudieron guardar".mysqli_connect_error();
                }else{	
	                $conexion->close();
	                echo "<script>
				    alert('Fuiste registrado exitosamente');
				    		window.location='../../clients.php?page=Registrarse'
					   </script>";
		            header("Location: ../../clients.php");
                }// quiero poner un alert decir que se confirmó exisotamente su registro
            }
                }//Fin while $resultados

            } //Fin else $filas
            echo "<script>
			alert('No pudimos registrarte *Dirigere al area de Vincuación*');
				window.location='../../clients.php?page=Registrarse'
			  </script>";
        }
    }
}
?>