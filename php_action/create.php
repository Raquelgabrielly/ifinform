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