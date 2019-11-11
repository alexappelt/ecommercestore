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
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
<center>
<h1 class="alert alert-success">Cadastro de produtos</h1>
</center>

<div class="container">

  <form action="action_cadastrar.php" method="post" enctype="multipart/form-data" >
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Codigo</label>
          <input type="number" class="form-control" disabled="true" placeholder="" id="codigo" name="codigo">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Descrição</label>
          <input type="text" class="form-control" placeholder="" id="descricao" name="descricao">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="company">Quantidade</label>
          <input type="number" class="form-control" placeholder="" id="quantidade" name="quantidade" >
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
<label for="email">Departamento</label>
<select class="custom-select" id="departamento" name="departamento">
    <option selected></option>
    <option value="Moda Praia">Moda Praia</option>
    <option value="Social">Social</option>
    <option value="Esporte">Esporte</option>
  </select>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Preço</label>
          <input type="number" class="form-control" id="preco" name="preco" >
        </div>
      </div>
      <!--  col-md-6   -->

      
    <!--  row   -->
 
  <div class="col-md-6">
    <label for="email">Marca</label>
<select class="custom-select" id="marca" name="marca">
    <option selected></option>
    <option value="Lacoste">Lacoste</option>
    <option value="Adidas">Adidas</option>
    <option value="Gucci">Gucci</option>
  </select>

</div>


      <div class="col-md-12">
        <label for="email">Imagem</label>
 <div class="input-group">
  <div class="input-group-prepend">

  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="imagem">
    <label class="custom-file-label" for="inputGroupFile01"></label>
  </div>
</div>
        </div>
     



    
<div class="float-right" style="margin-top: 30px;">
  <button type="submit" class="btn btn-dark border border-success">Cadastrar</button>
  <button class="btn btn-dark border border-danger"><a href="index.php">Voltar</a></button>
  </div>
  </form>

</div>




</body>
</html>



