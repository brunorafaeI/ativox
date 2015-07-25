<?php require_once("../includes/conexao.class.php"); 
						$conexao = new Conexao('ativox');
						$conexao->Open();
								
								
								if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
										if (isset($_POST['cadastrar'])) {
										
											foreach ($_POST as $campos=>$dados) {
											$$campos = $dados;
												
										}
										
											if($_POST['nome'] == NULL || $_POST['ip'] == NULL ) {
												print '<div id ="alerta" class="no">Por favor, preenhca os campos corretamente.</div> ';
												echo '<meta HTTP-EQUIV="Refresh" CONTENT="02; URL=index.php?pg=02Cadastro&Equipamentos">';
											
											} else {
											//Comando SQL para inserir os dados do formulário ao banco de dados.
												$sql = "SELECT equip_ip FROM equipamentos WHERE equip_ip='$ip'";
												$query = pg_query($sql);
												$result = pg_fetch_object($query);
											
											
											if ($result == 0) {
												pg_query("INSERT INTO equipamentos (equip_nome, equip_ip) VALUES ('$nome','$ip') ")or die("Não foi possível inserir dados");
												echo '<div id ="alerta" class="yes">Cadastro realizado com sucesso!</div> ';
												echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=index.php?pg=02Cadastro&Equipamentos"">';
											
											} else{
								
											echo '<div id ="alerta" class="no">Número de ip já existe!</div> ';
											echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=index.php?pg=02Cadastro&Equipamentos"">';
										}					
										
										
										
																			
										
										
								} 
										
																
								} else {
								
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="260; URL=index.php?pg=02Cadastro&Equipamentos"">';
																
								}
								}
								$conexao->Close();
								?>