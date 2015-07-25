<?php	
	if(isset($_GET['limite'])) {
			$limite = $_GET['limite'];
			}
		    if(empty($limite)){
				$limite = 10; //Define o limite de registros a serem exibidos.
				} 
			if(isset($_GET['page'])){
			$pagina = ($_GET['page']);
			}
			/* Se a variável $pagina não conter nenhum valor,
			então por padrão ela será posta com o valor 1 (primeira página) */
			if(empty($pagina))
			{
				$pagina = 1;
			}
			
			/* Operação matemática que resulta no registro inicial
			a ser selecionado no banco de dados baseado na página atual */
			$inicio = ($pagina * $limite) - $limite;
			
         $consulta = pg_query("SELECT net_id FROM usuarios_mpnet"); // Seleciona o campo id da nossa tabela produtos
		 $total_reg = pg_num_rows($consulta);
		 $total_paginas = ceil($total_reg / $limite);
		 
		 
		function paginas($paginas, $page) {
		if(isset($_GET['limite'])) {
			$limite = $_GET['limite'];
			}
			if(empty($limite)){
				$limite = 10; //Define o limite de registros a serem exibidos.
				}
		$paginas = $paginas;
		$page = $page;
		$prox = $page + 1;
		$ant  = $page -1;
		$antip = $paginas -2;
		$adj = 1;
			
			
			
				if($page >= 3){
					
					print '<a href="index.php?page=1&limite='.$limite.'"><img src="../images/icon_first.png" alt="" /></a>';
				
				} else {
				
					print '<img src="../images/icon_first2.png" alt="" />';
				}
				
				if($page>1) {
					
					
					print  '<a href="index.php?page='.$ant.'&limite='.$limite.'"><img src="../images/icon_prev.png" alt="" /></a> ';
				} else {
					print '<img src="../images/icon_prev2.png" alt="" />';
				}
							
				if ($prox <= $paginas && $paginas > 2){
					
					
					print ' <a href="index.php?page='.$prox.'&limite='.$limite.'"><img src="../images/icon_next.png" alt="" /></a>';
							
				} else {
					print '<img src="../images/icon_next2.png" alt="" />';
					
				}
				if ($page <= $antip) {
					
					
					print ' <a href="index.php?page='.$paginas.'&limite='.$limite.'"><img src="../images/icon_last.png" alt="" /></a>';
					
				} else {
					print '<img src="../images/icon_last2.png" alt="" />';
					
				}
				
}//função paginas
				
				
		
		
		

?>