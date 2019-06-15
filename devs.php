<?php  
	//header
	include_once 'includes/header-index.php';
	//mensagem de cadastrado ou nao.
	include_once 'includes/mensagem.php';
?>	

<!-- script de para o button do github -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<div class="container">
	<h2 class="header green-text">Nossa equipe</h2>
	<h6 class="row">Conheça nossos desenvolvedores</h6>
	
	<div class="row center">
		<!-- forech que puxa os dados de contato dos devs e  os exibe em uma lista  -->
		<ul class="collection">
			<?php $arqdev = file("devs.txt")?>
			<?php foreach ($arqdev as $devs => $github):
				$githuburl = explode (";", $github) ?>

				<li class="col s4 black-text">
					<div class="icon-block">
						<!-- avatar: imagens retiradas de https://twitter.com/Ki11Audio -->
						<img src="<?= $githuburl[3]?>" style="height: 50px;" class="circle">
          			 </div>

					<!-- dev e descricao -->
					<span class="title black-text"><a href="<?= $githuburl[1]?>"><?= $githuburl[0]?></a></span>
					<p><?= $githuburl[2]?></p>

					<!-- button github -->
					<a class="github-button" href="<?= $githuburl[1]?>" aria-label="Follow">Follow on Github</a>

				</li>

			<?php endforeach ?>
		</ul>

	</div>
</div>
<?php 
	//footer
	include_once 'includes/footer.php'; 
?>
