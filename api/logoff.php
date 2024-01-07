<?php
	session_start();
	session_destroy();
	header('Location: index.php?Login=erro2');
?>