<?php
	session_start();
	if ($_SESSION['autenticado']===false || !isset($_SESSION['autenticado'])) {
		
		header("Location: ../index.php?Login=erro2");
	}
?>