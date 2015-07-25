
<!-- Função de TimeZone em Português -->
 <?php
// Modifica a zona de tempo a ser utilizada. Disponível desde o PHP 5.1
date_default_timezone_set('America/Belem');
 function BrasilTime ($date){
 
$arrMes = array ("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
$arrDay = array ("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado");

$BrasilTime = $arrDay[date("w",$date)].", ". date("d",$date);
$BrasilTime = $BrasilTime ." de ".$arrMes[date("m",$date)+0]." de ".date("Y",$date);
$BrasilTime = $BrasilTime . " - ".date("H",$date).":".date("i",$date).":".date("s",$date);

return $BrasilTime;

 }

 
 //Função de teste
 echo '<div class="time">'. BrasilTime(time()).'</div>';
 
 ?>
