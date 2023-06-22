<?php

include("conexao.php");
include("cadastroleitor.php");

$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];

$sql="INSERT INTO leitor(nome, endereco, email, telefone) VALUES ('$nome', '$endereco', '$email', '$telefone')";



if(mysqli_query($conexao, $sql)){
	echo "On-line";
	
}
else{
	echo "BUGGGGG".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>