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

  <body>

    <section class="full-box cover dashboard-sideBar">
      <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
      <div class="full-box dashboard-sideBar-ct">

        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
          Compra
        </div>

        <div class="full-box dashboard-sideBar-UserInfo">
          <figure class="full-box">
            <?= $this->html->image('logo.jpeg') ?>
            <figcaption class="text-center text-titles"> 
              <i class="glyphicon glyphicon-user"></i> 
              <?= @$this->request->getSession()->read('Auth.User.username') ?> </figcaption>
          </figure>
        </div>

        <ul class="list-unstyled full-box dashboard-sideBar-Menu">

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-home'></i><span> Inicio </span>",array('controller' => 'MCompra', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

           <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Proveedores </span>",array('controller' => 'MCompraProveedores', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
            
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Generar Orden de: <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
               <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Compras </span>",array('controller' => 'MCompraOrdenesEmitidas', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Servicios </span>",array('controller' => 'MCompraOrdenesServicio', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Requisicion <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Ordenes Comprometidas </span>",array('controller' => 'MCompraOrdenesComprometidas', 'action' => ''), array('tabindex' => '-1','escape' => false)) ?>
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

      <?= $this->element('compras/editarcompra') ?>
      <?= $this->element('compras/editarservicio') ?>
      <?= $this->element('compras/editarordencompra') ?>
      <?= $this->element('compras/editarordenservicio') ?>
    
    <script>
      $.material.init();
    </script>
  </body>