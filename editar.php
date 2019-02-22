<?php

    $mysqli = new mysqli('localhost', 'root', '', 'bancodb');
    $id = $_GET["id"];
    settype($id, "integer");


    // Executa uma consulta 
    $sql = "select * from banco where id = $id";
    $query = $mysqli->query($sql);
    while ($dados = $query->fetch_assoc()) {

        $nome       = $dados["nome"];
        $endereco   = $dados["endereco"];
        $telefone   = $dados["telefone"];
        $email      = $dados["email"];
        $id         = $dados["id"];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Dados</title>
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


<body bgcolor="#a1a1a1" text="#000000">

<h3>Alterar os Dados Registrados</h3>
            <form id="form1" name="form1" action="atualizar.php" method="post">
            <table>
              <tr>
                <td>Nome: </td><td><input type="text" name="nome" id="nome" value="<?php echo $nome;?>" />
              </tr>
              <tr>
                <td>Endereço: </td><td>
                  <input type="text" name="endereco" id="endereco" value="<?php echo $endereco;?>" >
                </td>
              </tr>
              <tr>
                <td>Telefone: </td><td>
                  <input type="text" readonly name="telefone" id="telefone" value="<?php echo $telefone?>" >
                </td>
              </tr>
              <tr>
                <td>E-mail: </td><td>
                  <input type="text" name="email" id="email" value="<?php echo $email;?>" >
                </td>
              </tr>
              <tr>
                <input type="hidden" readonly name="id" id="id" value="<?php echo $id;?>" /><br>
                </td>
              </tr>
              <tr>
                <td><br>
                <input type="submit" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="Alterar Dados" class="btn btn-warning" id="button-form"/><br>
                </td>
                </p>
              </tr>
            </table>
            </form>

</body>
</html>
