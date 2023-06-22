<?php

include_once("cadastro.php");
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);


$conn = "conexao.php";
$result_usuario;
$resultado_usuario;
echo "Título: $titulo <br>";
echo "Categoria: $categoria <br>";
echo "Autor: $autor <br>";


?>