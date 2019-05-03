<?php
	include_once 'includes/header.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agendamento</title>
</head>
<body>
    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Agendamento</h3>
			
			<form action="php_action/create.php" method="POST">

				<div class="input-field col s12">
					<i class="material-icons prefix">person_outline</i>
					<input type="text" name="nomeCompleto" id="nomeCompleto">
					<label for="nomeCompleto">Nome Completo</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">power_input</i>
					<input type="text" name="matricula" id="matricula">
					<label for="matricula">Matrícula</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">school</i>
					<input type="text" name="curso" id="curso">
					<label for="curso">Curso</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">star_half</i>
					<input type="text" name="periodo" id="periodo">
					<label for="periodo">Período</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">watch_later</i>
					<input type="text" name="turno" id="turno">
					<label for="turno">Turno</label>
				</div>
				
				<div class="input-field col s12">
					<i class="material-icons prefix">mail_outline</i>
				 <textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
				</div>

				<button type="submit" name="enviar" class="btn" disabled>Agendar</button>
				<a href="index.php" class="btn blue">Página Inicial</a>
			</form>

    	</div>
    </div>
</body>
</html>

<?php 
	include_once 'includes/footer.php';
?>