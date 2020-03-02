<?php  

include("../config.php");
session_destroy();

?>
<script>
	alert('Volte sempre!')
	window.location = '<?php echo PATH; ?>'
</script>