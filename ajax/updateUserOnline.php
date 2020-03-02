<?php  

include("../config.php");

?>
<h1>Usuários Online</h1>
<?php $users = Painel::listarUsuariosOnline($_SESSION['sala']); ?>
<?php  
if($users == false){
	?>
	<p>Nenhum usuário online</p>
	<?php
}else{
	foreach($users as $key){
	?>
	<p class="user-single"><i class="fas fa-circle"></i> <?php echo $key['nome_user']; ?></p>
	<?php
	}
}

?>