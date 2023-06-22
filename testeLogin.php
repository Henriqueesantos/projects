<?php
 session_start();
 include ('conexao.php');
 
	//print_r($_REQUEST);
	
	if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
		{
		include_once('conexao.php');
 	
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		//print_r('Usuario:' .$usuario);
		//print_r('<br>');
		//print_r('Senha:' .$senha);
		}
		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
		
		$result = $conexao->query($sql);
		print_r($sql);
		print_r($result);
		
		if(mysqli_num_rows($result) < 1)
		{
			unset($_SESSION['usuario']);
			unset($_SESSION['senha']);
	 		header('Location:login.php');
		} 

	else
	{
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			header('Location:index.php');
}

?>
	





