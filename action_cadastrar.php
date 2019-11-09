<?php
include 'conexao.php';

$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$departamento = $_POST['departamento'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$imagem = $_FILES['imagem'];
$imagem_nome = $_FILES['imagem']['name'];

$dir = dirname(__FILE__);



$temp_name = $_FILES['imagem']['tmp_name'];


$path = $dir.'/img/'; 
$location = $path . $_FILES['imagem']['name']; 
move_uploaded_file($temp_name, $location);



$sql = "insert into produto (descricao, marca, departamento, preco, quantidade, imagem) values ('$descricao', '$marca', '$departamento', '$preco', '$quantidade' ,'$imagem_nome')";


$inserir = mysqli_query($conexao, $sql);

 header('Location: cad_prod.php');

  ?>

