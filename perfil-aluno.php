<?php  
//header
  include_once 'includes/header-discente.php';
  //mensagem de cadastrado ou nao.
  include_once 'includes/mensagem.php';

  require_once "php_action/db_connect.php";
?>  

    

<h3 class="light"> Olá <?= $_SESSION['nome'] ?></h3>

<?php 

  $query = "SELECT * FROM agendamento ORDER BY AGENDADO_PARA DESC";
  $result = mysqli_query($connect, $query);

  while($dados = mysqli_fetch_assoc($result)):
    if ($dados['DISCENTE_ID'] == $_SESSION['id']):
      
 ?>



<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?= $dados['NOME'] ?></span>
          <?php 

            $datahora = explode(' ', $dados['AGENDADO_PARA']);  
            $hora = $datahora[1];

            $dataformat = explode('-', $datahora[0]);
            $data = implode('/', [$dataformat[2], $dataformat[1], $dataformat[0]]);

           ?>
          <p>Está agendado para <?= $data ?> </p>
          <p>Às <?= $hora ?> </p><br>

          <span class="card-title">Assunto</span>

          <p><?= $dados['ASSUNTO'] ?></p>
        </div>
        <div class="card-action">
          <!-- <a href="#">This is a link</a>
          <a href="#">This is a link</a> -->
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
<?php endwhile; ?>





<!-- Agendamento -->
<div id="agenda">
  <div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-1"> 
      <form action="php_action/agendamento.php" class="col s12" id="form-agend" method="POST">
        <div class="input-field col s12">
          <select name="id_prof">
            <option value="" disabled selected>Agendar com qual Docente?</option>
             <?php 
              $query = "SELECT * FROM docente";
              $result = mysqli_query($connect, $query);

              while($dados = mysqli_fetch_assoc($result)):
             ?>

                <option value="<?= $dados['DOCENTE_ID'] ?>"><?= $dados['DOCENTE_NOME']; ?></option>

              <?php endwhile; ?>
              <!-- faltando a logica da programação em php no arquivo: php_action/agendamento.php -->
          </select>
          
          <?php 
            $query = "SELECT * FROM docente";
            $result = mysqli_query($connect, $query);

            while($dados = mysqli_fetch_assoc($result)):
          ?>
            
            <input type="hidden" value="<?= $dados['DOCENTE_NOME'] ?>" name="nome">

          <?php endwhile; ?>

        </div>
        <div class="input-field col s12">
          <input type="text" class="datepicker" name="data" id="data">
          <label for="data">Data?</label>
        </div>

        <div class="input-field col s12">
          <input type="text" class="timepicker" name="hora" id="hora">
          <label for="hora">Hora?</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="assunto" id="assunt">
          <label for="assunt">Assunto</label>
        </div>
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">AGENDAR
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


 
<?php 
  //footer
  include_once 'includes/footer.php';
?>