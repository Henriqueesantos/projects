<?php
include ('conexao.php');
$disp="disponibilidade";
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

    <title>Devolução</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   

</head>

<body>
<style>
body {
	background: PaleTurquoise;}
</style>

	<ul class="titulo"> 
    <li><div class="brand">Biblioteca</div></li><br><br><br><br>
 
 </ul> <br>
<div class="container">
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Acervo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Início</a>
                    </li>
                   
                </ul>
           </div>
    <div class="container">

        
      
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Devolver Livro</strong>
                    </h2>
                    <hr>
					<br>
        
                
                <form method="POST" action="cadindisp.php">
        
			<table class="emprestimos">

            
            <tr><td><b>Leitor:


			<?php print_r($_SESSION['usuario']) ?></b>  <br><br></td>
            <td><label><br>Livro:</label><br>
			<select  name="livroemp2">
			<br><br>
			<option>Selecione o livro!
			<?php
						
				$result_livros = "SELECT * FROM livros WHERE `posse`=('$logado')";   
				$result = mysqli_query($conexao, $result_livros);
				while($row_livro = mysqli_fetch_assoc($result)){
					
				echo '<option value="' . $row_livro['id'].'">'.$row_livro['titulo'].'</option>';
				
				}
				$livroemp2 = $row_livro['titulo'];

			?>
		
			</option>
			</select>
			<br><br></td></tr>
                       
           
            </tr>
        
            <div class="botoes2">
                <tr> <td> <input class="cadastrar" type="submit" value="  Devolver  " name="disp"/> </td>
				
        
				</form>
				<form class= "formulario" method="POST" enctype="multipart/form-data" action="cadindisp.php">
				<td> 

				</form>
		</table>
				

        <br><br><br><br><br><br>


	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <b><i>|Todos os direitos reservados a Marcelo Henrique dos Santos|Ulbra 2022/1</i></b></p><br>


    <br>
</div>
</body>
</html>