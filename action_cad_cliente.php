<?php

 include 'conexao.php';

 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $email = $_POST['email'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];

$sql = "insert into cliente (nome, sobrenome, email, usuario, senha) values ('$nome', '$sobrenome', '$email', '$usuario', '$senha')";

echo $sql;

$inserir = mysqli_query($conexao, $sql);

 header('Location: cad_user_clientes.php');

?>