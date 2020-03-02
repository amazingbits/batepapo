<?php  

include("../config.php");

$msg = $_POST['msg'];
$data = date("Y-m-d H:i:s");

$sql = "INSERT INTO chat VALUES (null, ?,?,?,?,?)";
$conn = Mysql::Conexao()->prepare($sql);
$conn->execute(array($_SESSION['id'], $_SESSION['nick'], $_SESSION['sala'], $msg, $data));

//última mensagem inserida no parâmetro
$parSql = "UPDATE parametro SET data = ?";
$parConn = Mysql::Conexao()->prepare($parSql);
$parConn->execute(array(date('Y-m-d H:i:s')));

?>