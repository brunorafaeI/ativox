<?php require_once("../includes/conexao.class.php"); 
						$conexao = new Conexao('ativox');
						$conexao->Open();
								
									if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
										if (isset($_POST['cadastrar'])) {
										foreach ($_POST as $campos=>$dados) {
										
										$$campos = $dados;
										
										
										}
										
										}
										
										$sql = "SELECT net_mac FROM usuarios_mpnet WHERE net_mac = '$mac' OR net_nome= '$nome' OR net_mac='$mac' AND net_nome='$nome' ";
										$query = pg_query($sql);
										$result = pg_fetch_array($query);
								
								if ($result == 0) {
								
								if (empty($_POST['nome'])) {
								
								echo '<div id ="alerta" class="no">Por favor, preenhca os campos corretamente.</div> ';
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="02; URL=index.php?pg=01Cadastro&Usuarios">';
								
								
								} else {
								//Comando SQL para inserir os dados do formulário ao banco de dados.
								pg_query("INSERT INTO usuarios_mpnet (net_nome, net_tele, net_end, net_mac, net_ip_1, net_ip_2, net_equip, net_tipo_user) VALUES ('$nome','$telefone','$endereco','$mac','$ip_1','$ip_2','$tipo_equip','$tipo_user') ")or die("Não foi possível inserir dados");
								echo '<div id ="alerta" class="yes">Cadastro realizado com sucesso!</div> ';
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=index.php?pg=01Cadastro&Usuarios"">';
								}
								} else {
								
									echo '<div id ="alerta" class="no">MAC Address já cadastrado!</div> ';
									echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=index.php?pg=01Cadastro&Usuarios"">';
								}
								
								} 
								
								
								?>