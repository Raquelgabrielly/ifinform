<?php  
	//header
	include_once 'includes/header.php';
	//mensagem de cadastrado ou nao.
	include_once 'includes/mensagem.php';
?>	


	
 <!-- div da header -->
	<div>
		<h4 class="light">IFinform</h2>

			<a href="login.php"><button class="btn orange">Login</button></a>
			<a href="add.php"><button class="btn green">Cadastre-se</button></a>
			<a href="agendamento.php"><button class="btn blue">Agendar</button></a>
	
	</div>

<!-- fim da header -->

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

	<div id="index-banner" class="parallax-container">
	    <div class="section no-pad-bot">

	    <!-- container com headline e mini-descrição do site -->
	      <div class="container">
	        <br><br>

	        	<h1 class="header center teal-text text-lighten-2">Agende um horario com facilidade</h1>
		        <div class="row center">
		          <h5 class="header col s12 light">If inform é uma plataforma que te ajuda a reservar um horario para consultas dos serviços no seu campus IFPE.</h5>
		        </div>

		        <div class="row center">
		          <a href="add.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Cadastre-se no IF inform</a>
		        </div>

	        <br><br>
	      </div>

    </div>

	<!-- div da imagem de fundo -->
  <div class="parallax"><img src="https://unifert.com.br/wp-content/uploads/2018/02/agendec-internas.png" alt="Unsplashed background img 1" style="transform: translate3d(-50%, 204.522px, 0px); opacity: 50;"></div>
  </div>


<!--  container com descriçao de funcionalidades -->
<div class="container">
    <div class="section">
    	<br><br>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Descomplicado e Rápido</h5>

            <p class="light">Praticicidade para contatar seus professores e gestores responsaveis.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">TITULO 2</h5>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">TITULO 3</h5>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat</p>
          </div>
        </div>
      </div>
	<br><br>
    </div>
    
</div>

<!-- fim do container funcionalidades -->

<!-- div com imagem de background -->

	<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"><!--  headline2 --></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="https://www.cloudia.com.br/wp-content/uploads/google-agenda-para-clinicas.jpg" alt="Unsplashed background img 3" style="opacity: 1; transform: translate3d(-50%, 236.049px, 0px);"></div>
  </div>

<!-- fim da div background -->

<!-- começo do carrosel -->

 <div>
	<div class="section">
		<div class="row">
			<br>
	        <div class="col s12 m3">
	          <div class="icon-block">
	          	<br><br>
	            <h2 class="center black-text"><i class="material-icons large">chat</i></h2>
	            <h5 class="center">Principais Noticias</h5>
	            <p class="center">Instituto Federal de Pernambuco campus Igarassu.</p>
	          </div>
	        </div>

			<div class="col s12 m9">
				<div class="carousel carousel-slider" indicators="true">
		    <a class="carousel-item tooltipped" data-tooltip="workshop de gestão de qualidade" href="http://portal.ifpe.edu.br/campus/igarassu/noticias/campus-igarassu-promove-workshop-de-gestao-de-qualidade/view"><img src="http://portal.ifpe.edu.br/campus/igarassu/noticias/campus-igarassu-promove-workshop-de-gestao-de-qualidade/workshop-gestao-qualidade-igarassu/@@images/ac768787-54c4-46c1-a3bb-2a604726297a.png"></a>

		    <a class="carousel-item tooltipped" data-tooltip="Resultado final do bolsa permanencia" href="http://portal.ifpe.edu.br/campus/igarassu/noticias/sai-resultado-final-do-bolsa-permanencia-para-campus-igarassu/view"><img src="http://portal.ifpe.edu.br/campus/igarassu/noticias/sai-resultado-final-do-bolsa-permanencia-para-campus-igarassu/bolsa-permanencia.png/@@images/f36b9e87-dea7-4ea2-8e82-e200e953e5d0.png"></a>

		    <a class="carousel-item tooltipped" data-tooltip="Bloqueio orcamentario feito pelo mec" href="http://portal.ifpe.edu.br/noticias/ifpe-se-posiciona-sobre-bloqueio-orcamentario-feito-pelo-mec"><img src="http://portal.ifpe.edu.br/noticias/ifpe-se-posiciona-sobre-bloqueio-orcamentario-feito-pelo-mec/nota-oficial/@@images/67e879e4-be52-4442-83c1-7b4324182e7c.png"></a>

		    <a class="carousel-item tooltipped" data-tooltip="Resultado final para monitoria" href="http://portal.ifpe.edu.br/campus/igarassu/noticias/sai-resultado-final-para-monitoria-de-igarassu"><img src="http://portal.ifpe.edu.br/campus/igarassu/noticias/sai-resultado-final-para-monitoria-de-igarassu/monitoria.png/@@images/ed2676ce-1a19-444b-8bc3-1f39d959bbe7.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<!-- fim do carrosel -->

<!-- div com desevelvovedores -->

<div class="container">

		<h2 class="header center orange-text">Nossa equipe</h2>
		<p class="row center">Conheça nossos desenvolvedores</p>

		<div class="row center">
			<!-- forech que puxa os dados de contato dos devs e  os exibe em uma lista  -->
			<ul>
					<?php $arqdev = file("devs.txt")?>
					<?php foreach ($arqdev as $devs => $github):
					$githuburl = explode (";", $github) ?>
						<li><a href="<?= $githuburl[1]?>"><?= $githuburl[0]?></a></li>
					<?php endforeach ?>
			</ul>
        
</div>

<!-- fim da div desenvolvedores -->

<!-- div footer -->
<div>
		<ul>
			<li><a href="ifpe.edu.br">ifpe</a></li>
			<li><a href="">sobre</a></li>
			<li><a href="">contato</a></li>
		</ul>
		2019. Projeto e Pratica - IF inform
</div>


<?php include_once 'includes/footer.php' ?>