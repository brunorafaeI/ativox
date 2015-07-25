<?php		include ('salvar.php');		?>

<div id="painel_editar">
<div id="mover">
<h1 class="title_windows">Editar / Alterar  - Cadastro do MPNET</h1>
			<div id="close_move">
			
				<a href="index.php?page=<?php print $pagina ?>"><img src="../images/window-close.png" alt="close" /></a>
				</div>
	</div>

	<?php 
	
	$id = $_GET['id']; 
	$sql= "
		SELECT * FROM usuarios_mpnet where net_id = '$id'";
		$query = pg_query($sql);
	    $result = pg_fetch_object($query);
	?>
	
	
	<form action="" method="post" enctype="multipart/form-data" id="form_user"> 
						
								<table>
								<tr><td colspan="2">
								</td><td></td></tr>
									<tr>
								<td>
									<label>Nome:</label><br />
							<input type="text" name="nome" id="nome"  maxlength="100"  value="<?php print  $result->net_nome ?>" /></td>
								<td>
								<label>Telefone:</label><br />
							<input type="text" name="telefone" id="telefone"  maxlength="100" value="<?php print  $result->net_tele ?>" />
							</td></tr>
								<tr>
								<td>
							<label>Endereço:</label><br />
							<input type="text" name="endereco" id="endereco"  maxlength="80" value="<?php print  $result->net_end ?>" /></td>
								<td>
								<label>MAC Address:</label><br />
							<input type="text" name="mac" id="mac"  maxlength="100"  value="<?php print  $result->net_mac?>" />
								</td></tr>
							<tr>
								<td>
								<label>IP (Primário):</label><br />
							<input type="text" name="ip_1" id="ip_1"  maxlength="100"  value="<?php print  $result->net_ip_1 ?>" /></td>
								<td>
								<label>IP (Secundário):</label><br />
							<input type="text" name="ip_2" id="ip_2"  maxlength="50"  value="<?php print  $result->net_ip_2 ?>" /></td></tr>
							<tr>
								<td>
							<label>Radio:</label><br />
							<select name="tipo_equip"> 
							<option></option>
							<?php
							$sql= "
										SELECT equip_nome FROM equipamentos ORDER BY equip_nome ASC";
										$query = pg_query($sql);
										while ($dados= pg_fetch_array($query)) {
																			
										if($dados[0] == $result->net_equip ){
                      print "<option value='".$dados[0]."' selected>".$dados[0]."</option>";
                      }
                      else
                      {
                      print "<option value='".$dados[0]."'>".$dados[0]."</option>";
                      } 
                }
                print "</select>";
											
									
								?>
							
							</select></td>
								<td>
								<label>Tipo de Usuário</label><br />
								<select name="tipo_user" >
								<option></option>
<?php
										$verif = $result->net_tipo_user;															
										if( $verif == "Servidor" ){
                      print "<option value='".$verif."' selected>".$verif."</option>";
					  print "<option value='Promotor'>Promotor</option>";
                      } else {
					  print "<option value='Promotor' selected>Promotor</option>";
					  print "<option value='Servidor'>Servidor</option>";
					  }
                     
                     								
								?>
								</select>
								</td></tr>
								<tr>
								<td colspan="3"><br />
							
							<input type="submit" name="salvar" id="salvar" value="Salvar" class="btn" />
							<a href="index.php?page=<?php print $pagina ?>"><input type="button" name="cancelar" id="cancelar" value="Cancelar"  class="btn" /></a></td></tr>	
						</table>
											
					
					</form>


</div><!-- DIV PAINEL EDITAR-->
