<?php
	$database="id16726646_informacionalumnos";
	$user='id16726646_informaionalumnos';
	$password='!yu?BTFx3SSeLxr/';
try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}
?>