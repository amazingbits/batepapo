<?php  

class Painel{

	public static function listarSalas(){
		$sql = "SELECT * FROM sala ORDER BY nome";
		$conn = Mysql::Conexao()->prepare($sql);
		$conn->execute();
		$conn = $conn->fetchAll();
		return $conn;
	}

	public static function listarSala($id_sala){
		$sql = "SELECT * FROM sala WHERE id = ?";
		$conn = Mysql::Conexao()->prepare($sql);
		$conn->execute(array($id_sala));
		$conn = $conn->fetch();
		return $conn;
	}

	public static function listarUsuariosOnline($id_sala){
		$sql = "SELECT * FROM usuario_online WHERE id_sala = ?";
		$conn = Mysql::Conexao()->prepare($sql);
		$conn->execute(array($id_sala));
		$row = $conn->rowCount();
		$conn = $conn->fetchAll();
		if($row == 0){
			return false;
		}else{
			return $conn;
		}
	}

	public static function atualizarMsg(){
		//última data do parâmetro
		$parSql = "SELECT data FROM usuario_online WHERE id_user = ?";
		$parConn = Mysql::Conexao()->prepare($parSql);
		$parConn->execute(array($_SESSION['id']));
		$parConnRow = $parConn->rowCount();
		if($parConnRow == 0){
			$data = date("Y-m-d H:i:s");
		}else{
			$data = $parConn->fetch()['data'];
		}


		$sql = "SELECT * FROM chat WHERE id_sala = ? AND data > ?";
		$conn = Mysql::Conexao()->prepare($sql);
		$conn->execute(array($_SESSION['sala'], $data));
		$row = $conn->rowCount();
		$conn = $conn->fetchAll();
		if($row == 0){
			return false;
		}else{
			return $conn;
		}
	}

	public static function getUserInfo(){
		$id = (isset($_SESSION['id'])) ? $_SESSION['id'] : null;
		$nick = (isset($_SESSION['nick'])) ? $_SESSION['nick'] : null;
		$info = [];

		if($id == null || $nick == null){
			return false;
		}else{
			$info["id"] = $id;
			$info["nick"] = $nick;
			return $info;
		}
	}

	public static function zerarMsg($par = false){
		if($par == true){
			$sql = "DELETE FROM chat";
			$conn = Mysql::Conexao()->prepare($sql);
			$conn->execute();
			echo '<script>
					alert("Mensagens zeradas!")
					window.location = "'.PATH.'"
				  </script>';
		}
	}
}

?>