<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="header">
		<h2>IFimform</h2>

		<ul>
			<li><a href="login.php">Login</a></li>
			<li><a href="cadastro.php">Cadastre-se</a></li>
		</ul>
		
	</div>
	
	<div class="main">
		<h2>Agende um horario com facilidade</h2>
		<p>
			If inform é uma plataforma que te ajuda a reservar um horario para consultas dos serviços no seu campus IFPE. Praticicidade para contatar seus professores e gestores responsaveis.
		</p>
	</div>

	<div class="signin">
		<a href="cadastro.php">Cadastre-se no IF inform</a>
	</div>

	<div class="dev">
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
<!-- essa merda funciona-->	
</div>

	<div class="footer">
		<ul>
			<li><a href="ifpe.edu.br">ifpe</a></li>
			<li><a href="">sobre</a></li>
			<li><a href="">contato</a></li>
		</ul>
		2019. Projeto e Pratica - IF inform
	</div>

</body>
</html>