<?php
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


<link rel="stylesheet" type="text/css" href="css/style.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <style>
body {
	background: PaleTurquoise;
	}
</style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>


 <ul class="titulo"> 
    <li><div class="brand">Biblioteca<br>
	

 </ul>  <br><br><br><br><br>

        <div class="container">
		<div class= "box" >
		<div class= "d-flex"  align="right">
		 <a align ="left"><h4><i>Olá <?php print_r($_SESSION['usuario']); ?>  !</i></h4> </a></li>
		<a href="logout.php"><u><b>Sair</b></u></a>
		<div class="row">
        <ul class="nav navbar-nav" text align="center">
	
	
                    <li>
                    <a href="cadastro.php"><b>Cadastrar Livro</b></a>                    
					<a href="cadastroleitor.php"><b>Cadastrar Leitor</b></a>
					<a href="emprestimos.php"><b>Solicitar Empréstimo</b></a>
					<a href="mostra.php"><b>Acervo</b></a>
					<a href="devolv.php"><b>Devoluções</b></a>
					<a href="veremprestimos.php"><b>Empréstimos</b></a>
                    </li>
        </ul>
		</div><br>
		</div>
    <footer>
        <div class="container" >
            <div class="row">
                <div class="col-lg-14 text-center">
                    <p> <b><i>Todos os direitos reservados a Marcelo Henrique dos Santos|Ulbra 2022/1</i><b/></p>
    </footer>
</body>
</html>
