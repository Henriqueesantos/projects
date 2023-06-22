<?php
include ('conexao.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acervo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <style>
body {
	background: PaleTurquoise;}
</style>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   

</head>
<body>

<text-align: center>
	<ul class="titulo"> 
    <li><div class="brand">Biblioteca</div></li><br><br>
 </ul>
 <br><br>
   <div class="container" >

        <div class="row">
            <div class="box">
               
                    <hr>
                    <h2 class=" text-center">
                        <strong>Login </strong>
                    </h2>
                    <hr>
                <br><br>
                <div class="col-md-6" >
				 
     
	   <table   class="cadastro"  ><tr><tr><tr><tr>
	   
	   
	   
	   
	   
	   
	   
             <form action="testeLogin.php" method="POST">
			<td>
		   <label>Usuário:<br><input type="text" name="usuario" required></label><br>
		   <label>Senha:<br><input type="password" name="senha" required></label><br><br>
		   <input class="inputSubmit" type="submit" name="submit"  value="		Entrar		 "/><br><br><br>
			<a href="cadusuario.php"><b>Ainda não é usuário? Cadastre-se aqui!</b></a>
			</td>
	
	</table>
    </form> <br><br>
        </div>
		<div class="col-lg-12">
   <br><br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <b><i>|Todos os direitos reservados a Marcelo Henrique dos Santos|Ulbra 2022/1</i></b></p>
	</footer>
</body>
</html>