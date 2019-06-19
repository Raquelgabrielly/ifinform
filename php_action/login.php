<?php 

include_once '../includes/session.php';  

require_once "db_connect.php";
	
	
if(isset($_POST['matricula'])){

	if (empty($_POST['matricula'] || $_POST['senha'])) {
		header('location: ../login.php');
		$_SESSION['mensagem'] = "Insira os dados.";
		exit();
	}

	$matricula = mysqli_real_escape_string($connect, $_POST['matricula']);
	$senha = mysqli_real_escape_string($connect, $_POST['senha']);

	$query = "SELECT * FROM discente WHERE DISCENTE_MATRICULA = '$matricula' AND DISCENTE_SENHA = '$senha'";

	$result = mysqli_query($connect, $query);


	$row = mysqli_num_rows($result);



	if ($row > 0) {
		while ($dados = mysqli_fetch_assoc($result)) {
			
			$_SESSION['id'] = $dados['DISCENTE_ID']; 
			$_SESSION['nome'] = $dados['DISCENTE_NOME']; 
			$_SESSION['telefone'] = $dados['DISCENTE_TELEFONE']; 
			$_SESSION['email'] = $dados['DISCENTE_EMAIL']; 
			$_SESSION['matricula'] = $dados['DISCENTE_MATRICULA']; 
			header('location: ../perfil-aluno.php');
			$_SESSION['mensagem'] = 'Logado';
		}
		// $_SESSION['usuario'] = $email;
	}
	else{
		$_SESSION['mensagem'] = "Dados errados, tente novamente.";
		header('location: ../login.php');
	}
}
elseif(isset($_POST['siape'])){

	if (empty($_POST['siape'] || $_POST['senha'])) {
		header('location: ../login.php');
		$_SESSION['mensagem'] = "Insira os dados.";
		exit();
	}
	
	$siape = mysqli_real_escape_string($connect, $_POST['siape']);
	$senha = mysqli_real_escape_string($connect, $_POST['senha']);

	$query = "SELECT * FROM docente WHERE DOCENTE_SIAPE = '$siape' AND DOCENTE_SENHA = '$senha'";

	$result = mysqli_query($connect, $query);


	$row = mysqli_num_rows($result);



	if ($row > 0) {
		while ($dados = mysqli_fetch_assoc($result)) {

			$_SESSION['id'] = $dados['DOCENTE_ID']; 
			$_SESSION['nome'] = $dados['DOCENTE_NOME']; 
			$_SESSION['telefone'] = $dados['DOCENTE_TELEFONE']; 
			$_SESSION['email'] = $dados['DOCENTE_EMAIL']; 
			$_SESSION['siape'] = $dados['DOCENTE_SIAPE']; 
			header('location: ../perfil-professor.php');
			$_SESSION['mensagem'] = 'Logado';
		}
		// $_SESSION['usuario'] = $email;
	}
	else{
		$_SESSION['mensagem'] = "Dados errados, tente novamente.";
		header('location: ../login.php');
	}
}
elseif(isset($_POST['cpf'])){

	if (empty($_POST['cpf'] || $_POST['senha'])) {
		header('location: ../login.php');
		$_SESSION['mensagem'] = "Insira os dados.";
		exit();
	}
	
	$cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
	$senha = mysqli_real_escape_string($connect, $_POST['senha']);

	$query = "SELECT * FROM visitante WHERE VISITANTE_CPF = '$cpf' AND VISITANTE_SENHA = '$senha'";

	$result = mysqli_query($connect, $query);


	$row = mysqli_num_rows($result);



	if ($row > 0) {
		while ($dados = mysqli_fetch_assoc($result)) {

			$_SESSION['id'] = $dados['VISITANTE_ID']; 
			$_SESSION['nome'] = $dados['VISITANTE_NOME']; 
			$_SESSION['telefone'] = $dados['VISITANTE_TELEFONE']; 
			$_SESSION['email'] = $dados['VISITANTE_EMAIL']; 
			$_SESSION['cpf'] = $dados['VISITANTE_CPF']; 
			header('location: ../perfil-visitante.php');
			$_SESSION['mensagem'] = 'Logado';
		}
		// $_SESSION['usuario'] = $email;
	}
	else{
		$_SESSION['mensagem'] = "Dados errados, tente novamente.";
		header('location: ../login.php');
	}
}
else{
	$_SESSION['mensagem'] = "Selecione seu Perfil";
	header('location: ../login.php');
}



 
 ?>