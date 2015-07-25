<?php require_once("../../includes/conexao.php"); 
								
								//Criando variáveis para resgatar os dados do formulário.
								if (isset($_POST['cadastrar'])) {
								
								$nome = $_POST['nome'];
								$email = $_POST['email'];
								$login = $_POST['login'];
								$senha = MD5($_POST['senha']);
						
								
								//Verifica se o Login digitado já existe - SQL.
								$query = mysql_query ("SELECT * FROM usuarios WHERE login = '$login' ");
								$result = mysql_num_rows($query);
								
								
								//Condição que irá verificar se já existe o usuário.
								if ($result == 0) {
								
								if ((($_POST['login']) == NULL ) || (($_POST['email']) == NULL ) || (($_POST['nome']) == NULL ) || (($_POST['senha']) == NULL )) {
								
								echo '<div class="no">Por favor, preenhca os campos corretamente.</div> ';
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="004; URL=/ativox/admin/cadastro">';
								
								} else {
								//Comando SQL para inserir os dados do formulário ao banco de dados.
								mysql_query("INSERT INTO usuarios (nome, email, login, senha) VALUES ('$nome', '$email', '$login', '$senha')");
								echo '<div class="yes">Cadastro realizado com sucesso!</div> ';
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=/ativox/admin/cadastro">';
								}
								}else {
								
									echo '<div class="no">Login já existe.</div> ';
									echo '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=/ativox/admin/cadastro">';
								}
								
								} else {
								
								echo '<meta HTTP-EQUIV="Refresh" CONTENT="030; URL=/ativox/admin/cadastro">';
								
								}
								
								?>