<?php	

		
		Class Conexao {
				private $host='localhost';
				private $user='postgres';
				private $pswd='mp@123';
				private $banco;
				private $strCon;
				private $con;
				private $sql;
			
		function Conexao ($banco) {
				$this->banco = $banco;
				$this->strCon = "host=$this->host	user=$this->user	password=$this->pswd	dbname=$this->banco";
		
		}
		function Open () {
				$this->con = @pg_connect($this->strCon);
		
		}
		function Close () {
				pg_close($this->con);
		
		}
		function StatusCon () {
				if($this->con) {
					echo ' - Conectado <br />';
				}else {
					echo ' - Desconectado <br />';
				exit();
			}
			
		
		}
		function amigavel(){
 		$url = $_GET['key'];
		$url = mysql_real_escape_string($url);
		$url = trim($url);
		$url = explode('/', $url);
		$url[0] = ($url[0] == NULL ? 'index' : $url[0]);
		
			if(file_exists('pasta-qualquer/'.$url[0].'.php')){
				 require_once('pasta-qualquer/'.$url[0].'.php');
			}elseif(file_exists('pasta-qualquer/'.$url[0].'/'.$url[1].'.php')){
				 require_once('pasta-qualquer/'.$url[0].'/'.$url[1].'.php');
			}
			else{
				 require_once('pasta-qualquer/404.php');
			}
	}
		
}



?>