<?php
include ('conexao.php');
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
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   

</head>

<body>
<style>
body {
	background: PaleTurquoise;}
</style>
 <div class="titulo">
    <li><div class="brand">Biblioteca</div></li>
<br><br><br><br>
 </div>  

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
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
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
           
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav><br>
	
 
    <div class="container">

        

            <div class="box">
<ul class="nav navbar-nav">
      
                        <hr><a href="index.php">Início</a><hr>
                   
                </ul>
                <div class="col-lg-12 text-center">
                <strong><h2>Acervo</h2> </strong>
				
				
				<br>
				
				<br><br>


<?php
				
				
				
				$result_livros = "SELECT * FROM livros";
				$result = mysqli_query($conexao, $result_livros);
				while($row_livro = mysqli_fetch_assoc($result)){
					
					echo $row_livro['titulo'] . "	De	";
					echo $row_livro['autor'] . "<br><br>";
					
				}

?>
	
	<br><br><br><br>
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