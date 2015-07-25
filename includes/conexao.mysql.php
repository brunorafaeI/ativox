<?php


	Class Mysql {

		private $host = 'localhost';
		private $user= 'root';
		private $passwd= 'brsilva!@#';
		private $database = 'ativo_x';
		private $con;
	
	function AbreConexao () {
		mysql_pconnect ($this->host, $this->user, $this->passwd) or die ("Não foi possível estabelecer uma conexão com o banco de dados.");
		mysql_select_db($this->database) or die( "Não foi possível se conectar ao banco de dados.");
	}


	$Mysql = new Mysql;
	$Mysql -> AbreConexao();
	
?>

