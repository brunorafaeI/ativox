			<?php include("../includes/seguranca.php"); ?>	
		<div id="form" align="center">
				
					<form action="" method="POST" enctype="multipart/form-data"> 
					
							<?php include ('valid_cad_equip.php'); ?>
								<table>
								
									<tr>
								<td>
									<label>Nome do Equipamento</label><br />
							<input type="text" name="nome" id="nome"  maxlength="100" required /></td>
								<td>
								<label>Endereço de IP</label><br />
							<input type="text" name="ip" id="ip"  maxlength="15" required />
							</td></tr>
								<tr>
								<td colspan="3">
							<input type="submit" name="cadastrar" value="Cadastrar" class="btn" />
							<input type="reset" name="limpar" value="Limpar"  class="btn" /></td></tr>	
						</table>
										
					
					</form>
						
				
				
				</div><!--FORMULARIO-->
				