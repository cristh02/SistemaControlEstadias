<?php
include_once 'conexion.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// $conexion=mysqli_connect("localhost", "root","", "InformacionAlumno");

if(!$con){
die("No se pudo conectar: ".mysqli_connect_error());
echo "<script>
				alert('Entra el administrado');
						window.location='../PagAdministrador.html'
					  </script>";
}else{
	echo "<script>
				alert('Entra el administrado');
						window.location='../PagAdministrador.html'
					  </script>";
// //Recuperamos datos con metodo post
// $correo =$_POST['txtcorreo'];
// $contrasena= $_POST['txtcontrasena'];
// //Hacemos consulta a las tablas de usuarios para verificar si existe en alguna
// $Administrador = mysqli_query($conexion, "SELECT * FROM Administrador WHERE correo = '$correo' AND contrasena = '$contrasena';");
// $Alumno = mysqli_query($conexion, "SELECT * FROM InicioSesion WHERE correo = '$correo' AND contrasena = '$contrasena' AND  bloqueo  != 0;");
// //los if comprueban si el resultado de la consulta es ese usuario y lo envia al su pagina
// if(mysqli_num_rows($Administrador) > 0) 
// {
//     session_start();
    
//         if (!isset($_SESSION['Administrador'])) 
//         {
//             $_SESSION['Administrador']="$Administrador";
//             /* nos envía a la siguiente dirección en el caso de no poseer autorización */
//             header("Location: ../PagAdministrador.html");
    
//         /* terminamos la ejecución ya que si redireccionamos ya no es necesario
//         seguir ejecutando código de este archivo */
//         exit();
//         }
// }else if(mysqli_num_rows($Alumno) > 0) 
// {
//     session_start();
    
//     if (!isset($_SESSION['Alumno'])) 
//     {
//         $_SESSION['Alumno']="$Alumno";
//     header("Location: ../PagAlumno.php");
    
//     exit();
//     } 
// }else{
//    /* Si no el usuario no se encuentra en ninguna de las tablas 
//    imprime el siguiente mensaje */
//    $mensajeaccesoincorrecto = "Usuario Bloqueado";
//    echo $mensajeaccesoincorrecto; 
// }
}
?>