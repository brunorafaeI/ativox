			<?php include("../includes/seguranca.php"); ?>
			<div id="form" align="center">
				
					<form action="" method="POST" enctype="multipart/form-data"> 
					
					
							<?php		include ('valid_conta.php');		?>
								<table>
									<tr>
								<td>
									<label>Nome</label><br />
							<input type="text" name="nome" id="nome" size="40" maxlength="100" required /></td>
								<td>
							<label>E-mail</label><br />
							<input type="email" name="email" id="email" size="40" maxlength="100" required /></td></tr>
								<tr>
								<td>
							<label>Login</label><br />
							<input type="text" name="login" id="login" size="40" maxlength="50" required /></td>
								<td>
							<label>Senha</label><br />
							<input type="password" name="senha" id="senha" size="40" maxlength="100" required /></td></tr>
								<tr>
								<td colspan="3">
							<input type="submit" name="cadastrar"  value="Cadastrar" class="btn" />
							<input type="reset" name="limpar" value="Limpar"  class="btn" /></td></tr>	
						</table>
					
					
					
					</form>
						
				
				
				</div><!--FORMULARIO-->
				