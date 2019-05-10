<?php 
	//header
	include_once 'includes/header.php';
	//conexao	
	include_once 'includes/mensagem.php';

	// if ($_SESSION['mensagem'] == "Logado") {
	// 	header('location: php_action/logout.php');
	// }
 ?>


    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Login</h3>
			
				<a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Qual o seu Perfil?</a>
					<!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content'>
					<li><a href="#!" id="perfil-discente">Discente</a></li>
					<li><a href="#!" id="perfil-docente">Docente</a></li>
					<li><a href="#!" id="perfil-visitante">Visitante</a></li>
				</ul>


			<form action="php_action/login.php" method="POST">
				

				<div class="input-field col s12">
					<i class="material-icons prefix" id="icone">info_outline</i>
					<input disabled value="Escolha seu perfil no topo da página" id="perfil" type="text">
					<label for="disabled" id="label"></label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">line_style</i>
					<input type="password" name="senha" id="senha">
					<label for="senha">Senha</label>
				</div>

				<button type="submit" name="enviar" class="btn">Login</button>
				<!-- <a href="crud.php" class="btn green">Lista de Alunos</a> -->
			<!-- 	<a href="index.php" class="btn blue">Página Inicial</a> -->
			</form>

    	</div>
    </div>



<script src="js/login.js"></script>
<?php 
	//footer
	include_once 'includes/footer.php';
?>