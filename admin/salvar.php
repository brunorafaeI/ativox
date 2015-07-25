	<?php require_once("../includes/conexao.class.php"); 
						$conexao = new Conexao('ativox');
						$conexao->Open();
						$id = $_GET['id'];
					
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
										if (isset($_POST['salvar'])) {
										
										foreach ($_POST as $campos=>$dados) {
										
										$$campos = $dados;
											
										//print '<span style="text-transform:capitalize">'.$campos.': </span>'. $dados . "<br />" ;
										
										}
										
										}
										
									
								//Comando SQL para inserir os dados do formulário ao banco de dados.
								$query = pg_query("UPDATE usuarios_mpnet  SET net_nome = '$nome', net_tele = '$telefone', net_end = '$endereco', net_mac = '$mac', net_ip_1 = '$ip_1', net_ip_2 = '$ip_2', net_equip = '$tipo_equip', net_tipo_user = '$tipo_user' WHERE net_id = '$id' ")or die("Não foi possível inserir dados");
								print '<meta HTTP-EQUIV="Refresh" CONTENT="000; URL=index.php?acao=editado&page='.$pagina.'">';
								} 
								
								
								?>