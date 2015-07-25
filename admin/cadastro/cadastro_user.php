			<?php include("../includes/seguranca.php"); ?>
			
			
			<div id="form" align="center">
				
					<form action="" method="POST" enctype="multipart/form-data"> 
					
						<?php		include ('valid_cad_user.php');		?>
								<table>
								
									<tr>
								<td>
									<label>Nome</label><br />
							<input type="text" name="nome" id="nome"  maxlength="100" required/></td>
								<td>
								<label>Telefone</label><br />
							<input type="text" name="telefone" id="telefone"  maxlength="100" />
							</td></tr>
								<tr>
								<td>
							<label>Endereço</label><br />
							<input type="text" name="endereco" id="endereco"  maxlength="80" /></td>
								<td>
								<label>MAC Address</label><br />
							<input type="text" name="mac" id="mac"  maxlength="100" required/>
								</td></tr>
							<tr>
								<td>
								<label>IP (Primário)</label><br />
							<input type="text" name="ip_1" id="ip_1"  maxlength="100" /></td>
								<td>
								<label>IP (Secundário)</label><br />
							<input type="text" name="ip_2" id="ip_2"  maxlength="50" /></td></tr>
							<tr>
								<td>
							<label>Radio</label><br />
							<select name="tipo_equip" required> 
							<option></option>
							<?php
							$sql= "SELECT equip_nome FROM
							equipamentos ORDER BY equip_nome ASC";
							
										$query = pg_query($sql);
										while($result = pg_fetch_object($query)) {
																			
										print "<option>$result->equip_nome</option>";
										
											}
									
								?>
							
							</select></td>
								<td>
								<label>Tipo de Usuário</label><br />
								<select name="tipo_user" required>
								<option></option>
								<option>Servidor</option>
								<option>Promotor</option>
								</select>
								</td></tr>
								<tr>
								<td colspan="3">
							<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="btn" />
								<input type="reset" name="limpar" id="limpar" value="Limpar"  class="btn" /></td></tr>	
						</table>
										
					
					</form>
						
				<?php $conexao->Close(); ?>
				
				</div><!--FORMULARIO-->
				