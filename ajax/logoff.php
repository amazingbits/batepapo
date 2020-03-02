<?php  

include("../config.php");

$sql = "DELETE FROM usuario_online WHERE id_user = ?";
$sel = Mysql::Conexao()->prepare($sql);
$sel->execute(array($_SESSION['id']));

?>