<?php 
require'conexao.php';

$carrinho = $_GET['cart'];

echo $carrinho;


 $sql = "delete from carrinho where codigo = $carrinho";

$delet = mysqli_query($conexao, $sql);

  header('Location: carrinho.php');



?>