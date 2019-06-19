<?php 
//sessao
include_once '../includes/session.php';

//conexao
require_once "db_connect.php";

date_default_timezone_set('America/Sao_Paulo');

if (isset($_SESSION['matricula'])) {
	
	$id_aluno = mysqli_escape_string($connect, $_SESSION['id']);
	$id_prof = mysqli_escape_string($connect, $_POST['id_prof']);
	$data = mysqli_escape_string($connect, $_POST['data']);
	$assunto = mysqli_escape_string($connect, $_POST['assunto']);
	$data_hoje = date('Y-m-d H:i:s');

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



	//o formato date time do mysql deve ser salvo da seguinte forma: YYYY-MM-DD hh:mm:ss"

	// formantando a data que veio do formulario para poder salvar no banco de dados
	// $formatar_data = explode('/', $data);
	// $array = ['$formatar_data[2]','$formatar_data[1]','$formatar_data[0]'];
	// $data_para = implode('-', $array);


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