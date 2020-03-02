<?php  

include("../config.php");

$id_sala = $_POST['id'];
$id_user = $_SESSION['id'];
$nome_user = $_SESSION['nick'];

$sql = "INSERT INTO usuario_online VALUES (?,?,?,?)";
$conn = Mysql::Conexao()->prepare($sql);
$conn->execute(array($id_user, $nome_user, $id_sala, date("Y-m-d H:i:s")));

?>