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

  <body onload="cargar_ramo(); cargar_ramo_egreso(); cargar_partidas_us();">
    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
      <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
      <div class="full-box dashboard-sideBar-ct">

        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
          Presupuesto
        </div>

        <div class="full-box dashboard-sideBar-UserInfo">
          <figure class="full-box">
            <?= $this->html->image('logo.jpeg') ?>
            <figcaption class="text-center text-titles"> 
              <i class="glyphicon glyphicon-user"></i> 
              <?= $this->request->getSession()->read('Auth.User.username') ?> 
            </figcaption>
          </figure>
        </div>

        <ul class="list-unstyled full-box dashboard-sideBar-Menu">

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-home'></i><span> Inicio </span>",array('controller' => 'Mpresupuesto', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                <i class="glyphicon glyphicon-paperclip"></i> Formulacion 
                <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                  <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> 2100 - Datos de la Entidad </span>",array('controller' => 'MpDatosEntidad', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                  <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> 2101 - Politica Presupuestaria </span>",array('controller' => 'MpPoliticaPresupuestaria', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                  <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> 2102 - Ingresos </span>",array('controller' => 'MpIngresos', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                  <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> 2103 - Categorias Programaticas</span>",array('controller' => 'MpCategoriasProgramaticas', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                  <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> 2121 - Relación de Proyectos </span>",array('controller' => 'MpProyectos', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li> 

              <li>
                <?= $this->Html->link("<i class='fa fa-file-pdf-o'></i> Reportes - Formulacion",array('controller' => 'MpReportes', 'action' => 'index'), array('tabindex' => '-1','escape' => false, 'class' => 'btn-sideBar-SubMenu')) ?>
              </li>
            </ul>
          </li>

          

          


          <li>
            <a class="btn-sideBar-SubMenu">
                <i class="glyphicon glyphicon-paperclip"></i> Ejecucion
                <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Nomina </span>",array('controller' => 'EjecucionNomina', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Compra </span>",array('controller' => 'EjecucionCompra', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Req. Servicio </span>",array('controller' => 'EjecucionServicio', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisicion - Transferencias </span>",array('controller' => 'EjecucionTransferencia', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Balance de Estado</span>",array('controller' => 'BalanceEstado', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Balance Comprometido</span>",array('controller' => 'BalanceComprometido', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Balance Causado</span>",array('controller' => 'BalanceCausado', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

            </ul>
          </li>


          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i> Resolución",array('controller' => 'MpResolucion', 'action' => 'index'), array('tabindex' => '-1','escape' => false, 'class' => 'btn-sideBar-SubMenu')) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i> Analisis de Resolución",array('controller' => 'MpAnalisisD', 'action' => 'index'), array('tabindex' => '-1','escape' => false, 'class' => 'btn-sideBar-SubMenu')) ?>
          </li>

        </ul>

      </div>
    </section>

    <section class="full-box dashboard-contentPage">
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

    <?= $this->element('presupuesto/editar_ingresos') ?>
    <?= $this->element('presupuesto/editar_egresos') ?>
    <?= $this->element('presupuesto/ajustar') ?>
    <?= $this->element('presupuesto/incrementar') ?>
    <?= $this->element('presupuesto/disminuir') ?>
    <?= $this->element('presupuesto/editarordentrans') ?>
    <?= $this->element('presupuesto/editarpartida') ?>
    <?= $this->element('presupuesto/editar_partida_rel') ?>

    <script>
      $.material.init();
    </script>
  </body>