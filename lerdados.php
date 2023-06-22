<?php
include conexao.php;
include emprestimos.php;
$titulo=['titulo'];
 $sql = "SELECT * FROM livros VALUES ('titulo');

$query = mysqli_query($sql);
 while ($reg = mysqli_fetch_assoc($query)){
	 
	 $titulo = $reg[titulo];
 }
?>