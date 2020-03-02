<?php  

include("../config.php");

$mensagens = Painel::atualizarMsg();
if($mensagens == false){
	?>
	<p style="text-align: center;">Nenhuma mensagem =(</p>
	<?php
}else{
	foreach($mensagens as $msg){
	?>
		<div class="message-single">
			<h3><?php echo $msg['nome_user']; ?>:</h3>
			<p><?php echo $msg['mensagem']; ?></p>
		</div>
	<?php	
	}
}

?>