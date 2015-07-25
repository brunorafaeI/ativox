<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$title = 'Sistema de Gerenciamento - Ativo X';
$css = '<link href="../css/estilo.css" rel="stylesheet" type="text/css"  />';
$css_painel = '<link href="../css/painel.css" rel="stylesheet" type="text/css"  />';
$favicon = '<link href="../images/favicon.gif" rel="shortcut icon" type="image/gif" />';


/*-=-=-==-=-=- CARREGAR SCRIPT JQUERY =-=-=-==-=-=-*/
$jquery = '<script type="text/javascript" src="../js/jquery.js"></script>';
$drag = '<script type="text/javascript" src="../js/jquery-ui-drag.js"></script>';

session_start();

$user = $_SESSION['username'];
$useremail = $_SESSION['useremail'];

//Verifica se o Usuário está logado, se não expulsa o usuário!
if (!isset($user)){
	
		header("Location: ../");
		exit();

} else {

		$user = explode (" ", $user);
		
		if (count($user)>1) {
		$nome_user = $user[0] . " ". $user[1];
		} else{
		$nome_user = $user[0];
		}
	//Menssagem de boas vindas ao usuário!
	print "<div class=usuario>".$nome_user."</div>";
	
}

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo $title; ?></title>
<?php echo $css; ?>
<?php echo $css_painel; echo $favicon; ?>
<?php echo $jquery; echo $drag; ?>


<script type="text/javascript">
		
		function ConfirmaExclui(link){
			varConfirma = confirm("Deseja realmente excluir este registro?");
			if(varConfirma) {
			window.location = link;
			}
			
		}
 function changePage(elemento, url) {
    $(window.location).attr('href', url + "&limite=" + $(elemento).val());
}	

 </script>


<script type="text/javascript"> 
	$(document).ready(function(){
		$("#alerta").delay(2300).fadeOut(800);
		
	});
</script>

<script type="text/javascript"> 
$(document).ready(function(){
	$("#menu>ul>li>span").click(function(){
	$(this).next().slideToggle();
		
	
	});

});
</script>

<script type="text/javascript"> 

 	
	$(document).ready(function() {
	   $("#main_config").hide();
	   $("#acao_config").click(function() {
       $("#main_config").fadeToggle();
			
		
	   	   });
	   	});
				

</script>
<script language="javascript">
	
	
var checkflag = "false";
function check() {
var boxes = document.getElementsByName("chkbox");

if (checkflag == "false") {
for (i = 0; i < boxes.length; i++) {
boxes[i].checked = true;
}
checkflag = "true";
return true;
}
else {
for (i = 0; i < boxes.length; i++) {
boxes[i].checked = false;
}
checkflag = "false";
return true;
}
}
</script> 	


<script type="text/javascript">
$(document).ready(function(){
	$("#result tbody tr:odd").addClass('odd');
	$('#pesquisar').keydown(function(){
var encontrou = false;
var termo = $(this).val().toLowerCase();
$('#result tbody tr').each(function(){
$(this).find('td').each(function(){
if($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;
});
if(!encontrou) $(this).hide();
else $(this).show();
encontrou = false;
});
});
});
$(document).ready(function(){
$("#result tbody tr").hover(function(){
		$(this).addClass('hover');
	 }, function(){
	$(this).removeClass('hover');
 });

});
</script>
<script type="text/javascript">
$(document).ready(function(){
			$("#painel_editar").draggable({
			
				cursor: "move"
			
			});
		
		
		});
</script>
 <script type="text/javascript">
	// $(document).ready(function(){
		
		// var conteudo = $("#conteudo_m");
		// conteudo.hide();
		// $("#menu ul li>ul").hover(function(){
		// if(conteudo.is(":hidden")){
			// conteudo.show('slow');
			
		// }
		
		
			
		// });
		
		
		
	// });
 
 </script>
</head>
<body>
					
					
						<div id="header">
					
														
						<div id="logo"><a href="../admin"><img src="../images/logo2.png" /></a>
					
						</div><!--Fim div Logo-->
						
					</div><!--HEADER-->
					
				<?php include('cadastro/config_user.php'); ?>
				
				<div id="conteudo">