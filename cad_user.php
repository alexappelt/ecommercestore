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
      <li class="nav-item active">
        <a class="nav-link" href="produtos.php">Produtos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
<center>
<h1 class="alert alert-success">Cadastro de Usuários</h1>


<div class="container" style="background-color: gray; width: 500px; height: 350px; padding-top: 50px; border-top:solid black; border-radius: 15px; border-width: 10px;">
  <form action="action_user.php" method="post" enctype="multipart/form-data" >

      <div class="col-md-6">
        <div class="form-group ">
          <label for="company">Usuário</label>
          <input type="text" class="form-control" placeholder="" id="usuario" name="usuario" >
        </div>
      </div>
      <!--  col-md-12   -->


      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Senha</label>
          <input type="password" class="form-control" placeholder="" id="senha" name="senha" >
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



