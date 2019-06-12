<?php 
include_once 'header.php';
 ?>

<ul id="dropdown1" class="dropdown-content">
  <li><a href="perfil-aluno.php">Inicio</a></li>
  <li><a href="#!">Conta</a></li>
  <li class="divider"></li>
  <li><a href="#!">Fórum</a></li>
  <li class="divider"></li>
  <li><a href="#!">Agenda</a></li>
  <li><a href="../php_action/logout.php">Sair</a></li>
</ul>
<nav>
  <div class="nav-wrapper green">
    <a href="index.php" class="brand-logo center">IFinform</a>
   <!--  <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div> -->
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Agendar</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons right">apps</i></a></li>
    </ul>

  </div>
</nav>