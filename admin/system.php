<?php include("../includes/seguranca.php"); ?>
	<?php include("../includes/conexao.class.php"); 
	 $conexao = new Conexao('ativox');
						 $conexao->Open();
						 
	?>




<?php
	include_once("paginas/paginacao.php");
	?>
	
<div id="search">
<form action="" method="get" enctype="multipart/form-data">
<table>
	<tr>
	<td><br />
	<input type="text" name="busca" id="pesquisar" maxlength="50" placeholder="Digite sua busca..." autocomplete="on" required /></td>
	<td><br />
	<input type="submit"   class="btn" value="Buscar" /></td>
	</tr>
</table></form><!-- Formulario de Busca -->
	</div><!--Div Busca-->
	
	<div id="paginacao">
		<?php echo $total_reg." registros";?><br />
		Página <?php print $pagina. ' de '.$total_paginas.' '; ?><?php  paginas($total_paginas,$pagina);?>
		<select name="nav_tipo" id="filtro" onchange="changePage(this, 'index.php?page=1')">
        <option>Exibir registros</option>
		<option value="10">10 (Padrão)</option>
        <option value="20">20 registros</option>
        <option value="30">30 registros</option>
		<option value="<?php print $total_reg; ?>">Todos</option>
        </select><br />
	</div><!--Div paginacao-->
			
	<div id="result">
		<table name="dataTable" id="dataTable" cellspacing="0" cellpadding="0">
	<thead>
	<tr id="pager">
	
	<th align="center"><input type="checkbox" name="" id="" value="" onclick="check();"  /></th>
	
	<th>Nome</th>
	<th>Tipo de Usuário</th>
	<th>MAC</th>
	<th>IP (Primário)</th>
  <th>IP (Secundário)</th>
	<th>Radio</th>
	<th>Ação</th>
	</tr>
	</thead>
	<tbody><?php include_once('paginas/dados.php'); ?></tbody>
</table>


	</div><!--Div Resultado-->


	<div id="paginacao">
		Página <?php print $pagina. ' de '.$total_paginas.' '; ?><?php  paginas($total_paginas,$pagina);?>
		<select name="nav_tipo" id="filtro" onchange="changePage(this, 'index.php?page=1')">
        <option>Exibir registros</option>
		<option value="10">10 (Padrão)</option>
        <option value="20">20 registros</option>
        <option value="30">30 registros</option>
		<option value="<?php print $total_reg; ?>">Todos</option>
        </select><br />
	</div><!--Div paginacao-->
	
	
	<?php
		
		if(isset($_GET['acao'])){
		if($_GET['acao'] == "editar" ) {
		
			include("editar.php");
		
		}else if ($_GET['acao'] == "novo") {
			include("novo.php");
		
		
		} else if ($_GET['acao'] == "excluir"){ 
		  include ("excluir.php");
		
		
		} elseif ($_GET['acao'] == "editado"){
			print '<div id="alerta" class="yes">Edição realizada com sucesso!</div> ';
		
		} elseif ($_GET['acao'] == "excluido" ){
			print '<div id="alerta" class="yes">Cadastro excluído com sucesso!</div> ';
			
		}	
			
			
		}
		
		
	
?>

