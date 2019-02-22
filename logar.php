<head>
</head>

<style type="text/css">
	
body {
  	background-color: #1a1a1a;
    font-family: 'EB Garamond', serif;
    font-weight: 300;
    color: #ffffff;
    -webkit-font-smoothing: antialiased;
    -webkit-overflow-scrolling: touch;
}

.btn-warning {
  color: #ffffff;
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}


</style>

<?php
  // Incluir conexão.php
	include_once 'conexao.php';
	
	$email=$_POST['email']; // Irá pegar apenas o email e a senha para logar.
	$senha=$_POST['senha'];
	
	$sql = $dbcon->query("SELECT * FROM banco WHERE email='$email' AND senha='$senha'"); // Irá pesquisar no banco o email e a senha.
	
	if(mysqli_num_rows($sql) > 0) {
		echo "<script>alert('Você foi logado!');</script>"; // Se o valor for o mesmo irá logar e irá aparecer os dados.
		while($dados  = $sql->fetch_array()) {
			echo "<table>"; 
   			echo "<tr><td>Nome: </td>"; // Nome
  			echo "<td>".$dados["nome"]." - <a href='editar.php?id=".$dados['id']."'>Editar</a></br></td></tr>";
  			echo "<table>"; 
   			echo "<tr><td>Endereço: </td>"; // Endereço
  			echo "<td>".$dados["endereco"]."</td></tr>";
  			echo "<table>"; 
   			echo "<tr><td>Telefone: </td>"; // Telefone
  			echo "<td>".$dados["telefone"]."</td></tr>";
  			echo "<table>"; 
   			echo "<tr><td>Email: </td>"; // Email
  			echo "<td>".$dados["email"]."</td></tr>";
  			echo "<table>"; 
   			echo "<tr><td>Senha: </td>"; // Senha
  			echo "<td>".$dados["senha"]."</td></tr>";
		}
	} else { // Caso os valores foram errados, irá aparecer erro no login.
		echo "<script>alert('Usuario ou senha incorretos ou você não se cadastrou.');</script>";
	}
	
?>

<body bgcolor="#a1a1a1" text="#000000">

<!-- BOTÃO SAIR -->
<td colspan="5"><br><p>&nbsp; &nbsp;   <input type="submit" value="SAIR" name="sair" style="width: 80px; height: 30px" class="btn btn-warning" onclick="location. href='index.html'"></p>
</body>