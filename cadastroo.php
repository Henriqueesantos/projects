<?php
//função de cadastro
include("conexao.php");
include("cadastro.php");

$titulo=$_POST['titulo'];
$categoria=$_POST['categoria'];
$autor=$_POST['autor'];


$sql="INSERT INTO livros(titulo, categoria, autor) VALUES ('$titulo', '$categoria', '$autor')";



if(mysqli_query($conexao, $sql)){
	echo "Cadastrado com sucesso!";
	
}
else{
	echo "BUGGGGG".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>