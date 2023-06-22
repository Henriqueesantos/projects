
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

    <title>Emprestados</title>

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
    <li><div class="brand">Biblioteca</div><br><br></li>
 </ul>  <br><br><br><br>

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
                        <strong>Empréstimos</strong>
                    </h2>
                    <hr>
					<text align="center"><br><br>
					
            <?php
						
				$result_livros = "SELECT * FROM livros WHERE disponibilidade = 'EMPRESTADO' ";
				$result = mysqli_query($conexao, $result_livros);
				while($row_livro = mysqli_fetch_assoc($result)){
					
				echo '<option value="' . $row_livro['id'].'">'.$row_livro['titulo'].'  emprestado para  ' .$row_livro['posse'].'  até dia:  ' .$row_livro['datadev'].'</option><br>';
						
				
				
				
				}
		

			?>
    </h3><br><br>                
           
              
        	
				
				
				
				
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                
            <!-- Collect the nav links, forms, and other content for toggling -->
            </div>
        </div>


   <footer>
        
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <b><i>|Todos os direitos reservados a Marcelo Henrique dos Santos|Ulbra 2022/1</i></b></p>
    </footer>
</body>
</html>