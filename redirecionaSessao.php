<?php
	session_start();
	if(isset($_SESSION['email'])){
		if ($_SESSION['perfil'] == 1){
			header("Location: menuAdm.php");
		}
		
		if ($_SESSION['perfil'] == 0){
			header("Location: menuAtendente.php");
		}
	}
?>