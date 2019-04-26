<?php 
	//conexao
	include_once 'php_action/db_connect.php';
	//header
	include_once 'includes/header.php';
	//mensagem de cadastrado ou nao.
	include_once 'includes/mensagem.php';
?>



    <div class="row">
    	<div class="col s12 m6 push-m3">
    		
			<h3 class="light">Alunos</h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Senha</th>
						<th>Nome</th>
						<th>Matrícula</th>
						<th>Email</th>
						<th>Telefone</th>
					</tr>
				</thead>

				<tbody>

					<?php 
						$sql = "SELECT * FROM alunos";
						$resultado = mysqli_query($connect, $sql);

						while($dados = mysqli_fetch_array($resultado)):

					 ?>

					<tr>
						<td><?php echo $dados['senha']; ?></td>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['matricula']; ?></td>
						<td><?php echo $dados['email']; ?></td>
						<td><?php echo $dados['telefone']; ?></td>
						<td><a href="editar.php?id=<?php echo $dados['id_aluno']; ?>" class="btn-floating green"><i class="material-icons">edit</i></a></td>

						<td><a href="#modal<?php echo $dados['id_aluno']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure -->
							<div id="modal<?php echo $dados['id']; ?>" class="modal">
								<div class="modal-content">
									<h5>Opa!</h5>
									<p>Tem certeza que deseja excluir esse Aluno?</p>
								</div>
							    <div class="modal-footer">

							    	<form action="php_action/delete.php" method="POST">
							    		<input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
							    		<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
							    	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
							    	</form>

							    </div>
							</div>
							          

						</a></td>
					</tr>

					<?php endwhile; ?>
				</tbody>
			</table>
			<a href="add.php" class="btn green">Adicionar Aluno</a>
    	</div>
    </div>




<?php 
	//footer
	include_once 'includes/footer.php';
?>