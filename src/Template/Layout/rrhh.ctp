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
    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
      <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
      <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title -->
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
          Recursos Humanos
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
            <?= $this->Html->link("<i class='glyphicon glyphicon-home'></i><span> Inicio </span>",array('controller' => 'MRRHH', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-user'></i><span> Personal </span>",array('controller' => 'MRRHHPersonal', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Nomina </span>",array('controller' => 'MRRHHNomina', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Cesta Ticket <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Empleados </span>",array('controller' => 'MRRHHCestaTicketEmpleados', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Obreros </span>",array('controller' => 'MRRHHCestaTicketObreros', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Cementerio </span>",array('controller' => 'MRRHHCestaTicketCementerio', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Protección Civil </span>",array('controller' => 'MRRHHCestaTicketProteccionCivil', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>


          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Horas Extras <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Empleados </span>",array('controller' => 'MRRHHHorasExtrasEmpleados', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Obreros </span>",array('controller' => 'MRRHHHorasExtrasObreros', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>


          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Vacaciones <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Empleados </span>",array('controller' => 'MRRHHVacaciones', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Obreros </span>",array('controller' => 'MRRHHVacacionesO', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Pago de Retroactivo <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Nomina </span>",array('controller' => 'MRRHHRetroactivo', 'action' => 'nomina'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Vacaciones </span>",array('controller' => 'MRRHHRetroactivoV', 'action' => 'vacaciones'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <!--<li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Bono de Estabilidad Economica </span>",array('controller' => 'MRRHHRetroactivo', 'action' => ''), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Bono de Asistencia Medica</span>",array('controller' => 'MRRHHRetroactivo', 'action' => ''), array('tabindex' => '-1','escape' => false)) ?>
              </li>-->

            </ul>
          </li>


          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Bono Fin de Año <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Empleados </span>",array('controller' => 'MRRHHFin', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Obreros </span>",array('controller' => 'MRRHHFinO', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>



          <?php if($this->request->getSession()->read('Auth.User.username') == 'FGARCIAG97' or $this->request->getSession()->read('Auth.User.username') == 'BLANCO' or $this->request->getSession()->read('Auth.User.username') == 'MARIANT POLANCO' or $this->request->getSession()->read('Auth.User.username') == 'YRIS AGUERO' or $this->request->getSession()->read('Auth.User.username') == 'JOSE CASTRO'){ ?>
             <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-star'></i><span> Pago Especial </span>",array('controller' => 'MRRHHNomina', 'action' => 'personalizada'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
           <?php } ?>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Bono Estabilidad </span>",array('controller' => 'MRRHHBonoEstabilidad', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Asistencia Médica </span>",array('controller' => 'MRRHHAsistenciaMedica', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Prestaciones Sociales </span>",array('controller' => 'MRRHHPrestacionesSociales', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisicion de Servicios </span>",array('controller' => 'MRRHHRequisicionServicios', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>
          
          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Requisiciones <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Filtrar Requisicion </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Nomina </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'nomina'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Cesta Ticket </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'cestaticket'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Horas Extras </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'horasextras'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Vacaciones </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'vacaciones'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Bono Fin de Año </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'fin'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

               <?php if($this->request->getSession()->read('Auth.User.username') == 'FGARCIAG97' or $this->request->getSession()->read('Auth.User.username') == 'BLANCO' or $this->request->getSession()->read('Auth.User.username') == 'MARIANT POLANCO' or $this->request->getSession()->read('Auth.User.username') == 'YRIS AGUERO' or $this->request->getSession()->read('Auth.User.username') == 'JOSE CASTRO'){ ?>


                
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Pagos Especiales </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'especial'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
               <?php } ?>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Bono Estabilidad </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'bonoestabilidad'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Asistencia Medica </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'asistenciamedica'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Requisiciones - Prestaciones S. </span>",array('controller' => 'MrrhhRequisicion', 'action' => 'ps'), array('tabindex' => '-1','escape' => false)) ?>
              </li>
            </ul>
          </li>

          <li>
            <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Reporte por Conceptos </span>",array('controller' => 'MRRHHFiltro', 'action' => 'index'), array('tabindex' => '-1','escape' => false)) ?>
          </li>

          <li>
            <a class="btn-sideBar-SubMenu">
                  <i class="glyphicon glyphicon-paperclip"></i> Formulación <i class="zmdi zmdi-caret-down pull-right"></i>
            </a>
            <ul class="list-unstyled full-box">
              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Jubilados y Pensionados </span>",array('controller' => 'MrrhhFormulacion', 'action' => 'jubpen'), array('tabindex' => '-1','escape' => false)) ?>
              </li>

              <li>
                <?= $this->Html->link("<i class='glyphicon glyphicon-paperclip'></i><span> Empleados y Obreros </span>",array('controller' => 'MrrhhFormulacion', 'action' => 'empleados'), array('tabindex' => '-1','escape' => false)) ?>
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

  <!-- Modal para el modulo de Nomina -->
  <?= $this->element('rrhh/modal_nomina') ?>
  <?= $this->element('rrhh/sueldo_individual') ?>
  <?= $this->element('rrhh/modal_nomina_editar') ?>
  <?= $this->element('rrhh/modal_vacaciones_editar') ?>
  <?= $this->element('rrhh/modal_vacaciones_editar_obreros') ?>
  <?= $this->element('rrhh/modal_fin_editar_obreros') ?>
  <?= $this->element('rrhh/modal_bono_editar') ?>
  <?= $this->element('rrhh/modal_asistencia_editar') ?>
  <?= $this->element('rrhh/modal_cesta_ticket') ?>
  <?= $this->element('rrhh/modal_horas_extras') ?>
  <?= $this->element('rrhh/modal_vacaciones') ?>
  <?= $this->element('rrhh/modal_fin') ?>
  <?= $this->element('rrhh/asignar_ps') ?>
  <?= $this->element('rrhh/ver_ano_real') ?>
  <?= $this->element('rrhh/ver_ultimo_ano') ?>
  <?= $this->element('rrhh/ver_ano_presupuestado') ?>  
  <?= $this->element('rrhh/ver_ano_real_empleados') ?>
  <?= $this->element('rrhh/ver_ultimo_ano_empleados') ?>
  <?= $this->element('rrhh/ver_ano_presupuestado_empleados') ?>
  <?= $this->element('rrhh/retroactivo_individual') ?>
    
    <script>
      $.material.init();
    </script>
  </body>