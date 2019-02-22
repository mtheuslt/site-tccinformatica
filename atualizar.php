<?php

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    /*Abrimos a conexao*/
    $conexao = mysqli_connect("localhost","root","") or die(mysqli_error());
    mysqli_select_db("bancodb");

    /*Atualiza os dados*/
    mysqli_query("UPDATE banco SET nome = ?, endereco = ?, telefone = ?, email = ? WHERE id='".$id."';");

    /*Fecha a conexao*/
    mysqli_close($conexao);
    
    /*Se tudo deu certo, vai pra página index.html*/
    header("LOCATION:index.html");
?>