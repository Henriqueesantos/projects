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
<html lang="pt">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cad Livro</title>
	

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css"  rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css"  rel="stylesheet">
    

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
           
                        <a href="index.php">Início</a><br>
                                     
               </ul><br>
			   
            <div class="col-lg-12">
				
				
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Cadastrar Livro </strong>
                    </h2>
                    <hr>
                
                
                <div class="col-md-6" align ="center">
       <form class= "formulario" method="POST"  action="cadastroo.php">
        
        <table class="cadastro">

            <td><label>Título:<br><input type="text" name="titulo" required></label><br><br></td></tr> 
            <td><label>Categoria:<br>
                    <select name="categoria">
                    <option value="romance">Romance </option>
                    <option value="ficcao">Ficção </option>
                    <option value="fantasia">Fantasia </option>
                    <option value="terror">Terror </option>
                    <option value="suspense">Suspense </option>
                    <option value="infatil">Infantil </option>
                    <option value="didatico">Didático</option>
                    <option value="autoajuda">Auto Ajuda </option>
                    <option value="biografia">Biografia </option>
                    <option value="religiao">Religião </option>
                </select>
            </label><br><br>
            <tr><td><label>Nome do autor:<br><input type="text" name="autor" required></label><br><br></td>
              <br>
        </table>
        
            <div class="botoes1">
                <input class = "cadastrar" type = "submit" id = "submit" name = "submit" value = "Cadastrar"/> 
                </div>
                </form>
				<br><br>
            </div></div></div><br>
	<footer>
        
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <b><i>|Todos os direitos reservados a Marcelo Henrique dos Santos|Ulbra 2022/1</i></b></p>
    </footer>

</body>
</html>