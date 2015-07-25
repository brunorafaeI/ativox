
<div id="col_left" class="menu">

<?php include('menu.php'); ?>


	</div><!--Fim Div Coluna Esquerda-->

<div id="conteudo_m">

		<div id="title_m">
		 <?php
			
		if (isset($_GET['pg'])) {	
		 if($_GET['pg'] == 'Cadastro de Usuários'){
				$title = "Cadastro de Usuários - MPNET";
			 }  elseif ($_GET['pg'] == 'Cadastro de Equipamentos'){
				$title = "Cadastro de Equipamentos - MPNET";
			 } elseif ($_GET['pg'] == 'Lista de Relatório'){
				$title = "Lista de Relatório";
			 } elseif ($_GET['pg'] == 'Imprimir Relatório'){
				$title = "Imprimir Relatório";
			 } elseif ($_GET['pg'] == 'Novo Cadastro'){
				$title = "Novo Cadastro";
			 } elseif ($_GET['pg'] == 'Minha Conta'){
				$title = "Minha Conta";
			 }
		 echo $title;
		 } else {
			
			echo $title;
		 
		 }
		 ?>
		</div><!--Div Title Conteudo-->
		<div id="efeito">
			<?php
		
		if (isset($_GET['pg'])) {
		switch ($_GET['pg']) {
			
			case 'Cadastro de Usuários':
			include ("cadastro/cadastro_user.php");
			break;
			
			case 'Cadastro de Equipamentos':
			include ("cadastro/cadastro_equip.php");
			break;
			
			case 'Lista de Relatório':
			include ("system.php");
			break;
			
			case 'Imprimir Relatório':
			include ("");
			break;
			
			case 'Novo Cadastro':
			include ("cadastro/novo_cadastro.php");
			break;
			
			case 'Minha Conta':
			include ("");
			break;
			
			default:
			include("system.php");
			break;
					
	}
	
} else {
	include("system.php");
}
	
	?>
	</div><!--Div Efeito-->
	
</div><!--Div Conteudo Dinamico-->


	
