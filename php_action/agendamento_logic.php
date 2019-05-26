<?php 
//sessao
include_once '../includes/session.php';

//conexao
require_once "db_connect.php";


	// $nome = mysqli_escape_string($connect, $_POST['nome']);
	// $email = mysqli_escape_string($connect, $_POST['email']);
	// $telefone = mysqli_escape_string($connect, $_POST['telefone']);

	
	// $siap = $_POST['siape'];
	// $cpf = $_POST['cpf'];
	// $matricula = $_POST['matricula'];

	$curso 	 = $_POST['curso'];
	$periodo = $_POST['periodo'];
	$turno = $_POST['turno'];
	$message = $_POST['message'];

	$autor = $_POST['autor'];
	$destinatario = $_POST['destinatario'];
	$data = date("Y-m-d H:i:s");
	$status = $_POST['status'];

	# insercao do agendamento
	$SQL = "INSERT INTO agendamento (DESTINATARIO, MESSAGE, DATA, AUTOR, CURSO, PERIODO, STATUS) 
				  VALUES ('{$destinatario}', '{$message}', '{$data}', '{$autor}', '{$curso}', '{$periodo}', '{$status}')";
	// mysql_select_db($database_connect, $connect);
	// $Result1 = mysql_query($SQL, $connect) or die(mysql_error());

	# envia mensagem da acao para usuario
	if(mysqli_query($connect, $SQL)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../agendamento.php');
	endif;
}

 ?>