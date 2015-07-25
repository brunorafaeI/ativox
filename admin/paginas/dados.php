<?php 
		if(isset($_GET['limite'])) {
		$limite = $_GET['limite'];
		}
		if(empty($limite)){
			$limite = 10; //Define o limite de registros a serem exibidos.
			} 
	
			if(empty($pagina))
			{
				$pagina = 1;
			}
			
			/* Operação matemática que resulta no registro inicial
			a ser selecionado no banco de dados baseado na página atual */
			$inicio = ($pagina * $limite) - $limite;
			
     
		 
		 
		if (isset($_GET['busca'])) {
				
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		
			$busca = $_GET['busca'];
			
			
			if (empty($busca)){
	
		print '<div id ="alerta" class="no">Preencha os campos corretamente, para realizar a sua busca!</div>';
		
		
		$sql= "
		SELECT * FROM usuarios_mpnet WHERE net_nome ILIKE '%$busca%' 
		OR net_mac ILIKE '%$busca%' 
		OR net_ip_1 ILIKE '%$busca%' 
		OR net_ip_2 ILIKE '%$busca%' 
		OR net_equip ILIKE '%$busca%' 
		OR net_tipo_user ILIKE '%$busca%' 
		OR net_mac ILIKE '%$busca%' 
		ORDER BY net_nome ASC LIMIT $limite OFFSET $inicio";
		$query = pg_query($sql);
		$result = pg_num_rows($query);
		
		if ($result > 0 ) {
		while ($row = pg_fetch_object($query)) {
		
		print "<tr><td class=check><input type=checkbox name=chkbox id=chkbox value=$row->net_id /></td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_nome </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_tipo_user </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_mac </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_ip_1 </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_ip_2 </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_equip </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar ><img src=../images/user_edit.png  alt=editar title=editar /></a><img src=../images/delete.png alt=excluir title=excluir onclick=javascript:ConfirmaExclui('index.php?page=$pagina&id=$row->net_id&acao=excluir');  /></td></tr>";
		
		
		
	}				
	}
	  
	}else { 
	
	$sql= "
		SELECT * FROM usuarios_mpnet WHERE net_nome ILIKE '%$busca%' 
		OR net_mac ILIKE '%$busca%' 
		OR net_ip_1 ILIKE '%$busca%' 
		OR net_ip_2 ILIKE '%$busca%' 
		OR net_equip ILIKE '%$busca%' 
		OR net_tipo_user ILIKE '%$busca%' 
		OR net_mac ILIKE '%$busca%' 
		ORDER BY net_nome ASC";
		$query = pg_query($sql);
		$result = pg_num_rows($query);
		
		if ($result > 0 ) {
		while ($row = pg_fetch_object($query)) {
		
		print "<tr><td class=check><input type=checkbox name=chkbox id=chkbox value=$row->net_id /></td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_nome </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_tipo_user </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_mac </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_ip_1 </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_ip_2 </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar > $row->net_equip </td>";
		print "<td><a href=index.php?page=$pagina&id=$row->net_id&acao=editar ><img src=../images/user_edit.png  alt=editar title=editar /></a><img src=../images/delete.png alt=excluir title=excluir onclick=javascript:ConfirmaExclui('index.php?page=$pagina&id=$row->net_id&acao=excluir');  /></td></tr>";
	}					
	print '<div id="alerta" class="yes" >Busca realizada com sucesso!!</div>';

								
	} else {
						
			print '<div id="alerta" class="no" >Nenhum registro encontrado...</div>';
			print '<meta HTTP-EQUIV="Refresh" CONTENT="003; URL=index.php?page='.$pagina.'"">';

			
	
	}				
	}								
	}

		
		} else {
		
		$sql= "
		SELECT * FROM usuarios_mpnet ORDER BY net_nome ASC LIMIT $limite OFFSET $inicio";
		$query = pg_query($sql);
		while ($result = pg_fetch_object($query)) {
		
		print "<tr><td class=check><input type=checkbox name=chkbox id=checkbox value=$result->net_id /></td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar > $result->net_nome </td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar > $result->net_tipo_user </td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar > $result->net_mac </td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar > $result->net_ip_1 </td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar > $result->net_ip_2 </td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar > $result->net_equip </td>";
		print "<td><a href=index.php?page=$pagina&id=$result->net_id&acao=editar ><img src=../images/user_edit.png  alt=editar title=editar /></a><img src=../images/delete.png alt=excluir title=excluir onclick=javascript:ConfirmaExclui('index.php?page=$pagina&id=$result->net_id&acao=excluir');  /></td></tr>";
		
		
			}
		
		
		
	}

	?>		
	