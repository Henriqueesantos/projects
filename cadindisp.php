<?php
//função de cadastro
include("conexao.php");



$livroemp2=$_POST['livroemp2'];

$sql= "UPDATE `livros` SET `disponibilidade`='DEVOLVIDO', `posse`='', `datadev`='0000-00-00' WHERE id = $livroemp2";




if(mysqli_query($conexao, $sql)){
	echo  "<script>alert('Livro devolvido com sucesso!');location.href=\"index.php\";</script>";
	



}
else{
	echo "BUGGGGG".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>