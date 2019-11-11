<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "insert into usuarios (usuario, senha) values ('$usuario', '$senha')";


$inserir = mysqli_query($conexao, $sql);

 header('Location: cad_user.php');

  ?>

