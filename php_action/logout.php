<?php 

include_once '../includes/session.php';  

require_once "db_connect.php";

unset($_SESSION['id']);
unset($_SESSION['nome']);
unset($_SESSION['telefone']);
unset($_SESSION['email']);
unset($_SESSION['matricula']);
unset($_SESSION['siape']);
unset($_SESSION['cpf']);
unset($_SESSION['mensagem']);

header('location: ../index.php');

 ?>