<?php
include ('conexao.php');

if (isset($_POST['funcao']) && $_POST['funcao'] == "Emprestar") {
	$nome = $_REQUEST['nome'];
	$livroemp = $_REQUEST['livroemp'];
	$dtDev = $_REQUEST['dtdev'];
	$conexao = mysqli_connect($hostname, $dbUsername, $dbPassword, $dbName);
	if (mysql_select_db('acervo')) {
		$sql = "INSERT INTO " . "emprestimos (nome, livroemp, telefone, email, dataemp, datadev) " . "VALUES ('$nome', '$livroemp', '$telefone', '$email', '$dtEmp', '$dtDev')";
	}

	mysql_query($sql);
	header("Location: emprestimos.php");
}


if (isset($_POST['funcao']) && $_POST['funcao'] == "Atualizar") {
	$con = mysql_connect('localhost', 'root') or die('Não foi possível conectar');
	mysql_select_db("acervo", $con);
	$result = mysql_query('SELECT * FROM emprestimos');
	while ($row = mysql_fetch_array($result)) {
		$data = $row['datadev'];
		$dataatual = date("Y-m-d");
		if ($dataatual > $data) {
			$sql = "DELETE FROM emprestimos WHERE datadev = '$data'";
			mysql_query($sql);
		}
	}

	header("Location: veremprestimos.php");
} ?>
