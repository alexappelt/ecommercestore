<?php
include 'conexao.php';

$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$departamento = $_POST['departamento'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$imagem = $_FILES['imagem'];
$imagem_nome = $_FILES['imagem']['name'];


$location = 'img/'; 
move_uploaded_file($_FILES['imagem']['tmp_name'], $location.$imagem_nome);

//ola mundo


$sql = "insert into produto (descricao, marca, departamento, preco, quantidade, imagem) values ('$descricao', '$marca', '$departamento', '$preco', '$quantidade' ,'$imagem_nome')";

echo $sql;

$inserir = mysqli_query($conexao, $sql);

 header('Location: cad_prod.php');

  ?>

