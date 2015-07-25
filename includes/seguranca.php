<?php 


$user = $_SESSION['username'];

//Verifica se o Usuário está logado, se não expulsa o usuário!
if (!isset($user)){
	
		header("Location: ../");
		exit;
		}
	
?>
