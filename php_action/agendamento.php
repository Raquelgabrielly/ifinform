<?php 
//sessao
include_once '../includes/session.php';

//conexao
require_once "db_connect.php";

date_default_timezone_set('America/Sao_Paulo');

if (isset($_SESSION['matricula'])) {
	
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$id_aluno = mysqli_escape_string($connect, $_SESSION['id']);
	$id_prof = mysqli_escape_string($connect, $_POST['id_prof']);

	// formantando a data para adequar-se ao formato no banco de dados
	$getdata = mysqli_escape_string($connect, $_POST['data']);
	$formatdata = explode('/', $getdata);
	$data = implode('-', [$formatdata[0], $formatdata[1], $formatdata[2]]);
	
	$assunto = mysqli_escape_string($connect, $_POST['assunto']);
	$data_hoje = date('Y-m-d H:i:s');

	// formantando a hora para adequar-se ao formato no banco de dados, separando dia de noite
	$hora = mysqli_escape_string($connect, $_POST['hora']);
	$getHora = explode(" ", $hora);
	if ($getHora[1] == "PM") {
		$part1 = explode(':', $getHora[0]);
		$part1[0] = $part1[0] + 12;
		$horaNew = implode(':', [$part1[0],$part1[1],'00']);
		$data_para = implode(' ', [$data, $horaNew]);
	}else{
		$horaPara = implode(':', [$getHora[0],'00']);
		$data_para = implode(' ', [$data, $horaPara]);
	}

	$sql = "INSERT INTO agendamento (AGENDADO_PARA, AGENDADO_EM, DISCENTE_ID, DOCENTE_ID, ASSUNTO, NOME) VALUES ('$data_para' , '$data_hoje' , '$id_aluno' , '$id_prof', '$assunto' , '$nome')";

	if (mysqli_query($connect, $sql)) {
		$_SESSION['mensagem'] = 'Agendado com sucesso';
		header('location: ../perfil-aluno.php');
	}else{
		$_SESSION['mensagem'] = 'Falhou';
		header('location: ../perfil-aluno.php');
	}
}

elseif (isset($_SESSION['cpf'])) {
	
	$id_visitante = mysqli_escape_string($connect, $_SESSION['id']);
	$id_prof = mysqli_escape_string($connect, $_POST['id_prof']);
	$id_aluno = mysqli_escape_string($connect, $_POST['id_aluno']);

	// formantando a data para adequar-se ao formato no banco de dados
	$getdata = mysqli_escape_string($connect, $_POST['data']);
	$formatdata = explode('/', $getdata);
	$data = implode('-', [$formatdata[0], $formatdata[1], $formatdata[2]]);
	
	$assunto = mysqli_escape_string($connect, $_POST['assunto']);
	$data_hoje = date('Y-m-d H:i:s');

	// formantando a hora para adequar-se ao formato no banco de dados, separando dia de noite
	$hora = mysqli_escape_string($connect, $_POST['hora']);
	$getHora = explode(" ", $hora);
	if ($getHora[1] == "PM") {
		$part1 = explode(':', $getHora[0]);
		$part1[0] = $part1[0] + 12;
		$horaNew = implode(':', [$part1[0],$part1[1],'00']);
		$data_para = implode(' ', [$data, $horaNew]);
	}else{
		$horaPara = implode(':', [$getHora[0],'00']);
		$data_para = implode(' ', [$data, $horaPara]);
	}

	$sql = "INSERT INTO agendamento (AGENDADO_PARA, AGENDADO_EM, VISITANTE_ID, DISCENTE_ID, DOCENTE_ID, ASSUNTO) VALUES ('$data_para' , '$data_hoje' , '$id_visitante' , '$id_aluno' , '$id_prof', '$assunto')";

	if (mysqli_query($connect, $sql)) {
		$_SESSION['mensagem'] = 'Agendado com sucesso';
		header('location: ../perfil-aluno.php');
	}else{
		$_SESSION['mensagem'] = 'Falhou';
		header('location: ../perfil-aluno.php');
	}
}

elseif (isset($_SESSION['siape'])) {
	
	$id_prof = mysqli_escape_string($connect, $_SESSION['id']);
	$id_aluno = mysqli_escape_string($connect, $_POST['id_aluno']);

	// formantando a data para adequar-se ao formato no banco de dados
	$getdata = mysqli_escape_string($connect, $_POST['data']);
	$formatdata = explode('/', $getdata);
	$data = implode('-', [$formatdata[0], $formatdata[1], $formatdata[2]]);
	
	$assunto = mysqli_escape_string($connect, $_POST['assunto']);
	$data_hoje = date('Y-m-d H:i:s');

	// formantando a hora para adequar-se ao formato no banco de dados, separando dia de noite
	$hora = mysqli_escape_string($connect, $_POST['hora']);
	$getHora = explode(" ", $hora);
	if ($getHora[1] == "PM") {
		$part1 = explode(':', $getHora[0]);
		$part1[0] = $part1[0] + 12;
		$horaNew = implode(':', [$part1[0],$part1[1],'00']);
		$data_para = implode(' ', [$data, $horaNew]);
	}else{
		$horaPara = implode(':', [$getHora[0],'00']);
		$data_para = implode(' ', [$data, $horaPara]);
	}

	$sql = "INSERT INTO agendamento (AGENDADO_PARA, AGENDADO_EM, DISCENTE_ID, DOCENTE_ID, ASSUNTO) VALUES ('$data_para' , '$data_hoje' , '$id_aluno' , '$id_prof', '$assunto')";

	if (mysqli_query($connect, $sql)) {
		$_SESSION['mensagem'] = 'Agendado com sucesso';
		header('location: ../perfil-aluno.php');
	}else{
		$_SESSION['mensagem'] = 'Falhou';
		header('location: ../perfil-aluno.php');
	}
}

 ?>