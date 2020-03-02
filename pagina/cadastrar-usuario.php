<main>
	<div class="container">
		<div class="btngroup">
			<p><strong>Cadastrar Sala</strong><a href="#">Voltar</a></p>
		</div>
		<div class="cadastro-box">
			<form method="POST" class="caduser">
				<input type="text" name="nome" placeholder="Nome do Usuário">
				<input type="password" name="senha" placeholder="Senha">
				<input type="submit" value="Cadastrar">
			</form>
		</div>
		<div class="list-box">
			<h1>Lista de Usuários</h1>
			<?php for($i=0;$i<5;$i++){ ?>
			<div class="list-box-single">
				<p>João da Silva</p>
				<a href="#">Excluir</a>
			</div>
			<?php } ?>
		</div>
	</div>
</main>