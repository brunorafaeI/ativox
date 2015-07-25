<?php require_once("../includes/conexao.class.php"); 
						$conexao = new Conexao('ativox');
						$conexao->Open();
						$id = $_GET['id'];
						
				
									
								//Comando SQL para inserir os dados do formulário ao banco de dados.
								pg_query("DELETE FROM usuarios_mpnet  WHERE net_id = '$id' ")or die("Não foi possível excluir ou deletar os dados.");
								print '<meta HTTP-EQUIV="Refresh" CONTENT="000; URL=index.php?acao=excluido&page='.$pagina.'">';
								
								
								
								
								$conexao->Close();
								?>