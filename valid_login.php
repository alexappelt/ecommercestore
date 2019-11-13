<?php 
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    require'conexao.php';



    $sql = "select * from usuarios where usuario = '".$user. "' and senha = '".$pass."'";

    //$sql = 'select * from usuario where usuario = '.$user.' and senha = '.$pass;
 	

	$busca = mysqli_query($conexao, $sql);

    $linhas = mysqli_num_rows($busca);


    if($linhas==0){
    	 echo '<script> alert("SENHA INVALIDA"); window.location.assign("login.php") ; </script>';
    }
    else{
    	 header('Location: cad_prod.php');
    }

    ?>