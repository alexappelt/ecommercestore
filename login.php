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
<h1 class="alert-danger" style="margin-top: 50px;">
	Digite seu usuario e senha de administrador para cadastrar produtos
</h1>
</center>

<!-- Formulario de login-->
<center style="margin-top: 90px;">
<div class="container" style="background-color: gray; width: 500px; height: 350px; padding-top: 50px; border-top:solid black; border-radius: 15px; border-width: 10px;">
	<form >
  <div class="form-group w-50 ">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Seu usuario" autocomplete="false">
  </div>
  <div class="form-group w-50">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="password" placeholder="Senha" autocomplete="false">
  </div>
  <div class="form-group form-check w-50">
    
  </div>
  <button type="button" class="btn btn-primary" onclick="login()">Enviar</button>
  <button class="btn btn-success"><a href="produtos.php">Voltar</a></button>
</form>
<h1  style="color:red;" id="alerta"></h1>
</div>
</center>

<script type="text/javascript">
	
	function login(){
		var user, pass;


		user = document.getElementById('user');
		pass = document.getElementById('password');

		if(user.value == "admin" && pass.value == "admin"){
			window.location.href = "cad_prod.php";
		}
		else{
			document.getElementById('alerta').innerHTML = 'Senha Invalida!';

		}
	}

</script>
</body>
</html>