<?php 

function addDiscente($nome, $email, $senha, $telefone, $matricula){
	$sql = "INSERT INTO discente (DISCENTE_NOME, DISCENTE_MATRICULA, DISCENTE_EMAIL, DISCENTE_TELEFONE, discente_senha) VALUES ('$nome' , '$matricula' , '$email' , '$telefone', '$senha')";
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../add.php');
	endif;
}

function addDocente($nome, $email, $senha, $telefone, $siape){
	$sql = "INSERT INTO docente (nome, siape, email, telefone, senha) VALUES ('$nome' , '$siape' , '$email' , '$telefone', '$senha')";
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../add.php');
	endif;
}

function addVisitante($nome, $email, $senha, $telefone, $cpf){
	$sql = "INSERT INTO visitante (nome, cpf, email, telefone, senha) VALUES ('$nome' , '$cpf' , '$email' , '$telefone', '$senha')";
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../add.php');
	endif;
}

function post_protect($name){
	return mysqli_escape_string($connect, $_POST[$name]);
}


 ?>