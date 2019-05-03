<?php  
//header
  include_once 'includes/header.php';
  include_once 'includes/mensagem.php';
?>  

    

      <h3 class="light"> Olá <?= $_SESSION['usuario'] ?></h3>
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
   