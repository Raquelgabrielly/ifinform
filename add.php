<?php 
	//header
	include_once 'includes/header.php';
?>


    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Novo Aluno</h3>
			
			<form action="php_action/create.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="matricula" id="matricula">
					<label for="matricula">Matrícula</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email">
					<label for="email">Email</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone">
					<label for="telefone">Telefone</label>
				
				</div>
				<button type="submit" name="enviar" class="btn">Cadastrar</button>
				<a href="crud.php" class="btn green">Lista de Alunos</a>
				<a href="index.php" class="btn blue">Página Inicial</a>
			</form>

    	</div>
    </div>




<?php 
	//footer
	include_once 'includes/footer.php';
?>