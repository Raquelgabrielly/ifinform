<?php 
	//header
	include_once 'includes/header.php';
?>

<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Cadastro</h3>
			
			<form action="php_action/create.php" method="POST">

				<div class="input-field col s12">
					<i class="material-icons prefix">assignment_ind</i>
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">power_input</i>
					<input type="text" name="matricula" id="matricula">
					<label for="matricula">Matrícula</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">mail_outline</i>
					<input type="text" name="email" id="email">
					<label for="email">Email</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">phone</i>
					<input type="text" name="telefone" id="telefone">
					<label for="telefone">Telefone</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">error_outline</i>
					<input type="password" name="senha" id="senha">
					<label for="senha">Senha</label>
				</div>

				<button type="submit" name="enviar" class="btn">Cadastrar</button>
				<!-- <a href="crud.php" class="btn green">Lista de Alunos</a> -->
				<a href="index.php" class="btn blue">Página Inicial</a>
			</form>

    	</div>
    </div>




<?php 
	//footer
	include_once 'includes/footer.php';
?>

