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
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
        <a class="nav-link" href="carrinho.php">Carrinhos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="visualizar_carrinho.php">Visualizar Carrinho</a>

      </li>
    </ul>
  </div>
</nav>
<div class="w-40´">
<center style="margin-top:2px; background-color: gray;">
	<div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img width="50" src="https://www.pitbulljeansvarejo.com.br/imagens/produtos/5565/Detalhes/camiseta-masculina-ref-m27673.jpg" class="d-block w-50" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://www.arquitetodecristo.com.br/wp-content/uploads/2019/05/CAMISETA-MASCULINA-SALMOS-91-BRANCA-min.png" class="d-block w-50 " alt="img1">
    </div>
    <div class="" class="d-block w-100" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</center>
</div>







</body>
</html>

