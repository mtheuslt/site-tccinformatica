<?php
	// Incluir o conexão.php
	include_once 'conexao.php';

	// Irá ser colocado no banco de dados os respectivos dados
	$nome 		= $_POST['nome']; 
	$endereco 	= $_POST['endereco'];
	$telefone 	= $_POST['telefone'];
	$email 		= $_POST['email'];
	$senha 		= $_POST['senha'];

	// Irá ser colocado na tabela banco
	$sql1 = $dbcon->query("SELECT * FROM banco WHERE email='$email'"); 

	// Caso o e-mail já esteja cadastrado irá aparecer uma mensagem e irá voltar para a tela de login
	if(mysqli_num_rows($sql1) > 0) { 
		echo "<script>alert('Seu email já está cadastrado.');
			window.location.href = 'http://localhost/site2/#login';</script>";

	// caso não esteja cadastrado, irá adicionar os dados nos valores.		
	} else {
		$sql2 = $dbcon->query("INSERT INTO banco(nome,endereco,telefone,email,senha) VALUES('$nome','$endereco','$telefone','$email','$senha')");
		
		if($sql2) { // Se der certo, irá voltar para a tela de login para você entrar.
			echo "<script>alert('Você foi cadastrado');
			window.location.href = 'http://localhost/site2/#login';</script>";

		} else { // Se der errado irá aparecer que deu algum erro e ira voltar para a tela de login.
			echo "<script>alert('Por algum motivo você não foi cadastrado!');
			window.location.href = 'http://localhost/site2/#login';</script>";
		}
	}
?>