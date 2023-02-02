<?php 
include_once 'conexion.php';
	if(isset($_GET['id_Alumno_Expediente'])){
		$id_Alumno_Expediente=(int) $_GET['id_Alumno_Expediente'];
		$delete=$con->prepare('DELETE FROM Usuarios WHERE id_Alumno_Expediente=:id_Alumno_Expediente');
		$delete->execute(array(':id_Alumno_Expediente'=>$id_Alumno_Expediente));
		//header('Location: ../0_Menu/BD_General.php');
		echo "<script>
            alert('Todos los datos del alumno seleccionado fueron eliminados.');
                    window.location='../0_Menu/BD_General.php?page=Principal'
                  </script>";
	}else{
		header('Location: ../0_Menu/BD_General.php');
	}
 ?>