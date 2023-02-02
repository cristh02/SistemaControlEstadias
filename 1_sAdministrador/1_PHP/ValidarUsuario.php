<?php
$conexion=mysqli_connect("localhost", "id16726646_informaionalumnos","!yu?BTFx3SSeLxr/", "id16726646_informacionalumnos");

if(!$conexion){
die("No se pudo conectar: ".mysqli_connect_error());
}else{
//Recuperamos datos con metodo post
$correo =$_POST['txtcorreo'];
$contrasena= $_POST['txtcontrasena'];
session_start();
$_SESSION['txtcorreo']=$correo;
$_SESSION['txtcontrasena']=$contrasena;
//Hacemos consulta a las tablas de usuarios para verificar si existe en alguna
$Administrador = mysqli_query($conexion, "SELECT * FROM Administrador WHERE correo = '$correo' AND contrasena = '$contrasena';");
$Alumno = mysqli_query($conexion, "SELECT * FROM InicioSesion WHERE correo = '$correo' AND contrasena = '$contrasena';");
//$OtraArea = mysql_query("SELECT * FROM directores WHERE director = '$correo' AND password = '$password'");
//los if comprueban si el resultado de l consulta es ese usuario y lo envia al su pagina
if(mysqli_num_rows($Administrador) > 0) 
{
    
    
        if (!isset($_SESSION['Administrador'])) 
        {
            //$_SESSION['Administrador']="$Administrador";
            /* nos envía a la siguiente dirección en el caso de no poseer autorización */
            header("Location: ../PagAdministrador.php");
    
        /* terminamos la ejecución ya que si redireccionamos ya no es necesario
        seguir ejecutando código de este archivo */
        exit();
        }
}else if(mysqli_num_rows($Alumno) > 0) 
{
    
    if (!isset($_SESSION['Alumno'])) 
    {
        $consulta="SELECT idSesion,NombreSesion,id_Usuarios FROM InicioSesion WHERE correo = '$correo';";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado = mysqli_query($conexion,$consulta)){
            while($row = mysqli_fetch_assoc($resultado)){
                $_SESSION['id']= $row['idSesion'];
                $_SESSION['Sesion']= $row['NombreSesion'];
                $_SESSION['idU']= $row['id_Usuarios'];
            }
        //$_SESSION['id']=(String)$ID;
        header("Location: ../../2_sAlumno/PagAlumno.php");
        }
    
    exit();
    } 
}
/*else if(mysql_num_rows($director) > 0) //La rason por la que las lineas de codigo de OtraArea estan comentados
                                         //es porque aún no existe sus archivos en pagina
{
    session_start();
    $_SESSION['OtraArea']="$OtraArea";
    if (!isset($_SESSION['OtraArea'])) 
    {
    header("Location: ");
    }
    exit();
} */
else 
{
   /* Si no el usuario no se encuentra en ninguna de las tablas 
   imprime el siguiente mensaje */
   echo "<script>
            alert('El usuario y la contraseña son incorrectos, por favor verifica tus datos.');
                    window.location='../../student.php?page=Login'
                  </script>";
}
} 
/*
$consulta="SELECT * FROM InicioSesion WHERE correo='$correo' AND contrasena='$contrasena';";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
session_start();

//$_SESSION['txtusuario'];
//$_SESSION['txtcontrasena'];
if($filas>0){
header("Location: ../PagAdministrador.html");
}else{
    header("Location: ../Login.html");
}

}
mysqli_free_result($resultado);
msyqli_close($conexion);*/
?>