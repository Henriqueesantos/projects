<?php
//função de cadastro
include("conexao.php");
session_start();

$logado = $_SESSION['usuario'];
$livroemp=$_POST['livroemp'];
$dtdev=$_POST['dtdev'];

$sql= "UPDATE `livros` SET `disponibilidade`='EMPRESTADO', `posse`=('$logado'), `datadev`=('$dtdev') WHERE id = $livroemp";


if(mysqli_query($conexao, $sql)){	
	echo  "<script>alert('Livro emprestado com sucesso!');location.href=\"index.php\";</script>";
}
else{
	echo "BUGGGGG".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>