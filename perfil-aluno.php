<?php  
//header
  include_once 'includes/header-discente.php';
  //mensagem de cadastrado ou nao.
  include_once 'includes/mensagem.php';

  require_once "php_action/db_connect.php";
?>  

    

<h3 class="light"> Olá <?= $_SESSION['nome'] ?></h3>
<div class="col s12 m8 offset-m2 l6 offset-l3">
  <div class="card-panel grey lighten-5 z-depth-1">
    <div class="row valign-wrapper">
      <div class="col s2">
        <img src="foto.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
      </div>
      <div class="col s10">
        <span class="black-text">
            Informações sobre seu perfil
        </span>
        <ul class="collapsible">
          <li>
            <div class="collapsible-header">
            <i class="material-icons">border_color</i>
            Nome
            <span class="badge"></span>
            </div>
          <div class="collapsible-body">
            <p><?= $_SESSION['nome'] ?></p>
          </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i class="material-icons">place</i>
              Seu telefone
              <span class="badge"></span>
            </div>
            <div class="collapsible-body">
              <p><?= $_SESSION['telefone'] ?></p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i class="material-icons">call</i>
              Matrícula
              <span class="badge"></span>
            </div>
            <div class="collapsible-body">
              <p><?= $_SESSION['matricula'] ?></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

</div>
</div>


<!-- Agendamento -->
<div id="agenda">
  <div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-1">
        
          
          <form action="php_action/agendamento_logic.php" class="col s12">
            <div class="input-field col s12">
              <select>
                <option value="" disabled selected>Agendar com qual Docente?</option>
                 <?php 
                  $query = "SELECT * FROM docente";
                  $result = mysqli_query($connect, $query);

                  while($dados = mysqli_fetch_assoc($result)):
                 ?>

                    <option value="<?= $dados['DOCENTE_ID'] ?>"><?= $dados['DOCENTE_NOME']; ?></option>

                  <?php endwhile; ?>
                  <!-- AINDA TA EM CODIFICAÇÃO, MAS A IDEIA ESTA AI, PARA A PAGINA DE AGENDAMENTO -->
              </select>
            <label>Materialize Select</label>
            </div>
          </form>


    </div>
  </div>
</div>


 
<?php 
  //footer
  include_once 'includes/footer.php';
?>