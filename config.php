<?php  

//configurações gerais
session_start();
date_default_timezone_set("America/Sao_Paulo");

//diretório
define("PATH", "http://localhost/salabatepapo/");

//configurações de banco de dados
//seu host
define("HOST", "SEU HOST");
//usuario
define("USER", "USUARIO");
//senha
define("PASS", "SENHA");
define("DB", "batepapo");

//autoload para carregar minhas classes automaticamente
$autoload = function($class){
	include('classes/'.$class.'.class.php');
};
spl_autoload_register($autoload);

?>