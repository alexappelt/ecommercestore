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
<div class="container" style="margin-top: 250px; ">
  <form action="action_user.php" method="post" enctype="multipart/form-data" >

      <div class="col-md-6">
        <div class="form-group ">
          <label for="company">Numero do carrinho</label>
          <input type="text" class="form-control" placeholder="" id="usuario" name="usuario" >
        </div>
      </div>
      <!--  col-md-12   -->


  <button type="submit" class="btn btn-dark border border-success">Visualizar</button>
  <button class="btn btn-dark border border-danger"><a href="index.php">Voltar</a></button>
  </div>
  </form>

</center>
  

</div>







</body>
</html>

