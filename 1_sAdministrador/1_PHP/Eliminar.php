<?php 
include_once 'conexion.php';
	if(isset($_GET['idSesion'])){
		$idSesion=(int) $_GET['idSesion'];
		$delete=$con->prepare('DELETE FROM  InicioSesion WHERE idSesion=:idSesion');
		$delete->execute(array(':idSesion'=>$idSesion));
		if(!empty($delete)){
		    echo "<script>
            alert('El usuario se eliminó');
                    window.location='../0_Menu/GestionUsuarios.php'
                  </script>";
		}else{
		    echo "<script>
            alert('El usuario no se pudo eliminar. Verifique el error con un Administrador');
                    window.location='../0_Menu/GestionUsuarios.php'
                  </script>";
		}
		
	}else{
	    echo "<script>
            alert('El usuario no se pudo eliminar. Contacte al administrador');
                    window.location='../0_Menu/GestionUsuarios.php'
                  </script>";
	}
 ?>