<?php  
//header
  include_once 'includes/header-docente.php';
  //mensagem de cadastrado ou nao.
  include_once 'includes/mensagem.php';
?>  

    

      <h3 class="light"> Olá <?= $_SESSION['nome'] ?></h3>
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="foto.jpg" alt="" class="circle responsive-img"> 
            </div>
            <div class="col s10">
              <span class="black-text">
                Informações sobre o professor
              </span>
       <ul class="collapsible">
 
  
  <li>
    <div class="collapsible-header">
      <i class="material-icons">import_contacts</i>
      Disciplina
      </div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">watch_later</i>
      Horário
      </div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
</ul>
            </div>
          </div>
        </div>
      </div>

  </div>
 </div>
 <a href="index.php" class="btn blue">Página Inicial</a>

 <div id="agenda">
  <div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3 z-depth-1"> 
      <form action="php_action/agendamento.php" class="col s12" id="form-agend">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Agendar com qual Docente?</option>
             <?php 
              $query = "SELECT * FROM discente";
              $result = mysqli_query($connect, $query);

              while($dados = mysqli_fetch_assoc($result)):
             ?>

                <option value="<?= $dados['DISCENTE_ID'] ?>"><?= $dados['DISCENTE_NOME']; ?></option>

              <?php endwhile; ?>
              <!-- AINDA TA EM CODIFICAÇÃO, MAS A IDEIA ESTA AI, PARA A PAGINA DE AGENDAMENTO -->
          </select>
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