



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
      <li class="nav-item active">
        <a class="nav-link" href="produtos.php">Produtos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
<center>
<div class="container" style="margin-top: 90px;">
<h3>Listar produtos</h3>

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
		echo '<tr>';
		echo '<td>'.$codigo.'</td>';
		//echo '<td>'.$descricao.'</td>';
   //echo '<td>'.$quantidade.'</td>';
		//echo '<td>'.$departamento.'</td>';
		//echo '<td>'.$preco.'</td>';
		//echo '<td>'.$marca.'</td>';
		//echo '<td><img width="150" src="img/'.$imagem.'"></img></td>';
    	echo '</tr>';
    	}

    	 ?>


</table>

</div>
</center>

</script>
</body>
</html>