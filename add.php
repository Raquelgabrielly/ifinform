<?php 

	//header
	include_once 'includes/header-cadastro.php';
	//mensagem
	include_once 'includes/mensagem.php';
?>

    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Cadastro</h3>
			
			<form action="php_action/create.php" method="POST">
				<div id="formall">
					<a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Qual o seu Perfil?</a>
					<!-- Dropdown Structure -->
					<ul id='dropdown1' class='dropdown-content'>
						<li><a href="#!" id="perfil-discente">Discente</a></li>
						<li><a href="#!" id="perfil-docente">Docente</a></li>
						<li><a href="#!" id="perfil-visitante">Visitante</a></li>
					</ul>
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="nome" id="nome">
						<label for="nome">Nome</label>
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
						<i class="material-icons prefix">line_style</i>
						<input type="password" name="senha" id="senha">
						<label for="senha">Senha</label>
					</div>
					

					<!-- <div class="input-field col s12">
						<i class="material-icons prefix">line_style</i>
						<input type="password" name="senha" id="senha2">
						<label for="senha">Confirme sua senha</label>
					</div> -->
					
					<div class="input-field col s12">
						<i class="material-icons prefix" id="icone">info_outline</i>
						<input disabled value="Escolha seu perfil no topo da página" id="perfil" type="text">
						<label for="disabled" id="label"></label>
					</div>

				</div>

				<button type="submit" name="enviar" class="btn">Cadastrar</button>
				<!-- <a href="crud.php" class="btn green">Lista de Alunos</a> -->
				<!-- <a href="index.php" class="btn blue">Página Inicial</a> -->
			</form>

    	</div>
    </div>



<script src="js/cadastro.js"></script>
<?php 
	//footer
	include_once 'includes/footer.php';
?>

