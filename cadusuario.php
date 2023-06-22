<?php
include ('conexao.php');
session_start();
//print_r($_SESSION);

if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
		{
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	header("Location:login.php");
		}
		$logado = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cad User</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>

<style>
body {
	background: PaleTurquoise;}
</style>

	<ul class="titulo"> 
    <li><div class="brand">Biblioteca</div></li>
 </ul>  <br><br><br><br><br>
    <div class="container">

        <div class="row"> 
		
            <div class="box">
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                  
					
                        <a href="index.php">Início</a>
                   
                    
                </ul>
            </div>
                <div class="col-lg-12">
				
				
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Cadastrar Usuário </strong>
                    </h2>
                    <hr>
                
                
       <form class= "formulario" method="POST" enctype="multipart/form-data" action="cadus.php">
        
	   <table  class="cadastro" ><tr><tr><tr><tr>
            <td><label>Usuário:<br><input type="text" name="usuario" value="" required></label><br><br></td></tr>    
			<td><label>Senha:<br><input type="password" name="senha" value="" required></label><br><br></td></tr>
			
		
		</table><br><br>
        
            <div class="botoes1"><td>
                <input class="cadastrar" type="submit"  value="Cadastrar" name="index.php">
                </div>
                </form>
				<br><br>
             <div class="col-md-6">   
            </div>
       

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <b><i>|Todos os direitos reservados a Marcelo Henrique dos Santos|Ulbra 2022/1</i></b></p>
                </div>
				
            </div>
        </div>
		</div>
    </footer>
</body>
</html>