<?php include("../includes/seguranca.php"); ?>

<div id="acao_config" rel="acao">
	<div id="icon_logado">
						<img src="../images/logado.png" alt="" title="" />
					</div><!--Div Icone Configurações-->
<div id="icon_seta">
						<img src="../images/seta.png" alt="" title="" />
						
					</div><!--Div Icone Configurações-->	
								</div><!--Div Acão Config-->
						
		<div id="main_config">
		<div id="ponta"><img src="../images/ponta.png" />
			</div><!--Div PONTA-->
		
<div id="config_login">
<table>
<tr><td>
<div id="img_login" align="center">
	<a href="#" ><img src="../images/perfil.png" alt="" title="" /></a>
</div>
</td><td><?php echo "<b><span style=font-size:13px;>" . $nome_user . "</b></span><br />";
						echo $useremail . "<br />";
						?>
<a href="#">Configurações da Conta</a>
</td></tr><tr><td><input type="button" name="" id="" class="btn" value="Ver Perfil" /></td><td>

<input type="button" name="alter" id="alter" class="btn" value="Alterar Senha" style="width:110px;"><br />
</td>
<td><form action="logout.php" method="post" ><input type="submit" name="sair" class="btn" id="sair"  value="Sair"></form></td>
</tr>
</table>
</div><!--Div Configuraçõe de Login-->
	</div><!--Configuração Principal-->
	
	