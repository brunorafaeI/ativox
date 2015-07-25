<?php require_once("../includes/conexao.class.php"); 
							$conexao = new Conexao('ativox');
							$conexao->Open();
								
								//Criando variáveis para resgatar os dados do formulário.
								if (isset($_POST['cadastrar'])) {
								
								$nome = $_POST['nome'];
								$email = $_POST['email'];
								$login = $_POST['login'];
								$senha = MD5($_POST['senha']);
						
								
								//Verifica se o Login digitado já existe - SQL.
								$query = pg_query ("SELECT * FROM usuarios WHERE usr_login = '$login' ");
								$result = pg_num_rows($query);
								
								
								//Condição que irá verificar se já existe o usuário.
								if ($result == 0) {
								
								if ((($_POST['login']) == NULL ) || (($_POST['email']) == NULL ) || (($_POST['nome']) == NULL ) || (($_POST['senha']) == NULL )) {
								
								print '<div id ="alerta" class="no">Por favor, preenhca os campos corretamente.</div>';
								
								
								} else {
								//Comando SQL para inserir os dados do formulário ao banco de dados.
								pg_query("INSERT INTO usuarios (usr_nome, usr_email, usr_login, usr_senha) VALUES ('$nome', '$email', '$login', '$senha')");
								print '<div id ="alerta" class="yes">Cadastro realizado com sucesso!</div> ';
								
								}
								}else {
								
									echo '<div id ="alerta" class="no">Login já existe.</div> ';
									echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=index.php?pg=05Configuracoes&MinhaConta"">';
								}
								
								} else {
								
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="360; URL=index.php?pg=05Configuracoes&MinhaConta"">';
								
								}
								$conexao->Close();
								?>