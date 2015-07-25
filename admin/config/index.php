<?php include("../../includes/seguranca.php"); ?>
			<div id="formulario" align="center">
					
					<form action="" method="POST" enctype="multipart/form-data"> 
					
					<fieldset>
						<?php		include ('cadastro_user.php');		?>
							<label>
							<span>Nome:</span>
							<input type="text" name="nome" id="nome" />
							</label>
							
							<label>
							<span>E-mail:</span>
							<input type="text" name="email" id="email" />
							</label>
							
							<label>
							<span>Login:</span>
							<input type="text" name="login" id="login" />
							</label>
						
							<label>
							<span>Senha:</span>
							<input type="password" name="senha" id="senha" />
							</label>
							
							<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="btn" />
							<input type="reset" name="limpar" id="limpar" value="Limpar"  class="btn" />
						
					</fieldset>
					
					
					</form>
				
				
				
				</div><!--FORMULARIO-->
				