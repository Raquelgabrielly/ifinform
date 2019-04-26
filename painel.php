<?php 
 	
	//conexao
	include_once 'php_action/db_connect.php';
	//header
	include_once 'includes/header.php';
	//mensagem de cadastrado ou nao.
 include_once 'includes/mensagem.php';

	
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Login feito</h3>
			<h3 class="light"><?= $_SESSION['usuario'] ?></h3>
			
		</div>
	</div>


<?php 
	include_once 'includes/footer.php';
 ?>