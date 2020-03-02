<main>
	<div class="container">
		<?php  
		$info = Painel::getUserInfo();
		?>
		<div class="salas">
			<h1><i class="fas fa-comments"></i> Lista de Salas - <a href="<?php echo PATH; ?>ajax/logout.php">Sair</a></h1>
			<ul>
				<?php $salas = Painel::listarSalas(); ?>
				<?php foreach($salas as $key){ ?>
				<li><a href="<?php echo PATH; ?>sala?sala=<?php echo $key['id']; ?>" title="Entrar" class="enterRoom" val="<?php echo $key['id']; ?>"><i class="fas fa-door-open"></i></a> - <?php echo $key['nome']; ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</main>