<?php 
//sessao
include_once '../includes/session.php';  
//conexao
require_once "db_connect.php";

if(isset($_POST['matricula'])){

	unset($_SESSION['id']); 
	unset($_SESSION['nome']); 
	unset($_SESSION['telefone']); 
	unset($_SESSION['email']); 
	unset($_SESSION['matricula']; 

		session_destroy();
		header('location: ../login.php');
		exit();
	}
}
elseif(isset($_POST['siape'])){

	unset($_SESSION['id']);
	unset($_SESSION['nome']);
	unset($_SESSION['telefone']);
	unset($_SESSION['email']);
	unset($_SESSION['siape']);
	
		session_destroy();
		header('location: ../login.php');
		exit();
	}
}
else(isset($_POST['cpf'])){
	
	unset($_SESSION['id']);
	unset($_SESSION['nome']);
	unset($_SESSION['telefone']);
	unset($_SESSION['email']);
	unset($_SESSION['cpf']);

		session_destroy();
		header('location: ../login.php');
		exit();
	}
}
?>