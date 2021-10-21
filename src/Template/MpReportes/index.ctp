<?php $this->assign('title', 'Reportes'); ?>

<?= $this->Flash->render();?>
 
<div class="well">

	<div class="pricing-wrapper clearfix">
    <?php if(@$menu[0]['datosentidad']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Datos de la Entidad</h1>
          <ul class="pricing-list">
            <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2100 </span>",array('controller' => 'MpReportes', 'action' => 'forma2100'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>

    <?php if(@$menu[0]['politica_presupuestaria']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Politica Presupuestaria</h1>
          <ul class="pricing-list">
            <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2101 </span>",array('controller' => 'MpReportes', 'action' => 'forma2101'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>

    <?php if(@$menu[0]['ingresos']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Ingresos</h1>
          <ul class="pricing-list">
            <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2102 </span>",array('controller' => 'MpReportes', 'action' => 'forma2102'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>

    <?php if(@$menu[0]['categorias']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Categorias Programáticas</h1>
          <ul class="pricing-list">
            <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2103 </span>",array('controller' => 'MpReportes', 'action' => 'forma2103'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>

    <?php if(@$menu[0]['proyectos']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Distribución Sectorial</h1>
          <ul class="pricing-list">
            <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2104 </span>",array('controller' => 'MpReportes', 'action' => 'forma2104'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?></li>
          </ul>
        </div>

        <div class="pricing-table">
          <h1 class="pricing-title">Resúmen Presupuestario</h1>
          <ul class="pricing-list">
                <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2105 </span>",array('controller' => 'MpReportes', 'action' => 'forma2105'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
                <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2106 </span>",array('controller' => 'MpReportes', 'action' => 'forma2106'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>

        <div class="pricing-table">
          <h1 class="pricing-title">Proyectos</h1>
          <ul class="pricing-list">
            <li>  <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2121 </span>",array('controller' => 'MpReportes', 'action' => 'forma2121'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>












    <?php if(@$menu[0]['gastosgi'] or @$menu[0]['gastostd']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Informacion de gastos</h1>
          <ul class="pricing-list">
            <?php if(@$menu[0]['gastosgi']){ ?>
              <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2109 </span>",array('controller' => 'MpReportes', 'action' => 'forma2109'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
            <?php } ?>
            <?php if(@$menu[0]['gastostd']){ ?>
              <li> <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2110 </span>",array('controller' => 'MpReportes', 'action' => 'forma2110'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
            <?php } ?>
          </ul>
        </div>
    <?php } ?>

    <?php if(@$menu[0]['asignacion']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Informacion Presupuestaria</h1>
          <ul class="pricing-list">
            <li>  <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2115 </span>",array('controller' => 'MpReportes', 'action' => 'forma2115'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>

    <?php if(@$menu[0]['presupuestos']){ ?>
        <div class="pricing-table">
          <h1 class="pricing-title">Presupuesto de Gastos</h1>
          <ul class="pricing-list">
            <li>  <?= $this->Html->link("<i style='color: black' class='fa fa-file-pdf-o'></i> <span style='color: black'> Forma 2119 </span>",array('controller' => 'MpReportes', 'action' => 'forma2119'), array('tabindex' => '-1','escape' => false, 'class' => 'active', 'target' => '_blank')) ?> </li>
          </ul>
        </div>
    <?php } ?>

  </div>



</div>