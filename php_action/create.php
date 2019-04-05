<?php 
//sessao
session_start();

//conexao
require_once "db_connect.php";

//verifica se o usuario enviou os dados do formulario.
if(isset($_POST['enviar'])):


	//pega os dados que foram passados pelo formulario, e guarda dentro dessas variaveis.
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$matricula = mysqli_escape_string($connect, $_POST['matricula']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);

	// seleciona a tabela aluno do banco de dados com seus indices, e guarda as variaveis que estao com os dados que foram passados pelo formulario.
	$sql = "INSERT INTO alunos (nome, matricula, email, telefone) VALUES ('$nome' , '$matricula' , '$email' , '$telefone')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";

		header('location: ../crud.php');

	else:

		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../crud.php');
	endif;

endif;	


 ?>