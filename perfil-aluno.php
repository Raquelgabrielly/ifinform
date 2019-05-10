<?php  
//header
  include_once 'includes/header.php';
  //mensagem de cadastrado ou nao.
  include_once 'includes/mensagem.php';
?>  

<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center">IFinform</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
    

      <h3 class="light"> Olá <?= $_SESSION['usuario'] ?></h3>
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
      <i class="material-icons">call</i>
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
 <a href="index.php" class="btn blue">Página Inicial</a>
<?php 
  //footer
  include_once 'includes/footer.php';
?>