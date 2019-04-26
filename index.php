<?php  
//header
	include_once 'includes/header.php';
	//mensagem de cadastrado ou nao.
	include_once 'includes/mensagem.php';
?>	


	
 
	<div>
		<h4 class="light">IFinform</h2>

			<a href="login.php"><button class="btn orange">Login</button></a>
			<a href="add.php"><button class="btn green">Cadastre-se</button></a>
			<a href="agendamento.php"><button class="btn blue">Agendar</button></a>

		
		
	</div>

<!-- 	<form action="">
			<div class="input-field col s12">
			<select>
				<option disabled selected>O que você é?</option>
				<option value="1">Docente</option>
				<option value="2">Aluno</option>
				<option value="3">Funcionário</option>
				<option value="4">Aluno</option>
			</select>
			<label></label>
			</form> -->
	

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

</body>
</html>