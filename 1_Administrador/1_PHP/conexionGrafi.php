﻿<?php
$con = new mysqli("localhost", "root", "1234", "informacionalumno");
if ($con->connect_errno)
{
	echo "Fallo al contenctar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
?>
