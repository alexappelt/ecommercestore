

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
echo '  Carrinho: '.$carinho;
echo '  Codigo do Produto: '.$codigo_prod;
echo '  Preço do produto: '.$preco;
echo '  Total: '.$valor_total;

$sql = "insert into carrinho(codigo, codigo_prod, quantidade, vl_total_itens) VALUES ($carinho, $codigo_prod, $quantidade , $valor_total)";
$inserir = mysqli_query($conexao, $sql);
 header('Location: produtos.php');

?>