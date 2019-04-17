<?php 
	session_start();
	//header
	include_once 'includes/header.php';
	//conexao
	include_once 'php_action/db_connect.php';
	
	if(isset($_SESSION['mensagem'])):
 ?>


	<script>
		//mensagem que mostra quando foi cadastrado com sucesso ou nao. MATERIALISE
		window.onload = function (){
			M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
		};

	</script>

<?php endif; ?>

    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Login</h3>
			
			<form action="php_action/login.php" method="POST">
								
				<div class="input-field col s12">
					<i class="material-icons prefix">person</i>
					<input type="text" name="email" id="email">
					<label for="email">Email</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">error_outline</i>
					<input type="password" name="senha" id="senha">
					<label for="senha">Senha</label>
				</div>

				<button type="submit" name="enviar" class="btn">Login</button>
				<!-- <a href="crud.php" class="btn green">Lista de Alunos</a> -->
				<a href="index.php" class="btn blue">Página Inicial</a>
			</form>

    	</div>
    </div>




<?php 
	//footer
	include_once 'includes/footer.php';
?>