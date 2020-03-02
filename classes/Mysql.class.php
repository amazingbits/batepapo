<?php  

class Mysql{

	private static $conn;

	public static function Conexao(){
		if(self::$conn == null){
			try{
				self::$conn = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(Exception $e){
				echo "Erro ao conectar ao banco!";
			}
		}

		return self::$conn;
	}

}

?>