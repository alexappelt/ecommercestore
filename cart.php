

<?php 
require'conexao.php';

$codigo_prod = $_GET['codigo'];
$preco = $_GET['preco'];
$qntd = $_GET['qntd'];
$name_carrinho = 'cart'.$codigo_prod;
$name_qntd = 'qntd'.$codigo_prod;
$quantidade = $_POST[$name_qntd];
$carinho = $_POST[$name_carrinho];
$valor_total = $quantidade*$preco;


$buscadescprod = "select * from produto where codigo = $codigo_prod";

$busca = mysqli_query($conexao, $buscadescprod);
$array = mysqli_fetch_array($busca);

$desc = $array['descricao'];



$sql = "insert into carrinho(codigo, codigo_prod, quantidade, vl_total_itens, vl_unitario, descricao) VALUES ($carinho, $codigo_prod, $quantidade , $valor_total, $preco, '$desc')";


$delete = "update produto set quantidade = (quantidade-$quantidade) where codigo = $codigo_prod";


$inserir = mysqli_query($conexao, $sql);
$inserir = mysqli_query($conexao, $delete);
header('Location: produtos.php');

?>