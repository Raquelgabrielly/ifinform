<?php  
//header
  include_once 'includes/header.php';
  //mensagem de cadastrado ou nao.
  include_once 'includes/mensagem.php';
?>  

    

      <h3 class="light">Perfil do Funcionário</h3>
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
      <span class="new badge"></span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
 <li>
    <div class="collapsible-header">
      <i class="material-icons">place</i>
      Cidade
      <span class="badge"></span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">public</i>
      Siape
      <span class="badge"></span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
<li>
    <div class="collapsible-header">
      <i class="material-icons">phone</i>
      Telefone
      <span class="badge"></span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>

</ul>
            </div>
          </div>
        </div>
      </div>

  </div>
 </div>
  <a href="perfil.php" class="btn green">Aluno</a>
 <a href="index.php" class="btn blue">Professores</a>
<a href="index.php" class="btn orange">Funcionário</a>
 

<?php 
  //footer
  include_once 'includes/footer.php';
?>
