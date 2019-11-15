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
<script src="cart.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  active">
        <a class="nav-link" href="produtos.php">Produtos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cad_user.php">Cadastro de Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

<button class="btn btn-info float-right"><a href="login.php">Cadastrar produtos</a></button>
<div class="">
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Departamento</th>
      <th scope="col">Preço</th>
      <th scope="col">Marca</th>
      <th scope="col">Foto</th>
      <th scope="col"><img width="60" src="https://cdn4.iconfinder.com/data/icons/shopping-21/64/shopping-02-512.png"></th>
    </tr>
  </thead>
  
    
      <?php
    require'conexao.php';
    $sql = "select * from produto";
    $busca = mysqli_query($conexao, $sql);
    
    while($array = mysqli_fetch_array($busca)){
      $codigo = $array['codigo'];
      $descricao = $array['descricao'];
      $marca = $array['marca'];
      $departamento = $array['departamento'];
      $preco = $array['preco'];
      $quantidade = $array['quantidade'];
      $imagem = $array['imagem'];

       ?>
<tr>
      <td> <?php echo $codigo  ?> </td>
      <td> <?php echo $descricao  ?> </td>
      <td> <?php echo $quantidade  ?> </td>
      <td> <?php echo $departamento  ?> </td>
      <td> <?php echo '<span style="color:#006400;">R$</span> '.$preco  ?> </td>
      <td> <?php echo $marca  ?> </td>
      <td> <?php echo '<img width="150" src="img/'.$imagem.'"></img>' ?> </td>
      <td>
        <form action="cart.php?codigo=<?php echo $codigo.'&'.'preco='.$preco.'&'.'qntd='.$quantidade ?>" method="post" enctype="multipart/form-data">
           
        <label>Nrº Carrinho </label><input <?php echo 'id="'.$codigo.'"'?>   <?php echo 'name="cart'.$codigo ?><?php echo '"'?>  ><br>
          <label>Quantidade </label><input <?php echo 'name="qntd'.$codigo ?><?php echo '"'?> type="" name="qntd"><br>
          <button type="submit" class="btn btn-info">Adicionar</button>
          </form>
      </td>  

<?php 
}
 ?>

    </tr>

<script>
  


</script>



</table>
</div>
<form action="cart.php" method="post" enctype="multipart/form-data">
<button type="submit" class="btn btn-info">Add</button>
</form>
</body>

</body>
</html>