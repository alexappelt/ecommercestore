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



$sql = "insert into produto (descricao, marca, departamento, preco, quantidade, imagem, img) values ('$descricao', '$marca', '$departamento', '$preco', '$quantidade' ,'$imagem_nome', 'teste')";


$inserir = mysqli_query($conexao, $sql);

 header('Location: cad_prod.php');

  ?>

