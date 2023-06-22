<?php

include("conexao.php");
include("cadusuario.php");

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

$sql="INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";



if(mysqli_query($conexao, $sql)){
	echo "On-line";
	
}
else{
	echo "BUGGGGG" .mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>

