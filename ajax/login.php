<?php  

include("../config.php");

$nick = $_POST['nick'];
$id = uniqid();

$_SESSION['id'] = $id;
$_SESSION['nick'] = $nick;

?>
<script>
	alert('Logado com sucesso!')
	window.location = '<?php echo PATH; ?>';
</script>