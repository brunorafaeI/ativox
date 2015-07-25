<?php	
	
		    $limite = 10; //Define o limite de registros a serem exibidos.
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
		$paginas = $paginas;
		$page = $page;
		$prox = $page + 1;
		$ant  = $page -1;
		$penult = $paginas -1;
		$antip = $paginas -2;
		$adj = 1;
		
			
				if($page>1) {
					print  '<a href="index.php?page='.$ant.'"><span style="font-weight:bold; font-size:20px">«</span></a> ';
				}
						
			if($paginas > 5){
				if($page < 1 + (2 * $adj)){
					for ($i=1; $i< 2 + (2 * $adj); $i++){
						if($page == $i){
						
						print '<span style="color:#A00; font-weight:bold; background-color:#f0f0f0; padding:2px 4px; border:1px solid #d3d3d3; border-radius:3px;"> '.$i.'</span>'; // Escreve somente o número da página sem ação alguma
				}else {
						print ' <a href="index.php?page='.$i.'">'.$i.'</a> '; // Escreve o número e o link da página
					}
					
					}
				
               
				
				
			}elseif ($page > (2 * $adj) && $page < $paginas){				
				                              
                
					
					for ($i = $page-$adj; $i<= $page + $adj; $i++){
						if($page == $i){
						
						print '<span style="color:#A00; font-weight:bold; background-color:#f0f0f0; padding:2px 4px; border:1px solid #d3d3d3; border-radius:3px;"> '.$i.'</span>'; // Escreve somente o número da página sem ação alguma
				}else {
						print ' <a href="index.php?page='.$i.'">'.$i.'</a> '; // Escreve o número e o link da página
					}
						
						
					}	
							
								
				}else {
					
					print ' <a href="index.php?page='.$antip.'">'.$antip.'</a> ';
					print ' <a href="index.php?page='.$penult.'">'.$penult.'</a> ';
					print ' <span style="color:#A00; font-weight:bold; background-color:#f0f0f0; padding:2px 4px; border:1px solid #d3d3d3; border-radius:3px;">'.$page.'</span>'; // Escreve somente o número da página sem ação alguma
				}
				
			
			}//$paginas > 5 
			
			
			if ($prox <= $paginas && $paginas > 2){
		print ' <a href="index.php?page='.$prox.'"><span style="font-weight:bold; font-size:20px; text-decoration:none;">»</span></a>';
		
	}
		
		
				
}//função paginas
				
				
		
		
		

?>