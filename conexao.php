<?php
	$host = "localhost"; // Foi utilizado HOST LOCAL!
	$usuario = "root"; // Usuario
	$senha = ""; // Não tem senha
	$banco = "bancodb"; // Nome do Banco
	
	$dbcon = new MySQLi("$host","$usuario","$senha","$banco"); // Código de conexão
	
	if($dbcon->connect_error) { // Se der erro na conexão irá aparecer "Erro na conexão como Alerta! (Mensagem)"
		echo "<script>alert('Erro na conexão!');</script>";
	}/* else {
		echo "conexao_ok";
	}*/
?>