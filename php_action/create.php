<?php 
//sessao
include_once '../includes/session.php';
include_once 'init.php';
//conexao
require_once "db_connect.php";
if (!isset($_POST['matricula']) && !isset($_POST['siape']) && !isset($_POST['cpf']) ) {
	$_SESSION['mensagem'] = 'Insira os dados, e selecione seu Perfil';
	header('location: ../add.php');
}
if(empty($_POST['nome'] ||  $_POST['email'] || $_POST['telefone'] || $_POST['senha'])){
	$_SESSION['mensagem'] = 'Insira todos os dados';
	header('location: ../add.php');
	exit();
}
//verifica se o usuario enviou os dados do formulario.
if (isset($_POST['matricula'])) {
	
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$matricula = mysqli_escape_string($connect, $_POST['matricula']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	// testa se os dados ja existem como usuario (discente)
	$query1 = "SELECT * FROM discente WHERE DISCENTE_MATRICULA = '$matricula'";
	$query2 = "SELECT * FROM discente WHERE DISCENTE_EMAIL = '$email'";
	$result1 = mysqli_query($connect, $query1);
	$result2 = mysqli_query($connect, $query2);
	$row1 = mysqli_num_rows($result1);
	$row2 = mysqli_num_rows($result2);
	if ($row1 => 1) {
		$_SESSION['mensagem'] = "Matrícula já cadastrada";
		header('location: ../add.php');
		exit();
	}
	elseif($row2 => 1) {
		$_SESSION['mensagem'] = "Email já cadastrado";
		header('location: ../add.php');
		exit();
	}
	$sql = "INSERT INTO discente (DISCENTE_NOME, DISCENTE_MATRICULA, DISCENTE_EMAIL, DISCENTE_TELEFONE, DISCENTE_SENHA) VALUES ('$nome' , '$matricula' , '$email' , '$telefone', '$senha')";
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../login.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../add.php');
	endif;
	
}
elseif (isset($_POST['siape'])) {
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$siape = mysqli_escape_string($connect, $_POST['siape']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	// testa se os dados ja existem como usuario (docente)
	$query1 = "SELECT * FROM docente WHERE DOCENTE_SIAPE = '$siape'";
	$query2 = "SELECT * FROM docente WHERE DOCENTE_EMAIL = '$email'";
	$result1 = mysqli_query($connect, $query1);
	$result2 = mysqli_query($connect, $query2);
	$row1 = mysqli_num_rows($result1);
	$row2 = mysqli_num_rows($result2);
	if ($row1 => 1) {
		$_SESSION['mensagem'] = "SIAPE já cadastrado";
		header('location: ../add.php');
		exit();
	}
	elseif($row2 => 1) {
		$_SESSION['mensagem'] = "Email já cadastrado";
		header('location: ../add.php');
		exit();
	}
	$sql = "INSERT INTO docente (DOCENTE_NOME, DOCENTE_SIAPE, DOCENTE_EMAIL, DOCENTE_TELEFONE, DOCENTE_SENHA) VALUES ('$nome' , '$siape' , '$email' , '$telefone', '$senha')";
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../login.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../add.php');
	endif;
}
elseif (isset($_POST['cpf'])) {
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$cpf = mysqli_escape_string($connect, $_POST['cpf']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	// testa se os dados ja existem como usuario (visitante)
	$query1 = "SELECT * FROM discente WHERE DISCENTE_MATRICULA = '$cpf'";
	$query2 = "SELECT * FROM discente WHERE DISCENTE_EMAIL = '$email'";
	$result1 = mysqli_query($connect, $query1);
	$result2 = mysqli_query($connect, $query2);
	$row1 = mysqli_num_rows($result1);
	$row2 = mysqli_num_rows($result2);
	if ($row1 => 1) {
		$_SESSION['mensagem'] = "CPF já cadastrada";
		header('location: ../add.php');
		exit();
	}
	elseif($row2 => 1) {
		$_SESSION['mensagem'] = "Email já cadastrado";
		header('location: ../add.php');
		exit();
	}
	$sql = "INSERT INTO visitante (VISITANTE_NOME, VISITANTE_CPF, VISITANTE_EMAIL, VISITANTE_TELEFONE, VISITANTE_SENHA) VALUES ('$nome' , '$cpf' , '$email' , '$telefone', '$senha')";
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../login.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../add.php');
	endif;
}
	
 ?> 