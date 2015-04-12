<?php
	require("constantes.php");
	// Comando que me sirvió para debuggear unos errores que tenía en un servidor
	// al que subí un sistema, lo dejo por si llega a surgir algún problema.
	// mysqli_report(MYSQLI_REPORT_OFF);
	$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	$conn->set_charset("utf8");
	if ($conn->connect_errno > 0) {
		die("Error al conectar a la base de datos: [" . $conn->connect_error . "]");
	}
?>