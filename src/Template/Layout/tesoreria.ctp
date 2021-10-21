<?php
  $cakeDescription = NOMBRE_SISTEMA;
?>

<!DOCTYPE html>
<html>
  <head>
      <?= $this->Html->charset() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
          <?= $cakeDescription ?>: <?= $this->fetch('title') ?>
      </title>
      <?= $this->Html->meta('icon') ?>

       <?= $this->Html->css([
            'modulos/main', 
            'modulos/bootstrap.min', 
            'modulos/ripples.min', 
            'modulos/sweetalert2', 
            'modulos/jquery.mCustomScrollbar', 
            'modulos/material-design-iconic-font.min', 
            'modulos/style', 
            'modulos/font-awesome.min',
            'modulos/reportes',
            'generico'
        ]) ?>

      <?= $this->Html->script([
          'modulos/jquery-3.1.1.min', 
          'modulos/sweetalert2.min', 
          'modulos/bootstrap.min', 
          'modulos/material.min', 
          'modulos/ripples.min', 
          'modulos/jquery.mCustomScrollbar.concat.min', 
          'modulos/main', 
          'funciones', 
          'moneda'
        ]) ?>
     
      <?= $this->fetch('script') ?>
      <?= $this->fetch('meta') ?>
      <?= $this->fetch('css') ?>
  </head> 

  <body onload="reloj()">
    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
      <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
      <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
          Tesorería
        </div>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
          <figure class="full-box">
            <?= $this->html->image('logo.jpeg') ?>
            <figcaption class="text-center text-titles"> <i class="glyphicon glyphicon-user"></i> <?= @$this->request->getSession()->read('Auth.User.username') ?> </figcaption>
          </figure>
        </div>
        <!-- SideBar Menu -->
        <ul class="list-unstyled full-box dashboard-sideBar-Menu">

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-home'></i><span> Inicio </span>",array('controller' => 'MTesoreria', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Cuentas Bancarias <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Cuentas </span>",array('controller' => 'MTCuentas', 'action' => 'index1'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Directorio</span>",array('controller' => 'MTCuentas', 'action' => 'index2'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>

          <li>
            <?= $this->Html-> link("<i class='glyphicon glyphicon-paperclip'></i><span> Transferencias </span>",array('controller' => 'MTTransferencias', 'action' => 'index'), array('tabindex' => '-1','escape' => false))  ?>
          </li>

          <li>
            <?= $this->Html-> link("<i class='glyphicon glyphicon-paperclip'></i><span> Impuestos </span>",array('controller' => 'MTImpuestos', 'action' => 'index'), array('tabindex' => '-1','escape' => false))  ?>
          </li>

          <li>
            <?= $this->Html-> link("<i class='glyphicon glyphicon-paperclip'></i><span> Egresos </span>",array('controller' => 'MTEgresos', 'action' => 'index'), array('tabindex' => '-1','escape' => false))  ?>
          </li>

          <li>
            <?= $this->Html-> link("<i class='glyphicon glyphicon-paperclip'></i><span> Hacienda Municipal </span>",array('controller' => 'MTHaciendaMunicipal', 'action' => 'index'), array('tabindex' => '-1','escape' => false))  ?>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Conciliacion Bancaria <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Conciliacion - Tesorería Municipal </span>",array('controller' => 'MTConciliacionBancoTesoreria', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Conciliacion - Hacienda Municipal </span>",array('controller' => 'MTConciliacionBancoHacienda', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

            </ul>
          </li>
        </ul>
      </div>
    </section>

    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
      <!-- NavBar -->
      <nav class="full-box dashboard-Navbar">
        <ul class="full-box list-unstyled text-right">
          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-home'></i>", array('controller' => 'Panel', 'action' => 'index'), array('tabindex' => '-1','escape' => false, 'class' => 'btn-Notifications-area')) ?>
          </li>
          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-log-out'></i>", array('controller' => 'Login', 'action' => 'logout'), array('tabindex' => '-1','escape' => false, 'class' => 'btn-Notifications-area')) ?>
          </li>
        </ul>
      </nav>

        <div class="box">
          <div class="box-body">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
          </div>
        </div>
    </section>
    
    <script>
      $.material.init();
    </script>
  </body>