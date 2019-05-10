<?php  
//header
	include_once 'includes/header.php';
	//mensagem de cadastrado ou nao.
	include_once 'includes/mensagem.php';
?>	


	
 
<ul id="dropdown1" class="dropdown-content">
  <li><a href="perfil-aluno.php">Aluno</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo center">IFiform</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="add.php">Cadastre-se</a></li>
      <li><a href="login.php">Login</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opções<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>	
		
		
	</div>
<!--
	<form action="">
			<div class="input-field col s12">
			<select>
				<option disabled selected>O que você é?</option>
				<option value="1">Docente</option>
				<option value="2">Aluno</option>
				<option value="3">Funcionário</option>
				<option value="4">Aluno</option>
			</select>
			<label></label>
			</form> 
	

		<h2 class="light">Agende um horario com facilidade</h2>
		<p class="light">
			If inform é uma plataforma que te ajuda a reservar um horario para consultas dos serviços no seu campus IFPE. Praticicidade para contatar seus professores e gestores responsaveis.
		</p>
	

	<div>
		<!-- <button class="btn green"><a href="add.php">Cadastre-se no IF inform</a></button> -->
	</div>

	<div>
		<h2>Nossa equipe</h2>
		<p>Conheça nossos desenvolvedores</p>
	<!-- forech que puxa os dados de contato dos devs e  os exibe em uma lista  -->
<ul>
		<?php $arqdev = file("devs.txt")?>
		<?php foreach ($arqdev as $devs => $github):
		$githuburl = explode (";", $github) ?>
			<li><a href="<?= $githuburl[1]?>"><?= $githuburl[0]?></a></li>
		<?php endforeach ?>
</ul>
	
</div>

	<div>
		<ul>
			<li><a href="ifpe.edu.br">ifpe</a></li>
			<li><a href="">sobre</a></li>
			<li><a href="">contato</a></li>
		</ul>
		2019. Projeto e Pratica - IF inform
	</div>

<?php 
	//footer
	include_once 'includes/footer.php';
?>