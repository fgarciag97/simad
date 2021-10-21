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
          Uso General
        </div>

        <div class="full-box dashboard-sideBar-UserInfo">
          <figure class="full-box">
            <?= $this->html->image('logo.jpeg') ?>
            <figcaption class="text-center text-titles"> 
              <i class="glyphicon glyphicon-user"></i> 
              <?= $this->request->getSession()->read('Auth.User.username') ?> </figcaption>
          </figure>
        </div>

        <ul class="list-unstyled full-box dashboard-sideBar-Menu">

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-home'></i><span> Inicio </span>",array('controller' => 'MUsoGeneral', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-user'></i><span> Usuarios </span>",array('controller' => 'MUGUsuarios', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>


          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Recursos Humanos <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Tabulación Salarial</span>",array('controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Parametros </span>",array('controller' => 'MUGRRHHTabulacionSalarial', 'action' => 'parametros'), array('tabindex' => '-1','escape' => false)) ?>
              </li>


              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Asignaciones </span>",array('controller' => 'MUGRRHHAsignaciones', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>


          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-calendar'></i><span> Año Fiscal </span>",array('controller' => 'MUGAnoFiscal', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <!--
          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-cog'></i><span> Bitácora </span>",array('controller' => '', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>
          -->

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



<form action="" method="post" id="form_info">
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de Tabulación Salarial</h4>
        </div>
        <div class="modal-body">
          
          <div id="" class="input-group" on>
              <span class="input-group-addon">Sueldo base</span>
              <input type="text" id="id" name="id" required hidden readonly>
              <input type="text" class="form-control moneda" placeholder="Sueldo base" id="sueldo_base" name="sueldo_base" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>




<form action="" method="post" id="valor">
  <div class="modal fade" id="mvalor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de Porcentaje</h4>
        </div>
        <div class="modal-body">
          
          <div id="" class="input-group" on>
              <span class="input-group-addon">Porcentaje</span>
              <input type="text" id="cantidad" name="cantidad" required hidden  readonly>
              <input type="text" class="form-control moneda" placeholder="Porcentaje" id="porcentaje" name="porcentaje" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>

<form action="" method="post" id="parametros">
  <div class="modal fade" id="parametro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de Parametros</h4>
        </div>
        <div class="modal-body">
          
          <div id="" class="input-group" on>
              <span class="input-group-addon">Monto</span>
              <input type="text" id="pid" name="id" required hidden  readonly>
              <input type="text" class="form-control moneda" placeholder="Monto" id="monto" name="monto" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->   
   </div><!-- /.col-lg-6 -->
</div>
</div>
 </form>


<form action="" method="post" id="profesion">
  <div class="modal fade" id="profesions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de Parametros</h4>
        </div>
        <div class="modal-body">
          
          <div id="" class="input-group" on>
              <span class="input-group-addon">Porcentaje</span>
              <input type="text" id="ppid" name="id" required hidden  readonly>
              <input type="text" class="form-control moneda" placeholder="Porcentaje" id="pporcentaje" name="porcentaje" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Salir</button>
           <button type="submit" class="btn btn-success btn-sm pull-right">Actualizar</
        </div>
      </div>
    </div>
  </div>
   </div>
</div>
</div>
 </form>

    <script>
      $.material.init();
    </script>
  </body>