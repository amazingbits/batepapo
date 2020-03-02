<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="<?php echo PATH; ?>favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Salas de Chat</title>
	<!--CSS-->
	<link rel="stylesheet" href="<?php echo PATH; ?>css/style.css">
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	
	<?php if(isset($_SESSION['id'])){ ?>
	<header>
		<div class="container">
			<div class="topo">
				<div class="logo">
					<img src="<?php echo PATH; ?>img/logo.png" alt="Imagem do meu logo">
				</div>
				<div class="menu">
					<ul>
						<li><a href="<?php echo PATH; ?>" class="menubtn">Início</a></li>
						<li class="open-menu-mobile"><a href="#"><i class="fas fa-bars"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!--Menu-mobile-->
		<div class="menu-mobile">
			<ul>
				<li class="close-menu-mobile"><a href="#"><i class="fas fa-times"></i></a></li>
				<li><a href="<?php echo PATH; ?>">Início</a></li>
			</ul>
		</div>
	</header>
	<?php } ?>

	<?php 
        $url = isset($_GET['url']) ? $_GET['url'] : "home";

        
        if(!isset($_SESSION['id'])){
        	include("pagina/login.php");
        }else if(file_exists("pagina/".$url.".php")){
            include("pagina/".$url.".php");
        }else{
            //aqui eu posso chamar uma página de erro se eu quiser
            include("pagina/404.php");
        }
    ?>
	
	<?php if(isset($_SESSION['id'])){ ?>
	<footer>
		<div class="footer">
			<p>Desenvolvido por Amazing Bits - <?php echo date("Y"); ?></p>
		</div>
	</footer>
	<?php } ?>
	
	<!--JS-->
	<script src="<?php echo PATH; ?>js/jquery-min.js"></script>
	<script src="<?php echo PATH; ?>js/main.js"></script>
</body>
</html>