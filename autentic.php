<?php
					
						require_once("includes/conexao.class.php"); 
						 $conexao = new Conexao('ativox');
						 $conexao->Open();
						 
						 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
							if (isset($_POST['entrar'])) {
							
								$login = $_POST['login'];
								$senha = $_POST['senha'];
								
																
								//verifica se o login e a senha existe no banco de dados.
								
								if  (empty($login) || empty($senha)) {
								
								print '<div  class="no">Por favor, preenhca os campos corretamente.</div> ';
								
																
								} else {
								$sql="SELECT * FROM usuarios WHERE (usr_login, usr_senha) = ('$login', md5('$senha'))";	
								$query= pg_query($sql);
								$result = pg_fetch_object($query);
								
																
								if (!empty($result)) {
								
										
										print '<meta HTTP-EQUIV="Refresh" CONTENT="00; URL=/ativox/admin">';
										
									
									$_SESSION['username'] = $result->usr_nome;
									$_SESSION['useremail'] = $result->usr_email;
									
									
									
				
								
								} else {
									
									print '<div class="no">Por favor, verifique seu nome de usuário ou senha.</div>';
									
								}
							}
								
							} else {
							
								print '<meta HTTP-EQUIV="Refresh" CONTENT="060; URL=/ativox">';
								
														
							}
							}
							
							
							?>