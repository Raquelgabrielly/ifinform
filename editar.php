<?php 
	//concexao
	include_once 'php_action/db_connect.php';
	//header
	include_once 'includes/header.php';
	//select
	if(isset($_GET['id'])):
		$id = mysqli_escape_string($connect, $_GET['id']);


		$sql = "SELECT * FROM alunos WHERE id = '$id'";
		$resultado = mysqli_query($connect, $sql);
		$dados = mysqli_fetch_array($resultado);
	endif;	
?>


    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Editar Aluno</h3>
			
			<form action="php_action/update.php" method="POST">
				<input type="hidden" value="<?php echo $dados['id']; ?>" name="id">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="matricula" id="matricula" value="<?php echo $dados['matricula']; ?>">
					<label for="matricula">Matrícula</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
					<label for="email">Email</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
					<label for="telefone">Telefone</label>
				
				</div>
				<button type="submit" name="btn-editar" class="btn">Atualizar</button>
				<a href="crud.php" class="btn green">Lista de Alunos</a>
			</form>

    	</div>
    </div>




<?php 
	//footer
	include_once 'includes/footer.php';
?>