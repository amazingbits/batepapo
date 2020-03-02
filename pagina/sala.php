<?php
	$verSQL = "SELECT * FROM usuario_online WHERE id_user = ?";
	$verConn = Mysql::Conexao()->prepare($verSQL);
	$verConn->execute(array($_SESSION['id']));
	$verConnRow = $verConn->rowCount();
	if($verConnRow == 0){  
		$sql = "INSERT INTO usuario_online VALUES (?,?,?,?)";
		$conn = Mysql::Conexao()->prepare($sql);
		$conn->execute(array($_SESSION['id'], $_SESSION['nick'], $_GET['sala'], date("Y-m-d H:i:s")));
	}
?>
<main>
	<div class="container">
		<div class="btngroup">
			<?php $_SESSION['sala'] = $_GET['sala']; ?>
			<?php $sala = Painel::listarSala($_GET['sala']); ?>
			<p>Sala: <strong><?php echo $sala['nome']; ?></strong><a href="<?php echo PATH; ?>" class="logoff">Sair</a></p>
		</div>
		<div class="sala">
			<div class="chat-box">
				<div class="users">
					<h1>Usuários Online</h1>
					<?php $users = Painel::listarUsuariosOnline($_GET['sala']); ?>
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
				</div>
				<div class="chat-message">
					<?php  
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
				</div>
			</div>
			<div class="text-box">
				<form method="POST" id="chat-msg">
					<input type="text" placeholder="Digite sua mensagem" maxlength="300" name="msg" autofocus required/>
					<input type="submit" value="Enviar Mensagem">
				</form>
			</div>
		</div>
	</div>
</main>
<script>
	/*Função pra antes de fechar a página*/
	//Quando o usuário fechar a aba, ou sair da sala de alguma forma
	//ele sairá da sala
	window.onbeforeunload = function(e){
		e.preventDefault();
		$.ajax({
			url: path+"ajax/logoff.php"
		})
	}
</script>