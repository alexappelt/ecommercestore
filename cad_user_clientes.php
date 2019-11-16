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
        <a class="nav-link" href="cad_user.php">Cadastro de Usuario</a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="cad_user_clientes.php">Cadastro de Clientes</a>
      </li>
        <a class="nav-link" href="carrinho.php">Carrinhos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="visualizar_carrinho.php">Visualizar Carrinho</a>
      </li>
    </ul>
  </div>
</nav>
<center>
<h1 class="alert alert-success">Cadastro de Clientes</h1>


<div class="container" style="background-color: gray; width: 500px; height: 550px; padding-top: 50px; border-top:solid black; border-radius: 15px; border-width: 10px;">
  <form action="action_cad_cliente.php" method="post" enctype="multipart/form-data" >

      <div class="col-md-6">
        <div class="form-group ">
          <label for="company">Nome</label>
          <input type="text" class="form-control" autocomplete="false" placeholder="" id="Nome" name="nome" >
        </div>
      </div>
      <!--  col-md-12   -->


      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Sobrenome</label>
          <input type="text" class="form-control" autocomplete="false" placeholder="" id="Sobrenome" name="sobrenome" >
        </div>
      </div>

       <div class="col-md-6">
        <div class="form-group">
          <label for="company">Email</label>
          <input type="text" class="form-control" autocomplete="false" placeholder="" id="Email" name="email" >
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Usuario</label>
          <input type="text" class="form-control" autocomplete="false" placeholder="" id="Usuario" name="usuario" >
        </div>
      </div>

       <div class="col-md-6">
        <div class="form-group">
          <label for="company">Senha</label>
          <input type="password" class="form-control" autocomplete="false" placeholder="" id="senha" name="senha" >
        </div>
      </div>


     
<div class="float-right" style="margin-top: 30px;">
  <button type="submit" class="btn btn-dark border border-success">Cadastrar</button>
  <button class="btn btn-dark border border-danger"><a href="index.php">Voltar</a></button>
  </div>
  </form>

</div>
</center>



</body>
</html>



