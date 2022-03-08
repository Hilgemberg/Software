<?php 
//Dados para a conexcão do banco de dados 
require_once("Config.php");

 date_default_timezone_set('America/Sao_Paulo');

 try {
       $pdoBD = new PDO("mysql:dbmane=$banco_BDOficina; host=$servidor_BDOficina; charset=utf8", "$usuario_BDOficina", "$senha_BDOficina");

       //Conexão para backup do banco de dados
       //conn = mysql_connect($servidor_BDOficina, $usuario_BDOficina, $senha_BDOficina, $banco_BDOficina);
 }
catch (Exception $ErroBD){
  echo "Erro de ~conexão banco de dados!: " .$ErroBD;   
}

?>