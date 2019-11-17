<?php
require'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="produtos.php">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cad_user.php">Cadastro de Usuários</a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="cad_user_clientes.php">Cadastro de Clientes</a>
      </li>
        <a class="nav-link" href="carrinho.php">Carrinho</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="visualizar_carrinho.php">Visualizar Carrinho</a>
      </li>
    </ul>
  </div>
</nav>


  
<center>
<div class="container" style="margin-top: 50px; ">
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo do Carrinho</th>
      <th scope="col">Codigo do Produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor Unitario</th>
      <th scope="col">Valor Total</th>
    </tr>
  </thead>
  
<?php
    $cd_carrinho = $_POST['v_carrinho'];
require'conexao.php';
    $sql = "select * from carrinho where codigo = $cd_carrinho";
    $busca = mysqli_query($conexao, $sql);
    
    while($array = mysqli_fetch_array($busca)){
      $codigo_cart = $array['codigo'];
      $codigo_prod = $array['codigo_prod'];
      $desc = $array['descricao'];
      $quantidade = $array['quantidade'];
      $vl_unit = $array['vl_unitario'];
      $valor_total = $array['vl_total_itens'];

       ?>
<tr>
      <td> <?php echo $codigo_cart  ?> </td>
      <td> <?php echo $codigo_prod  ?> </td>
      <td> <?php echo $desc  ?> </td>
      <td> <?php echo $quantidade  ?> </td>
      <td> <?php echo $vl_unit  ?> </td>
      <td> <?php echo $valor_total  ?> </td>
<?php 
}
 ?>

    </tr>
</table>
</div>
<button class="btn btn-info"><a href="visualizar_carrinho.php"> Voltar </a> </button>
<button class="btn btn-success">Finalizar carrinho</button>
</center>


</body>

</html>

